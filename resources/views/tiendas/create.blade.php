@extends('layouts.app')

@section('title', 'Examen')

@section('content')

  <h3>Nueva tienda</h3>
  <form action="{{route('tiendas.store')}}" method="post">
    @csrf
    Nombre:<br>
    <input type="text" name="nombre">
    <br><br>
    Descripción:<br>
    <input type="text" name="description">
    <br><br>
    Email:<br>
    <input type="text" name="email">
    <br><br>
    Password:<br>
    <input type="text" name="password">
    <br><br>
    Likes:<br>
    <input type="text" name="likes">
    <br><br>

    <button class="buttonform" type="submit" name="submit">Crear</button>
  </form>
  <br>

@endsection
