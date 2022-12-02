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
Asesoría en investigación científica | Alappont 
@endsection

@section('content')
<div class="uk-text-left" style="padding: 5px; background:#3F3F3F; color: #f0f2f5;" >
    <!--<span style="font-size:16px; color: #f0f2f5;" class=" uk-button-link uk-text-uppercase " type="button" >Alappont <i class="fa fa-external-link"  style="font-size:16px;"></i> </span>-->
    <span style="font-size:16px;" class="uk-text-uppercase"> Inicio </span>
    <span style="font-size:16px;" class="uk-text-uppercase"> / Asesoría en Investigación</span>
    <!--<span style="font-size:16px;" >{ { $cuotas->links() } }</span>-->
</div>



<article>

<style>
.margin-inv-serv{
    margin-left: 200px; 
    margin-right: 200px; 
    margin-bottom:50px; 
}

@media screen and (max-width: 1500px) {
    .margin-inv-serv{
    margin-left: 80px; 
    margin-right: 80px; 
    margin-bottom:50px; 
    }
}  

@media screen and (max-width:960px) {
    .margin-inv-serv{
    margin-left: 200px; 
    margin-right: 200px; 
    margin-bottom:50px; 
    }
}

@media screen and (max-width:760px) {
    .margin-inv-serv{
    margin-left: 100px; 
    margin-right: 100px; 
    margin-bottom:50px; 
    }
} 

@media screen and (max-width:500px) {
    .margin-inv-serv{
    margin-left: 15px; 
    margin-right: 15px; 
    margin-bottom:50px; 
    }
}  
</style>

<!--Responsivo en Vanilla JS
<script>
window.onload =  {
function myFunction(x) {
        if (390 < currentPosition ){
            document.getElementById("subHead").style.display = 'none';
        }
        else{
            document.getElementById("subHead").style.display = 'none';
        }
}
var x = window.pageYOffset || document.documentElement.scrollTop;
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes 
}  

    
</script>-->




<!--Responsivo en Vanilla JS
<script>
window.onload = function() {
    
    currentPosition = window.pageYOffset || document.documentElement.scrollTop;
        if (390 < currentPosition ){
            document.getElementById("subHead").style.display = 'block';
        }
        else{
            document.getElementById("subHead").style.display = 'none';
        }
    window.addEventListener('scroll', function(){
        currentPosition = window.pageYOffset || document.documentElement.scrollTop;
        if (390 < currentPosition ){
            document.getElementById("subHead").style.display = 'block';
        }
        else{
            document.getElementById("subHead").style.display = 'none';
        }
    });
}
</script>-->
<!-- This is a button toggling the modal -->
<div uk-sticky="offset: 51; bottom: #top" clas="uk-align-center uk-text-center" style="">
    <p  class=" modal-open uk-text-center uk-text-bold text-btn " type="" uk-toggle="target: #modal-example">🔥 ¡Solicita más información! <i class="fa fa-expand" aria-hidden="true"></i> 🔥</p>
</div>

<div class="margin-inv-serv" style="margin-top:50px; border: solid 1px #3E4042; border-radius:10px; ">

    <div style="padding: 20px; " >
        <div class="uk-text-left  " style="border-left: solid 5px #3E4042; padding-left:15px;" >
            <h2 class="uk-text-uppercase">Asesoría en investigación científica</h2>
        </div>

        <div style="" class="">
            <p style="font-size: 120%;">Somos una empresa que tiene como base la investigación y el desarrollo de tecnología. Brindamos asesoría a personas y empresas que deseen realizar investigación científica y generar nuevo conocimiento. A continuación, podrás encontrar todos aquellos dominios del conocimiento en los que nos hemos especializado. </p> 
            <div >

            <div class="uk-alert-success" uk-alert style="background:#f0f2f5 !important; color:#000 !important; border-radius: 10px;">
                
                <p style="font-size: 120%; " >Si deseas más información sobre nuestros servicios 
                 <a class=" uk-button-text  " uk-toggle="target: #modal-example"  style=" color:#000 !important;"  >Dejamos tus datos <i class="fa fa-external-link" aria-hidden="true"></i></a> o 
 
                 <a class=" uk-button-text " style=" color:#000 !important;" href="https://api.whatsapp.com/send?phone=51959040954&text=Deseo más información sobre el servicio de: Asesoría en investigación científica" target="_blank">Chatea con un asesor <i class="fa fa-external-link" aria-hidden="true"></i></a> 
            </div>



            </div>
        </div>
    </div>
