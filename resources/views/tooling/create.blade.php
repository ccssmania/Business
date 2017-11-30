@extends("layouts.app")
@section("content")
	<div class="container little-margin-top">
		<h1>Create Tooling</h1>
		@include("tooling.form",["method" => "POST","action" => "Add New", "url" => "/tooling/create"])
	</div>
@endsection