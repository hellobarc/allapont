@extends('footer')
@extends('header')

@section('title')
Calculadora de muestra | Alappont
@endsection

@section('content')

<style>

</style>

<div class="uk-text-left" style="padding: 5px; background:#3F3F3F; color: #f0f2f5;" >
    <!--<span style="font-size:16px; color: #f0f2f5;" class=" uk-button-link uk-text-uppercase " type="button" >Alappont <i class="fa fa-external-link"  style="font-size:16px;"></i> </span>-->
    <span style="font-size:16px;" class="uk-text-uppercase"> herramientas </span>
    <span style="font-size:16px;" class="uk-text-uppercase"> / calculadora</span>
    <!--<span style="font-size:16px;" >{ { $cuotas->links() } }</span>-->
</div>

<div  class="uk-container uk-container-small" style="margin-top:3%; margin-bottom:3%;">
    <article class="">

        <h2 class="uk-article-title"><a class="uk-link-reset" href="">Calculadora de muestra</a></h2>
        <hr class="">

        <div class="uk-alert-success " uk-alert style="background:#f0f2f5 !important; color:#000 !important; border-radius: 10px;">
            
            <p style="font-size: 110%; "  >Si deseas asesorías personalizada acerca de como realizar tu muestreo contactate con nosotros 
                <a class=" uk-button-text"   target="_blank" style="color:#000 !important;" href="https://api.whatsapp.com/send?phone=51959040954&text=Deseo más información sobre como calcular el tamaño de la muestra para mi investigación" >aquí <i class="fa fa-external-link" aria-hidden="true"></i></a>
        </div>





        
        <p>Cuando estas planificando una investigación debes establecer la cantidad de unidades de estudio de las cuales vas a obtener información. En ocasiones no es viable recolectar información de todas las unidades de estudio, por lo que se recurre a obtener una muestra representativa de la población que permita hacer inferencias válidas. A continuación te presentaremos una calculadora para la muestra cuando la población es conocida, tal vez pueda parecer algo confusa pero pierde cuidado solo se trata de parámetros que debes reemplazar.</p>


        <hr class="">  

        <!--
        \[ \lim_{N \to \infty}\left \lceil \frac{Z^2 N p q }{e^2 (N-1)+Z^2 p q} \right \rceil \]

        -->
        <div class="margin-inv-serv" style="margin-top:50px; border: solid 1px #3E4042; border-radius:10px; ">
            <div style="padding: 10px; " >
                <div class="uk-text-left  " style="border-left: solid 5px #3E4042; padding-left:15px;" >
                    <h2 class="" style="margin:0px">Tamaño de muestra para una población conocida</h2>
                </div>
            </div>
        </div>

        <p>Cuando el tamaño de la población es conocido es conveniente utilizar la siguiente ecuación para el calculo del tamño de la muestra.</p>

        \[ n= \left \lceil \frac{Z^2 N p q }{e^2 (N-1)+Z^2 p q} \right \rceil \]

        Otras formas en las que se enceuntra esta ecuación es:
        \[ n= \left \lceil \frac{\frac{Z^2 p q }{e^2 }} {1+ \frac{Z^2 p q } {e^2 N}  }  \right \rceil \]

        <div class="loginbg " style="margin: 0px;">
            <div class=" logingbcard uk-margin-auto uk-margin-auto-vertical   uk-card-body"  >
                <div id="" class="uk-grid-collapse uk-child-width-expand@s  "  uk-grid style="align-items: center;">



                    <div class="uk-text-center " style="margin-bottom: 20px;">

                        <p class="uk-text-lead" style="font-size: 30px;">El tamaño de tu muestra es</p>
                        <p class="uk-text-lead"  style="font-size: 30px;">\(n= \ \)<span id="muestra" class="uk-text-large">0</span></p> 

                        <button onClick="reiniciar();" class="rad-10 uk-button uk-button-primary" uk-icon="refresh">Reiniciar </button>
                    </div>


                    <div id="parametros" class=" uk-child-width-1-1@m  uk-text-right" >
                        <div>
                            <label for="N">\(N:\) Población</label>
                            <div class="maginBottom10">
                                <input id="N" name="ini" class=" rad-10  uk-input uk-form-width-medium" type="text" placeholder="">
                            </div>
                        </div>

                        <div class="maginBottom10">
                            <label for="Z">\(Z:\) Nivel de confianza</label>
                            <div class="maginBottom10">        
                                <input id="Z" name="in"  value="1.96" class="rad-10 uk-input uk-form-width-medium" type="text" placeholder="">
                            </div>
                        </div>

                        <div >
                            <label for="e">\(e:\) Precisión</label>
                            <div class="maginBottom10">          
                                <input id="e" name="in" value="0.05" class="rad-10 uk-input uk-form-width-medium " type="text" placeholder="">
                            </div>
                        </div>

                        <div >
                            <label for="p">\(p:\) Probabilidad de éxito, o proporción esperada</label>
                            <div class="maginBottom10">    
                                <input id="p" name="in" value="0.5" class="rad-10 uk-input uk-form-width-medium" type="text" placeholder="">
                            </div>
                        </div>

                        <div>
                            <label for="q">\(q:\) Probabilidad de fracaso \( (1-p) \) </label>
                            <div class="maginBottom10">  
                                <input id="q" name="in" value="0.5" class="rad-10 uk-input uk-form-width-medium" type="text" placeholder="">
                            </div>
                        </div>
                    </div>


                    
                </div>
            </div>
        </div>

    </article>

