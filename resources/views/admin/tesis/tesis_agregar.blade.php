<!---##############################################################-->


@extends('header')

@section('title')
Registar una nueva investigación | Alappont
@endsection


<!--Del tabulador-->
<style>
#tab-nav {
	background: #4e4f50;
	border-radius: 0px 0px 0px 0px ;
}
#tab-nav span.tabnav {
	display: inline-block;
	padding: 15px 10px;
	color: #fff;
	text-decoration: none;
	cursor: pointer;
	/*background: #242526;*/
	border-radius: 10px 10px 0px 0px ;
}
#tab-nav span.active {
	background: #18191a;
	border-radius: 10px 10px 0px 0px;
	border: 1px solid #18191a;
			
}

/* [CONTENTS] */
#tab-contents {
	padding: 15px;
}
#tab-contents div.tabtxt {
	display: none;
}
#tab-contents div.active {
	display: block;
}
</style>

<script>
var tab = {
	nav : null, // holds all tabs
	txt : null, // holds all text containers
	init : function () {
	// tab.init() : init tab interface

	// Get all tabs + contents
	tab.nav = document.getElementById("tab-nav").getElementsByClassName("tabnav");
	tab.txt = document.getElementById("tab-contents").getElementsByClassName("tabtxt");

	// Error checking
	if (tab.nav.length==0 || tab.txt.length==0 || tab.nav.length!=tab.txt.length) {
		console.log("ERROR STARTING TABS");
	} else {
		// Attach onclick events to navigation tabs
		for (var i=0; i<tab.nav.length; i++) {
		tab.nav[i].dataset.pos = i;
		tab.nav[i].addEventListener("click", tab.switch);
		}

		// Default - show first tab
		tab.nav[0].classList.add("active");
		tab.txt[0].classList.add("active");
	}
	},

	switch : function () {
	// tab.switch() : change to another tab

	// Hide all tabs & text
	for (var t of tab.nav) {
		t.classList.remove("active");
	}
	for (var t of tab.txt) {
		t.classList.remove("active");
	}

	// Set current tab
	tab.nav[this.dataset.pos].classList.add("active");
	tab.txt[this.dataset.pos].classList.add("active");
	}
};

window.addEventListener("load", tab.init);
</script>


<!--ESTE CSS ES PARA PRUEBAS-->

<style>
	.p-cuotas{
		margin: 0px !important;
	}

	.ul-li-prevenir-estilo-defecto {
		list-style-type: none;

		padding: 0;
	}
	.height-100 {
		height: 100% !important;
	}

</style>



@section('content')
<div id="app"><!---VUE-->


