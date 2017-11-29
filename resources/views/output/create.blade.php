@extends("layouts.app")
@section("content")
	<div class="container little-margin-top">
		<h1>Create Output</h1>
		@include("output.form",["method" => "POST", "url" => "/output/create"])
	</div>
@endsection