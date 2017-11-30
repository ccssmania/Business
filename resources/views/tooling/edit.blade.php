@extends("layouts.app")
@section("content")
	<div class="container little-margin-top">
		<h1>Edit Tooling</h1>
		@include("tooling.form",["method" => "POST","action" => "Edit", "url" => "/tooling/edit/$tooling->id"])
	</div>
@endsection