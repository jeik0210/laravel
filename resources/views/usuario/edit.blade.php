@extends('layouts.principal')
@section('content')
	<div class="row">
	<div class="col-md-4">
	@include('alerts.request')
	{!!Form::model($user,['route'=>['usuario.update',$user->id],'method'=>'put'])!!}
		@include('usuario.forms.user');
		{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
	</div>
	</div>
	
@stop