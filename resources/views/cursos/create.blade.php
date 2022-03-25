{{-- Para poder heredar la plantilla necesito usar @extends --}}
@extends('layouts.app')
@section('titulo','crear registro')
@section('contenido')


            <h3 class="text-center">Crear nuevo curso</h3>
            {{--Se utilizar el atributo enctype para poder subir archivos--}}
            <form method="POST" enctype="multipart/form-data" action="/cursos">
                @csrf

                @if ($errors->any())
                    @foreach ($errors->all() as $alerta)
                        <div class="alert alert-danger" role="alert">
                            <ul>
                                <li>{{$alerta}}</li>
                            </ul>
                        </div>
                    @endforeach
                @endif
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

