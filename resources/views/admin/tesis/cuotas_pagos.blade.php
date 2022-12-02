<div uk-filter="target: .js-filter">
    <ul class="uk-subnav uk-subnav-pill ul-li-prevenir-estilo-defecto">
        <li  class="uk-active" uk-filter-control="[data-color='e3']"><a href="#">Voucher recibido</a></li>
        <li uk-filter-control="[data-color='e4']"><a href="#">Cuota pagada</a></li>
    </ul>
    
    <div class="js-filter   uk-child-width-1-2@s uk-grid-small uk-grid-match " uk-grid>
        @foreach ($cuotas as $cuota )
            @if ($cuota['estado']!=0)
                <div style=" margin-top: 10px !important;" class=" " data-color="{{$cuota['estado_txt']}}">
                    <div class="uk-text-left inve_bot" style=" border-radius:10px; padding:5px; margin-bottom:10px; ">
                        <div  style="background-color: ;" class="p-cuotas">
                                <p  class="p-cuotas">
                                    <span class="uk-text-bold">Titulo:&nbsp</span> 
                                    {{$cuota['tesis_name']}}  
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

                            <div  style="background-color: ;">
                                <p class="p-cuotas">
                                    <span class="uk-text-bold"> Fecha que fue cancelada:&nbsp</span> 
                                    <br>
                                    {{$cuota['dia_can']}} de 
                                    <?php
                                    if ($cuota['mes_can'] == 1) {
                                        echo('enero'); 
                                    } elseif ($cuota['mes_can'] == 2) {
                                        echo('febrero'); 
                                    } elseif ($cuota['mes_can'] == 3) {
                                        echo('marzo'); 
                                    } elseif ($cuota['mes_can'] == 4) {
                                        echo('abril'); 
                                    } elseif ($cuota['mes_can'] == 5) {
                                        echo('mayo'); 
                                    } elseif ($cuota['mes_can'] == 6) {
                                        echo('junio'); 
                                    } elseif ($cuota['mes_can'] == 7) {
                                        echo('julio'); 
                                    } elseif ($cuota['mes_can'] == 8) {
                                        echo('agosto'); 
                                    } elseif ($cuota['mes_can'] == 9) {
                                        echo('septiembre'); 
                                    } elseif ($cuota['mes_can'] == 10) {
                                        echo('octubre'); 
                                    } elseif ($cuota['mes_can'] == 11) {
                                        echo('noviembre'); 
                                    } elseif ($cuota['mes_can'] == 12) {
                                        echo('diciembre'); 
                                    }
                                    ?>
                                    del {{$cuota['agno_can']}}
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
                                    <span class="uk-text-bold">Comprobante :&nbsp</span> 
                                    <br>
                                    <span style="font-size:16px;" class=" uk-button-link manoAzul" type="button"uk-tooltip="title: Ver comprobante; pos: right" 
                                    onclick="window.open('{{asset('/').$cuota['voucher']}}')"
                                    >
                                        <i class="fa fa-file"  style="font-size:16px;"></i>
                                    </span>
                                    
                                </p>
                            </div>	
                        </div>
                        <hr>
                        <div  style="background-color: ;" class="p-cuotas">

                                <p class="p-cuotas">
                                    <span class="uk-text-bold">Monto verificado:&nbsp</span> 
                                    <br>
                                    S/ {{$cuota['monto_verif']}}
                                </p>



                            <form method="POST" action="{{url('/cuota_validate/'.$cuota['codigo_cuota'])}}">
                                @csrf
                                <label for="monto">Ingresa el monto del comprobante:</label>
                                <br>
                                <input id="monto" name="monto_verif" type="text" value="{{$cuota['monto_verif']}}">
                                <br>
                                <label for="verificar">Estado: 
                                    <?php
                                        if ($cuota['estado']==1) {
                                            echo('<span style="color:yellow;">En espera de verificación</span>');
                                        }elseif ($cuota['estado']==2) {
                                            echo('<span style="color:lime;">Verificado</span>');
                                        }else {
                                            echo('NaN');
                                        }
                                    ?>
                                </label>
                                <br>
                                <select id="verificar" name="estado">
                                    <option value="1"
                                        <?php
                                            if ($cuota['estado']==1) {
                                                echo('selected="selected"');
                                            }
                                        ?>
                                    >En espera de verificación</option>
                                    
                                    <option value="2" 
                                        <?php
                                            if ($cuota['estado']==2) {
                                                echo('selected="selected"');
                                            }
                                        ?>
                                    >Verificado</option>
                                </select>
                                
                                <button type="submit" onclick="return confirm('¿Estás seguro que deseas validar esta cuota?');">Guardar</button>   
                            </form>
                        </div>


                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>