<?php

namespace App\Http\Controllers;

use App\Avance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Http;

class AvanceController extends Controller
{
    #Se crea esta función para ordenar de nemor a mayor por fecha
    function date_sort($a, $b) {
        return strtotime($a) - strtotime($b);
    }
    #############################################################
    
    public function avancesShow()
    {

        # Utilizar el API de python########################
        //$pelas =  Http::get('http://127.0.0.1:8000/movie/')->body();//Consume la API Django
        //$pelas = json_decode($pelas, true);
        //dd($pelas);
        ####################################################


        #Esto es para jalar las tesis y mostrarlas en lista 
        $tesis = \DB::table('tesis')->get();

        #Jala los avances que son visibles    
        $avances = \DB::table('avances')
        ->where('visible', 1)
        ->join('tesis', 'tesis.id', '=', 'avances.tesis_id')
        ->get();

        #PARA CALCULAR EL TIEMPO MEDIO DE ENTREGA DE LOS REQUERIMIENTOS############################
        ##1. Jalamos la fecha de requerimiento y la fecha de entrega
        $avances_req_ent = \DB::table('avances')->where('ent_date', '!=', 'vacio')->get();
        $avances_req_ent = json_decode($avances_req_ent, true);
        ##2. Seleccionamos las comunas específicas        
        $avances_req = array_column( $avances_req_ent, 'req_date');
        $avances_ent = array_column( $avances_req_ent, 'ent_date');
        ##3. Convertimos a timepo unix cada columna y la almacenamos como un array para restarlas
        foreach($avances_req as $k => $fecha){
            $avances_req_unix[] = strtotime($fecha);
        }
        unset($fecha);#Esto es para eliminar $fecha y suarla más abajo
        foreach($avances_ent as $k => $fecha){
            $avances_ent_unix[] = strtotime($fecha);
        }
        unset($fecha);#Esto es para eliminar $fecha y suarla más abajo
        ##Realizamos la resta entre ambos array
        $diferencia = array();
        if ( count($avances_req_unix) == count($avances_ent_unix)){
            for ($i=0; $i < count($avances_req_unix); $i++){
                array_push( $diferencia, ( $avances_ent_unix[$i] - $avances_req_unix[$i] ) );
            }
        }
        ##Calculamos el promedio
        $media_entrega_unix = array_sum($diferencia)/count($diferencia);
        #Convertimos a fecha
        $media_entrega_dias = floor($media_entrega_unix / (60 * 60 * 24));
        $media_entrega_horas = floor(($media_entrega_unix % 86400)/3600);
        ############################################################################################
        
        #PARA CALCULAR EL TIEMPO DE RETRASO RESPECTO A LA FECHA DE ENTREGA DE LOS REQUERIMIENTOS####
        ##Declaramos las columas que queremos jalar de día, mes, año y hora                         #                
        $req_dia = array_column( $avances_req_ent, 'req_dia');                                      #
        $req_mes = array_column( $avances_req_ent, 'req_mes');                                      #
        $req_agno = array_column( $avances_req_ent, 'req_agno');                                    #
        $req_hora = array_column( $avances_req_ent, 'req_hora');                                    # 
        ##Las juntamos en un array                                                                  #
        $date_req = array();                                                                        #
        foreach ($req_agno as $key => $agno) {
            $mes = $req_mes[$key];
            $dia = $req_dia[$key];
            $hora = $req_hora[$key];
            $date_req[$key] = $agno."-".$mes."-".$dia." ".$hora.":00:00";
        }        
        unset($agno);#Esto es para eliminar $fecha y suarla más abajo
        ##Convertimos a unix para restar
        foreach($date_req as $k => $fecha){
            $date_req_unix[] = strtotime($fecha);
        }
        unset($fecha);#Esto es para eliminar $fecha y suarla más abajo
        ##Realizamos la resta entre $date_req_unix y $avances_ent_unix (definido arriba)
        $retraso_dif_unix = array();
        if ( count($date_req_unix) == count($avances_ent_unix)){
            for ($i=0; $i < count($date_req_unix); $i++){
                array_push( $retraso_dif_unix, ($date_req_unix[$i] - $avances_ent_unix[$i] ) );
            }
        }       
        ##Calculamos el promedio
        $media_retraso_dif_unix = array_sum($retraso_dif_unix)/count($retraso_dif_unix);
        #Convertimos a fecha
        $media_retraso_dif_dias = floor($media_retraso_dif_unix / (60 * 60 * 24));
        $media_retraso_dif_horas = floor(($media_retraso_dif_unix % 86400)/3600);
        ############################################################################################



        ############################################################################################
        ##PARA PLOTEAR -REQUERIMIENTOS POR DÍA
        ##Seleccionamos las columna que contiene la fecha en la que se creo el requerimiento        #
        $req_date = array_column( $avances_req_ent, 'req_date');                                    #
        
        ##Convertimos a timepo unix cada columna 
        foreach($req_date as $k => $fecha){
            $req_date_unix[] = strtotime($fecha);
        }
        unset($fecha);#Esto es para eliminar $fecha y suarla más abajo

        #Convertimos a dia mes año
        foreach($req_date_unix as $k => $fecha){
            $req_date_format[] = date('d-m-Y', $fecha);
        }
        unset($fecha);#Esto es para eliminar $fecha y suarla más abajo
        
        usort($req_date_format, array($this, "date_sort"));#Usa la funcion date_sort creada arriba para ordenar por fecha 

        ###
        $result = array_unique($req_date_format);
        $result = array_values($result);
        
        ###
        $count = array_count_values($req_date_format);       
        $count = array_values($count);
        ############################################################################################

        ############################################################################################
        ##PARA PLOTEAR -REQUERIMIENTOS POR MES

        #Convertimos a dia mes año
        foreach($req_date_unix as $k => $fecha){
            $req_date_format_mes[] = date('m-Y', $fecha);
        }
        unset($fecha);#Esto es para eliminar $fecha y suarla más abajo


        #usort($req_date_format_mes, array($this, "date_sort"));#Usa la funcion date_sort creada arriba para ordenar por fecha 

        ###
        $result_mes = array_unique($req_date_format_mes);
        $result_mes = array_values($result_mes);
        
        ###
        $count_mes = array_count_values($req_date_format_mes);       
        $count_mes = array_values($count_mes);
        ############################################################################################

        #dd($avances);

        return view('admin/tesis/tesis_avances', [
            'tesis' => $tesis,
            'avances' => $avances,
            'media_entrega_dias' => $media_entrega_dias,
            'media_entrega_horas' => $media_entrega_horas,
            'media_retraso_dif_dias' => $media_retraso_dif_dias,
            'media_retraso_dif_horas' => $media_retraso_dif_horas,
            //'pelas' => $pelas,#DEL API DE PYTHON
        ])->with('result',json_encode($result,JSON_NUMERIC_CHECK))
            ->with('count',json_encode($count,JSON_NUMERIC_CHECK))
            ->with('result_mes',json_encode($result_mes,JSON_NUMERIC_CHECK))
            ->with('count_mes',json_encode($count_mes,JSON_NUMERIC_CHECK));
        
    }

