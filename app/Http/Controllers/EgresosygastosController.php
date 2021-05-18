<?php

namespace App\Http\Controllers;

use App\Models\egresosygastos;
use App\Models\Docentes;
use App\Models\Directivos;
use DataTables;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EgresosygastosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
  
            return Datatables::of(egresosygastos::all())
                    ->addIndexColumn()
                    ->addColumn('action', function($data){
            $btn = '<a type="button" class="viewbutton btn bg-primary" href="/egresosygastos/'.$data->id.'"><i class="fas fa-eye"></i></a>';
            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
                    
        }
        return view ('egresosygastos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fechaactual= Carbon::now()->format('Y-m-d');
        $docentes= Docentes::all();
        return view ('egresosygastos.create',compact('fechaactual','docentes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= new egresosygastos();
        $data->fecha_salida = $request->fecha_salida;
        $data->clase_salida = $request->clase_salida;
        $data->concepto_salida = $request->concepto_salida;
        $data->cc_pagado= $request->cc_pagado;
        $data->nom_pagado =$request->nom_pagado;
        $data->tipo_salida = $request->tipo_salida;
        $data->valor_salida = $request->valor_salida;
        $data->descripcion_salida = $request->descripcion_salida;
        $data->save();
      alert()->success('Excelente', 'Registrado con exito');


     
       // Session::flash('flash_message','Guardado con exito');
        return redirect('egresosygastos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\egresosygastos  $egresosygastos
     * @return \Illuminate\Http\Response
     */
    public function show(egresosygastos $egresosygastos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\egresosygastos  $egresosygastos
     * @return \Illuminate\Http\Response
     */
    public function edit(egresosygastos $egresosygastos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\egresosygastos  $egresosygastos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, egresosygastos $egresosygastos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\egresosygastos  $egresosygastos
     * @return \Illuminate\Http\Response
     */
    public function destroy(egresosygastos $egresosygastos)
    {
        //
    }
    public function ccdocente(Request $request){
        $ccdocente= Docentes::all();
        return response()->json($ccdocente);
    }
    public function nomdocente(Request $request){
        $nomdocente= Docentes::all()->where('id_docente',$request->id_docente)->first();
        return response()->json($nomdocente);
    }
    public function ccdirectivo(Request $request){
        $ccdirectivo= Directivos::all();
        return response()->json($ccdirectivo);
    }
    public function nomdirectivo(Request $request){
        $nomdirectivo= Directivos::all()->where('id_directivo',$request->id_directivo)->first();
        return response()->json($nomdirectivo);
    }
}
