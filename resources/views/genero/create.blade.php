@extends('layouts.principal')
@section('content')
	{!!Form::open()!!}
		<div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
			<strong>Genero Agregado Correctamente</strong>
		</div>
		<input type="text" class="hidden" name="_token" value = "{{csrf_token()}}" id="token">
		@include('genero.form.genero')
		{!!link_to('#',$title='registrar',$attributes=['id'=>'registro','class'=>'btn btn-primary'],$secure = null)!!}
	{!!Form::close()!!}
@stop