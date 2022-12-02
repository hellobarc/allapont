@extends('header')

@section('title')
Cuotas | Alappont
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
				<span style="font-size:16px;" class="uk-text-uppercase"> / investigaciones / cuotas</span>
				<!--<span style="font-size:16px;" >{ { $cuotas->links() } }</span>-->
			</div>
			
			<nav id="tab-nav" class="uk-text-left">
				<span class="tabnav">Cuotas</span>
				<span class="tabnav">Pagos</span>
				<span class="tabnav">Nueva cuota</span>
				<span class="tabnav">Estadística</span>
				
			</nav>

			

			<div class="uk-width-expand@m" >

				<!-- Must have the corresponding text block -->
				<div id="tab-contents">
				
					<!--MOSTRAR CUOTAS-->
					<div class="tabtxt" >
						
						@include('admin/tesis/cuotas_show')
					</div>

					<!--vouchers CUOTA-->
					<div class="tabtxt">
						
						@include('admin/tesis/cuotas_pagos')
					</div>


					<!--CREAR CUOTA-->
					<div class="tabtxt">
						
						@include('admin/tesis/crear_cuota')
					</div>

					<!--ESTADÍSTICAS-->
					<div class="tabtxt">
						En desarrollo...
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