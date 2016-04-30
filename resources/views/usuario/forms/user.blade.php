<div class="form-group">
			{!!Form::label('nombre')!!}
			{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'ingresar el nombre del usuario'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('correo')!!}
			{!!Form::text('email',null,['class'=>'form-control','placeholder'=>'ingresar su correo'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('password')!!}
			{!!Form::password('password',['class'=>'form-control','placeholder'=>'ingresar su contraseña'])!!}
		</div>
		{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}