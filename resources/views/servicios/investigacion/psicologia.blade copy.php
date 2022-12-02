@extends('footer')
@extends('header')

{!! htmlScriptTagJsApi() !!}

<style>
.g-recaptcha{
display: inline-block; 
}

@media screen and (max-width: 1500px) {
    .g-recaptcha{
        width: 170px;

        border-radius: 6px;
        border-right: 1px solid #3a3b3c;
        overflow: hidden;
    }
}  
</style>

@section('title')
Tesis en Psicología - Alappont
@endsection



<script src="https://www.google.com/recaptcha/api.js" async defer></script>
@section('content')


<!--##############################################################################################################################-->




<!-- This is a button toggling the modal -->
<div uk-sticky="offset: 51; bottom: #top" clas="uk-align-center uk-text-center" style="">
    <p  class=" modal-open uk-text-center uk-text-bold text-btn " type="" uk-toggle="target: #modal-example">🔥 ¡Solicita más información! <i class="fa fa-expand" aria-hidden="true"></i> 🔥</p>
</div>

<div class="slideLecCursos menuCurososResponsivo uk-text-center" style="margin-left:13px; margin-right:13px;">
   
   
   
   
    <h2 class="tituloLec">Investigación en psicología</h2>
    

    <div uk-slider="center: true " class="uk-text-center  ">

            <div style="border: solid 1px #3E4042 ;border-radius: 9999px !important; width: 200px !important; margin: auto; ">
                <img style="padding: 35px; !important;" src="{{asset('img/servicios/psi.svg')}}">
            </div>
    <hr class="hr-pading">

            <p class=" uk-text-justify " style=" padding:20px;">La psicología es la ciencia que estudia el comportamiento de los seres vivos, en los últimos tiempos ha adquirido un rol cada vez más importante en la sociedad en la medida en que los descubrimientos de está ciencia son empleados para la solución de problemas en distintas áreas como la clínica, educativa, social, organizacional y jurídico forense.</p>
    

    </div>

    
</div>





<div>
<div class="cursoMain" >
<div>
    <div class="cursoMainMain serv-inv-cont" uk-grid >
        <div class="menuCursos uk-width-1-4@m  uk-text-center" style="border: solid 1px #3E4042 ;border-radius: 9999px; background-color: #18191a !important; align-items: center;">





            <div><h2 class="tituloLec">Investigación en psicología</h2></div>

            <div style="border: solid 1px #3E4042 ;border-radius: 9999px !important; width: 200px !important; margin: auto; ">
                <img style="padding: 35px; !important;" src="{{asset('img/servicios/psi.svg')}}">
            </div>

            <hr>

            <h4>Solicita más información</h4>
                
                <form class=" formperfil uk-form-horizontal " action="{{route('user/new_comment')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="uk-margin">
                        <div  class="uk-text-left">Escríbenos tu consulta:</div>
                        <div class="">

                            <textarea class="rad-10 uk-textarea" rows="4" placeholder="" name="comentario"  required></textarea>
                        </div>
                    </div>


                    <div class="uk-margin">
                        <div  class="uk-text-left">¿Cuál es tu nombre?:</div>
                        <div class="">

                            <input id="nombre" type="text" class="rad-10 uk-input form-control" name="nombre" value="" required autocomplete="" >
                        </div>
                    </div>

                    <div class="uk-margin">
                        <div  class="uk-text-left">¿Cuál es tu correo?:</div>
                        <div class="">

                            <input id="correo" type="email" class="rad-10 uk-input form-control" name="correo" value="" required autocomplete=""  >
                        </div>
                    </div>


                    <div class="uk-margin">
                        <div  class="uk-text-left">Déjanos tu teléfono:</div>
                        <div class="">

                            <input id="telefono" type="tel" class="rad-10 uk-input form-control " name="telefono" value="" required autocomplete=""  >
                        </div>
                    </div>

                    <div class="uk-margin" style=" text-align: center;">
                        {!! htmlFormSnippet(["theme" => "dark"]) !!}
                    </div>

                    <div style=" text-align: center;">
                        <button class="uk-button uk-button-primary  landing-btn-serv uk-text-bold text-btn"  >Enviar</button>
                    </div>  
                </form>


            <hr>

            <div>
                <h4 ><p clas="uk-text-success">¿No encuentras los que buscas?</p> </h4>
                <p>
                    Solicita más información con uno de nuestros asesores aquí <a href="" ><i class="fa fa-external-link" aria-hidden="true"></i></a>
                </p>
            </div>

    </div>

    <div class="mostradorCursos uk-width-expand@m">
        <div class=" uk-child-width-1-1@s uk-grid-small uk-grid-match" id="mostrador" uk-grid>
            <div class="uk-text-center">

                <p class=" uk-text-justify serv-inv-desc " style="border: solid 1px #3E4042 ;border-radius: 10px !important; padding:20px;">La psicología es la ciencia que estudia el comportamiento de los seres vivos, en los últimos tiempos ha adquirido un rol cada vez más importante en la sociedad en la medida en que los descubrimientos de está ciencia son empleados para la solución de problemas en distintas áreas como la clínica, educativa, social, organizacional y jurídico forense.</p>




