<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeCursoRequest;
use App\Models\curso;
use Illuminate\Http\Request;

class cursoController extends Controller
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

       $cursito = curso::all();
        /* el metodo compact pide un parametro que sera nuestro array llamada cursito
        y va acompañando la vista que estamos llamando
        */
       return view('cursos.index', compact('cursito'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeCursoRequest $request)
    {

        //implementamos validaciones
           /*
           $validacionDatos =$request->validate([
                'nombre'=>'required|max:10',
                'imagen'=> 'required|imagen'
            ]);

            */

        // con el metodo all() veo toda la informacion
        //return $request->all();
        //ovtuvimos el dato de lo que el usuario envia por el input, cuyo name es 'nombre'
        //return $request->input('nombre');
        //creamos una nueva instancia del modelo
        $cursito = new curso();
        //esto le permitira manipular la tabla
        $cursito->nombre = $request->input('nombre');
        $cursito->descripcion = $request->input('descripcion');

        if ($request -> hasFile('imagen')){ //si desde ese campo viene un archivo ha
            $cursito -> imagen = $request->file('imagen')->store('public');
        }

        //con esto ejecutamos el camando para guardar
        $cursito->save();
        return 'Waw lograste guardar';



    }

    /**
     * Muestra el recurso especificado (un recurso es un registro).
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //creo un array con informacion de registro del id viajó en la solicitud
        $cursito = curso::find($id);
        //asocio el aaray al view usando compact
        return view('cursos.show', compact('cursito'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cursito = curso::find($id);

        return view('cursos.edit', compact('cursito'));

        //return $cursito;
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
        $cursito = curso::find($id);

        $cursito->fill($request->except('imagen'));
        if ($request -> hasFile('imagen')){ //si desde ese campo viene un archivo ha
            $cursito -> imagen = $request->file('imagen')->store('public');
        }
        $cursito->save();
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
