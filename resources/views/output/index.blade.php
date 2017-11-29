@extends("layouts.app")
@section("content")
    <div class="container little-margin-top">
        <h1>output List</h1>
        <div id="search-panel" class="panel panel-primary collapse in" aria-expanded="true">
            <div class="panel-heading">
                <h3 class="panel-title">output Filter</h3>

            </div>

            <form class="form-horizontal" >
                <div class="panel-body">

                    <div class="form-group row">
                        <label class="col-sm-2 control-label text-right"><label>ID</label></label>
                        <div class="col-sm-10">
                            <input type="number" value="{{$request->output_id ? $request->output_id : ''}}" name="output_id" id="output_id" placeholder="output id" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label text-right"><label>output Name</label></label>
                        <div class="col-sm-10">
                            <input type="text" value="{{$request->name ? $request->name : ''}}" name="name"  placeholder="output name" class="form-control">
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

        
        <a href="{{url('/output/create')}}" class="btn btn-info"><span
                    class="glyphicon glyphicon-plus-sign"></span> Add New output</a>
        <div class="table table-responsive micro-margin-top">

            <table id="table" class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Type</th>
                    <th>Output Description</th>
                    <th>Task</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($outputs as $output)
                    <tr>
                        <td><a href="{{url('output/edit/'.$output->id)}}">{{$output->id}}</a></td>
                        <td>{{$output->name}}</td>
                        <td> {!!$output->description!!} </td>
                        <td>{{$output->task ? $output->task->name : ''}}</td>
                        <td><a class="btn btn-primary" href="{{url('output/edit/'.$output->id)}}">Edit</a></td>
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



@endsection