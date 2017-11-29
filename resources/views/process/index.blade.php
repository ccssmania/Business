@extends("layouts.app")
@section("content")
    <div class="container little-margin-top">
        <h1>Process List</h1>
        <div id="search-panel" class="panel panel-primary collapse in" aria-expanded="true">
            <div class="panel-heading">
                <h3 class="panel-title">Process Filter</h3>

            </div>

            <form class="form-horizontal" >
                <div class="panel-body">

                    <div class="form-group row">
                        <label class="col-sm-2 control-label text-right"><label>ID</label></label>
                        <div class="col-sm-10">
                            <input type="number" value="{{$request->id ? $request->id : ''}}" name="id" id="input_id" placeholder="process id" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label text-right"><label>Process Name</label></label>
                        <div class="col-sm-10">
                            <input type="text" value="{{$request->name ? $request->name : ''}}" name="name"  placeholder="process name" class="form-control">
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

        
        <a href="{{url('/process/create')}}" class="btn btn-info"><span
                    class="glyphicon glyphicon-plus-sign"></span> Add New Process</a>
        <div class="table table-responsive">

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Process Name</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($processes as $process)
                    <tr>
                        <td><a href="{{url('process/edit/'.$process->id)}}">{{$process->id}}</a></td>
                        <td>{{$process->name}}</td>
                        <td>{{$process->start_time}}</td>
                        <td>{{$process->end_Time}}</td>
                        <td><a href="{{url('task/index/'.$process->id)}}" class="btn btn-primary">Task</a></td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <div class="text-center" colspan="9">
                        {{$processes->links()}}
                    </div>
                </tr>
                </tfoot>
            </table>
                
        
    </div>

@endsection