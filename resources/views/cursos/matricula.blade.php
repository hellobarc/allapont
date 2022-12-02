@extends('footer')
@extends('header')

@section('title')
{{$curso->name}} - Alappont
@endsection

@section('content')






<div class="matriculaCont" style="">

        <div class="uk-text-center matriculaTitle matriculaTit1" style="">
          <h2 style="margin-bottom: 0px !important;">{{$curso->name}}</h2>
        </div>

        <div class="imgMatriculaRes uk-text-center" style="margin-left: 40px; margin-right:40px" >
          <img src="{{asset('/').$curso->avatar}}" class="  centerImg" style="width: 350px; border-radius: 10px;">
          
          <div class="matriculaTitle matriculaMargCeroBut uk-margin-top" >
            <h3 class="matriculaMargCeroBut">Descripción</h3>
          </div>
          
          <div style="margin: 20px;" class="uk-text-left">
            <p>{{$curso->descripcion}}</p>
            
          </div>

          <div class="uk-text-center ">
            <div class="  uk-margin-top manoAzul  radfifth uk-button uk-button-default" onclick="window.location.href = '{{ url('cursos'.'/'.$curso->url)}}';" >Ir al curso</div>
          </div>

        </div>

        <div class="contentMatricula" uk-grid >

          <div class="uk-width-expand@m  cursoContent" id="vid">
                <div class="" >



                  <div  class="uk-text-center" >
                    
                  </div>
                  <div class="matriculaTitle matriculaMargCeroBut" >
                    <h3 class="matriculaMargCeroBut">Contenido del curso</h3> 
                  </div>
                  
                  @foreach(json_decode($curso->contenido, true) as $key => $value)
                    <div class="uk-margin-bottom uk-padding-small" style="background:#242526; margin-top: 20px; border-radius:10px; ">
                      • {{ $value }}
                    </div>
                  @endforeach

                  <div class="matriculaTitle matriculaMargCeroBut"  >
                    <h3 class="matriculaMargCeroBut">Instructor(es)</h3>
                  </div>

                  <div class="uk-child-width-1-4@m" id="mostrador" style="margin-top: 20px; " uk-grid>
                    @foreach(json_decode($curso->instructor, true) as $key => $value)
                      <div>
                        <div class=" cardOne uk-card uk-card-body ">
                            <div class="uk-inline-clip uk-transition-toggle uk-text-center resPonentes" tabindex="0">
                                <img  class="imgCursoCard imgPonentes" src="{{asset('courses/instructores').'/'.$value[1]}}" style="border-radius:10000px;" >
                            </div>
                        </div>
                        <div class="uk-text-center"><p>{{ $value[0] }}</p></div>
                      </div>
                    @endforeach 
                  </div>

                </div>
          </div>



            <div class="uk-width-1-4@m  padcero matriculaMenu  " id="aulamenu" style=" background: #242526; padding: 0px !important; border-radius: 10px 10px 10px 10px;">
              <img src="{{asset('/').$curso->avatar}}" class="" style="width: 350px; border-radius: 10px 10px 0px 0px;">
              <div class="uk-margin-top uk-text-center ">
                <h3 class="matriculaMargCeroBut ">Descripción:</h3>
                
              </div>
              <div style="margin: 20px;" class="uk-text-left">
                <p>{{$curso->descripcion}}</p>
              </div>
              <div class="uk-text-center ">
                <div class=" uk-margin-bottom uk-margin-top manoAzul  radfifth uk-button uk-button-default" onclick="window.location.href = '{{ url('cursos'.'/'.$curso->url)}}';" >Ir al curso</div>
              </div>
            </div>


        </div>





        
        <div class="payMatricula usermenu  uk-text-center  " id="aulamenu" style=" ">
            <div>
              <h3>Adquiere un certificado por tu participación</h3>
            </div>
            <div>
              <p>Número de cuenta BCP: 215-97978460-0-35</p>  
            </div>
            <div>
              <p>CCI: 00221519797846003529</p>  
            </div>
            <img src="{{asset('img/logosEmpresas/bcp.svg')}}" alt="" style="width: 200px;">

            <p>Precio: S/ {{$curso->precio}}</p>

                @if(!Auth::check())
                <div id="matricula">
                    <p>Inicia sesión para matricularte</p>
                </div>                
                @endif

                @if(Auth::check())
                <div id="matricula">
                      <form action="{{route('matricula')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="id_curso" value="{{$curso->id}}" style="display: none;">
                        <input type="text" name="curso_url" value="{{$curso->url}}" style="display: none;">
                        <input type="text" name="name" value="{{$curso->name}}" style="display: none;">
                        <input type="text" name="precio" value="{{$curso->precio}}" style="display: none;">
                        <input type="text" name="avatar" value="{{$curso->avatar}}" style="display: none;">
                        <div class="manoAzul" uk-form-custom="target: true" style="width: 300px;" uk-form-custom>
                            <input class="manoAzul" type="file" name="voucher" accept="image/*" required>
                            <input class="manoAzul uk-input uk-form-width-medium" type="text" placeholder="Selecciona o arrastra tu voucher" disabled style="border: solid 2px; border-style: dashed; height: 100px; width: 400px; border-radius: 10px;" required>
                        </div>

                        <br>
                        <br>
                        <button class="manoAzul  radfifth uk-button uk-button-default">Adquirir certificado</button>
                      </form>
                </div>
                @endif


        </div>
        


</div>


<!--Alert de datos recibidos-->
<script>
  var msg = '{{Session::get('alert')}}';
  var exist = '{{Session::has('alert')}}';
  if(exist){
    alert(msg);
  }
</script>
<!--END Alert de datos recibidos-->



<script>
  /*
  var mostrador = documentGetElementById('mostrador'),

  function myFunction(x) {
       if (x.matches) { // If media query matches
        mostrador.removeAttribute(uk-grid);
       }
     }
   
  var x = window.matchMedia("(max-width: 959px)")
  myFunction(x) // Call listener function at run time
  x.addListener(myFunction) // Attach listener function on state changes   
     */
</script>
  

@endsection