@extends("layouts.app")
@section("content")
    <div class="container little-margin-top">
        <h1>Department List</h1>
        <div id="search-panel" class="panel panel-primary collapse in" aria-expanded="true">
            <div class="panel-heading">
                <h3 class="panel-title">Department Filter</h3>

            </div>

            <form class="form-horizontal" >
                <div class="panel-body">

                    <div class="form-group row">
                        <label class="col-sm-2 control-label text-right"><label>ID</label></label>
                        <div class="col-sm-10">
                            <input type="number" value="{{$request->department_id ? $request->department_id : ''}}" name="department_id" id="input_id" placeholder="department id" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label text-right"><label>Department Name</label></label>
                        <div class="col-sm-10">
                            <input type="text" value="{{$request->name ? $request->name : ''}}" name="name"  placeholder="department name" class="form-control">
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

        
        <a href="{{url('/department/create')}}" class="btn btn-info"><span
                    class="glyphicon glyphicon-plus-sign"></span> Add New department</a>
        <div class="table table-responsive micro-margin-top">

            <table id="table" class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Department Name</th>
                    <th>Factory ID</th>
                    <th>Type</th>
                    <th>Extension M2</th>
                    <th>Number Employees</th>
                    <th>Responsible</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($departments as $department)
                    <tr>
                        <td><a href="{{url('department/edit/'.$department->id)}}">{{$department->id}}</a></td>
                        <td>{{$department->name}}</td>
                        <td> {{$department->factory_id}} </td>
                        <td>{{$department->type}}</td>
                        <td>{{$department->extension_m2}}</td>
                        <td>{{$department->number_employees}}</td>
                        <td>{{$department->responsible}}</td>
                        <td><a class="btn btn-plus"  href="{{url('department/edit/'.$department->id)}}">Edit</a></td>
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