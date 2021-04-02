<?php

namespace App\Http\Controllers;

use App\Models\Pagos;
use App\Models\Estudiantes;
use App\Models\Matriculas;
use App\Models\Meses;
use App\Models\Abonos;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DataTables;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\CreatePagosRequest;
use Barryvdh\DomPDF\Facade as PDF;
use Barryvdh\DomPDF\Options;
class PagosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
    
        if ($request->ajax()) {
           
            return Datatables::of(Pagos::with(['matricula','matricula.estudiante'=> function ($query) {
                $query->withTrashed();
            },'mes'])->where('saldo','!=','0')->get())
                    ->addIndexColumn()
                    ->addColumn('action', function($data){
            $btn = '<a type="button" class="viewbutton btn bg-primary" href="/pagos/'.$data->id_pago.'"><i class="fas fa-eye"></i></a>';
            $btn .= '&nbsp;';
            $btn .= '<a type="button" class="editbutton btn bg-success" href="/pagos/'.$data->id_pago.'/edit"><i class="fas fa-hand-holding-usd"></i></i></a>';
            $btn .= '&nbsp;';
          
         
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
                    
        }
        return view('pagos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $meses= Meses::all()->where('estado','=','0');
        return view('pagos.create',compact('meses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePagosRequest $request)
    {
        $datos = Matriculas::select('id_matricula','id_estudiante','id_grado','id_acudiente','descuento_mensualidad')->with('grado','grado.mensualidad')->get()->toArray();
     
        foreach($datos as $dato) {
          
            $data = new Pagos();
           
            $data->id_matricula = $dato['id_matricula'];
            $data->id_mes= ($request->id_mes);    
            $dat1= $dato['grado'];
            $dat2=$dat1['mensualidad'];
            $dat3=$dat2['valor'];
            $descuentoparcial=$dato['descuento_mensualidad']/100;
            $descuentototal=$dat3*$descuentoparcial;
            $totalapagar=$dat3-$descuentototal;
            $data->valor_pago =$totalapagar;
            $data->saldo =$totalapagar;
            $data->estado= '0';
           
            $data->save();
           
         Meses::where('id_mes', $request->id_mes)->update(array('estado'=>'1'));

        }
    

        
        alert()->success('Excelente', 'Mes facturado');

        return view ('pagos.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pagos  $pagos
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id_pago)
    {
        
     $abonos= Abonos::with(['pago','pago.mes','pago.matricula','pago.matricula.estudiante'=> function ($query) {
        $query->withTrashed();
    }])->where('id_pago',$id_pago)->get();
   $datos= Pagos::with(['mes','matricula','matricula.estudiante'=> function ($query) {
    $query->withTrashed();
}])->findOrFail($id_pago);

     return view ('pagos.show',compact('abonos','datos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pagos  $pagos
     * @return \Illuminate\Http\Response
     */
    public function edit($id_pago)
    {
        $pago=Pagos::with(['matricula', 'matricula.estudiante'=> function ($query) {
            $query->withTrashed();
        },'matricula.acudiente','mes'])->findOrFail($id_pago);
        return view('pagos.edit',compact('pago'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pagos  $pagos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_pago)
    {
        $data = new Abonos();
        $data->id_pago= ($request->id_pago);
        $abono=($request->abono);
        $abonoconsaldo=($request->saldo_favor)+($request->abono);
        if ($request->has('valor')) {
        $data->abono=($request->saldo_favor);
        $data->saldo= ($request->saldo)-($abonoconsaldo);
        }else{
            $data->abono=($request->abono);
            $data->saldo= ($request->saldo)-($abono);
        }
       

        $saldo=($request->saldo)-($abono);
        $saldoconfavor=($request->saldo)-($abonoconsaldo);

        if ($request->has('valor')) {
            if($abonoconsaldo<=($request->saldo)){
                $data->save();
                Pagos::where('id_pago', $request->id_pago)->update(array('saldo'=>$saldoconfavor));
                Matriculas::where('id_matricula', $request->id_matricula)->update(array('saldo_favor'=>'0'));
        
                $pagado=Pagos::select('saldo')->findOrFail($id_pago);
               $pagado= $pagado->saldo;
        
                if($pagado==0){
                    Pagos::where('id_pago', $request->id_pago)->update(array('estado'=>'1'));
                }
        
        
                alert()->success('Excelente', 'Abono registrado');
                return redirect('pagos');
        
                
        
                 }else{
                $saldorestante= $abonoconsaldo-($request->saldo);
                $data->abono=($request->saldo);
                $data->saldo= '0';
                $data->save();
                Pagos::where('id_pago', $request->id_pago)->update(array('saldo'=>'0'));
                Matriculas::where('id_matricula', $request->id_matricula)->update(array('saldo_favor'=>$saldorestante));
                $pagado=Pagos::select('saldo')->findOrFail($id_pago);
               $pagado= $pagado->saldo;
        
                if($pagado==0){
                    Pagos::where('id_pago', $request->id_pago)->update(array('estado'=>'1'));
                }
                alert()->success('Excelente', 'Abono registrado');
                return redirect('pagos');
                 }
        } 
        
        else {
            if($abono<=($request->saldo)){
                $data->save();
                Pagos::where('id_pago', $request->id_pago)->update(array('saldo'=>$saldo));
        
                $pagado=Pagos::select('saldo')->findOrFail($id_pago);
               $pagado= $pagado->saldo;
        
                if($pagado==0){
                    Pagos::where('id_pago', $request->id_pago)->update(array('estado'=>'1'));
                }
        
        
                alert()->success('Excelente', 'Abono registrado');
                return redirect('pagos');
        
                
        
                 }else{
                    alert()->error('Error', 'El abono no puede ser mayor al saldo');
                    return back();
                 }
        }       

       
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pagos  $pagos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pagos $pagos)
    {
        //
    }
    public function facturaspagadas(Request $request)
    {
       
        $enlace='pagopdf';
    
        if ($request->ajax()) {

           
            return Datatables::of(Pagos::with(['matricula','matricula.estudiante'=> function ($query) {
                $query->withTrashed();
            },'mes'])->where('saldo','==','0')->get())
                    ->addIndexColumn()
                    ->addColumn('action', function($data){
            $btn = '<a type="button" class="viewbutton btn bg-primary" href="/pagos/'.$data->id_pago.'"><i class="fas fa-eye"></i></a>';
            $btn .= '&nbsp;';
            $btn .= '<a type="button" class="viewbutton btn bg-danger" href="/pdfpago/'.$data->id_pago.'""><i class="far fa-file-pdf"></i></a>';

          
         
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
                    
        }
        return view('pagos.pagadasindex');
    }

    public function exportpdfpago(Request $request, $id_pago)
    {
    $pago= Pagos::with('matricula', 'matricula.estudiante','matricula.acudiente','mes')->findOrFail($id_pago);
    $pdf=PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true,"isPhpEnabled", true])->setPaper(array(0,0,600,600))->loadView('pagos.pdfpago',compact('pago'));
    $pdf->getDomPDF()->set_option("enable_php", true);
    return $pdf->stream('pago.pdf');
    }
     
}
