@extends('header')

@section('title')
Administrador - Alappont
@endsection


@section('content')
<div id="app"><!---VUE-->

<div class="slideLec uk-text-center">
              <h2 class="tituloLec">Crear certificado</h2>

        <hr class="hr-pading">

        <div uk-slider="center: true " class="uk-text-center  ">
            <admin-menures></admin-menures> 
            <hr class="hr-pading">
        </div>
</div>


<div class="uk-text-center " uk-grid>

    <div class="uk-width-1-4@m aulamenu padcero" id="aulamenu">
    	<admin-menu v-bind:user="{{Auth::user()}}"></admin-menu>   
    </div>


    <div class="uk-width-expand@m padceroo aulacontent " id="vid">
      <div>
        <p><strong style="color: red;">*Los controladores están en desarrollo. Si se presenta algún error tomar captura del error que aparece y comunicárselo a Luis al correo: luisalejandromalaga@gmail.com</strong>
        </p>
      </div>
      
      <h3 class="">Crear certificado</h3>
      <hr>

      	<div>
		    	<form class=" formperfil uk-form-horizontal " action="{{route('admin/certificados_create')}}" method="POST" enctype="multipart/form-data">
					@csrf

				    <div class="uk-margin uk-text-left">
				        <label class="uk-form-label" for="form-horizontal-text">NOMBRE DEL USUARIO:</label>

				        <div class="uk-form-controls">
                  <select id="verificar"  class="radfifth uk-select" name="user_name">
                    @foreach ($usuarios as $usuario)
                      <option>ID = {{$usuario->id}} - {{$usuario->name}}</option>
                    @endforeach
                  </select>
                </div>
				      @if($errors->has('name'))
							<div class="uk-text-center">No puedes dejar este campo en blanco.</div>
						  @endif
				    </div>

            <div class="uk-margin uk-text-left">
              <label class="uk-form-label" for="form-horizontal-text">ID del usuario:</label>

              <div class="uk-form-controls">
                  <input class="radfifth uk-input " id="" type="text" name="user_id" value="" >
              </div>
          </div>   


				    <div class="uk-margin uk-text-left">
              <label class="uk-form-label" for="form-horizontal-text">NOMBRE DEL CURSO:</label>

              <div class="uk-form-controls">
                <select id="verificar" class="uk-select radfifth" name="curso_name">
                  @foreach ($cursos as $curso)
                    <option>{{$curso->name}}</option>
                  @endforeach
                </select>
              </div>
              @if($errors->has('name'))
              <div class="uk-text-center">No puedes dejar este campo en blanco.</div>
              @endif
            </div>



            <div class="uk-margin uk-text-left">
                <label class="uk-form-label" for="form-horizontal-text">CÓDIGO ÚNICO:</label>

                <div class="uk-form-controls">
                    <input class="radfifth uk-input " id="" type="text" name="codigo" value="" >
                </div>
            </div>          

            <div class="uk-margin uk-text-left">
                <label class="uk-form-label" for="form-horizontal-text">FECHA DE EMISIÓN:</label>

                <div class="uk-form-controls">
                    <input class="radfifth uk-input " id="" type="date" name="fecha" value="" >
                </div>
            </div> 

            <div class="uk-margin uk-text-left">
              <label class="uk-form-label" for="form-horizontal-text">EN CALIDAD DE...:</label>

              <div class="uk-form-controls">
                <select id="verificar" class="uk-select radfifth" name="calidad">
                    <option>Participante</option>
                    <option>Ponente</option>
                </select>
              </div>
            </div>

            <div class="uk-margin uk-text-left">
              <label class="uk-form-label" for="form-horizontal-text">ARTICULO:</label>

              <div class="uk-form-controls">
                  <input class="radfifth uk-input " id="" type="text" name="articulo" value="" >
              </div>
            </div> 
             				    
				    <div class="uk-margin uk-text-left">
				        <label class="uk-form-label" for="form-horizontal-text">CERTIFICADO EN PDF:</label>

			        <div uk-form-custom="target: true">
			            <input type="file" name="certificado" accept="image/*" required>
			            <input class="uk-input uk-form-width-medium" type="text" placeholder="Selecciona o arrastra un PDF" disabled style="border: solid 2px; border-style: dashed; height:100px; width:400px;" required>
			        </div>
				    </div>

            <hr>

				    <button class="radfifth uk-align-center uk-button uk-button-default" onclick="return confirm('¿Estás seguro de que deseas crear un nuevo certificado? Asegúrate que todos los datos sean correctos.');">Crear nuevo certificado</button> 
  		
      		</form>
        </div>
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
//Esta función controla el display del menu
 /* function myFunction(x) {
    if (x.matches) { // If media query matches
      document.getElementById("aulamenu").style.display = "none";
    }
  }
  var x = window.matchMedia("(max-width: 1600px)")
  myFunction(x) // Call listener function at run time
  x.addListener(myFunction) // Attach listener function on state changes */
</script>
</div>
@endsection