    public function create(Request $request)
    {

        #Este bucle sirve para que cuando la variable se mande vacia no se muestre
        if ($request->req_file === null)
        {
            $file = $request->req_file;
        }
        else 
        {
            $file = array_values($request->req_file);#Esto sirve para reiniciar el key del array en caso de borrar una entrada en las variables y no se cuelgue el código.
        }
        

        $tesis = $request->tesis_name;
        $tesis_id = \DB::table('tesis')->where('tesis_name', $tesis)->value('id');
        $array = array(
            "tesis_id" => $tesis_id,
            "req_date" => $request->req_date,
            "req_coment" => $request->req_coment,
            "req_files" => json_encode($file),
            "req_dia" => $request->req_dia,
            "req_mes" => $request->req_mes,
            "req_agno" => $request->req_agno,
            "req_hora" => $request->req_hora,
            "ent_files"=> "0",
        );
        Avance::insert($array);
        return redirect()->back();
    }

    public function agregar_avance($avance_id)
    {
        
        $avances = \DB::table('avances')->get();
        $tesis = \DB::table('tesis')->get();   
        $avance = \DB::table('avances')
        ->join('tesis', 'tesis.id', '=', 'avances.tesis_id')
        ->where('avance_id', $avance_id)->get();
        $avance = json_decode($avance, true);
        #dd(intval($avance_id));

        return view('admin/tesis/agregar_avance', [
            'avance' => $avance
        ]);

        //ACA ES NECESARIO TENER EN CUENTA QUE SI EL ID QUE SE PASA NO EXISTE EN LA BASE DE DATOS DEBE CONSULTARSE PARA REDIRIGIRSE A LA PAGINA DE DONDE CONSULTA

        /*
        if(  count($avances) >= intval($avance_id)){
            return view('admin/tesis/agregar_avance', [
                'avance' => $avance
            ]);
        }else{
            return redirect()->back();
        }
        */
    }

    public function entregar_avance(Request $request, $avance_id)
    {
       
        #Este bucle sirve para que cuando la variable se mande vacia no se muestre
        if ($request->ent_files === null)
        {
            $file = $request->ent_files;
        }
        else 
        {
            $file = array_values($request->ent_files);#Esto sirve para reiniciar el key del array en caso de borrar una entrada en las variables y no se cuelgue el código.
        }
       
        \DB::table('avances')
        ->where('avance_id', $avance_id)
        ->update([
            'ent_coment' => $request->ent_coment,
            'ent_files' => json_encode($file),
            'ent_date' => $request->ent_date,
            'aporte' => $request->aporte,
            'estado' => 1,
        ]);        

        $tesis = \DB::table('tesis')->get();   
        $avances = \DB::table('avances')
        ->where('visible', 1)
        ->join('tesis', 'tesis.id', '=', 'avances.tesis_id')
        ->get();


        
        return Redirect::to('admin/tesis/tesis_avances')->with([
            'tesis' => $tesis,
            'avances' => $avances
        ]);
    }




}
