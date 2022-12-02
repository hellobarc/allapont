
@extends('footer')



@extends('header')


@section('title')
Alappont | Req
@endsection


	<style>
		#tab-nav {
			background: #3E4042;
			border-radius: 10px 10px 0px 0px ;
			
			
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
			background: #242526;
            border-radius: 10px 10px 0px 0px;
			border: 1px solid #242526;
			
		}
		


		@keyframes slidein {
			0% {
				opacity: 0;
			}
			100% {
				opacity: 1;
			}
		}

		/* [CONTENTS] */
		#tab-contents {
			padding: 15px;
			animation-duration: 0.5s;
			animation-name: slidein;
		}
		#tab-contents div.tabtxt {
			display: none;
			animation-duration: 0.5s;
			animation-name: slidein;
		}
		#tab-contents div.active {
			display: block;
			animation-duration: 0.5s;
			animation-name: slidein;
		}
	</style>

	<script>
	/*
	window.addEventListener('hashchange', function () {
		tab.nav = document.getElementById("tab-nav").getElementsByClassName("tabnav");
		tab.txt = document.getElementById("tab-contents").getElementsByClassName("tabtxt");
		if (location.hash === "#nuevo") {
			for (var t of tab.nav) {
				t.classList.remove("active");
			}
			for (var t of tab.txt) {
				t.classList.remove("active");
			}
			tab.nav[0].classList.add("active");
			tab.txt[0].classList.add("active");
		}else if (location.hash === "#estado"){
			for (var t of tab.nav) {
				t.classList.remove("active");
			}
			for (var t of tab.txt) {
				t.classList.remove("active");
			}
			tab.nav[1].classList.add("active");
			tab.txt[1].classList.add("active");
		}
	});
	*/


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
	window.addEventListener("load", tab.init);///Hasta aca se actualiza solo

	///Esta función hace que el hash se actualice
	window.onload = function(){
		tab.nav = document.getElementById("tab-nav").getElementsByClassName("tabnav");
		tab.txt = document.getElementById("tab-contents").getElementsByClassName("tabtxt");
		if (window.location.hash === "#nuevo") {
			for (var t of tab.nav) {
				t.classList.remove("active");
			}
			for (var t of tab.txt) {
				t.classList.remove("active");
			}
			tab.nav[0].classList.add("active");
			tab.txt[0].classList.add("active");
		}else if (window.location.hash === "#estado"){
			for (var t of tab.nav) {
				t.classList.remove("active");
			}
			for (var t of tab.txt) {
				t.classList.remove("active");
			}
			tab.nav[1].classList.add("active");
			tab.txt[1].classList.add("active");
		}

	}


	</script>





@section('content')
<div id=""><!---VUE-->


    <div class=" uk-container uk-container-small" style="margin-top:2%; margin-bottom:2%;" id="vid" style>
        
    <h2 class="uk-article-title" >Requerimientos</h2>

		<nav id="tab-nav">
			<span class="tabnav" onclick="window.location.hash='nuevo';">Lista de requerimientos</span>
			
		</nav>
		
		<!-- [CONTENTS] -->
		<!-- Must have the corresponding text block -->
		<div id="tab-contents" style="background: #242526 ; border-radius: 0px 0px 10px 10px; border-right:1px solid #242526; border-left:1px solid; border-color: #242526; border-bottom:1px solid  #242526; margin-bottom: 20px !important;">
				
			<div class="tabtxt" style="background: #242526 !important;">
				<p class="uk-text-lead">Solicitudes de avance</p>

				<div style="margin-top: 10px; " class=" ">
					<div class="uk-text-left inve_bot height: 100%; " style=" border-radius:10px; padding:5px; border: 1px solid #3E4042; border-radius:10px; padding: 15px;">
						<div  uk-grid class="uk-grid-collapse uk-child-width-expand@s uk-text-left " >
							<div   style="background-color: ;">
								<p class="p-cuotas">
									<span class="uk-text-bold">Nombre:&nbsp</span> 
									<br>
									asd
								</p>
							</div>	

							<div   style="background-color: ;">
								<p class="p-cuotas">
									<span class="uk-text-bold">Correo:&nbsp</span> 
									<br>
									asd
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
									asd
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





				<div style="margin-top: 10px; " class=" ">
					<div class="uk-text-left inve_bot height: 100%; " style=" border-radius:10px; padding:5px; border: 1px solid #3E4042; border-radius:10px; padding: 15px;">
						<div  uk-grid class="uk-grid-collapse uk-child-width-expand@s uk-text-left " >
							<div   style="background-color: ;">
								<p class="p-cuotas">
									<span class="uk-text-bold">Nombre:&nbsp</span> 
									<br>
									asd
								</p>
							</div>	

							<div   style="background-color: ;">
								<p class="p-cuotas">
									<span class="uk-text-bold">Correo:&nbsp</span> 
									<br>
									asd
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
									asd
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




				<hr>
				<p class="uk-text-lead">Histórico de envíos</p>
				<p>Por cuestiones de seguridad los documentos se eliminan despues de una semana, tome sus precauciones y guardelos, en todo caso, siempre puede solicitar con su asesor una copia.</p>




				<div style="margin-top: 10px; " class=" ">
					<div class="uk-text-left inve_bot height: 100%; " style=" border-radius:10px; padding:5px; border: 1px solid #3E4042; border-radius:10px; padding: 15px;">
						<div  uk-grid class="uk-grid-collapse uk-child-width-expand@s uk-text-left " >
							<div   style="background-color: ;">
								<p class="p-cuotas">
									<span class="uk-text-bold">Nombre:&nbsp</span> 
									<br>
									asd
								</p>
							</div>	

							<div   style="background-color: ;">
								<p class="p-cuotas">
									<span class="uk-text-bold">Correo:&nbsp</span> 
									<br>
									asd
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
									asd
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





				<div style="margin-top: 10px; " class=" ">
					<div class="uk-text-left inve_bot height: 100%; " style=" border-radius:10px; padding:5px; border: 1px solid #3E4042; border-radius:10px; padding: 15px;">
						<div  uk-grid class="uk-grid-collapse uk-child-width-expand@s uk-text-left " >
							<div   style="background-color: ;">
								<p class="p-cuotas">
									<span class="uk-text-bold">Nombre:&nbsp</span> 
									<br>
									asd
								</p>
							</div>	

							<div   style="background-color: ;">
								<p class="p-cuotas">
									<span class="uk-text-bold">Correo:&nbsp</span> 
									<br>
									asd
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
									asd
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




            </div>

        </div>

    </div>






	
@endsection


