<?php

namespace App\Http\Controllers;

use App\Models\Mensualidades;
use Illuminate\Http\Request;
use App\Http\Requests\CreateMensualidadesRequest;
use App\Http\Requests\UpdateMensualidadesRequest;

class MensualidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mensualidades= Mensualidades::all();
        return view ('mensualidades.index',compact('mensualidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mensualidades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateMensualidadesRequest $request)
    {
        $data= new Mensualidades();
        $data->tipo_mensualidad = ($request->tipo_mensualidad);
        $data->valor = ($request->valor);
        $data->save();
      alert()->success('Excelente', 'Mensualidad registrada');
      return redirect('mensualidades');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mensualidades  $mensualidades
     * @return \Illuminate\Http\Response
     */
    public function show(Mensualidades $mensualidades)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mensualidades  $mensualidades
     * @return \Illuminate\Http\Response
     */
    public function edit($id_mensualidad)
    {
        $mensualidades=Mensualidades::findOrFail($id_mensualidad);
        return view('mensualidades.edit',compact('mensualidades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mensualidades  $mensualidades
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMensualidadesRequest $request, $id_mensualidad)
    {
        $data= Mensualidades::findOrFail($id_mensualidad);
        $data->valor = ($request->valor);
        $data->save();
      alert()->success('Excelente', 'Actualizado con exito');
      return redirect('mensualidades');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mensualidades  $mensualidades
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mensualidades $mensualidades)
    {
        //
    }
}
