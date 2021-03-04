<?php

namespace App\Http\Controllers;

use App\Models\Grados;
use App\Models\Mensualidades;
use Illuminate\Http\Request;
use App\Http\Requests\CreateGradosRequest;
use App\Http\Requests\UpdateGradosRequest;

class GradosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $grado= Grados::with('mensualidad')->get();
    
        return view ('grados.index',compact('grado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mensualidad= Mensualidades::all();
        
        return view('grados.create',compact('mensualidad'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateGradosRequest $request)
    {
        $data= new Grados();
        $data->nom_grado = ($request->nom_grado);
        $data->jornada = ($request->jornada);
        $data->id_mensualidad = ($request->id_mensualidad);
        $data->save();
      alert()->success('Excelente', 'Grado registrado');
      return redirect('grados');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Grados  $grados
     * @return \Illuminate\Http\Response
     */
    public function show(Grados $grados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Grados  $grados
     * @return \Illuminate\Http\Response
     */
    public function edit($id_grado)
    {
        $grado=Grados::with('mensualidad')->findOrFail($id_grado);
        $mensualidad= Mensualidades::all();
        return view('grados.edit',compact('grado','mensualidad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Grados  $grados
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGradosRequest $request, $id_grado)
    {
        $data= Grados::findOrFail($id_grado);
         $data->jornada = ($request->jornada);
        $data->id_mensualidad = ($request->id_mensualidad);
        $data->save();
      alert()->success('Excelente', 'Actualizado con exito');
      return redirect('grados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grados  $grados
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grados $grados)
    {
        //
    }
}
