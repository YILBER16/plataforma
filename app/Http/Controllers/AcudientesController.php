<?php

namespace App\Http\Controllers;

use App\Models\Acudientes;
use DataTables;
use UxWeb\SweetAlert\SweetAlert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CreateAcudientesRequest;
use App\Http\Requests\UpdateAcudientesRequest;

class AcudientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
  
            return Datatables::of(Acudientes::all())
                    ->addIndexColumn()
                    ->addColumn('action', function($data){
            $btn = '<a type="button" class="viewbutton btn bg-primary" href="/acudientes/'.$data->id_acudiente.'"><i class="fas fa-eye"></i></a>';
            $btn .= '&nbsp;';
            $btn .= '<a type="button" class="editbutton btn bg-primary" href="/acudientes/'.$data->id_acudiente.'/edit"><i class="fas fa-edit"></i></a>';
            $btn .= '&nbsp;';
            $btn .= '<button  class="deletebutton btn btn-danger"  data-toggle="modal" data-target="#deletemodal" data-info="'.$data->id_acudiente.';'.$data->nom_acudiente.';'.$data->dir_acudiente.'"><i class="fas fa-trash-alt"></i></button>';
          
         
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
                    
        }
   

       return view ('acudientes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('acudientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAcudientesRequest $request)
    {
        $data= new Acudientes();
        $data->id_acudiente = ($request->id_acudiente);
        $data->nom_acudiente = ($request->nom_acudiente);
        $data->dir_acudiente= ($request->dir_acudiente);
        $data->tel_acudiente =($request->tel_acudiente);
        $data->cor_acudiente = ($request->cor_acudiente);
        $data->doc_documento =$request->file('doc_documento')->store('public/acudientes');
        $data->save();
      alert()->success('Excelente', 'Registro agregado');


     
       // Session::flash('flash_message','Guardado con exito');
        return redirect('acudientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Acudientes  $acudientes
     * @return \Illuminate\Http\Response
     */
    public function show($id_acudiente)
    {
        $acudiente=Acudientes::findOrFail($id_acudiente); 
        return view('acudientes.show',compact('acudiente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Acudientes  $acudientes
     * @return \Illuminate\Http\Response
     */
    public function edit($id_acudiente)
    {
        $acudiente=Acudientes::findOrFail($id_acudiente);
        return view('acudientes.edit',compact('acudiente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Acudientes  $acudientes
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAcudientesRequest $request, $id_acudiente)
    {
        $data= Acudientes::findOrFail($id_acudiente);
        $data->nom_acudiente = ($request->nom_acudiente);
        $data->dir_acudiente= ($request->dir_acudiente);
        $data->tel_acudiente =($request->tel_acudiente);
        $data->cor_acudiente = ($request->cor_acudiente);
        if ($request->hasfile('doc_documento')) {
            //existe un archivo cargado?
            if (Storage::exists($data->doc_documento))
        {
             // aquí la borro
             Storage::delete($data->doc_documento);
        }
        //guardo el archivo nuevo
            $data->doc_documento =$request->file('doc_documento')->store('public/acudientes');
        }
             
        $data->save();
        alert()->success('Excelente', 'actualizado correctamente');
   // Session::flash('flash_message','Guardado con exito');
        return redirect('acudientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Acudientes  $acudientes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id_acudiente)
    {
       
    }

    public function deleteDate(Request $request)
    {
        $data=Acudientes::find($request->id_acudiente)->delete();
        return response()->json();
    }
    public function indexdeshabilitados(Request $request)
    {
        //ver registros deshabilitados
       $deshabilitados= Acudientes::onlyTrashed()->get();
        
       return view ('acudientes.indexdeshabilitados',compact('deshabilitados'));
    }
    public function restore(Request $request, $id_acudiente)
   {
       //Indicamos que la busqueda se haga en los registros eliminados con withTrashed

       $data=Acudientes::withTrashed()->where('id_acudiente', '=', $request->id_acudiente)->first();
   
       //Restauramos el registro
       $data->restore();
       alert()->success('Excelente', 'Registro habilitado');
       return redirect()->back();
   }
    
}
