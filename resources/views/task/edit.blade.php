@extends("layouts.app")
@section("content")
	<div class="container little-margin-top">
		<h1>Edit Task</h1>
		@include("task.form",["method" => "POST", "url" => "/task/edit/$task->id"])
	</div>
@endsection