</div>









<div style="" class="margin-inv-serv">
    <div class="uk-child-width-1-3@l  uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-small uk-grid-match" uk-grid>
        @forelse ( $servis as $servi )
        @if($servi->tipo=="Tesis")
        <div >
            <div class="uk-card uk-card-default manoAzul bg-blanco cardtop  radcard " onclick="window.location.href = '{{ url('servicios/investigacion/'.$servi->url)}}';"s>
                <div class="uk-card-media-top  uk-inline-clip uk-transition-toggle rad-10">
                    <img class="uk-transition-scale-up uk-transition-opaque radimg" src="{{asset('img/servicios/')}}/{{$servi->imagen_car}}" alt="">
                </div>
                <div class="uk-card-body ">
                    <a class="uk-button uk-button-text " style="font-size: 1.3rem;">{{$servi->titulo}} </a>
                    <p class="uk-text-truncate">{{$servi->texto}}</p>
                </div>
            </div>
        </div>
        @endif

        @empty
            <p>No hay servicios.</p>
        @endforelse 
    </div>
</div>



<div class="margin-inv-serv" style="margin-top:50px; border: solid 1px #3E4042; border-radius:10px; ">
    <div style="padding: 20px; " >
        <div class="uk-text-left  " style="border-left: solid 5px #3E4042; padding-left:15px;" >
            <h2 class="uk-text-uppercase" style="margin:0px">Servicios especializados en investigación</h2>
        </div>
    </div>
</div>

<div style="" class="margin-inv-serv">
    <div class="uk-child-width-1-3@l  uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-small uk-grid-match" uk-grid>






        @forelse ( $servis as $servi )
        @if($servi->tipo=="Especializado")
        <div >
            <div class="uk-card uk-card-default manoAzul bg-blanco cardtop  radcard " onclick="window.location.href = '{{ url('servicios/investigacion/'.$servi->url)}}';"s>
                <div class="uk-card-media-top  uk-inline-clip uk-transition-toggle rad-10">
                    <img class="uk-transition-scale-up uk-transition-opaque radimg" src="{{asset('img/servicios/')}}/{{$servi->imagen_car}}" alt="">
                </div>
                <div class="uk-card-body ">
                    <a class="uk-button uk-button-text " style="font-size: 1.3rem;">{{$servi->titulo}} </a>
                    <p class="uk-text-truncate">{{$servi->texto}}</p>
                </div>
            </div>
        </div>
        @endif
        @empty
            <p>No hay servicios.</p>
        @endforelse 
        

    </div>
</div>





<div class="margin-inv-serv" style="margin-top:50px; border: solid 1px #3E4042; border-radius:10px; ">
    <div style="padding: 20px; " >
        <div class="uk-text-left  " style="border-left: solid 5px #3E4042; padding-left:15px;" >
            <h2 class="uk-text-uppercase">¿No encuentras lo que buscas? :(</h2>
        </div>


            <div class="uk-alert-success" uk-alert style="background:#f0f2f5 !important; color:#000 !important; border-radius: 10px;">
                
                <p style="font-size: 120%; " >Estamos seguros que podemos ayudarte, solicita más información:
                <a class=" uk-button-text " uk-toggle="target: #modal-example"  style=" color:#000 !important; "  >Dejamos tus datos <i class="fa fa-external-link" aria-hidden="true"></i></a> o 
                
                
                <a class=" uk-button-text " style=" color:#000 !important;" href="https://api.whatsapp.com/send?phone=51959040954&text=Deseo más información sobre el servicio de: Asesoría en investigación científica" target="_blank">Chatea con un asesor <i class="fa fa-external-link" aria-hidden="true"></i></a> 
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
                        <input id="serv" type="text" class="rad-10 uk-input form-control" name="serv" value="Asesoría en investigación científica" required autocomplete="" >
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
                    Solicita más información con uno de nuestros asesores aquí <a href="https://api.whatsapp.com/send?phone=51959040954&text=Deseo más información sobre el servicio de: Asesoría en investigación científica" target="_blank"><i class="fa fa-external-link" aria-hidden="true"></i></a>
                </p>
            </div>

    </div>
</div>
<!--END OF  the modal MODAL -->
          


</article>






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




@endsection