<?php

namespace App\Http\Controllers;

use App\Models\Observadores;
use App\Models\Estudiantes;
use App\Models\Itemobservadores;
use App\Models\Categoriaitemobservador;
use Illuminate\Http\Request;
use DataTables;
use Carbon\Carbon;
use App\Http\Requests\CreateObservadorRequest;
use Illuminate\Support\Facades\Validator;


class ObservadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
 
        if ($request->ajax()) {
  
            return Datatables::of(Estudiantes::with('matricula','matricula.grado','matricula.acudiente')->get())
                    ->addIndexColumn()
                    ->addColumn('action', function($data){
            $btn = '<a type="button" class="editbutton btn bg-primary" href="/observadores/'.$data->id_estudiante.'/edit"><i class="fas fa-edit"></i></a>';
            $btn .= '&nbsp';
            $btn .= '<a type="button" class="editbutton btn bg-primary" href="/verobservador/'.$data->id_estudiante.'"><i class="fas fa-eye"></i></a>';
       
            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
                    
        }
        return view ('observadores.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estudiantes= Estudiantes::all();
        $items= Itembservadores::all();
        return view ('observadores.create',compact('estudiantes','items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateObservadorRequest $request)
    {    
        
        $data= new Observadores();
        $data->id_estudiante = ($request->id_estudiante);
        $data->clase_falta = ($request->clase_falta);
        $data->id_item_observador= ($request->tipo_falta);
        $data->descripcion_falta =($request->descripcion_falta);
        $data->save();
      alert()->success('Excelente', 'Anotación agregado');
      return redirect('observadores');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Observadores  $observadores
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Observadores  $observadores
     * @return \Illuminate\Http\Response
     */
    public function edit($id_estudiante)
    {
       
        $estudiante=Estudiantes::with('matricula','matricula.grado','matricula.acudiente')->findOrFail($id_estudiante);
        $categoriaitemobservadores= Categoriaitemobservador::all();
        return view('observadores.edit',compact('estudiante','categoriaitemobservadores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Observadores  $observadores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Observadores $observadores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Observadores  $observadores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Observadores $observadores)
    {
        //
    }

    public function faltas($id){
        return Itemobservadores::where('categoria_falta','=',$id)->get();
        }

    public function verobservador($id_estudiante){
            $datos= Observadores::with('itemobservador','itemobservador.categoriafalta')->where('id_estudiante','=',$id_estudiante)->get();
          $estudiante= Estudiantes::findOrFail($id_estudiante);
            return view('observadores.show',compact('datos','estudiante'));

    }
}
