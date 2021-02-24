<?php

namespace App\Http\Controllers;

use App\Models\Anio_lectivo;
use Illuminate\Http\Request;
use DataTables;
use UxWeb\SweetAlert\SweetAlert;

class AnioLectivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

  
            $anio=anio_lectivo::all();
                   
   

       return view ('anio.index',compact('anio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('anio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= new Anio_lectivo();
        $data->id_anio_lectivo = ($request->id_anio_lectivo);
        $data->fecha_inicio = ($request->fecha_inicio);
        $data->fecha_fin= ($request->fecha_inicio);
        $data->estado ='1';
        $data->save();
      alert()->success('Excelente', 'Registro agregado');


     
       // Session::flash('flash_message','Guardado con exito');
        return redirect('acudientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Anio_lectivo  $anio_lectivo
     * @return \Illuminate\Http\Response
     */
    public function show(Anio_lectivo $anio_lectivo)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Anio_lectivo  $anio_lectivo
     * @return \Illuminate\Http\Response
     */
    public function edit(Anio_lectivo $anio_lectivo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Anio_lectivo  $anio_lectivo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anio_lectivo $anio_lectivo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Anio_lectivo  $anio_lectivo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anio_lectivo $anio_lectivo)
    {
        //
    }


}
