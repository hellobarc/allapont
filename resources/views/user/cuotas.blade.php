@extends('footer')
@extends('header')

@section('title')
Cuotas - Alappont
@endsection



@section('content')



<div class="loginbg uk-flex uk-height-medium  uk-margin uk-text-center" style="height: auto;">
    <div class=" logingbcard uk-margin-auto uk-margin-auto-vertical uk-width-1-2@s uk-card uk-card-default uk-card-body" style="margin-top: 100px !important; margin-bottom: 100px !important" >
        <h3 class="uk-margin-top">Cuota</h3>
        <br>

        Monto: 
        <?php
        echo('S/'.$cuotas_sel[0]['monto']);
        ?>
        <br>

        Fecha de vencimiento:  
        <?php
        echo($cuotas_sel[0]['dia_ven']);
        ?>
        de
        <?php
        if ($cuotas_sel[0]['mes_ven'] == 1) {
            echo('enero'); 
        } elseif ($cuotas_sel[0]['mes_ven'] == 2) {
            echo('febrero'); 
        } elseif ($cuotas_sel[0]['mes_ven'] == 3) {
            echo('marzo'); 
        } elseif ($cuotas_sel[0]['mes_ven'] == 4) {
            echo('abril'); 
        } elseif ($cuotas_sel[0]['mes_ven'] == 5) {
            echo('mayo'); 
        } elseif ($cuotas_sel[0]['mes_ven'] == 6) {
            echo('junio'); 
        } elseif ($cuotas_sel[0]['mes_ven'] == 7) {
            echo('julio'); 
        } elseif ($cuotas_sel[0]['mes_ven'] == 8) {
            echo('agosto'); 
        } elseif ($cuotas_sel[0]['mes_ven'] == 9) {
            echo('septiembre'); 
        } elseif ($cuotas_sel[0]['mes_ven'] == 10) {
            echo('octubre'); 
        } elseif ($cuotas_sel[0]['mes_ven'] == 11) {
            echo('noviembre'); 
        } elseif ($cuotas_sel[0]['mes_ven'] == 12) {
            echo('diciembre'); 
        }
        ?>
        
        del
        <?php
        echo($cuotas_sel[0]['agno_ven']);
        ?>

        <br>
        Estado:  
        <?php
        if ($cuotas_sel[0]['estado']==0) {
            $hoy = getdate();
            if ($hoy['year']>$cuotas_sel[0]['agno_ven']) {
                echo('<span style="color:red;"> Vencida :(</span>');
            }elseif ($hoy['year']<$cuotas_sel[0]['agno_ven']) {
                echo('<span style="color:lime;"> Al día :)</span>');
            }elseif ($hoy['year']=$cuotas_sel[0]['agno_ven']) {
                if ($hoy['mon']>$cuotas_sel[0]['mes_ven']) {
                    echo('<span style="color:red;"> Vencida :(</span>');
                }elseif ($hoy['mon']<$cuotas_sel[0]['mes_ven']) {
                    echo('<span style="color:lime;"> Al día :)</span>');
                }elseif ($hoy['mon']=$cuotas_sel[0]['mes_ven']) {
                    if ($hoy['mday']>$cuotas_sel[0]['dia_ven']) {
                        echo('<span style="color:red;"> Vencida :(</span>');
                    }elseif ($hoy['mday']<=$cuotas_sel[0]['dia_ven']) {
                        echo('<span style="color:lime;"> Al día :)</span>');
                    }
                }
            }
        }elseif ($cuotas_sel[0]['estado']==1) {
            echo('<span style="color:yellow;"> En espera de validación</span>');
        }elseif ($cuotas_sel[0]['estado']==2) {
            echo('<span style="color:aqua;"> Pago validado</span>');
        }




        ?>

        <br>
        <br>
        @if ($cuotas_sel[0]['estado']==0)
            <div id="matricula">
                <form action="{{url('/cuota_update/'.$cuotas_sel[0]['codigo_cuota'])}}" method="POST" enctype="multipart/form-data">
                @csrf
                    <input type="text" name="estado" style="display: none;" value="1">
                    <input type="text" name="agno" style="display: none ;" value="<?php $hoy = getdate(); echo($hoy['year']);?>">
                    <input type="text" name="mes" style="display: none ;" value="<?php $hoy = getdate(); echo($hoy['mon']);?>">
                    <input type="text" name="dia" style="display: none ;" value="<?php $hoy = getdate(); echo($hoy['mday']);?>">                           

                <div class="manoAzul" uk-form-custom="target: true" style="width: 300px;" uk-form-custom>
                    <input class="manoAzul" type="file" name="voucher" accept="image/*" required>
                    <input class="manoAzul uk-input uk-form-width-medium" type="text" placeholder="Selecciona o arrastra tu voucher" disabled style="border: solid 2px; border-style: dashed; height: 100px; width: 400px; border-radius: 10px;" required>
                </div>

                <br>
                <br>
                <button class="manoAzul  radfifth uk-button uk-button-default">Pagar cuota</button>
                </form>
            </div>                    
        @else
            Voucher recibido
        @endif
        

    </div>
</div>


<!---->



@endsection