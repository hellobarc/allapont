<div class="uk-width-expand@m   ">
    @foreach ($avances as $avance )
        @if ($avance->estado!=1)
            <div style=" margin-top: 10px !important;" class=" ">
                <div class="uk-text-left inve_bot height: 100%; " style=" border-radius:10px; padding:5px; margin-bottom:10px; ">
                    <div  uk-grid class="uk-grid-collapse uk-child-width-expand@s uk-text-left " >
                        <div   style="background-color: ;">
                            <p class="p-cuotas">
                                <span class="uk-text-bold">Titulo de la investigación:&nbsp</span> 
                                <br>
                                {{$avance->tesis_name}}
                            </p>
                        </div>	

                        <div   style="background-color: ;">
                            <p class="p-cuotas">
                                <span class="uk-text-bold">Comentario:&nbsp</span> 
                                <br>
                                {{$avance->req_coment}}
                            </p>
                        </div>

                        <div   style="background-color: ;">
                            <p class="p-cuotas">
                                <span class="uk-text-bold">Archivos:&nbsp</span> 
                                <br>
                                    <?php
                                        if ($avance->req_files == 'null' ) {
                                            echo('Ningún archivo');
                                        }else {
                                            $req_files = json_decode($avance->req_files, true);
                                            for ($i=0; $i < count($req_files); $i++) { 
                                                print_r($req_files[$i]['desc'] .'->'. '<a href="'.url($req_files[$i]['url']).'" target="_blank"><i class="fa fa-file-o" aria-hidden="true"></i></a> <br>');
                                            };
                                        }
                                    ?>
                            </p>
                        </div>

                        <div   style="background-color: ;">
                            <p class="p-cuotas">
                                <span class="uk-text-bold">Fecha de entrega:&nbsp</span> 
                                <br>
                                    {{$avance ->req_dia}} de 
                                    <?php
                                        if ($avance->req_mes == 1) {
                                            echo('enero'); 
                                        } elseif ($avance->req_mes == 2) {
                                            echo('febrero'); 
                                        } elseif ($avance->req_mes == 3) {
                                            echo('marzo'); 
                                        } elseif ($avance->req_mes == 4) {
                                            echo('abril'); 
                                        } elseif ($avance->req_mes == 5) {
                                            echo('mayo'); 
                                        } elseif ($avance->req_mes == 6) {
                                            echo('junio'); 
                                        } elseif ($avance->req_mes == 7) {
                                            echo('julio'); 
                                        } elseif ($avance->req_mes == 8) {
                                            echo('agosto'); 
                                        } elseif ($avance->req_mes == 9) {
                                            echo('septiembre'); 
                                        } elseif ($avance->req_mes == 10) {
                                            echo('octubre'); 
                                        } elseif ($avance->req_mes == 11) {
                                            echo('noviembre'); 
                                        } elseif ($avance->req_mes == 12) {
                                            echo('diciembre'); 
                                        }
                                    ?>
                                    del {{$avance->req_agno}}

                                    a las {{$avance->req_hora}}:00 horas
                            </p>
                        </div>

                        <div   style="background-color: ;">
                            <p class="p-cuotas">
                                <span class="uk-text-bold">Tiempo (aprox) para la entrega:&nbsp</span> 
                                <br>
                                    <?php
                                        date_default_timezone_set("America/New_York");
                                        $agno = $avance->req_agno;
                                        $mes = $avance->req_mes;
                                        $dia = $avance->req_dia;
                                        $hora = $avance->req_hora;
                                        
                                        $fecha_entrega = new DateTime();
                                        $fecha_entrega->setDate($agno, $mes, $dia);
                                        date_time_set($fecha_entrega, $hora, 0);
                                        $fecha_entrega =  $fecha_entrega->format('Y-m-d H:i:s');

                                        $now = time();
                                        $your_date = strtotime($fecha_entrega);
                                        $datediff = $your_date - $now;

                                        if (floor($datediff / (60 * 60 * 24))<=0) {
                                            echo ('<span style="color:red;">'.floor($datediff / (60 * 60 * 24)).' días '. floor(($datediff % 86400)/3600).' horas</span>');
                                        } elseif ((floor($datediff / (60 * 60 * 24))>=1) && (floor($datediff / (60 * 60 * 24))<=3)) {
                                            echo ('<span style="color:yellow;">'.floor($datediff / (60 * 60 * 24)).' días '. floor(($datediff % 86400)/3600).' horas</span>');
                                        } elseif (floor($datediff / (60 * 60 * 24))>=4) {
                                            echo ('<span style="color:lime;">'.floor($datediff / (60 * 60 * 24)).' días '. floor(($datediff % 86400)/3600).' horas</span>');
                                        }
                                    ?>
                            </p>
                        </div>

                        <div  style="background-color: ;">
                            <p class="p-cuotas">
                                <span class="uk-text-bold">Agregar entrega:&nbsp</span> 
                                <br>
    
                                <a   uk-tooltip="title: Editar; pos: right" href="{{route('admin/tesis/agregar_avance', $avance->avance_id)}}" ><i class="fa fa-external-link" aria-hidden="true"></i></a> 

                            </p>
                        </div>	
                    </div>
                </div>
            </div>
        @endif						
    @endforeach
</div>