<table class="uk-table uk-table-small uk-table-divider">
    <thead >
        <tr >
            <th class="uk-text-center">#</th>
            <th class="uk-text-center">Titulo de la investigación</th>
            <th class="uk-text-center">Cliente(s)</th>
            <th class="uk-text-center">Monto</th>
            <th class="uk-text-center">Fecha de vencimiento</th>
            <th class="uk-text-center">Estado</th>
            <th class="uk-text-center">Link de pago</th>
        </tr>
    </thead>

    @foreach($cuotas as $cuota )
    <tbody>
        <tr>

        <td>{{$loop->iteration}}</td>
        <td>{{$cuota->tesis_name}}</td>
        <td><a href="{{route('admin/tesis/tesis_cuotas', $cuota->tesis_id)}}" ><i class="fa fa-external-link" aria-hidden="true"></i></a> 
        </td>
        <td>S/{{$cuota->monto}}</td>

        <td>{{$cuota->dia_ven}} de 
            <?php
            if ($cuota->mes_ven == 1) {
                echo('enero'); 
            } elseif ($cuota->mes_ven == 2) {
                echo('febrero'); 
            } elseif ($cuota->mes_ven == 3) {
                echo('marzo'); 
            } elseif ($cuota->mes_ven == 4) {
                echo('abril'); 
            } elseif ($cuota->mes_ven == 5) {
                echo('mayo'); 
            } elseif ($cuota->mes_ven == 6) {
                echo('junio'); 
            } elseif ($cuota->mes_ven == 7) {
                echo('julio'); 
            } elseif ($cuota->mes_ven == 8) {
                echo('agosto'); 
            } elseif ($cuota->mes_ven == 9) {
                echo('septiembre'); 
            } elseif ($cuota->mes_ven == 10) {
                echo('octubre'); 
            } elseif ($cuota->mes_ven == 11) {
                echo('noviembre'); 
            } elseif ($cuota->mes_ven == 12) {
                echo('diciembre'); 
            }
            ?>
            del {{$cuota->agno_ven}}</td>
            
        <td>
            <?php
            if ($cuota->estado==0) {
                $hoy = getdate();
                if ($hoy['year']>$cuota->agno_ven) {
                    echo('<span style="color:red;"> Vencida</span>');
                }elseif ($hoy['year']<$cuota->agno_ven) {
                    echo('<span style="color:lime;"> Al día</span>');
                }elseif ($hoy['year']=$cuota->agno_ven) {
                    if ($hoy['mon']>$cuota->mes_ven) {
                        echo('<span style="color:red;"> Vencida</span>');
                    }elseif ($hoy['mon']<$cuota->mes_ven) {
                        echo('<span style="color:lime;"> Al día</span>');
                    }elseif ($hoy['mon']=$cuota->mes_ven) {
                        if ($hoy['mday']>$cuota->dia_ven) {
                            echo('<span style="color:red;"> Vencida</span>');
                        }elseif ($hoy['mday']<=$cuota->dia_ven) {
                            echo('<span style="color:lime;"> Al día</span>');
                        }
                    }
                }
            }elseif ($cuota->estado==1) {
                echo('<span style="color:yellow;"> Voucher recibido</span>');
            }elseif ($cuota->estado==2) {
                echo('<span style="color:aqua;"> Cuota pagada</span>');
            }				
            ?>
        </td> 
        <td>
            <a href="{{route('cuota', $cuota->codigo_cuota)}}" ><i class="fa fa-external-link" aria-hidden="true"></i></a> 
        </td>


        </tr>
    </tbody>
    @endforeach 
</table>