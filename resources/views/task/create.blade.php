@extends("layouts.app")
@section("content")
	<div class="container little-margin-top">
		<h1>Create Task</h1>
		@include("task.form",["method" => "POST", "url" => "/task/create"])
	</div>
@endsection