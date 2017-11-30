@extends("layouts.app")
@section("content")
	<div class="container little-margin-top">
		<h1>Create Machine</h1>
		@include("machine.form",["method" => "POST","action" => "Add New", "url" => "/machine/create"])
	</div>
@endsection