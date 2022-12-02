<div uk-filter="target: .js-filter">
    <ul class="uk-subnav uk-subnav-pill ul-li-prevenir-estilo-defecto">
        <li class="uk-active" uk-filter-control><a href="#">Todos</a></li>
        <li uk-filter-control="[data-color='e1']"><a href="#">Vencida</a></li>
        <li uk-filter-control="[data-color='e2']"><a href="#">Al día</a></li>
        <li uk-filter-control="[data-color='e3']"><a href="#">Voucher recibido</a></li>
        <li uk-filter-control="[data-color='e4']"><a href="#">Cuota pagada</a></li>
    </ul>

    <div class="js-filter   uk-child-width-1-2@s uk-grid-small uk-grid-match " uk-grid>
        @foreach ($cuotas as $cuota )
                <div style=" margin-top: 10px !important;" class=" " data-color="{{$cuota['estado_txt']}}">
                    <div class="uk-text-left inve_bot height: 100%; " style=" border-radius:10px; padding:5px; margin-bottom:10px; ">
                        <div  style="background-color: ;" class="p-cuotas">
                                <p  class="p-cuotas">
                                    <span class="uk-text-bold">Titulo:&nbsp</span> 
                                    <span style="font-size:16px;" class=" uk-button-link manoAzul" type="button"  uk-tooltip="title: Editar; pos: right" onclick="window.location.href=('<?php echo('/edit_cuota/'.$cuota['codigo_cuota']);?>')" >
                                        <i class="fa fa-pencil-square"  style="font-size:16px;"></i>
                                    </span> 
                                    &nbsp{{$cuota['tesis_name']}}  

                                </p>

                        </div>

                        <div  uk-grid class="uk-grid-collapse uk-child-width-expand@s uk-text-left " >
                            <div  style="background-color: ;">
                                <p class="p-cuotas">
                                    <span class="uk-text-bold">Clientes: &nbsp 
                                    <br>
                                    <span style="font-size:16px;" class=" uk-button-link manoAzul" type="button" uk-tooltip="title: <?php
                                            foreach($cuota['clientes'] as $data){
                                                if(gettype($data)=='string'){
                                                    print_r($data);
                                                }
                                                elseif(gettype($data)=='array'){
                                                    print_r($data['name'].'<br>');
                                                }
                                            }
                                    ?>; pos: right"  
                                    onclick="window.open('<?php echo('tesis_cuotas/'.$cuota['tesis_id']);?>')"  
                                    >

                                    <?php
                                        foreach($cuota['clientes'] as $data){
                                            if(gettype($data)=='string'){
                                                print_r($data);
                                            }
                                            elseif(gettype($data)=='array'){
                                                print_r('');
                                            }
                                        }
                                    ?>
                                    <i class="fa fa-users"  style="font-size:16px;"></i>
                                    </span> 
                                </p>
                                
                            </div>

                            <div   style="background-color: ;">
                                <p class="p-cuotas">
                                    <span class="uk-text-bold">Monto:&nbsp</span> 
                                    <br>
                                    S/ {{$cuota['monto']}}
                                </p>
                            </div>	
                            
                            <div  style="background-color: ;">
                                <p class="p-cuotas">
                                    <span class="uk-text-bold"> Vence el:&nbsp</span> 
                                <br>
                                {{$cuota['dia_ven']}} de 
                                <?php
                                if ($cuota['mes_ven'] == 1) {
                                    echo('enero'); 
                                } elseif ($cuota['mes_ven'] == 2) {
                                    echo('febrero'); 
                                } elseif ($cuota['mes_ven'] == 3) {
                                    echo('marzo'); 
                                } elseif ($cuota['mes_ven'] == 4) {
                                    echo('abril'); 
                                } elseif ($cuota['mes_ven'] == 5) {
                                    echo('mayo'); 
                                } elseif ($cuota['mes_ven'] == 6) {
                                    echo('junio'); 
                                } elseif ($cuota['mes_ven'] == 7) {
                                    echo('julio'); 
                                } elseif ($cuota['mes_ven'] == 8) {
                                    echo('agosto'); 
                                } elseif ($cuota['mes_ven'] == 9) {
                                    echo('septiembre'); 
                                } elseif ($cuota['mes_ven'] == 10) {
                                    echo('octubre'); 
                                } elseif ($cuota['mes_ven'] == 11) {
                                    echo('noviembre'); 
                                } elseif ($cuota['mes_ven'] == 12) {
                                    echo('diciembre'); 
                                }
                                ?>
                                del {{$cuota['agno_ven']}}

                                </p>
                            </div>
                            <!--
                            #A las cuotas hay que agregarles el estado 'Vencida' -- 'Al día'--'Voucher recibido'--'Cuota pagada'
                            #1 Vencida
                            #2 Al día
                            #4 Voucher recibido
                            #4 Cuota pagada
                            -->
                            <div  style="background-color: ;">
                                <p class="p-cuotas">
                                    <span class="uk-text-bold"> Estado:&nbsp</span> 
                                    <br>
                                    @if ($cuota['estado_txt']=='e1')
                                        <span style="color:red;"> Vencida</span>
                                    @elseif($cuota['estado_txt']=='e2')
                                        <span style="color:lime;"> Al día</span>
                                    @elseif($cuota['estado_txt']=='e3')
                                        <span style="color:yellow;"> Voucher recibido</span>
                                    @elseif($cuota['estado_txt']=='e4')
                                        <span style="color:aqua;"> Cuota pagada</span>
                                    @endif
                                </p>
                            </div>
                            <div  style="background-color: ;">
                                <p class="p-cuotas">
                                    <span class="uk-text-bold">Links:&nbsp</span> 
                                    <br>
                                    <span style="font-size:16px;" class=" uk-button-link manoAzul" type="button"uk-tooltip="title: Link de pago; pos: right" 
                                    onclick="window.open('<?php echo('/cuota/'.$cuota['codigo_cuota']);?>')"
                                    >
                                        <i class="fa fa-link"  style="font-size:16px;"></i>
                                    </span> |

                                    <span style="font-size:16px;" class=" uk-button-link manoAzul" type="button" uk-tooltip="title: Enviar a clientes; pos: right" 
                                    onclick="window.open('<?php echo('tesis_cuotas/'.$cuota['tesis_id']);?>')"
                                    >
                                        <i class="fa fa-paper-plane-o"  style="font-size:16px;"></i>
                                    </span> 
                                    
                                </p>
                            </div>	
                        </div>
                    </div>
                </div>
        @endforeach
    </div>
</div>