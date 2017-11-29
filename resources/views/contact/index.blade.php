@extends("layouts.app")
@section("content")
<div class="container little-margin-top">
	<h1>Contacts</h1>
	        <table class="table">
	            <tr>
	                <th height="200" width="200">
	                    <img class="img-circle img-responsive img-center" src="{{url('/index/images/felice.jpg')}}">
	                </th>
	                <th>
	                    <h3>Felice</h3>
	                    <p><em>University of Salerno</em></p>
	                    <p><em>Lives .., Italy</em></p>
	                    <p>felice@unisa.it</p>
	                </th>
	            </tr>
	            <tr>
	                <th height="200" width="200">
	                    <img class="img-circle img-responsive img-center" src="{{url('/index/images/ema.jpg')}}">
	                </th>
	                <th>
	                    <h3>Emanuele Caso</h3>
	                    <p><em>University of Salerno</em></p>
	                    <p><em>Lives in Maiori (SA), Italy</em></p>
	                    <p>emanuele@studenti.unisa.it</p>
	                </th>
	            </tr>
	            <tr>
	                <th height="200" width="200">
	                    <img class="img-circle img-responsive img-center" src="{{url('/index/images/ccss.jpeg')}}">
	                </th>
	                <th>
	                    <h3>Cristian Salazar</h3>
	                    <p><em>University of Salerno</em></p>
	                    <p><em>Penta (SA), Italy</em></p>
	                    <p>ccss@utp.edu.co</p>
	                </th>
	            </tr>
	            <tr><th></th><th></th></tr>
	        </table>

</div>
@endsection