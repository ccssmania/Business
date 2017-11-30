<form action="{{$url}}" method="{{$method}}" class="form-horizontal">
	{{ csrf_field() }}
	<div class="panel panel-primary">

        <div class="panel-heading">
            <h1 class="panel-title">{{$action}} machine</h1>
        </div>
		<div class="panel-body">

	        <div class="form-group col-sm-12">
	            <div class="col-sm-4 control-label">
	                <label class="text-danger">machine Name</label>
	            </div>

	            <div class="col-sm-6 input-group">
	                <div class="input-group-addon">
	                    <i class="fa fa-list-alt" aria-hidden="true"></i>
	                </div>
	                <input type="text" placeholder="Select One" class="form-control" name="name" value="{{$machine->name ? $machine->name : ''}}" required>
	            </div>
	        </div>

	        <div class="form-group col-sm-12">
	            <div class="col-sm-4 control-label">
	                <label class="text-danger">Description</label>
	            </div>

	            <div class="col-sm-6 input-group">
	                <div class="input-group-addon">
	                    <i class="fa fa-file-text" aria-hidden="true"></i>
	                </div>
	                <textarea class="textarea" name="description" required>{{$machine->description ? $machine->description : ''}}</textarea>
	            </div>
	        </div>

	        <div class="form-group col-sm-12">
	            <div class="col-sm-4 control-label">
	                <label class="text-danger">Type</label>
	            </div>

	            <div class="col-sm-6 input-group">
	                <div class="input-group-addon">
	                    <i class="fa fa-calendar-o" aria-hidden="true"></i>
	                </div>
	                <input type="text" class="form-control" name="type" value="{{$machine->type ? $machine->type : ''}}">
	            </div>
	        </div>

	        <div class="form-group col-sm-12">
	            <div class="col-sm-4 control-label">
	                <label class="text-danger">Weight</label>
	            </div>

	            <div class="col-sm-6 input-group">
	                <div class="input-group-addon">
	                    <i class="fa fa-calendar-o" aria-hidden="true"></i>
	                </div>
	                <input type="number" step="0.001" class="form-control" name="weight" value="{{$machine->weight ? $machine->weight : ''}}">
	            </div>
	        </div>

	        <input type="hidden" name="cell_id" value="0">
	        <input type="hidden" name="line_id" value="0">
	       

	        <div class="form-group col-sm-12">
	            <div class="col-sm-4 control-label">
	                <label class="text-danger">Department ID</label>
	            </div>

	            <div class="col-sm-6 input-group">
	                <div class="input-group-addon">
	                    <i class="fa fa-sitemap" aria-hidden="true"></i>
	                </div>
	                <select class="form-control" name="department_id" required>
						<option value="">Select One</option>
						@foreach($departments as $department)
							
							@php $selected = $machine->department_id == $department->id ? 'selected' : '';@endphp
							<option value="{{$department->id}}" {{$selected}} > {{$department->name}} </option>
							
							
						@endforeach
					</select>
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

