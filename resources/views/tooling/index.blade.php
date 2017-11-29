@extends("layouts.app")
@section("content")
    <div class="container little-margin-top">
        <h1>Tooling List</h1>
        <div id="search-panel" class="panel panel-primary collapse in" aria-expanded="true">
            <div class="panel-heading">
                <h3 class="panel-title">Tooling Filter</h3>

            </div>

            <form class="form-horizontal" >
                <div class="panel-body">

                    <div class="form-group row">
                        <label class="col-sm-2 control-label text-right"><label>ID</label></label>
                        <div class="col-sm-10">
                            <input type="number" value="{{$request->tooling_id ? $request->tooling_id : ''}}" name="tooling_id" id="input_id" placeholder="tooling id" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label text-right"><label>tooling Name</label></label>
                        <div class="col-sm-10">
                            <input type="text" value="{{$request->name ? $request->name : ''}}" name="name"  placeholder="tooling name" class="form-control">
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

        
        <a href="{{url('/tooling/create')}}" class="btn btn-info"><span
                    class="glyphicon glyphicon-plus-sign"></span> Add New tooling</a>
        <div class="table table-responsive micro-margin-top">

            <table id="table" class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Tooling Name</th>
                    <th>Tooling Description</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($toolings as $tooling)
                    <tr>
                        <td><a href="{{url('tooling/edit/'.$tooling->id)}}">{{$tooling->id}}</a></td>
                        <td>{{$tooling->name}}</td>
                        <td> {!!$tooling->description!!} </td>
                        <td><a class="btn btn-primary" href="{{url('tooling/edit/'.$tooling->id)}}" >Controll</a></td>
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