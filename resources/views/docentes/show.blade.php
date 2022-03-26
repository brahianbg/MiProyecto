@extends('layouts.app')

@section('titulo', 'detalle del curso')

@section('contenido')


<div class="text-center">
    <img style="height: 250px; width: 500px; margin:20px " src="{{ Storage::url($docentito->foto) }}" class="card-img-top mx-auto d-block" alt="...">
    <div class="card-body">
    <p class="card-text">{{$docentito->nombres}}.</p>
    <p class="card-text">{{$docentito->apellidos}}.</p>
    <p class="card-text">{{$docentito->titulo}}.</p>
    <p class="card-text">{{$docentito->cursoAsociado}}.</p>
    </div>
    <a href="/docentes/{{$docentito->id}}/edit" class="btn btn-primary">editar profe</a>
</div>

@endsection
