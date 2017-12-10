@extends("layouts.app")
@section("content")
    <div class="container little-margin-top">
        <h1>task List</h1>
        <div id="search-panel" class="panel panel-primary collapse in" aria-expanded="true">
            <div class="panel-heading">
                <h3 class="panel-title">task Filter</h3>

            </div>

            <form class="form-horizontal" >
                <div class="panel-body">

                    <div class="form-group row">
                        <label class="col-sm-2 control-label text-right"><label>ID</label></label>
                        <div class="col-sm-10">
                            <input type="number" value="{{$request->task_id ? $request->task_id : ''}}" name="task_id" id="input_id" placeholder="task id" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label text-right"><label>task Name</label></label>
                        <div class="col-sm-10">
                            <input type="text" value="{{$request->name ? $request->name : ''}}" name="name"  placeholder="task name" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">&nbsp;</label>
                        <div class="col-sm-10">
                            <input class = "btn btn-primary"  type="submit" name="search_submit" value="Search"> &nbsp;
                        </div>
                    </div>
                </div>


            </form>
        </div>

        
        <a href="{{url('/task/create')}}" class="btn btn-info"><span
                    class="glyphicon glyphicon-plus-sign"></span> Add New task</a>
        <div class="table table-responsive micro-margin-top">

            <table id="table" class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Task Name</th>
                    <th>Task Description</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Setup (hr)</th>
                    <th>Cycle (min)</th>
                    <th>Dept. ID</th>
                    <th>Machine. ID</th>
                    <th>Tool. ID</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($tasks as $task)
                    <tr>
                        <td><a href="{{url('task/edit/'.$task->id)}}">{{$task->id}}</a></td>
                        <td>{{$task->name}}</td>
                        <td> {!!$task->description!!} </td>
                        <td>{{$task->start_time}}</td>
                        <td>{{$task->end_time}}</td>
                        <td>{{$task->setup}}</td>
                        <td>{{$task->cycletime}}</td>
                        <td>{{$task->department_id}}</td>
                        <td>{{$task->machine_id}}</td>
                        <td>{{$task->tooling_id}}</td>
                        @php $class = $task->controll->id ? 'success' : 'danger'; @endphp
                        <td><a class="btn btn-{{$class}}" data-toggle="modal" data-target="#myModalNorm{{$task->id}}" >Controll</a></td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                    
                </tr>
                </tfoot>
            </table>
            <div class="text-center" colspan="9">
            </div>
        </div>
    </div>


    <!-- MODAL -->
    @foreach($tasks as $task)
    <div class="modal fade" id="myModalNorm{{$task->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="close"
                            data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        Add Controll
                    </h4>
                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                    <div class="panel-body">
                        @if(!isset($task->controll->id))
                            @include("controlls.form",["url" => ($task->controll->id) ? "/controlls/edit/$task->id" : "/controlls", "method" => "POST","action" => ($task->controll->id) ? "Edit" : "Add New", "controll" => $task->controll, "task_id" =>$task->id])
                        @else
                            <table class="table table-inverse  table-bordered">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Task Nane</th>
                                        <th>Start Time</th>
                                        <th>End Time</th>
                                        <th>Start Time Rest Planning Task  - Controll Task </th>
                                        <th>End Time Rest Planning Task  - Controll Task </th>
                                        <th> Setup </th>
                                        <th> Cycletime </th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>Planning Task</th>
                                        <td>{{$task->name}}</td>
                                        <td> {{$task->start_time}} </td>
                                        <td> {{$task->end_time}} </td>
                                        <td></td>
                                        <td></td>
                                        <td> {{$task->setup}} </td>
                                        <td> {{$task->cycletime}} </td>
                                    </tr>
                                    <tr>
                                        <th>Controll Task Real Time</th>
                                        <td> {{$task->name}} </td>
                                        <td> {{$task->controll->r_start_date}} </td>
                                        <td> {{$task->controll->r_end_date}} </td>
                                        <td> {{$task->controll->start_time_left}} </td>
                                        <td> {{$task->controll->end_time_left}} </td>
                                        <td class=" {{$task->setup >= $task->controll->r_setup ? 'text-success' : 'text-danger'}}"> {{$task->controll->r_setup}} </td>
                                        <td class=" {{$task->cycletime >= $task->controll->r_cycletime ? 'text-success' : 'text-danger'}}"> {{$task->controll->r_cycletime}} </td>
                                    </tr>
                                </tbody>
                            </table>
                        @endif
                    </div>
                    <div class="modal-footer">
                        <div class="form-group row">
                            <label class="col-sm-2 control-label">&nbsp;</label>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection