<?php

namespace App\Http\Controllers;

use App\Tesi;
use App\TesisUser;
use App\Cuota;
use Illuminate\Http\Request;
#PARA PAGINAR#####
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
####################################

class TesiController extends Controller
{
    public function index()
    {
        return view('admin/tesis/tesis_agregar');
    }

    public function cuotasShow()
    {   
        $tesis = \DB::table('tesis')->get();
        ############################################################################
        #Importa los usuarios con tesis y convierte tesis_users en array ()
        $users=\DB::table('tesis_users')
        ->join('users', 'users.id', '=', 'tesis_users.user_id')
        ->select('user_id','tesis_id','name','email','celular')
        ->get();
        $users = json_decode($users, true);
        ############################################################################
        ############################################################################
        /*Estoy jalando todas las tesis que tengan cuotas por eso puedo jalar tambien su nombre,
        Necesito que cada tesis que tenga una cuota 
        */
        $cuotas = \DB::table('cuotas')
        ->join('tesis', 'tesis.id', '=', 'cuotas.tesis_id')
        ->get();
        #Convierte $cuotas en array
        $cuotas = json_decode($cuotas, true);
        #Primero llenar users con vacio
        $keys_tesis_id = array_column($users, 'tesis_id');

        
        ############################################################################
        #Esto junta los usuarios, en caso esten repetidos y los mete dentro de un mismo array
        #Además, las claves del array son los tesis_id, lo cual servirá adelante
        $user_tesis = array();
        foreach ($users as $key => $item) {
            $user_tesis[$item['tesis_id']][$key] = $item;
        }
        ksort($user_tesis, SORT_NUMERIC);
        #Esto los agrega al array $cuotas 
        #Primero llenar clientes con UN ARRAY VACIÓ
        foreach($cuotas as $k=>$v)
        {
            $cuotas[$k]['clientes']=array('vacio'=>'Vacío');
        }
        ###ESTE PASO ESTA BIEN PERO ANTES DEBO MEZCLAR EL ARRAY DE USERS
        foreach($cuotas as $indice=>$valor){
            foreach($user_tesis as $key=>$value){
                if($valor['tesis_id']==$key){
                    $cuotas[$indice]['clientes']=$value;
                }
            }
        }
        ############################################################################
        #A las cuotas hay que agregarles el estado 'Vencida' -- 'Al día'--'Voucher recibido'--'Cuota pagada'
        #1 Vencida
        #2 Al día
        #4 Voucher recibido
        #4 Cuota pagada
        $estado_txt = array();
        foreach($cuotas as $cuota){
            if ($cuota['estado']==0) {
                $hoy = getdate();
                if ($hoy['year']>$cuota['agno_ven']) {
                    $cuota['estado_txt']="e1";
                }elseif ($hoy['year']<$cuota['agno_ven']) {
                    $cuota['estado_txt']="e2";
                }elseif ($hoy['year']=$cuota['agno_ven']) {
                    if ($hoy['mon']>$cuota['mes_ven']) {
                        $cuota['estado_txt']="e1";
                    }elseif ($hoy['mon']<$cuota['mes_ven']) {
                        $cuota['estado_txt']="e2";
                    }elseif ($hoy['mon']=$cuota['mes_ven']) {
                        if ($hoy['mday']>$cuota['dia_ven']) {
                            $cuota['estado_txt']="e1";
                        }elseif ($hoy['mday']<=$cuota['dia_ven']) {
                            $cuota['estado_txt']="e2";
                        }
                    }
                }
            }elseif ($cuota['estado']==1) {
                $cuota['estado_txt']="e3";
            }elseif ($cuota['estado']==2) {
                $cuota['estado_txt']="e4";
            }
            array_push($estado_txt, $cuota);
        }
        $cuotas = array_reverse($estado_txt);
        
        #Para paginar
        #$cuotas = $this->paginate($estado_txt);
        //dd($tesis);

        ############################################################################
        ############################################################################
        #Se retorna
        return view('admin/tesis/tesis_cuotas', [
            'tesis' => $tesis,
            'cuotas' => $cuotas
        ]);
    }

    ##PARA PAGINAR EL ARRAY DE CUOTAS
    public function paginate($items, $perPage = 30, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, [
            'path' => Paginator::resolveCurrentPath()
        ]);
    }
    ################################################





    public function usersTesis(Request $request, $id)
    {
        $tesis = \DB::table('tesis_users')->get(); 

        $tesis = json_decode($tesis, true);

        $tesis_sel = array();
        foreach($tesis as $key => $value) {
            if($id == $value['tesis_id']) {
                $tesis_sel[] = $value;
            }
        }

        $users = \DB::table('users')->select('id', 'name', 'email', 'celular')->get(); 
        $users = json_decode($users, true);

        $users_sel = array();
        foreach($users as $key => $value) {
            foreach($tesis_sel as $clave => $valor){
                if($valor['user_id'] == $value['id']){
                    $users_sel[] = $value;
                }
            }
        } 

        $users =  $users_sel;

        return view('admin/tesis/tesis_users')->with(compact('users')); 
    }

    public function cuotaCreate(Request $request)
    {
        $tesis_id = $request->tesis_name;
        //genera el código de la cuota
        $codigo_cuota = time().'.'.$tesis_id;
        $array = array(
            "tesis_id"=> $tesis_id,
            "monto" => $request->monto,
            "dia_ven" => $request->dia,
            "mes_ven" => $request->mes,
            "agno_ven" => $request->agno,
            "codigo_cuota" => $codigo_cuota,
        );

        Cuota::insert($array);
        return redirect()->back();
        
    }


    public function asignarUser(Request $request)
    {
        $tesis_id  = $request->tesis_name;
        $user_id = $request->user_name;
        $array = array(
            "user_id"=> strval($user_id),
            "tesis_id" => strval($tesis_id),
        );
        TesisUser::insert($array);
        return redirect()->back()->with('alert', 'Usuario asignado correctamente.');
    }    


    public function listTesis()
    {
        $tesis = \DB::table('tesis')->get();
        return view('admin/tesis/tesis_list', ['tesis' => $tesis]);
    }


    public function create(Request $request)
    {
        if ($request->hasFile('contrato')) {
            $contrato = $request->file('contrato');
            $contrato_name = time().'.'.$contrato->getClientOriginalExtension();
            $contratoDoc = $request->file('contrato')->storeAs('users/contratos', $contrato_name, 'public');
        }

        $array_investigacion = array(
            "tesis_name" => request()->name,
            "contrato"=> $contratoDoc,
        );

        Tesi::insert($array_investigacion);

        return redirect()->back()->with('alert', 'Nueva investigación creada correctamente.');

    }


    public function show()
    {
        $usuarios = \DB::table('users')->get()->reverse();
        $tesis = \DB::table('tesis')->get()->reverse();

        $tesisUsers = \DB::table('tesis_users')
                        ->join('users', 'users.id', '=', 'tesis_users.user_id')
                        ->join('tesis', 'tesis.id', '=', 'tesis_users.tesis_id')
                        ->get()
                        ->reverse();

        return view('admin/tesis/tesis_agregar', [
            'usuarios' => $usuarios,
            'tesis' => $tesis,
            'tesisUsers' => $tesisUsers
        ]);

    }


    /*Comentada para ver si sirve 21-08-21
    public function nuevoPagoTesis()
    {
        return response()->json([

            'users' => \App\User::latest()->get()

        ], Response::HTTP_OK);
    }
    */
}
