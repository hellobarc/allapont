@extends('header')

@section('title')
Servicios | Alappont
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
.aulamenu2{
    border-right: solid 1px #3E4042 !important;
    overflow-y: scroll;
    height: 850px;
}


.slideLec2{
    display: none;
}


/*La clase aulacontent tambien la usan las pestañas, las cuotas deben configurarse*/
.aulacontent2{
    /*overflow-y: scroll;*/
    height: 850px;
}
@media screen and (max-width: 1100px) {
    .aulacontent2{
        height:  100% !important;
    }
}

.aulacontent-pestanas{
    overflow-y: scroll;
    height: 850px;
}
@media screen and (max-width: 1100px) {
    .aulacontent-pestanas{
        height:  100% !important;
    }
}

.res-margin-o{
	padding: 0px 13px 00px 13px;
}
@media screen and (max-width: 959px) {
	.res-margin-o{
		padding: 0px !important;
	}
}

.padcero2{
    margin: 0px !important;
	padding: 0px !important;
}

.padceroo2{

    margin: 0px !important;
	padding: 0px !important;
}
</style>



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
				<span style="font-size:16px;" class="uk-text-uppercase"> / investigaciones / servicios</span>
				<!--<span style="font-size:16px;" >{ { $cuotas->links() } }</span>-->
			</div>
			
			<nav id="tab-nav" class="uk-text-left">
				<span class="tabnav">Servicios</span>
				<span class="tabnav">Nuevo</span>
				<span class="tabnav">Solicitudes</span>
			</nav>

			

			<div class="uk-width-expand@m" >

				<!-- Must have the corresponding text block -->
				<div id="tab-contents">
				
					<!--LISTA DE SERVICIOS-->
					<div class="tabtxt" >
						<div class="uk-width-expand@m padceroo aulacontent " id="vid">
							<table class="uk-table uk-table-small uk-table-divider">
								<thead >
									<tr >
										<th class="uk-text-center">#</th>
										<th class="uk-text-center">Titulo del servicio</th>
										<th class="uk-text-center">Tipo</th>
										<th class="uk-text-center">Link</th>
									</tr>
								</thead>
					
							@foreach ($inveservis as $inveservi )
								<tbody>
									<tr>
										<td>{{$inveservi->inveservi_id}}</td>
										<td>{{$inveservi->titulo}}</td>
										<td>{{$inveservi->tipo}}</td>
										<td>{{$inveservi->url}}</td>
					
									</tr>
					
								</tbody>
							@endforeach
							</table>

						</div>
					</div>

					<!--CREAR SERVICIO -->
					<div class="tabtxt">
						<div>
							<form class=" formperfil uk-form-horizontal " action="{{route('admin/investgacion_new_servicio')}}" method="POST" enctype="multipart/form-data">
								@csrf
								<div class="uk-margin uk-text-left">
									
									<label class="uk-form-label" for="form-horizontal-text">NOMBRE DEL SERVICIO: </label>
				
									<div class="uk-form-controls">
										<input class="radfifth uk-input " id="" type="text" name="titulo" value=""  required>
									</div>
										@if($errors->has('name'))
										<div class="uk-text-center">No puedes dejar este campo en blanco.</div>
									@endif
								</div>

								<div class="uk-margin uk-text-left">
									
									<label class="uk-form-label" for="form-horizontal-text">URL: /servicios/investigacion/ </label>
				
									<div class="uk-form-controls">
										<input class="radfifth uk-input " id="" type="text" name="url" value="" required >
									</div>
										@if($errors->has('name'))
										<div class="uk-text-center">No puedes dejar este campo en blanco.</div>
									@endif
								</div>

								<div class="uk-margin uk-text-left">
									<label class="uk-form-label" for="form-horizontal-text">DESCRIPCIÓN:</label>

									<div class="uk-form-controls">
										<textarea class="rad-10 uk-textarea" rows="5" placeholder="" name="texto" required> </textarea>
									</div>
									@if($errors->has('name'))
									<div class="uk-text-center">No puedes dejar este campo en blanco.</div>
									@endif
								</div> 


								<div class="uk-margin uk-text-left">
									<div class="uk-form-label">TIPO DE SERVICIO</div>
									<div class="uk-form-controls">
										<label><input class="uk-radio" type="radio" name="tipo" value="Tesis"> Tesis</label><br>
										<label><input class="uk-radio" type="radio" name="tipo" value="Especializado"> Especializado</label>
									</div>
								</div>


								<div class="uk-margin uk-text-left">
									<label class="uk-form-label " for="form-horizontal-text">IMAGEN FRONT:</label>

									<div  class="res-margin-o" uk-form-custom="target: true" >
										<input type="file" name="imagen_car" accept="image/*"   required>
										<input class="uk-input rad-10" type="text" placeholder="Selecciona o arrastra una imagen" disabled style="border: solid 2px; border-style: dashed; height:100px; width:400px;" required>
									</div>
								</div>

								<div class="uk-margin uk-text-left">
									<label class="uk-form-label" for="form-horizontal-text">IMAGEN ADENTRO:</label>
									<div class="res-margin-o" uk-form-custom="target: true">
										<input type="file" name="imagen_in" accept="image/*"   required>
										<input class="uk-input rad-10" type="text" placeholder="Selecciona o arrastra una imagen" disabled style="border: solid 2px; border-style: dashed; height:100px; width:400px;" required>
									</div>
								</div>

								<hr>
								<h3 class="">Sub servicios</h3>
								<div class="uk-margin-bottom uk-margin-top manoAzul  radfifth uk-button uk-button-default" id=""  onclick="instruc()" >Agregar campo</div> 
								<div class="uk-margin uk-text-left" id="sub"></div> 
								<hr>	
								<button class="radfifth uk-align-center uk-button uk-button-default" onclick="return confirm('¿Estás seguro de que deseas crear este servicio?');">Crear nuevo servicio</button> 
						
							</form>	
						</div>

					</div>


					<!--VER SOLICITUDES-->
					<div class="tabtxt">
						<div class="uk-width-expand@m padceroo aulacontent " id="vid">
							<table class="uk-table uk-table-small uk-table-divider">
								<thead >
									<tr >
										<th class="uk-text-center">Nombre del servicio</th>
										<th class="uk-text-center">Comentario</th>
										<th class="uk-text-center">Correo</th>
										<th class="uk-text-center">Telefono</th>
									</tr>
								</thead>
					
							@foreach ($servicoments as $servicoment )
								<tbody>
									<tr>
										<td>{{$servicoment->servi_name}}</td>
										<td>{{$servicoment->comentario}}</td>
										<td>{{$servicoment->correo}}</td>
										<td>{{$servicoment->telefono}}</td>
					
									</tr>
					
								</tbody>
							@endforeach
							</table>
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
		alert(msg);
	}
