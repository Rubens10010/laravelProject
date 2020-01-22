@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
<div class="col-sm-4">
<form action="/usuarios" method="POST">
	@csrf
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" id="name" name='name' aria-describedby="Escribe tu nombre">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name='email' aria-describedby="Escribe tu nombre">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name='password' placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Registrar</button>
  <button type="reset" class="btn btn-danger">Cancelar</button>
</form>
</div>
</div>
</div>
@endsection