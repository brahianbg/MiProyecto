{{-- Para poder heredar la plantilla necesito usar @extends --}}
@extends('layouts.app')
@section('titulo','crear registro')
@section('contenido')


            <h3 class="text-center">Crear nuevo curso</h3>
            {{--Se utilizar el atributo enctype para poder subir archivos--}}
            <form method="POST" enctype="multipart/form-data" action="/cursos">
                @csrf
                <div class="form-group">
                    <label for="nombrecurso">Nombre del curso</label>
                    <input name="nombre"  type="text" class="form-control" id="nombrecurso">
                </div>
                <div class="form-group">
                    <label for="descripcioncurso">Descripcion del curso</label>
                    <input name="descripcion" type="text" class="form-control" id="descripcioncurso">
                </div>
                <div class="form-group">
                    <label for="imagen">Cargar imagen</label>
                    <br>
                    <input name="imagen" type="file" id="imagen">
                </div>
                <button type="submit" class="btn btn border-warning">crear</button>
            </form>

@endsection



{{--
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <title>vista de registros</title>
    </head>
        {{-- Boootstrap requiere un div container para mostrara los elementos centrados y ordenados--}}

        {{--
        <div class="container">
            <br>
            <h3 class="text-center">Crear nuevo curso</h3>
            <form action="/cursos" method="post">
                @csrf
                <div class="form-group">
                    <label for="nombrecurso">Nombre del curso</label>
                    <input name="nombre"  type="text" class="form-control" id="nombrecuerso">
                </div>
                <div class="form-group">
                    <label for="descripcioncurso">Descripcion del curso</label>
                    <input name="descripcion" type="text" class="form-control" id="descripcioncurso">
                </div>
                <button type="submit" class="btn btn-success">crear</button>
            </form>
        </div>
    <body>
    </body>
</html>
--}}
