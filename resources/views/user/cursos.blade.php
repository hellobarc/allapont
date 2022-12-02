@extends('footer')
@extends('header')

@section('title')
Aula Virtual - Alappont
@endsection

@section('content')


</nav>







<div class="uk-text-center uk-margin-top">
    <h3>Mis Cursos</h3>
</div>
<hr>


<div>
    <div class="cursoMain" >

            <div class="cursoMainMain" uk-grid >


                <div class="mostradorCursos ">
                    <div class="uk-child-width-1-4@m uk-grid-small uk-grid-match" id="mostrador" uk-grid>
                        @forelse($cursos ?? '' as $curso)    
                        <div>
                            <div class=" cardOne uk-card uk-card-secondary uk-card-body ">
                                <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                                    <img  class="imgCursoCard" src="{{asset('/').$curso->avatar}}" alt="" >
                                    <div class="uk-transition-fade uk-position-cover  uk-overlay uk-overlay-default  uk-flex-center uk-flex-middle ">
                                        <div class="uk-text-center">
                                            <h4 class="">{{$curso->name}}</h4>
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
                        <p>Aún no estas inscrito en ningún curso.</p>
                    </div>
                    @endforelse   
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