</div>

<script type="text/javascript">
//Esta función controla el centrado de los parametros
    function myFunction(x) {
        if (x.matches) { // If media query matches
            document.getElementById('parametros').classList.add('uk-text-center');
        }
    }
    var x = window.matchMedia("(max-width: 639px)")
    myFunction(x) // Call listener function at run time
    x.addListener(myFunction) // Attach listener function on state changes
</script>

<script type="text/javascript">
function myFunction(x) {
        if (x.matches) { // If media query matches
            document.getElementById('parametros').classList.remove('uk-text-center');
        }
    }
    var x = window.matchMedia("(min-width: 639px)")
    myFunction(x) // Call listener function at run time
    x.addListener(myFunction) // Attach listener function on state changes
</script>

<script type="text/javascript">
    //Calculadora
    document.getElementById("N").addEventListener('input', calcular);  
    document.getElementById("Z").addEventListener('input', calcular);  
    document.getElementById("e").addEventListener('input', calcular);  
    document.getElementById("p").addEventListener('input', calcular);  
    document.getElementById("q").addEventListener('input', calcular);  

    function calcular() {
        var N = document.getElementById("N").value;
        var Z = document.getElementById("Z").value;
        var e = document.getElementById("e").value;
        var p = document.getElementById("p").value;
        var q = document.getElementById("q").value;
        var n = Math.ceil(((Z*Z)*N*p*q)/((e*e)*(N-1)+(Z*Z)*p*q));
        document.getElementById("muestra").innerText = n;
    }

    window.onload = calcular;//Para que se ejecute al inicio

    function reiniciar() {//Se ejecuta cuando se aprieta reiniciar
        var N = document.getElementById("N").value = " ";
        var Z = document.getElementById("Z").value = "1.96";
        var e = document.getElementById("e").value = "0.05";
        var p = document.getElementById("p").value = "0.5";
        var q = document.getElementById("q").value = "0.5";

        function calcular() {
            var N = document.getElementById("N").value;
            var Z = document.getElementById("Z").value;
            var e = document.getElementById("e").value;
            var p = document.getElementById("p").value;
            var q = document.getElementById("q").value;
            var n = Math.ceil(((Z*Z)*N*p*q)/((e*e)*(N-1)+(Z*Z)*p*q));
            document.getElementById("muestra").innerText = n;
        }
        calcular();
    }
</script>



@endsection