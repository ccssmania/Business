@extends("layouts.app")
@section("content")
	<div class="container little-margin-top">
		<h1>Create Input</h1>
		@include("input.form",["method" => "POST", "url" => "/input/create"])
	</div>
@endsection