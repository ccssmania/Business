<form action="{{$url}}" method="{{$method}}" class="form-horizontal">
	{{ csrf_field() }}
	<div class="panel panel-primary">

        <div class="panel-heading">
            <h1 class="panel-title">{{$action}} Task</h1>
        </div>
		<div class="panel-body">

	        <div class="form-group col-sm-12">
	            <div class="col-sm-4 control-label">
	                <label class="text-danger">Task Name</label>
	            </div>

	            <div class="col-sm-6 input-group">
	                <div class="input-group-addon">
	                    <i class="fa fa-list-alt" aria-hidden="true"></i>
	                </div>
	                <input type="text" placeholder="Select One" class="form-control" name="name" value="{{$task->name ? $task->name : ''}}" required>
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
	                <textarea class="textarea" name="description" required>{{$task->description ? $task->description : ''}}</textarea>
	            </div>
	        </div>

	        <div class="form-group col-sm-12">
	            <div class="col-sm-4 control-label">
	                <label class="text-danger">Start Time</label>
	            </div>

	            <div class="col-sm-6 input-group">
	                <div class="input-group-addon">
	                    <i class="fa fa-calendar-o" aria-hidden="true"></i>
	                </div>
	                <input type="date" class="form-control" name="start_time" value="{{$task->start_time ? $task->start_time : ''}}">
	            </div>
	        </div>

	        <div class="form-group col-sm-12">
	            <div class="col-sm-4 control-label">
	                <label class="text-danger">End Time</label>
	            </div>

	            <div class="col-sm-6 input-group">
	                <div class="input-group-addon">
	                    <i class="fa fa-calendar-o" aria-hidden="true"></i>
	                </div>
	                <input type="date" class="form-control" name="end_time" value="{{$task->end_time ? $task->end_time : ''}}">
	            </div>
	        </div>

	        <div class="form-group col-sm-12">
	            <div class="col-sm-4 control-label">
	                <label class="text-danger">Setup</label>
	            </div>

	            <div class="col-sm-6 input-group">
	                <div class="input-group-addon">
	                    <i class="fa fa-clock-o" aria-hidden="true"></i>
	                </div>
	                <input type="number" step="0.01" class="form-control" placeholder="setup time" name="setup" value="{{$task->setup ? $task->setup : ''}}">
	            </div>
	        </div>

	        <div class="form-group col-sm-12">
	            <div class="col-sm-4 control-label">
	                <label class="text-danger">Cycle Time</label>
	            </div>

	            <div class="col-sm-6 input-group">
	                <div class="input-group-addon">
	                    <i class="fa fa-clock-o" aria-hidden="true"></i>
	                </div>
	                <input type="number" step="0.01" class="form-control" placeholder="cycle time" name="cycletime" value="{{$task->cycletime ? $task->cycletime : ''}}">
	            </div>
	        </div>

	        <div class="form-group col-sm-12">
	            <div class="col-sm-4 control-label">
	                <label class="text-danger">Process ID</label>
	            </div>

	            <div class="col-sm-6 input-group">
	                <div class="input-group-addon">
	                    <i class="fa fa-sitemap" aria-hidden="true"></i>
	                </div>
	                <select class="form-control" name="process_id" required>
						<option value="">Select One</option>
						@foreach($processes as $process)
							
							@php $selected = $task->process_id == $process->id ? 'selected' : '';@endphp
							<option value="{{$process->id}}" {{$selected}} > {{$process->name}} </option>
							
							
						@endforeach
					</select>
	            </div>
	        </div>

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
							
							@php $selected = $task->department_id == $department->id ? 'selected' : '';@endphp
							<option value="{{$department->id}}" {{$selected}} > {{$department->name}} </option>
							
							
						@endforeach
					</select>
	            </div>
	        </div>

	        <div class="form-group col-sm-12">
	            <div class="col-sm-4 control-label">
	                <label class="text-danger">Machine ID</label>
	            </div>

	            <div class="col-sm-6 input-group">
	                <div class="input-group-addon">
	                    <i class="fa fa-sitemap" aria-hidden="true"></i>
	                </div>
	                <select class="form-control" name="machine_id" required>
						<option value="">Select One</option>
						@foreach($machines as $machine)
							
							@php $selected = $task->machine_id == $machine->id ? 'selected' : '';@endphp
							<option value="{{$machine->id}}" {{$selected}} > {{$machine->name}} </option>
							
							
						@endforeach
					</select>
	            </div>
	        </div>

	        <div class="form-group col-sm-12">
	            <div class="col-sm-4 control-label">
	                <label class="text-danger">Tooling ID</label>
	            </div>

	            <div class="col-sm-6 input-group">
	                <div class="input-group-addon">
	                    <i class="fa fa-sitemap" aria-hidden="true"></i>
	                </div>
	                <select class="form-control" name="tooling_id" required>
						<option value="">Select One</option>
						@foreach($toolings as $tooling)
							
							@php $selected = $task->tooling_id == $tooling->id ? 'selected' : '';@endphp
							<option value="{{$tooling->id}}" {{$selected}} > {{$tooling->name}} </option>
							
							
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

