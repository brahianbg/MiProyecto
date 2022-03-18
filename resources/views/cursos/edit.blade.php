@extends('layouts.app')

@section('titulo', 'Editar curso')

@section('contenido')

<h3 class="text-center">Editar curso</h3>
    {{--Se utilizar el atributo enctype para poder subir archivos--}}
    <form method="POST" enctype="multipart/form-data" action="/cursos/{{$cursito->id}}">
        @method('PUT')
        @csrf
            <div class="form-group">
                <label for="nombrecurso">Modifique el Nombre del curso</label>
                <input name="nombre"  type="text" class="form-control" id="nombrecurso" value="{{$cursito->nombre}}">
            </div>

            <div class="form-group">
            <label for="descripcioncurso">Modifique la Descripcion del curso</label>
            <input name="descripcion" type="text" class="form-control" id="descripcioncurso" value="{{$cursito->descripcion}}">
            </div>

            <div class="form-group">
            <label for="imagen">Cargar nueva imagen</label>
            <br>
            <input name="imagen" type="file" id="imagen">
        </div>

        <button type="submit" class="btn btn border-warning">Actualizar</button>
    </form>


@endsection
