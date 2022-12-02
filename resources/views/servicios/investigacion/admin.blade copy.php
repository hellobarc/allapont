@extends('header')

@section('title')
Administrador | Alappont
@endsection



	<style>
		#tab-nav {
			background: #3E4042;
			border-radius: 10px 10px 0px 0px ;
			
			
		}
		#tab-nav span.tabnav {
			display: inline-block;
			padding: 20px 10px;
			color: #fff;
			text-decoration: none;
			cursor: pointer;
		}
		#tab-nav span.active {
			background: #075ea8;
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


@section('content')
<div id="app"><!---VUE-->


<div class="res-admin-menu uk-text-center">
	<h2 class="tituloLec">Requerimientos y Avances de las investigaciones</h2>
	<hr class="hr-pading">

	<div uk-slider="center: true " class="uk-text-center  ">
		<admin-menures></admin-menures> 
		<hr class="hr-pading">
	</div>
</div>


<div class="uk-text-center " uk-grid>

    <div class="uk-width-1-4@l menuadmin padcero  "  id="aulamenu" >
		<admin-menu v-bind:user="{{Auth::user()}}"></admin-menu>   
    </div>

    <div class="uk-width-expand@m padceroo admin_content " id="vid" style>

		<h2 class="">Servicios de investigación</h2>

		<nav id="tab-nav">
			<span class="tabnav">Servicios </span>
			<span class="tabnav">Nuevo Servicios</span>

		</nav>
		
		<!-- [CONTENTS] -->
		<!-- Must have the corresponding text block -->
		<div id="tab-contents" style="border-radius: 0px 0px 10px 10px; border-right:1px solid #242526; border-left:1px solid; border-color: #242526; border-bottom:1px solid  #242526; margin-bottom: 20px !important;">
				
			<div class="tabtxt">

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

							<div uk-form-custom="target: true" style="padding: 0px 13px 00px 13px;;">
								<input type="file" name="imagen_car" accept="image/*"   required>
								<input class="uk-input rad-10" type="text" placeholder="Selecciona o arrastra una imagen" disabled style="border: solid 2px; border-style: dashed; height:100px; width:400px;" required>
							</div>
						</div>

						<div class="uk-margin uk-text-left">
							<label class="uk-form-label" for="form-horizontal-text">IMAGEN ADENTRO:</label>
							<div uk-form-custom="target: true" style="padding: 0px 13px 00px 13px;;">
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

</div>
@endsection