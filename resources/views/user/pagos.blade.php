@extends('footer')
@extends('header')

@section('title')
Pagos | Alappont
@endsection

@section('content')

<style>
	.p-cuotas{
		margin: 0px !important;

		
	}

	.ul-li-prevenir-estilo-defecto {
		list-style-type: none;

		padding: 0;
	}
	.height-100 {
		height: 100% !important;
	}

</style>


<div  class="uk-container uk-container-small" style="margin-top:3%; margin-bottom:3%;">
    <article class="">

        <h2 class="uk-article-title"><a class="uk-link-reset" href="">Mis Pagos</a></h2>
        <hr>
        @if(count($matriculas)==0 && !isset($cuotas))
            <p>Aún no has contratado ningún servicio</p>
        @elseif(count($matriculas)>0 && !isset($cuotas))
            <div class="margin-inv-serv" style="margin-top:50px; border: solid 1px #3E4042; border-radius:10px; ">
                <div style="padding: 10px; " >
                    <div class="uk-text-left  " style="border-left: solid 5px #3E4042; padding-left:15px;" >
                        <h2 class="" style="margin:0px">Cursos</h2>
                    </div>
                </div>
            </div>
            @forelse($matriculas ?? '' as $matricula)
                <div style=" margin-top: 10px !important;" class=" " >
                    <div class="uk-text-left inve_bot height: 100%; " style=" border-radius:10px; padding:5px; margin-bottom:10px; ">
                        <div   class="p-cuotas">
                                <p  class="p-cuotas">
                                    <span class="uk-text-bold">Curso:&nbsp</span> 
                                    &nbsp{{$matricula->curso_name}} 
                                </p>
                        </div>

                        <div  uk-grid class="uk-grid-collapse uk-child-width-expand@s uk-text-left " >
                            <div   >
                                <p class="p-cuotas">
                                    <span class="uk-text-bold">Imágen del curso:&nbsp</span>
                                    <br>
                                    <img src="{{asset('/').$matricula->curso_avatar}}" class="imgCursoAdmin">
                                </p>
                            </div>

                            <div   >
                                <p class="p-cuotas">
                                    <span class="uk-text-bold">Comprobante:&nbsp</span>
                                    <br>
                                    <img src="{{asset('/').$matricula->voucher}}" onclick="window.open('{{asset('/').$matricula->voucher}}')" class="manoAzul imgCursoAdmin">
                                </p>
                            </div>	

                            <div>
                                <p  class="p-cuotas">
                                    <span class="uk-text-bold">Monto:&nbsp</span>
                                    <br>
                                    S/ {{$matricula->curso_precio}}
                                </p>
                            </div>

                            <div>
                                <p  class="p-cuotas">
                                    <span class="uk-text-bold">Fecha de matricula:&nbsp</span>
                                    <br>
                                    {{$matricula->fecha}}
                                </p>
                            </div>

                            <div>
                                <p  class="p-cuotas">
                                    <span class="uk-text-bold">Estado:&nbsp</span>
                                    <br>
                                    {{$matricula->status}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="uk-text-center">
                    <p>Aún no te has matriculado en ningún curso </p>
                </div>
            @endforelse 
            
        @elseif(count($matriculas)==0 && isset($cuotas))
            <div class="margin-inv-serv" style="margin-top:50px; border: solid 1px #3E4042; border-radius:10px; ">
                <div style="padding: 10px; " >
                    <div class="uk-text-left  " style="border-left: solid 5px #3E4042; padding-left:15px;" >
                        <h2 class="" style="margin:0px">Investigación</h2>
                    </div>
                </div>
            </div>
            @forelse($cuotas as $cuota)
                @php $cuota = json_decode($cuota); @endphp
                @if (count($cuota) != 0)
                    @foreach ($cuota as $cuo)
                        <div style=" margin-top: 10px !important;" class=" " >
                            <div class="uk-text-left inve_bot height: 100%; " style=" border-radius:10px; padding:5px; margin-bottom:10px; ">
                                <div   class="p-cuotas">
                                        <p  class="p-cuotas">
                                            <span class="uk-text-bold">Titulo:&nbsp</span> 
                                            &nbsp{{$cuo->tesis_name}}  
                                        </p>
                                </div>

                                <div  uk-grid class="uk-grid-collapse uk-child-width-expand@s uk-text-left " >
                                    <div   >
                                        <p class="p-cuotas">
                                            <span class="uk-text-bold">Monto:&nbsp</span> 
                                            <br>
                                            S/ {{$cuo->monto}} 
                                        </p>
                                    </div>	
                                    
                                    <div  >
                                        <p class="p-cuotas">
                                            <span class="uk-text-bold"> Vence el:&nbsp</span> 
                                        <br>
                                        {{$cuo->dia_ven}} de 
                                        <?php
                                        if ($cuo->mes_ven == 1) {
                                            echo('enero'); 
                                        } elseif ($cuo->mes_ven == 2) {
                                            echo('febrero'); 
                                        } elseif ($cuo->mes_ven == 3) {
                                            echo('marzo'); 
                                        } elseif ($cuo->mes_ven == 4) {
                                            echo('abril'); 
                                        } elseif ($cuo->mes_ven == 5) {
                                            echo('mayo'); 
                                        } elseif ($cuo->mes_ven == 6) {
                                            echo('junio'); 
                                        } elseif ($cuo->mes_ven == 7) {
                                            echo('julio'); 
                                        } elseif ($cuo->mes_ven == 8) {
                                            echo('agosto'); 
                                        } elseif ($cuo->mes_ven == 9) {
                                            echo('septiembre'); 
                                        } elseif ($cuo->mes_ven == 10) {
                                            echo('octubre'); 
                                        } elseif ($cuo->mes_ven == 11) {
                                            echo('noviembre'); 
                                        } elseif ($cuo->mes_ven == 12) {
                                            echo('diciembre'); 
                                        }
                                        ?>
                                        del {{$cuo->agno_ven}}

                                        </p>
                                    </div>
                                    <!--
                                    #A las cuotas hay que agregarles el estado 'Vencida' -- 'Al día'--'Voucher recibido'--'Cuota pagada'
                                    #1 Vencida
                                    #2 Al día
                                    #3 Voucher recibido
                                    #4 Cuota pagada
                                    -->
                                    <div  >
                                        <p class="p-cuotas">
                                            <span class="uk-text-bold"> Estado:&nbsp</span> 
                                            <br>
                                            @php
                                                if ($cuo->estado==0) {
                                                    $hoy = getdate();
                                                    if ($hoy['year']>$cuo->agno_ven) {
                                                        print('<span style="color:red;"> Vencida</span>');
                                                    }elseif ($hoy['year']<$cuo->agno_ven) {
                                                        print('<span style="color:lime;"> Al día</span>');
                                                    }elseif ($hoy['year']=$cuo->agno_ven) {
                                                        if ($hoy['mon']>$cuo->mes_ven) {
                                                            print('<span style="color:red;"> Vencida</span>');
                                                        }elseif ($hoy['mon']<$cuo->mes_ven) {
                                                            print('<span style="color:lime;"> Al día</span>');
                                                        }elseif ($hoy['mon']=$cuo->mes_ven) {
                                                            if ($hoy['mday']>$cuo->dia_ven) {
                                                                print('<span style="color:red;"> Vencida</span>');
                                                            }elseif ($hoy['mday']<=$cuo->dia_ven) {
                                                                print('<span style="color:lime;"> Al día</span>');
                                                            }
                                                        }
                                                    }
                                                }elseif ($cuo->estado==1) {
                                                    print('<span style="color:yellow;"> Voucher recibido</span>');
                                                }elseif ($cuo->estado==2) {
                                                    print('<span style="color:aqua;"> Cuota pagada</span>');
                                                }
                                            @endphp
                                        </p>
                                    </div>
                                    <div  >
                                        <p class="p-cuotas">
                                            <span class="uk-text-bold">Link de pago:&nbsp</span> 
                                            <br>
                                            <span style="font-size:16px;" class=" uk-button-link manoAzul" type="button"uk-tooltip="title: Link de pago; pos: right" 
                                            onclick="window.open('<?php echo('/cuota/'.$cuo->codigo_cuota);?>')"
                                            >
                                                <i class="fa fa-link"  style="font-size:16px;"></i>
                                            </span>
                                            
                                        </p>
                                    </div>

                                    <div   >
                                        <p class="p-cuotas">
                                            <span class="uk-text-bold">Comprobante:&nbsp</span>
                                            <br>
                                            @if($cuo->voucher == '0')
                                                Vacío
                                            @else
                                                <span style="font-size:16px;" class=" uk-button-link manoAzul" type="button"uk-tooltip="title: Voucher; pos: right" 
                                                onclick="window.open('<?php echo('/'.$cuo->voucher);?>')"
                                                >
                                                    <i class="fa fa-file-image-o"  style="font-size:16px;"></i>
                                                </span>
                                            @endif
                                        </p>
                                    </div>	

                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            @empty
                <p>Vacío</p>
            @endforelse   

        @elseif(count($matriculas)>0 && isset($cuotas))
            <!--CURSOS-->
            <div class="margin-inv-serv" style="margin-top:50px; border: solid 1px #3E4042; border-radius:10px; ">
                <div style="padding: 10px; " >
                    <div class="uk-text-left  " style="border-left: solid 5px #3E4042; padding-left:15px;" >
                        <h2 class="" style="margin:0px">Cursos</h2>
                    </div>
                </div>
            </div>
            @forelse($matriculas ?? '' as $matricula)
                <div style=" margin-top: 10px !important;" class=" " >
                    <div class="uk-text-left inve_bot height: 100%; " style=" border-radius:10px; padding:5px; margin-bottom:10px; ">
                        <div   class="p-cuotas">
                                <p  class="p-cuotas">
                                    <span class="uk-text-bold">Curso:&nbsp</span> 
                                    &nbsp{{$matricula->curso_name}} 
                                </p>
                        </div>

                        <div  uk-grid class="uk-grid-collapse uk-child-width-expand@s uk-text-left " >
                            <div   >
                                <p class="p-cuotas">
                                    <span class="uk-text-bold">Imágen del curso:&nbsp</span>
                                    <br>
                                    <img src="{{asset('/').$matricula->curso_avatar}}" class="imgCursoAdmin">
                                </p>
                            </div>

                            <div   >
                                <p class="p-cuotas">
                                    <span class="uk-text-bold">Comprobante:&nbsp</span>
                                    <br>
                                    <img src="{{asset('/').$matricula->voucher}}" onclick="window.open('{{asset('/').$matricula->voucher}}')" class="manoAzul imgCursoAdmin">
                                </p>
                            </div>	

                            <div>
                                <p  class="p-cuotas">
                                    <span class="uk-text-bold">Monto:&nbsp</span>
                                    <br>
                                    S/ {{$matricula->curso_precio}}
                                </p>
                            </div>

                            <div>
                                <p  class="p-cuotas">
                                    <span class="uk-text-bold">Fecha de matricula:&nbsp</span>
                                    <br>
                                    {{$matricula->fecha}}
                                </p>
                            </div>

                            <div>
                                <p  class="p-cuotas">
                                    <span class="uk-text-bold">Estado:&nbsp</span>
                                    <br>
                                    {{$matricula->status}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="uk-text-center">
                    <p>Aún no te has matriculado en ningún curso </p>
                </div>
            @endforelse

            <!--INVESTIGACIONES-->
            <div class="margin-inv-serv" style="margin-top:50px; border: solid 1px #3E4042; border-radius:10px; ">
                <div style="padding: 10px; " >
                    <div class="uk-text-left  " style="border-left: solid 5px #3E4042; padding-left:15px;" >
                        <h2 class="" style="margin:0px">Investigación</h2>
                    </div>
                </div>
            </div>
            @forelse($cuotas as $cuota)
                @php $cuota = json_decode($cuota); @endphp
                @if (count($cuota) != 0)
                    @foreach ($cuota as $cuo)
                        <div style=" margin-top: 10px !important;" class=" " >
                            <div class="uk-text-left inve_bot height: 100%; " style=" border-radius:10px; padding:5px; margin-bottom:10px; ">
                                <div   class="p-cuotas">
                                        <p  class="p-cuotas">
                                            <span class="uk-text-bold">Titulo:&nbsp</span> 
                                            &nbsp{{$cuo->tesis_name}}  
                                        </p>
                                </div>

                                <div  uk-grid class="uk-grid-collapse uk-child-width-expand@s uk-text-left " >
                                    <div   >
                                        <p class="p-cuotas">
                                            <span class="uk-text-bold">Monto:&nbsp</span> 
                                            <br>
                                            S/ {{$cuo->monto}} 
                                        </p>
                                    </div>	
                                    
                                    <div  >
                                        <p class="p-cuotas">
                                            <span class="uk-text-bold"> Vence el:&nbsp</span> 
                                        <br>
                                        {{$cuo->dia_ven}} de 
                                        <?php
                                        if ($cuo->mes_ven == 1) {
                                            echo('enero'); 
                                        } elseif ($cuo->mes_ven == 2) {
                                            echo('febrero'); 
                                        } elseif ($cuo->mes_ven == 3) {
                                            echo('marzo'); 
                                        } elseif ($cuo->mes_ven == 4) {
                                            echo('abril'); 
                                        } elseif ($cuo->mes_ven == 5) {
                                            echo('mayo'); 
                                        } elseif ($cuo->mes_ven == 6) {
                                            echo('junio'); 
                                        } elseif ($cuo->mes_ven == 7) {
                                            echo('julio'); 
                                        } elseif ($cuo->mes_ven == 8) {
                                            echo('agosto'); 
                                        } elseif ($cuo->mes_ven == 9) {
                                            echo('septiembre'); 
                                        } elseif ($cuo->mes_ven == 10) {
                                            echo('octubre'); 
                                        } elseif ($cuo->mes_ven == 11) {
                                            echo('noviembre'); 
                                        } elseif ($cuo->mes_ven == 12) {
                                            echo('diciembre'); 
                                        }
                                        ?>
                                        del {{$cuo->agno_ven}}

                                        </p>
                                    </div>
                                    <!--
                                    #A las cuotas hay que agregarles el estado 'Vencida' -- 'Al día'--'Voucher recibido'--'Cuota pagada'
                                    #1 Vencida
                                    #2 Al día
                                    #3 Voucher recibido
                                    #4 Cuota pagada
                                    -->
                                    <div  >
                                        <p class="p-cuotas">
                                            <span class="uk-text-bold"> Estado:&nbsp</span> 
                                            <br>
                                            @php
                                                if ($cuo->estado==0) {
                                                    $hoy = getdate();
                                                    if ($hoy['year']>$cuo->agno_ven) {
                                                        print('<span style="color:red;"> Vencida</span>');
                                                    }elseif ($hoy['year']<$cuo->agno_ven) {
                                                        print('<span style="color:lime;"> Al día</span>');
                                                    }elseif ($hoy['year']=$cuo->agno_ven) {
                                                        if ($hoy['mon']>$cuo->mes_ven) {
                                                            print('<span style="color:red;"> Vencida</span>');
                                                        }elseif ($hoy['mon']<$cuo->mes_ven) {
                                                            print('<span style="color:lime;"> Al día</span>');
                                                        }elseif ($hoy['mon']=$cuo->mes_ven) {
                                                            if ($hoy['mday']>$cuo->dia_ven) {
                                                                print('<span style="color:red;"> Vencida</span>');
                                                            }elseif ($hoy['mday']<=$cuo->dia_ven) {
                                                                print('<span style="color:lime;"> Al día</span>');
                                                            }
                                                        }
                                                    }
                                                }elseif ($cuo->estado==1) {
                                                    print('<span style="color:yellow;"> Voucher recibido</span>');
                                                }elseif ($cuo->estado==2) {
                                                    print('<span style="color:aqua;"> Cuota pagada</span>');
                                                }
                                            @endphp
                                        </p>
                                    </div>
                                    <div  >
                                        <p class="p-cuotas">
                                            <span class="uk-text-bold">Link de pago:&nbsp</span> 
                                            <br>
                                            <span style="font-size:16px;" class=" uk-button-link manoAzul" type="button"uk-tooltip="title: Link de pago; pos: right" 
                                            onclick="window.open('<?php echo('/cuota/'.$cuo->codigo_cuota);?>')"
                                            >
                                                <i class="fa fa-link"  style="font-size:16px;"></i>
                                            </span>
                                            
                                        </p>
                                    </div>	

                                    <div   >
                                        <p class="p-cuotas">
                                            <span class="uk-text-bold">Comprobante:&nbsp</span>
                                            <br>
                                            @if($cuo->voucher == '0')
                                                Vacío
                                            @else
                                                <span style="font-size:16px;" class=" uk-button-link manoAzul" type="button"uk-tooltip="title: Voucher; pos: right" 
                                                onclick="window.open('<?php echo('/'.$cuo->voucher);?>')"
                                                >
                                                    <i class="fa fa-file-image-o"  style="font-size:16px;"></i>
                                                </span>
                                            @endif
                                        </p>
                                    </div>	

                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            @empty
                <p>Vacío</p>
            @endforelse   


        @endif





    </article>

</div>




@endsection