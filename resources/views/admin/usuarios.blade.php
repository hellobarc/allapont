<!---##############################################################-->


@extends('header')

@section('title')
Usuarios | Alappont
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
				<span style="font-size:16px;" class="uk-text-uppercase"> / usuarios</span>
				<!--<span style="font-size:16px;" >{ { $cuotas->links() } }</span>-->
			</div>
			
			<nav id="tab-nav" class="uk-text-left">
				<span class="tabnav">Usuarios</span>
			</nav>
			
			<div class="uk-width-expand@m" >
				<!-- Must have the corresponding text block -->
				<div id="tab-contents">
				
					<!--MOSTRAR CUOTAS-->
					<div class="tabtxt" >
            
						@foreach($users ?? '' as $user)
						<div style=" margin-top: 10px !important;" class=" ">
							<div class="uk-text-left inve_bot height: 100%; " style=" border-radius:10px; padding:5px; margin-bottom:10px; ">
								<div  uk-grid class="uk-grid-collapse uk-child-width-expand@s uk-text-left " >
									<div   style="background-color: ;">
										<p class="p-cuotas">
											<span class="uk-text-bold">Nombre:&nbsp</span> 
											<br>
											{{$user->name}}
										</p>
									</div>	

									<div   style="background-color: ;">
										<p class="p-cuotas">
											<span class="uk-text-bold">Correo:&nbsp</span> 
											<br>
											{{$user->email}}
										</p>
									</div>

									<div   style="background-color: ;">
										<p class="p-cuotas">
											<span class="uk-text-bold">Código:&nbsp</span> 
											<br>
											+51
											<!---Este está faltando configurar--->
										</p>
									</div>


									<div   style="background-color: ;">
										<p class="p-cuotas">
											<span class="uk-text-bold">Celular:&nbsp</span> 
											<br>
											{{$user->celular}} 
										</p>
									</div>

									<div  style="background-color: ;">
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
						{{$users->links()}}
						<!--
						@can('eusers.destroy')
							<form method="POST" action="{{url('/admin/usuarios/'.$user->id)}}">
							@csrf
							{{method_field('DELETE')}}
							<button type="submit" class="uk-button uk-button-small uk-button-default btnlogin" onclick="return confirm('¿Estás seguro que deseas borrar esta entrada?');">Borrar</button>
							</form>
						@endcan-->
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


</div><!--DEL VUE JS-->
@endsection