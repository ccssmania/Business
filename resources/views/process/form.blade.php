<form action="{{$url}}" method="{{$method}}" class="form-horizontal">
	{{ csrf_field() }}
	<div class="panel panel-primary">

        <div class="panel-heading">
            <h1 class="panel-title">Add New Process</h1>
        </div>
		<div class="panel-body">

	        <div class="form-group col-sm-12">
	            <div class="col-sm-4 control-label">
	                <label class="text-danger">Process Name</label>
	            </div>

	            <div class="col-sm-6 input-group">
	                <div class="input-group-addon">
	                    <i class="fa fa-list-alt" aria-hidden="true"></i>
	                </div>
	                <input type="text" class="form-control" name="name" value="{{$process->name ? $process->name : ''}}" required>
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
	                <input type="date" class="form-control" name="start_time" value="{{$process->start_time ? $process->start_time : ''}}">
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
	                <input type="date" class="form-control" name="end_Time" value="{{$process->end_Time ? $process->end_Time : ''}}">
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

