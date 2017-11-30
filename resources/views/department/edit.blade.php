@extends("layouts.app")
@section("content")
	<div class="container little-margin-top">
		<h1>Edit Department</h1>
		@include("department.form",["method" => "POST","action" => "Edit ", "url" => "/department/edit/$department->id"])
	</div>
@endsection