<?php

namespace App\Http\Controllers;

use App\Models\Docentes;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CreateDocentesRequest;
use App\Http\Requests\UpdateDocentesRequest;

class DocentesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
  
            return Datatables::of(Docentes::all())
                    ->addIndexColumn()
                    ->addColumn('action', function($data){
            $btn = '<a type="button" class="viewbutton btn bg-primary" href="/docentes/'.$data->id_docente.'"><i class="fas fa-eye"></i></a>';
            $btn .= '&nbsp;';
            $btn .= '<a type="button" class="editbutton btn bg-primary" href="/docentes/'.$data->id_docente.'/edit"><i class="fas fa-edit"></i></a>';
            $btn .= '&nbsp;';
            $btn .= '<button  class="deletebutton btn btn-danger"  data-toggle="modal" data-target="#deletemodal" data-info="'.$data->id_docente.';'.$data->nom_docente.';'.$data->dir_docente.'"><i class="fas fa-trash-alt"></i></button>';
          
         
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
                    
        }
   

       return view ('docentes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docentes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateDocentesRequest $request)
    {
        $data= new Docentes();
        $data->id_docente = ($request->id_docente);
        $data->tipo_documento = ($request->tipo_documento);
        $data->nom_docente = ($request->nom_docente);
        $data->dir_docente= ($request->dir_docente);
        $data->tel_docente =($request->tel_docente);
        $data->cor_docente = ($request->cor_docente);
        $data->nivel_academico = ($request->nivel_academico);
        $data->doc_documento =$request->file('doc_documento')->store('public/docentes');
        $data->hoja_de_vida =$request->file('hoja_de_vida')->store('public/docentes');
        $data->save();
      alert()->success('Excelente', 'Registro agregado');


     
       // Session::flash('flash_message','Guardado con exito');
        return redirect('docentes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Docentes  $docentes
     * @return \Illuminate\Http\Response
     */
    public function show($id_docente)
    {
    $docente=docentes::findOrFail($id_docente); 
    return view('docentes.show',compact('docente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Docentes  $docentes
     * @return \Illuminate\Http\Response
     */
    public function edit($id_docente)
    {
        $docente=docentes::findOrFail($id_docente);
        return view('docentes.edit',compact('docente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Docentes  $docentes
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDocentesRequest $request, $id_docente)
    {
        $data= docentes::findOrFail($id_docente);
        $data->tipo_documento = ($request->tipo_documento);
        $data->nom_docente = ($request->nom_docente);
        $data->dir_docente= ($request->dir_docente);
        $data->tel_docente =($request->tel_docente);
        $data->cor_docente = ($request->cor_docente);
        $data->nivel_academico = ($request->nivel_academico);
        //para el documento de identidad
        if ($request->hasfile('doc_documento')) {
            //existe un archivo cargado?
            if (Storage::exists($data->doc_documento))
        {
             // aquí la borro
             Storage::delete($data->doc_documento);
        }
        //guardo el archivo nuevo
            $data->doc_documento =$request->file('doc_documento')->store('public/docentes');
        }
        //para la hoja de vida
        if ($request->hasfile('hoja_de_vida')) {
            //existe un archivo cargado?
            if (Storage::exists($data->hoja_de_vida))
        {
             // aquí la borro
             Storage::delete($data->hoja_de_vida);
        }
        //guardo el archivo nuevo
            $data->hoja_de_vida =$request->file('hoja_de_vida')->store('public/docentes');
        }
        
             
        $data->save();
        alert()->success('Excelente', 'actualizado correctamente');
   // Session::flash('flash_message','Guardado con exito');
        return redirect('docentes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Docentes  $docentes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Docentes $docentes)
    {
        //
    }
    public function deleteDatedocente(Request $request)
    {
        $data=docentes::find($request->id_docente)->delete();
        return response()->json();
    }
    public function indexdeshabilitados(Request $request)
    {
        //ver registros deshabilitados
       
       if ($request->ajax()) {
  
        return Datatables::of(Docentes::onlyTrashed()->get())
                ->addIndexColumn()
                ->addColumn('action', function($data){
                    return route('restoredocente', $data->id_docente);
                })
                ->rawColumns(['action'])
                ->make(true);
                
    }
        
       return view ('docentes.indexdeshabilitados');
    }
    public function restoredocente(Request $request, $id_docente)
   {
       //Indicamos que la busqueda se haga en los registros eliminados con withTrashed

       $data=docentes::withTrashed()->where('id_docente', '=', $request->id_docente)->first();
   
       //Restauramos el registro
       $data->restore();
       alert()->success('Excelente', 'Registro habilitado');
       return redirect()->back();
   }
}
