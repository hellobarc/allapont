@extends('header')

@section('title')
Administrador - Alappont
@endsection

@section('content')

<div id="app"><!---VUE-->


<div class="slideLec uk-text-center">
              <h2 class="tituloLec">Crear curso</h2>

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
      
      <h3 class="">Crear un curso</h3>
      <hr>

      	<div>
		    	<form class=" formperfil uk-form-horizontal " action="{{route('admin/crear_curso')}}" method="POST" enctype="multipart/form-data">
					@csrf



				    <div class="uk-margin uk-text-left">
				        <label class="uk-form-label" for="form-horizontal-text">NOMBRE DEL CURSO:</label>

				        <div class="uk-form-controls">
				            <input class="radfifth uk-input " id="" type="text" name="name" value="" >
				        </div>
				      @if($errors->has('name'))
							<div class="uk-text-center">No puedes dejar este campo en blanco.</div>
						  @endif

				    </div>

				    <div class="uk-margin uk-text-left">
				        <label class="uk-form-label" for="form-horizontal-text">URL DEL CURSO:</label>

				        <div class="uk-form-controls">
				            <input class="radfifth uk-input " id="" type="text" name="url" value="" >
				        </div>
				      @if($errors->has('name'))
							<div class="uk-text-center">No puedes dejar este campo en blanco.</div>
						  @endif

				    </div>



            <div class="uk-margin uk-text-left">
                <label class="uk-form-label" for="form-horizontal-text">DURACIÓN:</label>

                <div class="uk-form-controls">
                    <input class="radfifth uk-input " id="" type="text" name="time" value="" >
                </div>
            </div>          

            <div class="uk-margin uk-text-left">
                <label class="uk-form-label" for="form-horizontal-text">ACCESO:</label>

                <div class="uk-form-controls">
                    <input class="radfifth uk-input " id="" type="text" name="acceso" value="" >
                </div>
            </div> 

            <div class="uk-margin uk-text-left">
                <label class="uk-form-label" for="form-horizontal-text">PRECIO:</label>

                <div class="uk-form-controls">
                    <input class="radfifth uk-input " id="" type="text" name="precio" value="" >
                </div>
            </div> 

            <div class="uk-margin uk-text-left">
              <label class="uk-form-label" for="form-horizontal-text">DESCRIPCIÓN:</label>

              <div class="uk-form-controls">
                  <textarea class="radfifth uk-textarea" rows="5" placeholder="" name="descripcion"> </textarea>
              </div>
            </div> 				    
				    <div class="uk-margin uk-text-left">
				        <label class="uk-form-label" for="form-horizontal-text">IMAGEN DEL CURSO:</label>

			        <div uk-form-custom="target: true">
			            <input type="file" name="avatar" accept="image/*" required>
			            <input class="uk-input uk-form-width-medium" type="text" placeholder="Selecciona o arrastra una foto" disabled style="border: solid 2px; border-style: dashed;" required>
			        </div>
				    </div>

            <hr>

            <h3 class="">Agregar contenido</h3>


            <div class="uk-margin-bottom uk-margin-top manoAzul  radfifth uk-button uk-button-default" id=""  onclick="display()" >Agregar campo</div> 

            <div class="uk-margin uk-text-left" id="cont">

            </div>  

            <hr>

            <h3 class="">Agregar instructor</h3>


            <div class="uk-margin-bottom uk-margin-top manoAzul  radfifth uk-button uk-button-default" id=""  onclick="instruc()" >Agregar campo</div> 

            <div class="uk-margin uk-text-left" id="inst">

            </div>  

            <hr>

				    <button class="radfifth uk-align-center uk-button uk-button-default" onclick="return confirm('¿Estás seguro de que deseas actualizar tus datos?');">Crear nuevo curso</button> 
  		
      		</form>
        </div>
        







    </div>
</div>


<script>
  i = 1;
  function display() 
  {
    a = document.getElementById('cont');

    b = document.createElement('input');
    b.setAttribute('id', 'cont'+ (i++));
    b.setAttribute('name', 'contenido[]');
    b.setAttribute('class', 'radfifth uk-input uk-margin-bottom');
    
    a.append(b);

  }
</script>  

<script>
  i = 1;
  function instruc() 
  {
    a = document.getElementById('inst');

    b = document.createElement('input');
    c = document.createElement('input');

    b.setAttribute('id', 'cont'+ (i++));
    b.setAttribute('name', 'instructor[][name]');
    b.setAttribute('class', 'radfifth uk-input uk-margin-bottom');
 
    c.setAttribute('id', 'cont'+ (i++));
    c.setAttribute('type', 'file');
    c.setAttribute('name', 'instructor[][foto]');
    c.setAttribute('class', 'radfifth uk-input uk-margin-bottom');    


    a.append(b, c);

  }
</script>









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