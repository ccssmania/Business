@extends("layouts.app")
@section("content")
	<div class="container little-margin-top">
		<h1>Edit Process</h1>
		@include("process.form",["method" => "POST", "url" => "/process/edit/$process->id"])
	</div>
@endsection