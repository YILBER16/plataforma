<?php

namespace App\Http\Controllers;

use App\Models\Estudiantes;
use DataTables;
use Illuminate\Http\Request;
use App\Http\Requests\CreateEstudiantesRequest;
use App\Http\Requests\UpdateEstudiantesRequest;

class EstudiantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
  
            return Datatables::of(Estudiantes::all())
                    ->addIndexColumn()
                    ->addColumn('action', function($data){
            $btn = '<a type="button" class="viewbutton btn bg-primary" href="/estudiantes/'.$data->id_estudiante.'"><i class="fas fa-eye"></i></a>';
            $btn .= '&nbsp;';
            $btn .= '<a type="button" class="editbutton btn bg-primary" href="/estudiantes/'.$data->id_estudiante.'/edit"><i class="fas fa-edit"></i></a>';
            $btn .= '&nbsp;';
            $btn .= '<button  class="deletebutton btn btn-danger"  data-toggle="modal" data-target="#deletemodal" data-info="'.$data->id_estudiante.';'.$data->nom_estudiante.';'.$data->dir_estudiante.'"><i class="fas fa-trash-alt"></i></button>';
          
         
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
                    
        }
        return view ('estudiantes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estudiantes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEstudiantesRequest $request)
    {
        $data= new Estudiantes();
        $data->id_estudiante = ($request->id_estudiante);
        $data->nom_estudiante = ($request->nom_estudiante);
        $data->dir_estudiante= ($request->dir_estudiante);
        $data->tel_estudiante =($request->tel_estudiante);
        $data->cor_estudiante = ($request->cor_estudiante);
        $data->fecha_nacimiento = ($request->fecha_nacimiento);
        $data->fecha_expedicion = ($request->fecha_expedicion);
        $data->pais = ($request->pais);
        $data->ciudad = ($request->ciudad);
        $data->sexo = ($request->sexo);
        $data->save();
      alert()->success('Excelente', 'Registro agregado');


     
       // Session::flash('flash_message','Guardado con exito');
        return redirect('estudiantes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\estudiantes  $estudiantes
     * @return \Illuminate\Http\Response
     */
    public function show($id_estudiante)
    {
$estudiante=Estudiantes::findOrFail($id_estudiante); 

return view('estudiantes.show',compact('estudiante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\estudiantes  $estudiantes
     * @return \Illuminate\Http\Response
     */
    public function edit($id_estudiante)
    {
        $estudiante=Estudiantes::findOrFail($id_estudiante);
        return view('estudiantes.edit',compact('estudiante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\estudiantes  $estudiantes
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEstudiantesRequest $request, $id_estudiante)
    {
        $data= Estudiantes::findOrFail($id_estudiante);
        $data->nom_estudiante = ($request->nom_estudiante);
        $data->parentesco = ($request->parentesco);
        $data->ocu_estudiante = ($request->ocu_estudiante);
        $data->dir_estudiante= ($request->dir_estudiante);
        $data->tel_estudiante =($request->tel_estudiante);
        $data->save();
        alert()->success('Excelente', 'actualizado correctamente');
   // Session::flash('flash_message','Guardado con exito');
        return redirect('estudiantes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\estudiantes  $estudiantes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estudiantes $estudiantes)
    {
        //
    }
    public function deleteDate(Request $request)
    {
        $data=Estudiantes::find($request->id_estudiante)->delete();
        return response()->json();
    }
    public function indexdeshabilitados(Request $request)
    {
        //ver registros deshabilitados
       $deshabilitados= Estudiantes::onlyTrashed()->get();
        
       return view ('estudiantes.indexdeshabilitados',compact('deshabilitados'));
    }
    public function restoreestudiantes(Request $request, $id_estudiante)
   {
       //Indicamos que la busqueda se haga en los registros eliminados con withTrashed

       $data=estudiantes::withTrashed()->where('id_estudiante', '=', $request->id_estudiante)->first();
   
       //Restauramos el registro
       $data->restore();
       alert()->success('Excelente', 'Registro habilitado');
       return redirect()->back();
   }
}
