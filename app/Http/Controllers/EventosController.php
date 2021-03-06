<?php

namespace App\Http\Controllers;
use App\Models\Evento;
use App\Models\Anio_lectivo;
use Illuminate\Http\Request;
use Carbon\Carbon;

class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $años= Anio_lectivo::all();
        $ultimoaño=$años->last();
       $fecha=Carbon::now()->format('Y-m-d');
        
         
          return view ('anio.calendarioindex',compact('fecha'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosevento=request()->except(['_token','_method']);
        Evento::insert($datosevento);
       print_r($datosevento);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['eventos']=Evento::all();
        return response()->json($data['eventos']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $datosevento=request()->except(['_token','_method']);
        $respuesta= Evento::where('id','=',$id)->update($datosevento);
        return response()->json($respuesta);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eventos= Evento::findOrFail($id);
        Evento::destroy($id);
        return response()->json($id);
    }
}
