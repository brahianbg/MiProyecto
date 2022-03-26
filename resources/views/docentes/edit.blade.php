@extends('layouts.app')

@section('titulo', 'Editar curso')

@section('contenido')

<h3 class="text-center">Editar profr</h3>
    {{--Se utilizar el atributo enctype para poder subir archivos--}}
    <form method="POST" enctype="multipart/form-data" action="/docentes/{{$docentito->id}}">
        @method('PUT')
        @csrf
            <div class="form-group">
                <label for="nombres">Modifique el Nombre del profe</label>
                <input name="nombres"  type="text" class="form-control" id="nombres" value="{{$docentito->nombres}}">
            </div>
            <div class="form-group">
                <label for="apellidos">Modifique el apellido del profe</label>
                <input name="apellidos"  type="text" class="form-control" id="apellidos" value="{{$docentito->apellidos}}">
            </div>

            <div class="form-group">
            <label for="titulo">Modifique el titulo del profe</label>
            <input name="titulo" type="text" class="form-control" id="titulo" value="{{$docentito->titulo}}">
            </div>

            <div class="form-group">
            <label for="foto">Cargar nueva foto del profe</label>
            <br>
            <input name="foto" type="file" id="foto">
        </div>

        <button type="submit" class="btn btn border-warning">Actualizar</button>
    </form>


@endsection
