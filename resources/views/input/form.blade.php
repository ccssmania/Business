<form action="{{$url}}" method="{{$method}}" class="form-horizontal">
	{{ csrf_field() }}
	<div class="panel panel-primary">

        <div class="panel-heading">
            <h1 class="panel-title">Add New Input</h1>
        </div>
		<div class="panel-body">

	        <div class="form-group col-sm-12">
	            <div class="col-sm-4 control-label">
	                <label class="text-danger">Type</label>
	            </div>

	            <div class="col-sm-6 input-group">
	                <div class="input-group-addon">
	                    <i class="fa fa-list-alt" aria-hidden="true"></i>
	                </div>
	                <input type="text" placeholder="Select One" class="form-control" name="type" value="{{$input->type ? $input->type : ''}}" required>
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
	                <textarea class="textarea" name="description" required>{{$input->description ? $input->description : ''}}</textarea>
	            </div>
	        </div>

	        

	        <div class="form-group col-sm-12">
	            <div class="col-sm-4 control-label">
	                <label class="text-danger">Task ID</label>
	            </div>

	            <div class="col-sm-6 input-group">
	                <div class="input-group-addon">
	                    <i class="fa fa-sitemap" aria-hidden="true"></i>
	                </div>
	                <select class="form-control" name="task_id" required>
						<option value="">Select One</option>
						@foreach($tasks as $task)
							
							@php $selected = $input->task_id == $task->id ? 'selected' : '';@endphp
							<option value="{{$task->id}}" {{$selected}} > {{$task->name}} </option>
							
							
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

