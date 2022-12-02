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
<?php print_r($url[0]['titulo']); ?> | Alappont
@endsection


@section('content')


<!--##############################################################################################################################-->



<!-- This is a button toggling the modal -->
<div uk-sticky="offset: 51; bottom: #top" clas="uk-align-center uk-text-center" style="">
    <p  class=" modal-open uk-text-center uk-text-bold text-btn " type="" uk-toggle="target: #modal-example">🔥 ¡Solicita más información! <i class="fa fa-expand" aria-hidden="true"></i> 🔥</p>
</div>


<div class="slideLecCursos menuCurososResponsivo uk-text-center" style="margin-left:13px; margin-right:13px;">
    
    <h2 class="tituloLec"><?php print_r($url[0]['titulo']); ?></h2>

    <div uk-slider="center: true " class="uk-text-center  ">

        <div style="border: solid 1px #3E4042 ;border-radius: 9999px !important; width: 200px !important; margin: auto; ">

            <img style="padding: 35px; !important;" src="{{asset('img/servicios/')}}/<?php print_r($url[0]['imagen_in']); ?>">
        </div>

        <hr class="hr-pading">

        <p class=" uk-text-justify " style=" padding:20px;"><?php print_r($url[0]['texto']); ?></p>

    </div>

</div>



<div class="cursoMain" >

    <div class="cursoMainMain serv-inv-cont" uk-grid >
        <div class="menuCursos uk-width-1-4@m  uk-text-center" style="border-radius: 9999px; background-color: #18191a !important; align-items: center;">


            <!---->
            <div><h2 class="tituloLec"><?php print_r($url[0]['titulo']); ?></h2></div>

            <div style="border: solid 1px #3E4042 ;border-radius: 9999px !important; width: 200px !important; margin: auto; ">

                <img style="padding: 35px; !important;" src="{{asset('img/servicios/')}}/<?php print_r($url[0]['imagen_in']); ?>">
            </div>



            <hr>

            <div id="respuestaEnvNo" class="uk-margin-top" >
            </div>


            <div id="formiNo" >
                <h4>Solicita más información</h4>
                    
                    <form id="formularioNo" class=" formperfil uk-form-horizontal " action="" method="" enctype="multipart/form-data">
                    @csrf

                    <div class="uk-margin" style="display:none;">
                        <div  class="uk-text-left">serv:</div>
                        <div class="">
                            <input id="serv" type="text" class="rad-10 uk-input form-control" name="serv" value="<?php print_r($url[0]['titulo']); ?>" required autocomplete="" >
                        </div>
                    </div>

                    

                    <div class="uk-margin">
                        <div  class="uk-text-left">Escríbenos tu consulta:</div>
                        <div class="">

                            <textarea class="rad-10 uk-textarea" rows="4" placeholder="" name="comentario"  required></textarea>
                        </div>
                    </div>

                    @if(!Auth::check())
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
                    @endif

                    @if(Auth::check())
                    <div class="uk-margin">
                        <div  class="uk-text-left">¿Cuál es tu nombre?:</div>
                        <div class="">

                            <input id="nombre" type="text" class="rad-10 uk-input form-control" name="nombre" value="{{Auth::user()->name}}" required autocomplete="" >
                        </div>
                    </div>

                    <div class="uk-margin">
                        <div  class="uk-text-left">¿Cuál es tu correo?:</div>
                        <div class="">

                            <input id="correo" type="email" class="rad-10 uk-input form-control" name="correo" value="{{Auth::user()->email}}" required autocomplete=""  >
                        </div>
                    </div>


                    <div class="uk-margin">
                        <div  class="uk-text-left">Déjanos tu teléfono:</div>
                        <div class="">

                            <input id="telefono" type="tel" class="rad-10 uk-input form-control " name="telefono" value="{{Auth::user()->celular}}" required autocomplete=""  >
                        </div>
                    </div>
                    @endif


                    <div class="uk-margin" style=" text-align: center; ">
                        {!! htmlFormSnippet(["theme" => "dark"]) !!}

                    </div>


                    <div style=" text-align: center;">
                        <button type="submit"  class="uk-button uk-button-primary  landing-btn-serv uk-text-bold text-btn"  >Enviar</button>
                    </div>  

                </form>

                <div id="respuestaNo" class="uk-margin-top" >
                </div>

            </div>


            <hr>

            <div>
                <h4 ><p clas="uk-text-success">¿No encuentras los que buscas?</p> </h4>
                <p>
                    Solicita más información con uno de nuestros asesores aquí <a href="https://api.whatsapp.com/send?phone=51959040954&text=Deseo más información sobre el servicio de: <?php print_r($url[0]['titulo']); ?>" target="_blank"><i class="fa fa-external-link" aria-hidden="true"></i></a>
                </p>
            </div>

    </div>







    <div class="mostradorCursos uk-width-expand@m">
        <div class=" uk-child-width-1-1@s uk-grid-small uk-grid-match" id="mostrador" uk-grid>
            <div class="uk-text-center">

                <p class=" uk-text-justify serv-inv-desc " style="border: solid 1px #3E4042 ;border-radius: 10px !important; padding:20px;"><?php print_r($url[0]['texto']); ?></p>

                <ul uk-accordion>

                    <?php
                        $sub_servicios = json_decode($url[0]['sub_servicios'], true);
                        #print_r( $sub_servicios);
                    ?>
                    
                    @forelse ($sub_servicios as $sub_servicio)
                        <li class="" style="background: #242526 !important; padding: 20px; border-radius: 10px;">
                            <a class="uk-accordion-title uk-text-left "  style="color: #fff;" href="#">{{$sub_servicio['name']}}  </a>

                            <div class="uk-accordion-content uk-text-left">
                                <hr>
                                {!!$sub_servicio['desc']!!}
                            </div>
                        </li>
                    @empty
                    <p>Sin Sub-servicio</p>
                    @endforelse

                    
                </ul>
            </div>
        </div>

    </div>
