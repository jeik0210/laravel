@extends('layouts.principal')
@section('content')
	<div class="row">
	<div class="col-md-4">
	{!!Form::open(['route'=>'usuario.store','method'=>'post'])!!}
		@include('usuario.forms.user');
	{!!Form::close()!!}
	</div>
	</div>
@stop