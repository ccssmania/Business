<form action="{{$url}}" method="{{$method}}" class="form-horizontal">
	{{ csrf_field() }}
	<div class="panel panel-primary">

        <div class="panel-heading">
            <h1 class="panel-title">Add New department</h1>
        </div>
		<div class="panel-body">

	        <div class="form-group col-sm-12">
	            <div class="col-sm-4 control-label">
	                <label class="text-danger">department Name</label>
	            </div>

	            <div class="col-sm-6 input-group">
	                <div class="input-group-addon">
	                    <i class="fa fa-list-alt" aria-hidden="true"></i>
	                </div>
	                <input type="text" placeholder="Select One" class="form-control" name="name" value="{{$department->name ? $department->name : ''}}" required>
	            </div>
	        </div>

	        <input type="hidden" name="factory_id" value="0">

	        <div class="form-group col-sm-12">
	            <div class="col-sm-4 control-label">
	                <label class="text-danger">Type</label>
	            </div>

	            <div class="col-sm-6 input-group">
	                <div class="input-group-addon">
	                </div>
	                <input type="text" class="form-control" name="type" value="{{$department->type ? $department->type : ''}}">
	            </div>
	        </div>

	   

	        <div class="form-group col-sm-12">
	            <div class="col-sm-4 control-label">
	                <label class="text-danger">Extension M2</label>
	            </div>

	            <div class="col-sm-6 input-group">
	                <div class="input-group-addon">
	                    <i class="fa fa-clock-o" aria-hidden="true"></i>
	                </div>
	                <input type="number" step="0.01" class="form-control" placeholder="extension_m2 time" name="extension_m2" value="{{$department->extension_m2 ? $department->extension_m2 : ''}}">
	            </div>
	        </div>

	        <div class="form-group col-sm-12">
	            <div class="col-sm-4 control-label">
	                <label class="text-danger">Number Employees</label>
	            </div>

	            <div class="col-sm-6 input-group">
	                <div class="input-group-addon">
	                </div>
	                <input type="number"  class="form-control" placeholder="Emploeeys" name="number_employees" value="{{$department->number_employees ? $department->number_employees : ''}}">
	            </div>
	        </div>
	        <div class="form-group col-sm-12">
	            <div class="col-sm-4 control-label">
	                <label class="text-danger">Responsible</label>
	            </div>

	            <div class="col-sm-6 input-group">
	                <div class="input-group-addon">
	                </div>
	                <input type="text"  class="form-control" placeholder="Responsible" name="responsible" value="{{$department->responsible ? $department->responsible : ''}}">
	            </div>
	        </div>
	    </div>

	    <div class="panel-footer">
	        <div class="form-group text-center">
	            <label class="col-sm-1 control-label"></label>
	            <div class="col-sm-10">
	                <input type="submit" class="btn btn-primary">
	            </div>
	        </div>
	    </div>
    </div>
</form>

