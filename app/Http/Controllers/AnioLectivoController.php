<?php

namespace App\Http\Controllers;

use App\Models\Anio_lectivo;
use App\Models\Meses;
use Illuminate\Http\Request;
use DataTables;
use UxWeb\SweetAlert\SweetAlert;
use Carbon\Carbon;
use App\Http\Requests\CreateAnioRequest;

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
    public function store(CreateAnioRequest $request)
    {
    //    $fecha=Carbon::now()->format('Y');
    //     if($request->id_anio_lectivo == $fecha){
        $data= new Anio_lectivo();
        $data->id_anio_lectivo = ($request->id_anio_lectivo);
        $data->fecha_inicio = ($request->fecha_inicio);
        $data->fecha_fin= ($request->fecha_inicio);
        $data->estado ='1';
        $data->save();
        
        $años= Anio_lectivo::all();
        $ultimoaño=$años->last();

        Meses::create(
            ['nom_mes' => 'Enero',
                'id_anio_lectivo'=> $ultimoaño->id_anio_lectivo,
                'estado'=> '0']);
        Meses::create(
            ['nom_mes' => 'Febrero',
                'id_anio_lectivo'=> $ultimoaño->id_anio_lectivo,
                'estado'=> '0']);
        Meses::create(
            ['nom_mes' => 'Marzo',
                'id_anio_lectivo'=> $ultimoaño->id_anio_lectivo,
                'estado'=> '0']);
        Meses::create(
            ['nom_mes' => 'Abril',
                'id_anio_lectivo'=> $ultimoaño->id_anio_lectivo,
                'estado'=> '0']);
        Meses::create(
            ['nom_mes' => 'Mayo',
                'id_anio_lectivo'=> $ultimoaño->id_anio_lectivo,
                'estado'=> '0']);
        Meses::create(
            ['nom_mes' => 'Junio',
                'id_anio_lectivo'=> $ultimoaño->id_anio_lectivo,
                'estado'=> '0']);
        Meses::create(
            ['nom_mes' => 'Julio',
                'id_anio_lectivo'=> $ultimoaño->id_anio_lectivo,
                'estado'=> '0']);
        Meses::create(
            ['nom_mes' => 'Agosto',
                'id_anio_lectivo'=> $ultimoaño->id_anio_lectivo,
                'estado'=> '0']);
        Meses::create(
            ['nom_mes' => 'Septiembre',
                'id_anio_lectivo'=> $ultimoaño->id_anio_lectivo,
                'estado'=> '0']);
        Meses::create(
            ['nom_mes' => 'Octubre',
                'id_anio_lectivo'=> $ultimoaño->id_anio_lectivo,
                'estado'=> '0']);
        Meses::create(
            ['nom_mes' => 'Noviembre',
                'id_anio_lectivo'=> $ultimoaño->id_anio_lectivo,
                'estado'=> '0']);
        Meses::create(
            ['nom_mes' => 'Diciembre',
                'id_anio_lectivo'=> $ultimoaño->id_anio_lectivo,
                'estado'=> '0']);
                alert()->success('Excelente', 'Registro agregado');
            // }else{
                //alert()->error('Error', 'No puedes registrar este año');
            // }
     


     
       // Session::flash('flash_message','Guardado con exito');
        return redirect('aniolectivo');
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
