@extends('header')

@section('title')
Administrador - Alappont
@endsection

@section('content')


<div id="app"><!---VUE-->

<div class="slideLec uk-text-center">
              <h2 class="tituloLec">Productos</h2>

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

      <h3 class="">Crear un producto</h3>
      <hr>

      	<div>
      		<form>
		    	<form class=" formperfil uk-form-horizontal " action="" method="POST" enctype="multipart/form-data">
					@csrf



				    <div class="uk-margin uk-text-left">
				        <label class="uk-form-label" for="form-horizontal-text">Nombre del producto: </label>

				        <div class="uk-form-controls">
				            <input class="radfifth uk-input " id="" type="text" name="name" value="" >
				        </div>
				        @if($errors->has('name'))
							<div class="uk-text-center">No puedes dejar este campo en blanco.</div>
						@endif

				    </div>
				    <button class="radfifth uk-align-center uk-button uk-button-default" onclick="return confirm('¿Estás seguro de que deseas actualizar tus datos?');">Editar nombres y apellidos</button> 
  		
		    	</form>
      		</form>
      	</div>




    </div>
</div>




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