<div class="uk-text-center " uk-grid >



	<div class="uk-width-expand@s  " id="vid" style="height:auto;">

		<!--<h2 class="">Cuotas: Investigaciones</h2>-->

		<div id="offcanvas-overlay" uk-offcanvas="overlay: true">
			<div class="uk-offcanvas-bar">

				<button class="uk-offcanvas-close" type="button" uk-close></button>
				
				<div class="" >
					<admin-menu v-bind:user="{{Auth::user()}}"></admin-menu>   
				</div>

			</div>
		</div>

		<div>
			<div class="uk-text-left" style="padding: 5px; background:#4e4f50; color: #f0f2f5;" >
				<span style="font-size:16px; color: #f0f2f5;" class=" uk-button-link uk-text-uppercase manoAzul" type="button" uk-toggle="target: #offcanvas-overlay">menú <i class="fa fa-external-link"  style="font-size:16px;"></i> </span>
				<span style="font-size:16px;" class="uk-text-uppercase"> / registrar</span>
			</div>

			<nav id="tab-nav" class="uk-text-left">
				<span class="tabnav">Registrar</span>
			</nav>
			
			<div class="uk-width-expand@m" >
				<!-- Must have the corresponding text block -->
				<div id="tab-contents">
				
					<!--MOSTRAR CUOTAS-->
					<div class="tabtxt" >
						<h3 class="">1. Registar una nueva investigación</h3>
						<hr>
						<div>
							<form class=" formperfil uk-form-horizontal " action="{{route('admin/tesis/tesis_agregar')}}" method="POST" enctype="multipart/form-data">
								@csrf
								<div class="uk-margin uk-text-left">
									<label class="uk-form-label" for="form-horizontal-text">TÍTULO DE LA INVESTIGACIÓN: </label>

									<div class="uk-form-controls">
										<input class="radfifth uk-input " id="" type="text" name="name" value="" >
									</div>
									@if($errors->has('name'))
										<div class="uk-text-center">No puedes dejar este campo en blanco.</div>
									@endif
								</div>

								<div class="uk-margin uk-text-left">
									<label class="uk-form-label" for="form-horizontal-text">TÉRMINOS Y CONDICIONES: </label>

									<div uk-form-custom="target: true">
										<input type="file" name="contrato" accept="pdf" required>
										<input class="uk-input uk-form-width-medium" type="text" placeholder="Selecciona o arrastra el documento" disabled style="border: solid 2px; border-style: dashed;" required>
									</div>
								</div>




								<div class="uk-margin uk-text-left">
									<div class="uk-form-label">TIPO DE SERVICIO</div>
									<div class="uk-form-controls">
										<label><input class="uk-radio" type="radio" name="tipo" value="Tesis"> Tesis</label><br>
										<label><input class="uk-radio" type="radio" name="tipo" value="Especializado"> Trabajo curso</label><br>
										<label><input class="uk-radio" type="radio" name="tipo" value="aa"> Estadística</label><br>
										<label><input class="uk-radio" type="radio" name="tipo" value="aa"> Software</label><br>
										<p></p>
									</div>
								</div>


								<div class="uk-margin uk-text-left">
									<label class="uk-form-label" for="form-horizontal-text">MONTO TOTAL: </label>

									<div class="uk-form-controls">
										<input class="radfifth uk-input " id="" type="text" name="name" value="" >
									</div>
									@if($errors->has('name'))
										<div class="uk-text-center">No puedes dejar este campo en blanco.</div>
									@endif
								</div>



								<button class="radfifth uk-align-center uk-button uk-button-default" onclick="return confirm('¿Estás seguro de que deseas registrar esta investigación?');">Crear nueva investigación</button> 

								<p>Titulo</p>
								<p>Terminos y condiciones o ocntrato</p>
								<p>Tipo (Tesis, trabajo, interno)</p>
								<p>Monto total</p>
								<p>Estado (Finalizado - En ejecución - Cancelado - En pausa) (Se modifica aparte)</p>
								<p>Comentario</p>
								<p>Fecha automática, en controlador (Inicia)</p>
								<p>Fecha de termino, en controlador (termina)</p>
								

								<p>Numero de cuotas</p>
							</form>	
						</div>




						<hr>

						<div>
							<h3 class="">2. Asignale un cliente a una investigación</h3>
							<form class=" formperfil uk-form-horizontal " action="{{route('admin/tesis/tesis_asignarUser')}}" method="POST" enctype="multipart/form-data">
								@csrf
								<div class="uk-margin uk-text-left">
									<div class="uk-margin uk-text-left">
										<label class="uk-form-label" for="form-horizontal-text">TÍTULO DE LA INVESTIGACIÓN: </label>

										<div class="uk-form-controls">
											<select id="verificar"  class="radfifth uk-select" name="tesis_name">
											@foreach ($tesis as $tesi)
												<option value="{{$tesi->id}}" >{{$tesi->tesis_name}}</option>
											@endforeach
											</select>
										</div>
									</div>

									<div class="uk-margin uk-text-left">
										<label class="uk-form-label" for="form-horizontal-text">NOMBRE DEL USUARIO:</label>
										<div class="uk-form-controls">
											<select id="verificar"  class="radfifth uk-select" name="user_name">
											@foreach ($usuarios as $usuario)
												<option value="{{$usuario->id}}">{{$usuario->name}}</option>
											@endforeach
											</select>
										</div>
									</div>

									@if($errors->has('name'))
										<div class="uk-text-center">No puedes dejar este campo en blanco.</div>
									@endif
								</div>
								<button class="radfifth uk-align-center uk-button uk-button-default" 
								onclick="return confirm('¿Estas seguro que deseas asignar este usuario a esta investigación?');">
									Asignar cliente
								</button> 
							</form>	

							<hr>		
							<div class="uk-width-expand@m   " id="vid">
								<h3 class="">Lista de investigaciones y clientes</h3>
								
								
								@foreach($tesisUsers ?? '' as $tesisUser)
								<div style=" margin-top: 10px !important;" class=" ">
									<div class="uk-text-left inve_bot height: 100%; " style=" border-radius:10px; padding:5px; margin-bottom:10px; ">
										<div  uk-grid class="uk-grid-collapse uk-child-width-expand@s uk-text-left " >
											<div   class="uk-width-1-4@s" style="background-color: ;">
												<p class="p-cuotas">
													<span class="uk-text-bold">Nombre:&nbsp</span> 
													<br>
													{{$tesisUser->name}}
												</p>
											</div>	

											<div    style="background-color: ;">
												<p class="p-cuotas">
													<span class="uk-text-bold">Tesis:&nbsp</span> 
													<br>
													{{$tesisUser->tesis_name}}
												</p>
											</div>

											<div  class="uk-width-1-5@s" style="background-color: ;">
												<p class="p-cuotas">
													<span class="uk-text-bold">Acciones:&nbsp</span> 
													<br>
													<span style="font-size:16px;" class=" uk-button-link manoAzul" type="button"uk-tooltip="title: Editar; pos: right" 
													onclick=""
													>
														<i class="fa fa-pencil-square"  style="font-size:16px;"></i>
													</span>
												</p>
											</div>	
										</div>
									</div>
								</div>
								@endforeach 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--Alert de datos recibidos-->
<script>
	var msg = '{{Session::get('alert')}}';
	var exist = '{{Session::has('alert')}}';
	if(exist){
		UIkit.modal.alert(msg)
	}
</script>
<!--END Alert de datos recibidos-->


</div><!--DEL VUE JS-->
@endsection