<form action="{{$url}}" method="{{$method}}" class="form-horizontal">
	{{ csrf_field() }}
	<div class="panel panel-primary">

        <div class="panel-heading">
            <h1 class="panel-title">{{$action}} Controll</h1>
        </div>
		<div class="panel-body">

	        <div class="form-group col-sm-12">
	            <div class="col-sm-4 control-label">
	                <label class="text-danger">Task ID</label>
	            </div>

	            <div class="col-sm-6 input-group">
	                <div class="input-group-addon">
	                    <i class="fa fa-sitemap" aria-hidden="true"></i>
	                </div>
	                <input type="hidden" name="task_id" value="{{$task_id}}">
	                <select class="form-control" disabled name="task_id" required>
						<option value="">Select One</option>
						@foreach($tasks as $task)
							
							@php $selected = $task_id == $task->id ? 'selected' : '';@endphp
							<option value="{{$task->id}}" {{$selected}} > {{$task->name}} </option>
							
							
						@endforeach
					</select>
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
	                <input type="date" class="form-control" name="r_start_date" value="{{$controll->r_start_date ? $controll->r_start_date : ''}}">
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
	                <input type="date" class="form-control" name="r_end_date" value="{{$controll->r_end_date ? $controll->r_end_date : ''}}">
	            </div>
	        </div>

	        <div class="form-group col-sm-12">
	            <div class="col-sm-4 control-label">
	                <label class="text-danger">Real Setup</label>
	            </div>

	            <div class="col-sm-6 input-group">
	                <div class="input-group-addon">
	                    <i class="fa fa-clock-o" aria-hidden="true"></i>
	                </div>
	                <input type="number" step="0.01" class="form-control" placeholder="setup time" name="r_setup" value="{{$controll->r_setup ? $controll->r_setup : ''}}">
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
	                <input type="number" step="0.01" class="form-control" placeholder="cycle time" name="r_cycletime" value="{{$controll->r_cycletime ? $controll->r_cycletime : ''}}">
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

