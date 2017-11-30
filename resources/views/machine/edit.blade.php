@extends("layouts.app")
@section("content")
	<div class="container little-margin-top">
		<h1>Edit Machine</h1>
		@include("machine.form",["method" => "POST","action" => "Edit", "url" => "/machine/edit/$machine->id"])
	</div>
@endsection