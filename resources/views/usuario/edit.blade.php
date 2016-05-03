@extends('layouts.principal')
@section('content')
	<div class="row">
	<div class="col-md-4">
	{!!Form::model($user,['route'=>['usuario.update',$user->id],'method'=>'put'])!!}
		@include('usuario.forms.user');
		{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
	</div>
	</div>
	
@stop