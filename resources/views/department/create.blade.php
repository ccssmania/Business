@extends("layouts.app")
@section("content")
	<div class="container little-margin-top">
		<h1>Create Department</h1>
		@include("department.form",["method" => "POST","action" => "Add New", "url" => "/department/create"])
	</div>
@endsection