@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
<div class="col-sm-4">

<h3>Editar usuario: {{$user->name}}</h3>
@if($errors->any())
	<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
			<li>{{$error}}</li>
		@endforeach
	</ul>
	</div>
@endif

<form action="{{ route('usuarios.update', $user->id) }}" method="POST">
	@method('PATCH')
	@csrf
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" id="name" name='name' aria-describedby="Escribe tu nombre" value = "{{$user->name}}">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name='email' aria-describedby="Escribe tu nombre" value = "{{$user->email}}">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <button type="submit" class="btn btn-primary">Guardar Cambios</button>
  <button type="reset" class="btn btn-danger">Cancelar</button>
</form>
</div>
</div>
</div>
@endsection