</div>




<!-- This is the modal MODAL -->
<div id="modal-example" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-default" type="button" uk-close></button>
            
        <div id="respuestaEnv" class="uk-margin-top" >
        </div>

        <div id="formi">
            <h4>Solicita más información</h4>

            <form id="formulario" class=" formperfil uk-form-horizontal " action="" method="" enctype="multipart/form-data">

                @csrf

                <div class="uk-margin" style="display:none;">
                    <div  class="uk-text-left">serv:</div>
                    <div class="">
                        <input id="serv" type="text" class="rad-10 uk-input form-control" name="serv" value="<?php print_r($url[0]['titulo']); ?>" required autocomplete="" >
                    </div>
                </div>
                
                <div class="uk-margin">
                    <div  class="uk-text-left">Escríbenos tu consulta:</div>
                    <div class="">

                        <textarea class="rad-10 uk-textarea" rows="4" placeholder="" name="comentario"  required></textarea>
                    </div>
                </div>


                @if(!Auth::check())

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
                @endif


                @if(Auth::check())


                <div class="uk-margin">
                    <div  class="uk-text-left">¿Cuál es tu nombre?:</div>
                    <div class="">

                        <input id="nombre" type="text" class="rad-10 uk-input form-control" name="nombre" value="{{Auth::user()->name}}" required autocomplete="" >
                    </div>
                </div>

                <div class="uk-margin">
                    <div  class="uk-text-left">¿Cuál es tu correo?:</div>
                    <div class="">

                        <input id="correo" type="email" class="rad-10 uk-input form-control" name="correo" value="{{Auth::user()->email}}" required autocomplete=""  >
                    </div>
                </div>


                <div class="uk-margin">
                    <div  class="uk-text-left">Déjanos tu teléfono:</div>
                    <div class="">

                        <input id="telefono" type="tel" class="rad-10 uk-input form-control " name="telefono" value="{{Auth::user()->celular}}" required autocomplete=""  >
                    </div>
                </div>
                @endif




                <div class="uk-margin" style=" text-align: center; ">
                    {!! htmlFormSnippet(["theme" => "dark"]) !!}

                </div>



                <div style=" text-align: center;">
                    <button type="submit" class=" btn-modal  uk-text-bold text-btn uk-button uk-button-primary " >Enviar</button>
                </div>  
            </form>
            
        <div>

            <div id="respuesta" class="uk-margin-top" >
            </div>

            <hr>

            <div>
                <h4 ><p clas="uk-text-success">¿No encuentras los que buscas?</p> </h4>
                <p>
                    Solicita más información con uno de nuestros asesores aquí <a href="https://api.whatsapp.com/send?phone=51959040954&text=Deseo más información sobre el servicio de: <?php print_r($url[0]['titulo']); ?>" target="_blank"><i class="fa fa-external-link" aria-hidden="true"></i></a>
                </p>
            </div>

    </div>
