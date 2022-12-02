@extends('footer')
@extends('header')

@section('title')
Alappont | Aula Virtual
@endsection

@section('content')

<div class="uk-text-left" style="padding: 5px; background:#3F3F3F; color: #f0f2f5;" >
    <!--<span style="font-size:16px; color: #f0f2f5;" class=" uk-button-link uk-text-uppercase " type="button" >Alappont <i class="fa fa-external-link"  style="font-size:16px;"></i> </span>-->
    <span style="font-size:16px;" class="uk-text-uppercase"> Inicio </span>
    <span style="font-size:16px;" class="uk-text-uppercase"> / Aula virtual</span>
    <!--<span style="font-size:16px;" >{ { $cuotas->links() } }</span>-->
</div>




<div class="content " style="width: 100%; display: table;   background-position: center;  /* Center the image *//* Resize the background image to cover the entire container */">
    <div class="" style="display: table-cell; vertical-align: middle; ">

    </div>
</div>



<div class="slideLecCursos menuCurososResponsivo uk-text-center">
        <h2 class="tituloLec">Temas</h2>

        <hr class="hr-pading">

        <div uk-slider="center: true " class="uk-text-center  ">

            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                <ul class="uk-slider-items uk-child-width-1-1@s uk-grid ">
                    <li>
                        <div class="lecciones" onclick="">Derecho</div>
                    </li>
                    <li>
                        <div class="lecciones" onclick="">Psicología</div>
                    </li>

                </ul>

                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

            </div>

        </div>
</div>



<div>
    <div class="cursoMain" >
        <div>

            <div class="cursoMainMain" uk-grid >
                <div class="menuCursos uk-width-1-4@m  uk-text-center">
                    <div><h2 class="tituloLec">Temas</h2></div>
                    <hr>

                    <div><p>Derecho</p></div>
                    <div><p>Psicología</p></div>

                </div>

                <div class="mostradorCursos uk-width-expand@m">
                    <div class="uk-child-width-1-3@l uk-child-width-1-3@m uk-grid-small uk-grid-match" id="mostrador" uk-grid>
                    @forelse($cursos ?? '' as $curso)    
                        <div>
                            <div class=" cardOne uk-card uk-card-secondary uk-card-body ">
                                <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                                    <img  class="imgCursoCard" src="{{asset('/').$curso->avatar}}" alt="" >
                                    <div class="uk-transition-fade uk-position-cover  uk-overlay uk-overlay-default  uk-flex-center uk-flex-middle ">
                                        <div class="uk-text-center">
                                            <h5 class="">{{$curso->name}}</h5>
                                        </div>
                                        <div>
                                            <p class="letrasCursos"><strong class=" negrita ">Duración: </strong>{{$curso->time}}</p>
                                        </div>
                                        <p class="letrasCursos"><strong class="negrita">Acceso: </strong>{{$curso->acceso}}</p>
                                        <p><strong class="negrita letrasCursos" >Se puede obtener certificación</strong></p>
                                        <div class="uk-text-center">
                                            <a href="{{route('cursos/matricula', $curso->url)}}"  class="manoAzul  radfifth uk-button uk-button-default">¡Quiero aprender!</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
        
                    </div>
                    <div class="uk-text-center">
                        <p>Aún no se ha creado ningún curso</p>
                    </div>
                    @endforelse   

                    
                </div>

            </div>



        </div>


    </div>






</div>


<!--Responsivo en Vanilla JS-->
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


<!--Responsivo en Vanilla JS-->
<script>

 function myFunction(x) {
    if (x.matches) { // If media query matches
      document.getElementById("mostrador").classList.remove('uk-child-width-1-2@m');
      document.getElementById("mostrador").classList.add('uk-child-width-1-3@m');
    }
  }
  var x = window.matchMedia("(min-width: 1601px)")
  myFunction(x) // Call listener function at run time
  x.addListener(myFunction) // Attach listener function on state changes 

</script>

@endsection