<!-- This is the modal -->
<div id="modal-example" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-default" type="button" uk-close></button>


            <h4>Solicita más información</h4>

            <form class=" formperfil uk-form-horizontal " action="{{route('user/new_comment')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="uk-margin">
                    <div  class="uk-text-left">Escríbenos tu consulta:</div>
                    <div class="">

                        <textarea class="rad-10 uk-textarea" rows="4" placeholder="" name="comentario"  required></textarea>
                    </div>
                </div>


                <div class="uk-margin">
                    <div  class="uk-text-left">¿Cuál es tu nombre?:</div>
                    <div class="">

                        <input id="nombre" type="text" class="rad-10 uk-input form-control" name="nombre" value="" required autocomplete="" >
                    </div>
                </div>

                <div class="uk-margin">
                    <div  class="uk-text-left">¿Cuál es tu correo?:</div>
                    <div class="">

                        <input id="correo" type="email" class="rad-10 uk-input form-control" name="correo" value="" required autocomplete=""  >
                    </div>
                </div>


                <div class="uk-margin">
                    <div  class="uk-text-left">Déjanos tu teléfono:</div>
                    <div class="">

                        <input id="telefono" type="tel" class="rad-10 uk-input form-control " name="telefono" value="" required autocomplete=""  >
                    </div>
                </div>

                <div class="uk-margin" style=" text-align: center; ">
                    {!! htmlFormSnippet(["theme" => "dark"]) !!}
                    @error('g-recaptcha-response')
                        <span class="invalid-feedback" role="alert" style="display: block;">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div style=" text-align: center;">
                    <button class=" btn-modal  uk-text-bold text-btn uk-button uk-button-primary " >Enviar</button>
                </div>  
            </form>

            <hr>

            <div>
                <h4 ><p clas="uk-text-success">¿No encuentras los que buscas?</p> </h4>
                <p>
                    Solicita más información con uno de nuestros asesores aquí <a href="" ><i class="fa fa-external-link" aria-hidden="true"></i></a>
                </p>
            </div>






    </div>
