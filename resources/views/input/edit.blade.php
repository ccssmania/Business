@extends("layouts.app")
@section("content")
	<div class="container little-margin-top">
		<h1>Edit Input</h1>
		@include("input.form",["method" => "POST","action" => "Edit", "url" => "/input/edit/$input->id"])
	</div>
@endsection