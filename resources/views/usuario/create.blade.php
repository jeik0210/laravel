@extends('layouts.principal')
@section('content')
	<div class="row">
	<div class="col-md-4">
	{!!Form::open(['route'=>'usuario.store','method'=>'post'])!!}
		@include('usuario.forms.user');
		{!!Form::submit('ingresar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
	</div>
	</div>
@stop