</div>




<script>
    var formularioNo = document.getElementById("formularioNo");
    var respuestaNo = document.getElementById("respuestaNo");
    var respuestaEnvNo = document.getElementById("respuestaEnvNo");

    var formiNo = document.getElementById("formiNo");
    
    formularioNo.addEventListener('submit', function(e){
        e.preventDefault();//para evitar que se altualice la página al mandar el submit
        var datosNo = new FormData(formularioNo);
        fetch('/user/new_comment', {
            method: 'POST',
            headers:{
                "Content-Type": "application/json",
                "Accept": "application/json, text-plain, */*",
                "X-Requested-With": "XMLHttpRequest",
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            credentials: "same-origin",
            body: JSON.stringify({
                comentario: datosNo.get('comentario'),
                nombre: datosNo.get('nombre'),
                correo: datosNo.get('correo'),
                telefono: datosNo.get('telefono'),
                serv: datosNo.get('serv'),
                recaptcha: datosNo.get('g-recaptcha-response'),
            })
        })
        .then( res => res.json( ) )
        .then( data => {
            console.log(data)
            if ( data==='error' ) {
                respuestaNo.innerHTML = `
                    <div id="" class="uk-alert-primary" uk-alert >
                        <a class="uk-alert-close" uk-close></a>
                        <p>Debes demostrar que no eres un Robot 🤖</p>
                    </div>
                `
            } else if (data==='bien') {
                formiNo.style.display = "none";

                respuestaEnvNo.innerHTML = `
                    <div id="" class="" >
                        <p>Formulario recibido. ¡Nos contactaremos contigo en breve! 🚀</p>
                    </div>
                    <button type="submit" class=" btn-modal  uk-text-bold text-btn uk-button uk-button-primary " onClick="window.location.href=window.location.href">Enviar otra solicitud</button>
                `
            }

        })
    });
</script>






<script>
    var formulario = document.getElementById("formulario");
    var respuesta = document.getElementById("respuesta");
    var respuestaEnv = document.getElementById("respuestaEnv");

    var formi = document.getElementById("formi");
    
    formulario.addEventListener('submit', function(e){
        e.preventDefault();//para evitar que se altualice la página al mandar el submit
        var datos = new FormData(formulario);
        fetch('/user/new_comment', {
            method: 'POST',
            headers:{
                "Content-Type": "application/json",
                "Accept": "application/json, text-plain, */*",
                "X-Requested-With": "XMLHttpRequest",
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            credentials: "same-origin",
            body: JSON.stringify({
                comentario: datos.get('comentario'),
                nombre: datos.get('nombre'),
                correo: datos.get('correo'),
                telefono: datos.get('telefono'),
                serv: datos.get('serv'),
                recaptcha: datos.get('g-recaptcha-response'),
            })
        })
        .then( res => res.json( ) )
        .then( data => {
            console.log(data)
            if ( data==='error' ) {
                respuesta.innerHTML = `
                    <div id="" class="uk-alert-primary" uk-alert >
                        <a class="uk-alert-close" uk-close></a>
                        <p>Debes demostrar que no eres un Robot 🤖</p>
                    </div>
                `
            } else if (data==='bien') {
                formi.style.display = "none";

                respuestaEnv.innerHTML = `
                    <div id="" class="" >
                        <p>Formulario recibido. ¡Nos contactaremos contigo en breve! 🚀</p>
                    </div>
                    <button type="submit" class=" btn-modal  uk-text-bold text-btn uk-button uk-button-primary " onClick="window.location.href=window.location.href">Enviar otra solicitud</button>
                `

            }

        })
    });
</script>









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