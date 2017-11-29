@extends("layouts.app")
@section("content")
    <div class="container little-margin-top">
        <h1>Input List</h1>
        <div id="search-panel" class="panel panel-primary collapse in" aria-expanded="true">
            <div class="panel-heading">
                <h3 class="panel-title">Input Filter</h3>

            </div>

            <form class="form-horizontal" >
                <div class="panel-body">

                    <div class="form-group row">
                        <label class="col-sm-2 control-label text-right"><label>ID</label></label>
                        <div class="col-sm-10">
                            <input type="number" value="{{$request->input_id ? $request->input_id : ''}}" name="input_id" id="input_id" placeholder="input id" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label text-right"><label>Input Name</label></label>
                        <div class="col-sm-10">
                            <input type="text" value="{{$request->name ? $request->name : ''}}" name="name"  placeholder="input name" class="form-control">
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

        
        <a href="{{url('/input/create')}}" class="btn btn-info"><span
                    class="glyphicon glyphicon-plus-sign"></span> Add New input</a>
        <div class="table table-responsive micro-margin-top">

            <table id="table" class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Type</th>
                    <th>Description</th>
                    <th>Task</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($inputs as $input)
                    <tr>
                        <td><a href="{{url('input/edit/'.$input->id)}}">{{$input->id}}</a></td>
                        <td>{{$input->type}}</td>
                        <td> {!!$input->description!!} </td>
                        <td>{{$input->task ? $input->task->name : ''}}</td>
                        <td><a class="btn btn-primary" href="{{url('input/edit/'.$input->id)}}" >Edit</a></td>
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
    @foreach($inputs as $input)
    <div class="modal fade" id="myModalNorm{{$input->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="close"
                            data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        Title
                    </h4>
                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                    <form role="form">
                        <div class="panel-body">

                            

                            
                        </div>
                    </form>
                    <div class="modal-footer">
                        <div class="form-group row">
                            <label class="col-sm-2 control-label">&nbsp;</label>
                            <div class="col-sm-10">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection