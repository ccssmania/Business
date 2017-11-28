@extends("layouts.app")
@section("content")
	<div class="container little-margin-top">
		<h1>Create Process</h1>
		@include("process.form",["method" => "POST", "url" => "/process/create"])
	</div>
@endsection