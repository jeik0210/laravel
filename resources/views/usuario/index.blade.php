@extends('layouts.principal')
@section('content')
@if(Session::has('message'))
<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif
	<table class="table">
		<thead>
			<th>nombre</th>
			<th>correo</th>
			<th>operacion</th>
		</thead>
		@foreach($users as $user)
		<tbody>
			<td>{{$user->name}}</td>
			<td>{{$user->email}}</td>
			<td>
				{!!link_to_route('usuario.edit', $title = 'editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary'])!!}
			</td>
			<td>
			{!!Form::model($user,['route'=>['usuario.destroy',$user->id],'method'=>'delete'])!!}
			{!!Form::submit('eliminar',['class'=>'btn btn-danger'])!!}
			{!!Form::close()!!}
			</td>
		</tbody>
		@endforeach
	</table>
@stop