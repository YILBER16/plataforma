<?php

namespace App\Http\Controllers;

use App\Models\Estudiantes;
use App\Country;
use App\State;
use App\City;
use DataTables;
use Illuminate\Http\Request;
use App\Http\Requests\CreateEstudiantesRequest;
use App\Http\Requests\UpdateEstudiantesRequest;
use Illuminate\Support\Facades\Storage;

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
        $pais= Country::all();
       
        return view('estudiantes.create',compact('pais'));
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
        $data->tipo_documento = ($request->tipo_documento);
        $data->nom_estudiante = ($request->nom_estudiante);
        $data->dir_estudiante= ($request->dir_estudiante);
        $data->tel_estudiante =($request->tel_estudiante);
        $data->cor_estudiante = ($request->cor_estudiante);
        $data->sexo = ($request->sexo);
        $data->fecha_nacimiento = ($request->fecha_nacimiento);
        $data->fecha_expedicion = ($request->fecha_expedicion);
        $data->id_pais = ($request->id_pais);
        $data->id_departamento = ($request->id_departamento);
        $data->id_ciudad = ($request->id_ciudad);
        $data->estado = '0';
        $data->doc_simat =$request->file('doc_simat')->store('public/estudiantes/simat');
        $data->doc_vacunacion =$request->file('doc_vacunacion')->store('public/estudiantes/vacunacion');
        $data->doc_salud =$request->file('doc_salud')->store('public/estudiantes/salud');
        if ($request->hasfile('doc_otros')) {
            $data->doc_otros =$request->file('doc_otros')->store('public/estudiantes/otros');
            }

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
        $pais= Country::all();

        $estudiante=Estudiantes::with('pais','departamento','ciudad')->findOrFail($id_estudiante);

return view('estudiantes.show',compact('estudiante','pais'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\estudiantes  $estudiantes
     * @return \Illuminate\Http\Response
     */
    public function edit($id_estudiante)
    {
        $pais= Country::all();

        $estudiante=Estudiantes::with('pais','departamento','ciudad')->findOrFail($id_estudiante);
      
        return view('estudiantes.edit',compact('estudiante','pais'));
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
        $data->tipo_documento = ($request->tipo_documento);
        $data->dir_estudiante= ($request->dir_estudiante);
        $data->tel_estudiante =($request->tel_estudiante);
        $data->cor_estudiante = ($request->cor_estudiante);
        $data->sexo = ($request->sexo);
        $data->fecha_nacimiento = ($request->fecha_nacimiento);
        $data->fecha_expedicion = ($request->fecha_expedicion);
        $data->id_pais = ($request->id_pais);
        $data->id_departamento = ($request->id_departamento);
        $data->id_ciudad = ($request->id_ciudad);
        
        //para el simat
        if ($request->hasfile('doc_simat')) {
            //existe un archivo cargado?
            if (Storage::exists($data->doc_simat))
        {
             // aquí la borro
             Storage::delete($data->doc_simat);
        }
        //guardo el archivo nuevo
            $data->doc_simat =$request->file('doc_simat')->store('public/estudiantes/simat');
        }
        //para el carnet de vacunacion
        if ($request->hasfile('doc_vacunacion')) {
            //existe un archivo cargado?
            if (Storage::exists($data->doc_vacunacion))
        {
             // aquí la borro
             Storage::delete($data->doc_vacunacion);
        }
        //guardo el archivo nuevo
            $data->doc_vacunacion =$request->file('doc_vacunacion')->store('public/estudiantes/vacunacion');
        }
        //para otros documentos
        if ($request->hasfile('doc_otros')) {
            if (Storage::exists($data->doc_otros))
        {
             Storage::delete($data->doc_otros);
        }
            $data->doc_otros =$request->file('doc_otros')->store('public/estudiantes/otros');
        }
        //para el carnet de salud
        if ($request->hasfile('doc_salud')) {
            if (Storage::exists($data->doc_salud))
        {
             Storage::delete($data->doc_salud);
        }
            $data->doc_salud =$request->file('doc_salud')->store('public/estudiantes/salud');
        }
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
    public function deleteDateestudiante(Request $request)
    {
        $data=Estudiantes::find($request->id_estudiante)->delete();
        return response()->json();
    }
    public function indexdeshabilitados(Request $request)
    {
        //ver registros deshabilitados
      
       if ($request->ajax()) {
  
        return Datatables::of(Estudiantes::onlyTrashed()->get())
                ->addIndexColumn()
                ->addColumn('action', function($data){
                    return route('restoreestudiante', $data->id_estudiante);
                })
                ->rawColumns(['action'])
                ->make(true);
                
    }
       return view ('estudiantes.indexdeshabilitados');
    }
    public function restoreestudiante(Request $request, $id_estudiante)
   {
       //Indicamos que la busqueda se haga en los registros eliminados con withTrashed

       $data=estudiantes::withTrashed()->where('id_estudiante', '=', $request->id_estudiante)->first();
   
       //Restauramos el registro
       $data->restore();
       alert()->success('Excelente', 'Registro habilitado');
       return redirect()->back();
   }
   public function bydepartamentos($id){
	return State::where('country_id','=',$id)->get();
    }
    public function byciudades($id){
        return City::where('state_id','=',$id)->get();
        }
}
