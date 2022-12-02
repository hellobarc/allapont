<?php

namespace App\Http\Controllers;

use App\Cuota;
use Illuminate\Http\Request;

class CuotaController extends Controller
{
    public function cuotasPay(Request $request, $codigo_cuota)
    {   
        
        $cuotas = \DB::table('cuotas')->get(); 
        $cuotas = json_decode($cuotas, true);

        $cuotas_sel = array();
        foreach($cuotas as $key => $value) {
            if($codigo_cuota == $value['codigo_cuota']) {
                $cuotas_sel[] = $value;
            }
        }

        //dd($cuotas_sel);

        if(count($cuotas_sel) > 0){
            return view('user/cuotas')->with(compact('cuotas_sel'));
        }else{
            return view('welcome') ;
        }
    }
    ///////////////
    public function update(Request $request, $codigo_cuota)
    {
        if ($request->hasFile('voucher')) {
            $cuota_voucher = $request->file('voucher');
            $cuota_voucher_name = time().'.'.$cuota_voucher->getClientOriginalExtension();
            $cuota_voucher->move(public_path().'/users/contratos/cuotas/',$cuota_voucher_name);
            $cuota_voucher_file = 'users/contratos/cuotas/'.$cuota_voucher_name;
        }

        $cuota_id = Cuota::where('codigo_cuota', $codigo_cuota)->first();
        $cuota_id = $cuota_id->id;
        $cuota = Cuota::find($cuota_id);
        $cuota->estado = $request->estado;
        $cuota->voucher = $cuota_voucher_file;
        $cuota->dia_can = $request->dia;
        $cuota->mes_can = $request->mes;
        $cuota->agno_can = $request->agno;
        $cuota->save();
        return redirect()->back();
        //dd($cuota);
    }

    public function updateAdmin(Request $request, $codigo_cuota)
    {
        $cuota_id = Cuota::where('codigo_cuota', $codigo_cuota)->first();
        $cuota_id = $cuota_id->id;
        $cuota = Cuota::find($cuota_id);
        $cuota->estado = $request->estado;
        $cuota->monto_verif = $request->monto_verif;
        $cuota->save();
        return redirect()->back();
        //dd($cuota);
    }

    public function editCuotaView($codigo_cuota)
    {
        $cuotas = \DB::table('tesis')
        ->join('cuotas', 'cuotas.tesis_id', '=', 'tesis.id')
        ->where('codigo_cuota', $codigo_cuota)->get(); 
        $cuotas = json_decode($cuotas, true);
        //dd($cuotas);
        return view('admin/tesis/cuota_edit', [
            'cuotas' => $cuotas[0],
        ]);
    }

    public function editCuotaAdminUpdate(Request $request)
    {
        $monto= $request->monto;
        $codigo_cuota = $request->codigo_cuota;
        $cuota_id = Cuota::where('codigo_cuota', $codigo_cuota)->first();
        $cuota_id = $cuota_id->id;
        $cuota = Cuota::find($cuota_id);
        $cuota->monto = $monto;
        $cuota->save();
        return redirect()->back();
    }
}
