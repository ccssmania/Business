@extends("layouts.app")
@section("content")
    <div class="container little-margin-top">
        <h1>machine List</h1>
        <div id="search-panel" class="panel panel-primary collapse in" aria-expanded="true">
            <div class="panel-heading">
                <h3 class="panel-title">machine Filter</h3>

            </div>

            <form class="form-horizontal" >
                <div class="panel-body">

                    <div class="form-group row">
                        <label class="col-sm-2 control-label text-right"><label>ID</label></label>
                        <div class="col-sm-10">
                            <input type="number" value="{{$request->machine_id ? $request->machine_id : ''}}" name="machine_id" id="input_id" placeholder="machine id" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label text-right"><label>machine Name</label></label>
                        <div class="col-sm-10">
                            <input type="text" value="{{$request->name ? $request->name : ''}}" name="name"  placeholder="machine name" class="form-control">
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

        
        <a href="{{url('/machine/create')}}" class="btn btn-info"><span
                    class="glyphicon glyphicon-plus-sign"></span> Add New machine</a>
        <div class="table table-responsive micro-margin-top">

            <table id="table" class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Department</th>
                    <th>Dimension M2</th>
                    <th>Weight</th>
                    <th>Name</th>
                    <th>type</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($machines as $machine)
                    <tr>
                        <td><a href="{{url('machine/edit/'.$machine->id)}}">{{$machine->id}}</a></td>
                        
                        <td>{{$machine->department ? $machine->department->name : ''}}</td>
                        <td>{{$machine->dimension_m2}}</td>
                        <td>{{$machine->weight}}</td>
                        <td>{{$machine->name}}</td>
                        <td>{{$machine->type}}</td>
                        <td> {!!$machine->description!!} </td>
                        <td><a class="btn btn-primary" href="{{url('machine/edit/'.$machine->id)}}" >Edit</a></td>
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
    @foreach($machines as $machine)
    <div class="modal fade" id="myModalNorm{{$machine->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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