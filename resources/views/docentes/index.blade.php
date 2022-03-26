@extends('layouts.app')

@section('titulo', 'Listados de docentes')

@section('contenido')


    <h3 class="text-center">Listado de docentes disponibles</h3>
    <br>
    {{--foreach es un ciclo o bucle especial para trabaja con array--}}
    {{--recorderis: existen ciclos como while, for, do while, forech--}}
    <div class="row">{{--ya tenemos la fila--}}
    @foreach ($docentito as $brahian)
        {{-- para llamar informacion de php basta con interpolar las variables usando la doble llave--}}
        {{--<p>{{$camila}}</p> --}}


            <div class="col-sm">{{--abrimos columna--}}
                <div class="card text-center" style="width: 18rem; margin-top:30px">
                    <img style="height: 190px; width: 280px; margin:20px " src="{{ Storage::url($brahian->foto) }}" class="card-img-top mx-auto d-block" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{$brahian->nombres}}</h5>
                    <h5 class="card-title">{{$brahian->apellidos}}</h5>
                    {{-- <p class="card-text">{{$camila->descripcion}}.</p> --}}
                    {{--Se necesita el id para ver un registro en particular--}}
                    <a href="/docentes/{{$brahian->id}}" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>

        @endforeach
    </div>
@endsection

