@extends('layouts.app')

@section('titulo', 'Listados de cursos')

@section('contenido')


    <h3 class="text-center">Listados de cursos disponibles</h3>
    <br>
    {{--foreach es un ciclo o bucle especial para trabaja con array--}}
    {{--recorderis: existen ciclos como while, for, do while, forech--}}
    <div class="row">{{--ya tenemos la fila--}}
    @foreach ($cursito as $camila)
        {{-- para llamar informacion de php basta con interpolar las variables usando la doble llave--}}
        {{--<p>{{$camila}}</p> --}}


            <div class="col-sm">{{--abrimos columna--}}
                <div class="card text-center" style="width: 18rem; margin-top:30px">
                    <img style="height: 190px; width: 280px; margin:20px " src="{{ Storage::url($camila->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{$camila->nombre}}</h5>
                    <p class="card-text">{{$camila->descripcion}}.</p>
                    <a href="#" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>

        @endforeach
    </div>
@endsection

