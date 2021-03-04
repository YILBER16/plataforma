<?php

namespace App\Http\Controllers;

use App\Models\Matriculas;
use App\Models\Estudiantes;
use App\Models\Acudientes;
use App\Models\Grados;
use App\Models\Padres;
use App\Models\Anio_lectivo;
use Illuminate\Http\Request;
use App\Http\Requests\MatriculasCreateRequest;
use App\Http\Requests\MatriculasUpdateRequest;
use Illuminate\Support\Facades\Storage;
use DataTables;
use Carbon\Carbon;

class MatriculasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
        if ($request->ajax()) {
  
            return Datatables::of(Matriculas::with('estudiante','acudiente','padre','madre','grado')->get())
                    ->addIndexColumn()
                    ->addColumn('action', function($data){
            $btn = '<a type="button" class="viewbutton btn bg-primary" href="/matriculas/'.$data->id_matricula.'"><i class="fas fa-eye"></i></a>';
            $btn .= '&nbsp;';
            $btn .= '<a type="button" class="editbutton btn bg-primary" href="/matriculas/'.$data->id_matricula.'/edit"><i class="fas fa-edit"></i></a>';
            $btn .= '&nbsp;';
          
         
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
                    
        }
        return view ('matriculas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $estudiantes=Estudiantes::all()->where('estado','=','0');
        $grados=Grados::all();
        $acudientes=Acudientes::all();
        $padres=Padres::all()->where('parentesco','=','Padre');
        $madres=Padres::all()->where('parentesco','=','Madre');
        return view('matriculas.create',compact('estudiantes','grados','acudientes','padres','madres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MatriculasCreateRequest $request)
    {
        $anio=Anio_lectivo::all()->last();
     
        $data= new Matriculas();

        $data->id_estudiante = ($request->id_estudiante);
        $data->id_grado = ($request->id_grado);
        $data->id_padre = ($request->id_padre);
        $data->id_madre= ($request->id_madre);
        $data->id_acudiente =($request->id_acudiente);
        $data->id_anio_lectivo =$anio->id_anio_lectivo;
        $data->valor_matricula = ($request->valor_matricula);
        $data->doc_foto =$request->file('doc_foto')->store('public/matriculas/fotos');
        $data->doc_documento =$request->file('doc_documento')->store('public/matriculas/documentos');
        $data->doc_paz_salvo =$request->file('doc_paz_salvo')->store('public/matriculas/pazysalvos');
        $data->doc_boletin =$request->file('doc_boletin')->store('public/matriculas/boletines');
        if ($request->hasfile('doc_otros')) {
        $data->doc_otros =$request->file('doc_otros')->store('public/matriculas/otros');
        }
        $data->save();
        //Actualizacion de estado del estudiante matriculado en la tabla estudiantes
        $estudiante = Estudiantes::where('id_estudiante', $request->id_estudiante)->update(array('estado'=>'1'));

      alert()->success('Excelente', 'Matricula registrada');
      return redirect('matriculas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Matriculas  $matriculas
     * @return \Illuminate\Http\Response
     */
    public function show($id_matricula)
    {
        $matricula=Matriculas::findOrFail($id_matricula); 
        return view('matriculas.show',compact('matricula'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Matriculas  $matriculas
     * @return \Illuminate\Http\Response
     */
    public function edit($id_matricula)
    {
        $matricula=Matriculas::with('estudiante','acudiente','padre','grado','madre')->findOrFail($id_matricula);
        $estudiantes=Estudiantes::all()->where('estado','=','0');
        $grados=Grados::all();
        $acudientes=Acudientes::all();
        $padres=Padres::all()->where('parentesco','=','Padre');
        $madres=Padres::all()->where('parentesco','=','Madre');
        //dd($matricula);
        return view('matriculas.edit',compact('matricula','estudiantes','grados','acudientes','padres','madres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Matriculas  $matriculas
     * @return \Illuminate\Http\Response
     */
    public function update(MatriculasUpdateRequest $request, $id_matricula)
    {
        $anio=Anio_lectivo::all()->last();
        $data= Matriculas::findOrFail($id_matricula);
        $data->id_grado = ($request->id_grado);
        $data->id_padre = ($request->id_padre);
        $data->id_madre= ($request->id_madre);
        $data->id_acudiente =($request->id_acudiente);
        $data->id_anio_lectivo =$anio->id_anio_lectivo;
        $data->valor_matricula = ($request->valor_matricula);
        //para la foto
        if ($request->hasfile('doc_foto')) {
            //existe un archivo cargado?
            if (Storage::exists($data->doc_foto))
        {
             // aquí la borro
             Storage::delete($data->doc_foto);
        }
        //guardo el archivo nuevo
            $data->doc_foto =$request->file('doc_foto')->store('public/matriculas/fotos');
        }
        //para el documento de identidad
        if ($request->hasfile('doc_documento')) {
            if (Storage::exists($data->doc_documento))
        {
             Storage::delete($data->doc_documento);
        }
            $data->doc_documento =$request->file('doc_documento')->store('public/matriculas/documentos');
        }
        //para el paz y salvo
        if ($request->hasfile('doc_paz_salvo')) {
            if (Storage::exists($data->doc_paz_salvo))
        {
             Storage::delete($data->doc_paz_salvo);
        }
            $data->doc_paz_salvo =$request->file('doc_paz_salvo')->store('public/matriculas/pazysalvos');
        }
        //para el boletin
        if ($request->hasfile('doc_boletin')) {
            if (Storage::exists($data->doc_boletin))
        {
             Storage::delete($data->doc_boletin);
        }
            $data->doc_boletin =$request->file('doc_boletin')->store('public/matriculas/boletines');
        }
        //para otros documentos
        if ($request->hasfile('doc_otros')) {
            if (Storage::exists($data->doc_otros))
        {
             Storage::delete($data->doc_otros);
        }
            $data->doc_otros =$request->file('doc_otros')->store('public/matriculas/otros');
        }
     
        $data->save();
        alert()->success('Excelente', 'Actualizado correctamente');
   // Session::flash('flash_message','Guardado con exito');
        return redirect('matriculas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Matriculas  $matriculas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matriculas $matriculas)
    {
        //
    }
}
