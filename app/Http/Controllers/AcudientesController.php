<?php

namespace App\Http\Controllers;

use App\Models\Acudientes;
use DataTables;
use UxWeb\SweetAlert\SweetAlert;
use Illuminate\Http\Request;

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
                          
            $btn = '<button  class="editbutton btn btn-primary" data-toggle="modal" data-target="#editmodal"  data-info="'.$data->id_acudiente.';'.$data->nom_acudiente.';'.$data->dir_acudiente.';'.$data->tel_acudiente.';'.$data->cor_acudiente.'"><i class="fas fa-edit"></i></button>';
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
    public function store(Request $request)
    {
        $datosAcudiente=request()->all();

        $datosAcudiente=request()->except('_token');
       

      Acudientes::insert($datosAcudiente);

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
    public function show(Acudientes $acudientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Acudientes  $acudientes
     * @return \Illuminate\Http\Response
     */
    public function edit(Acudientes $acudientes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Acudientes  $acudientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Acudientes $acudiente)
    {

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
    public function updateDate(Request $request)
    {
        $data = Acudientes::find($request->id_acudiente);
        $data->nom_acudiente = ($request->nom_acudiente);
        $data->dir_acudiente= ($request->dir_acudiente);
        $data->tel_acudiente =($request->tel_acudiente);
        $data->cor_acudiente = ($request->cor_acudiente);
        $data->save();
        return response()->json($data);
    }
    public function deleteDate(Request $request)
    {
        $data=Acudientes::find($request->id_acudiente)->delete();
        return response()->json();
    }
    
}
