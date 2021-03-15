<?php

namespace App\Http\Controllers;

use App\Models\Itemobservadores;
use App\Models\Categoriaitemobservador;
use Illuminate\Http\Request;
use DataTables;

class ItemobservadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categorias= Categoriaitemobservador::all();
      

        if ($request->ajax()) {
  
            return Datatables::of(Itemobservadores::with('categoriafalta')->get())
                    ->addIndexColumn()
                    ->addColumn('action', function($data){
            $btn = '<button type="button" class="btnitemedit btn btn-primary" data-toggle="modal" data-target="#observadormodaledit"><i class="fas fa-edit"></i></button>';
            $btn .= '&nbsp';
            $btn .= '<button type="button" class="btnitemdelete btn btn-danger" ><i class="fas fa-trash-alt"></i></button>';
 
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
                    
        }

        return view ('itemobservadores.index',compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('itemobservadores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nuevo=new Itemobservadores();
        $nuevo->categoria_falta = $request->categoria_falta;
        $nuevo->tipo_falta = $request->tipo_falta;
        $nuevo->save();
        return response()->json('ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Itemobservadores  $itemobservadores
     * @return \Illuminate\Http\Response
     */
    public function show(Itemobservadores $itemobservadores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Itemobservadores  $itemobservadores
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
          
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Itemobservadores  $itemobservadores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datos= Itemobservadores::findOrFail($id);
        if ($datos->update($request->all())) {
            
            return response()->json('ok');
        }
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Itemobservadores  $itemobservadores
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datos= Itemobservadores::findOrFail($id);


        if ($datos->delete()) {
        
            return response()->json('ok');
        }
    }
}