</script>
<!--END Alert de datos recibidos-->




<script>
	i = 1;
	j = 0;
	k = 0;
	function instruc() 
	{

        div = document.createElement('div');
        div.setAttribute('id', 'divi');
		div.setAttribute('class', 'din-add');


		a = document.getElementById('sub');

		b = document.createElement('input');
		c = document.createElement('textarea');

		b.setAttribute('id', 'cont'+ (i++));
		b.setAttribute('name', 'sub_serv['+j+++'][name]');
		b.setAttribute('class', 'radfifth uk-input uk-margin-bottom');
		b.setAttribute('placeholder', 'Titulo');
		b.setAttribute('required', '');

		c.setAttribute('id', 'cont'+ (i++));
		c.setAttribute('name', 'sub_serv['+k+++'][desc]');
		c.setAttribute('class', 'rad-10 uk-textarea');
		c.setAttribute('rows', '5');
		c.setAttribute('placeholder', 'Descripción (Acepta HTML)');
		c.setAttribute('required', '');

		

		div.append(b, c);
		a.append(div);

		//create your delete button after you click try it
		del = document.createElement('a');
        del.style.textDecoration = 'none';
        del.innerHTML = 'Eliminar';
        del.style.color = 'white';
        //assign a function for it when clicked
        del.addEventListener("click", deleteButton, false);  
        div.appendChild(del);

		function deleteButton() {
			this.parentNode.parentNode.removeChild(this.parentNode);
		}
	}
</script>


</div><!--DEL VUE JS-->
@endsection




<!--#######################################################-->




