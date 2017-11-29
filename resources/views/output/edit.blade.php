@extends("layouts.app")
@section("content")
	<div class="container little-margin-top">
		<h1>Edit output</h1>
		@include("output.form",["method" => "POST", "url" => "/output/edit/$output->id"])
	</div>
@endsection