</div>




                <ul uk-accordion>


                    <li class="" style="background: #242526 !important; padding: 20px; border-radius: 10px;">
                        <a class="uk-accordion-title uk-text-left "  style="color: #fff;" href="#">Planteamiento del problema, Justificación e Importancia  </a>

                        <div class="uk-accordion-content uk-text-left">
                            <hr>
                            <p>Planteamiento del problema contextualizando datos a nivel nacional e internacional</p>

                            <p>Justificación teórica, practica metodológica</p>

                            <p>Aportes teóricos, aporte social</p>

                            <a href="" >Contactate con un asesor aquí <i class="fa fa-external-link" aria-hidden="true"></i></a> 
                        </div>
                    </li>

                    <li class="" style="background: #242526 !important; padding: 20px; border-radius: 10px;">
                        <a class="uk-accordion-title  uk-text-left"  style="color: #fff;" href="#">Objetivos, Preguntas e Hipótesis</a>

                        <div class="uk-accordion-content uk-text-left">
                            <hr>
                            <p>Asesoría en la redacción y planteamiento de los objetivos, las preguntas y las hipótesis de la investigacion, tanto nacionales como internacionales.</p>

                            <a href="" >Contactate con un asesor aquí <i class="fa fa-external-link" aria-hidden="true"></i></a> 

                        </div>
                    </li>

                    <li class="" style="background: #242526 !important; padding: 20px; border-radius: 10px;">
                        <a class="uk-accordion-title uk-text-left"  style="color: #fff;" href="#">Bases teóricas</a>

                        <div class="uk-accordion-content uk-text-left">
                            <hr>
                            <p>Asesoría en la redacción del marco teórico y la defenición de conceptos básicos.</p>

                            <a href="" >Contactate con un asesor aquí <i class="fa fa-external-link" aria-hidden="true"></i></a> 
                        </div>
                    </li>



                    <li class="" style="background: #242526 !important; padding: 20px; border-radius: 10px;">
                        <a class="uk-accordion-title uk-text-left"  style="color: #fff;" href="#">Antecedentes de investigación</a>

                        <div class="uk-accordion-content">
                            <hr>
                            <p>Redacción </p>
                        </div>
                    </li>


                    <li class="" style="background: #242526 !important; padding: 20px; border-radius: 10px;">
                        <a class="uk-accordion-title uk-text-left"  style="color: #fff;" href="#">Diseño metodológico</a>

                        <div class="uk-accordion-content">
                            <hr>
                            <p>Redacción </p>
                        </div>
                    </li>



                    <li class="" style="background: #242526 !important; padding: 20px; border-radius: 10px;">
                        <a class="uk-accordion-title uk-text-left"  style="color: #fff;" href="#">Definición de la población y calculo del tamaño de muestra</a>

                        <div class="uk-accordion-content">
                            <hr>
                            <p>Redacción </p>
                        </div>
                    </li>


                    
                    <li class="" style="background: #242526 !important; padding: 20px; border-radius: 10px;">
                        <a class="uk-accordion-title uk-text-left "  style="color: #fff;" href="#">Selección de variables e instrumentos</a>

                        <div class="uk-accordion-content">
                            <hr>
                            <p>Redacción </p>
                        </div>
                    </li>


                    <li class="" style="background: #242526 !important; padding: 20px; border-radius: 10px;">
                        <a class="uk-accordion-title uk-text-left "  style="color: #fff;" href="#">Creación, adaptación y validación de instrumentos</a>

                        <div class="uk-accordion-content">
                            <hr>
                            <p>Redacción </p>
                        </div>
                    </li>


                    <li class="" style="background: #242526 !important; padding: 20px; border-radius: 10px;">
                        <a class="uk-accordion-title uk-text-left"  style="color: #fff;" href="#">Elaboración del plan de recoleccción y análisis de datos</a>

                        <div class="uk-accordion-content">
                            <hr>
                            <p>Redacción </p>
                        </div>
                    </li>

                    <li class="" style="background: #242526 !important; padding: 20px; border-radius: 10px;">
                        <a class="uk-accordion-title uk-text-left"  style="color: #fff;" href="#">Matriz de consistencia.</a>

                        <div class="uk-accordion-content">
                            <hr>
                            <p>Redacción </p>
                        </div>
                    </li>

                    <li class="" style="background: #242526 !important; padding: 20px; border-radius: 10px;">
                        <a class="uk-accordion-title uk-text-left"  style="color: #fff;" href="#">Estadística descriptiva</a>

                        <div class="uk-accordion-content">
                            <hr>
                            <p>Redacción </p>
                        </div>
                    </li>



                    <li class="" style="background: #242526 !important; padding: 20px; border-radius: 10px;">
                        <a class="uk-accordion-title uk-text-left "  style="color: #fff;" href="#">Inferencia estadística y prueba de hipótesis</a>

                        <div class="uk-accordion-content">
                            <hr>
                            <p>Redacción </p>
                        </div>
                    </li>


                    
                    <li class="" style="background: #242526 !important; padding: 20px; border-radius: 10px;">
                        <a class="uk-accordion-title uk-text-left "  style="color: #fff;" href="#">Discusión, Conclusión y Recomendaciones.</a>

                        <div class="uk-accordion-content">
                            <hr>
                            <p>Redacción </p>
                        </div>
                    </li>

                                        
                    <li class="" style="background: #242526 !important; padding: 20px; border-radius: 10px;">
                        <a class="uk-accordion-title uk-text-left"  style="color: #fff;" href="#">Resúmen, Abstract e introducción</a>

                        <div class="uk-accordion-content">
                            <hr>
                            <p>Redacción </p>
                        </div>
                    </li>

                    <li class="" style="background: #242526 !important; padding: 20px; border-radius: 10px;">
                        <a class="uk-accordion-title uk-text-left"  style="color: #fff;" href="#">Formato, correción de la redacción y el estilo</a>

                        <div class="uk-accordion-content">
                            <hr>
                            <p>Redacción </p>
                        </div>
                    </li>


                    <li class="" style="background: #242526 !important; padding: 20px; border-radius: 10px;">
                        <a class="uk-accordion-title uk-text-left"  style="color: #fff;" href="#">Traducción y redacción en diferentes idiomas</a>

                        <div class="uk-accordion-content">
                            <hr>
                            <p>Redacción </p>
                        </div>
                    </li>

                    
                    <li class="" style="background: #242526 !important; padding: 20px; border-radius: 10px;">
                        <a class="uk-accordion-title uk-text-left"  style="color: #fff;" href="#">Revisión de manuscritos y generación de informes antiplagio</a>

                        <div class="uk-accordion-content">
                            <hr>
                            <p>Redacción </p>
                        </div>
                    </li>

                    <li class="" style="background: #242526 !important; padding: 20px; border-radius: 10px;">
                        <a class="uk-accordion-title uk-text-left"  style="color: #fff;" href="#">Asesoría académica integral</a>

                        <div class="uk-accordion-content">
                            <hr>
                            <p>Redacción </p>
                        </div>
                    </li>

                </ul>
            </div>
        </div>

    </div>



</div>


</div>






</div>


<!--Responsivo en Vanilla JS
<script>

function myFunction(x) {
if (x.matches) { // If media query matches
document.getElementById("mostrador").classList.remove('uk-child-width-1-3@m');
document.getElementById("mostrador").classList.add('uk-child-width-1-2@m');
}
}


var x = window.matchMedia("(max-width: 1600px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes 


</script>

-->











@endsection