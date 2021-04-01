<?php

namespace App\Http\Controllers;

use App\Models\Padres;
use DataTables;
use Illuminate\Http\Request;
use App\Http\Requests\CreatePadresRequest;
use App\Http\Requests\UpdatePadresRequest;
use Illuminate\Support\Facades\Storage;

class PadresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
  
            return Datatables::of(Padres::all())
                    ->addIndexColumn()
                    ->addColumn('action', function($data){
            $btn = '<a type="button" class="viewbutton btn bg-primary" href="/padres/'.$data->id_padre.'"><i class="fas fa-eye"></i></a>';
            $btn .= '&nbsp;';
            $btn .= '<a type="button" class="editbutton btn bg-primary" href="/padres/'.$data->id_padre.'/edit"><i class="fas fa-edit"></i></a>';
            $btn .= '&nbsp;';
            $btn .= '<button  class="deletebutton btn btn-danger"  data-toggle="modal" data-target="#deletemodal" data-info="'.$data->id_padre.';'.$data->nom_padre.';'.$data->dir_padre.'"><i class="fas fa-trash-alt"></i></button>';
          
         
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
                    
        }
        return view ('padres.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('padres.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePadresRequest $request)
    {
        $data= new Padres();
        $data->id_padre = ($request->id_padre);
        $data->tipo_documento = ($request->tipo_documento);
        $data->nom_padre = ($request->nom_padre);
        $data->parentesco = ($request->parentesco);
        $data->ocu_padre = ($request->ocu_padre);
        $data->dir_padre= ($request->dir_padre);
        $data->tel_padre =($request->tel_padre);
        $data->doc_documento =$request->file('doc_documento')->store('public/padres');
        $data->save();
      alert()->success('Excelente', 'Registro agregado');


     
       // Session::flash('flash_message','Guardado con exito');
        return redirect('padres');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Padres  $padres
     * @return \Illuminate\Http\Response
     */
    public function show($id_padre)
    {
$padre=Padres::findOrFail($id_padre); 

return view('padres.show',compact('padre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Padres  $padres
     * @return \Illuminate\Http\Response
     */
    public function edit($id_padre)
    {
        $padre=Padres::findOrFail($id_padre);
        return view('padres.edit',compact('padre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Padres  $padres
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePadresRequest $request, $id_padre)
    {
        $data= Padres::findOrFail($id_padre);
        $data->tipo_documento = ($request->tipo_documento);
        $data->nom_padre = ($request->nom_padre);
        $data->parentesco = ($request->parentesco);
        $data->ocu_padre = ($request->ocu_padre);
        $data->dir_padre= ($request->dir_padre);
        $data->tel_padre =($request->tel_padre);
        if ($request->hasfile('doc_documento')) {
            //existe un archivo cargado?
            if (Storage::exists($data->doc_documento))
        {
             // aquí la borro
             Storage::delete($data->doc_documento);
        }
        //guardo el archivo nuevo
            $data->doc_documento =$request->file('doc_documento')->store('public/padres');
        }
        $data->save();
        alert()->success('Excelente', 'actualizado correctamente');
   // Session::flash('flash_message','Guardado con exito');
        return redirect('padres');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Padres  $padres
     * @return \Illuminate\Http\Response
     */
    public function destroy(Padres $padres)
    {
        //
    }
    public function deleteDatepadre(Request $request)
    {
        $data=Padres::find($request->id_padre)->delete();
        return response()->json();
    }
    public function indexdeshabilitados(Request $request)
    {
        //ver registros deshabilitados
      
       if ($request->ajax()) {
  
        return Datatables::of(Padres::onlyTrashed()->get())
                ->addIndexColumn()
                ->addColumn('action', function($data){
                    return route('restorepadre', $data->id_padre);
                })
                ->rawColumns(['action'])
                ->make(true);
                
    }
        
       return view ('padres.indexdeshabilitados');
    }
    public function restorepadre(Request $request, $id_padre)
   {
       //Indicamos que la busqueda se haga en los registros eliminados con withTrashed

       $data=Padres::withTrashed()->where('id_padre', '=', $request->id_padre)->first();
   
       //Restauramos el registro
       $data->restore();
       alert()->success('Excelente', 'Registro habilitado');
       return redirect()->back();
   }
}
