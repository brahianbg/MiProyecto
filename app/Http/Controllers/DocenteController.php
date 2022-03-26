<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeDocenteRequest;
use App\Models\docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    // creamos un array para poder manipular la informacion de la tabla cursos
    // a su vez el array actuara como un objeto

       $docentito = docente::all();
       /* el metodo compact pide un parametro que sera nuestro array llamada cursito
       y va acompañando la vista que estamos llamando
       */
      return view('docentes.index', compact('docentito'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docentes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeDocenteRequest $request)
    {
        $docentito = new docente();
        //esto le permitira manipular la tabla
        $docentito->nombres = $request->input('nombres');
        $docentito->apellidos = $request->input('apellidos');
        $docentito->titulo = $request->input('titulo');
        $docentito->cursoAsociado = $request->input('cursoAsociado');

        if ($request -> hasFile('foto')){ //si desde ese campo viene un archivo ha
            $docentito -> foto = $request->file('foto')->store('public');
        }

        //con esto ejecutamos el camando para guardar
        $docentito->save();
        return 'Waw lograste guardar';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //creo un array con informacion de registro del id viajó en la solicitud
        $docentito = docente::find($id);
        //asocio el aaray al view usando compact
        return view('docentes.show', compact('docentito'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $docentito = docente::find($id);

        return view('docentes.edit', compact('docentito'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /* con fill lleno todos los campoas de la tabla cursos con la info que viene desde el request
        Exceptp ñp qie viene desde el input llamdo imagen*/
        $docentito = docente::find($id);

        $docentito->fill($request->except('foto'));
        if ($request -> hasFile('foto')){ //si desde ese campo viene un archivo ha
            $docentito -> foto = $request->file('foto')->store('public');
        }
        $docentito->save();
        return 'Recurso actualizado';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
