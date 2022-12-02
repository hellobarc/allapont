
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

    <div class="uk-width-expand@m padceroo admin_content " id="vid">

		<h2 class="">Requerimientos y Avances de las investigaciones</h2>

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
                                <th class="uk-text-center">Titulo de la investigación</th>
                                <th class="uk-text-center">Cliente(s)</th>
                                <th class="uk-text-center">% de avance</th>
                                <th class="uk-text-center">Cuotas</th>
                                <th class="uk-text-center">Contrato</th>
                            </tr>
                        </thead>
            

                        <tbody>
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>asd</td>
                                <td> asd</td>
                                <td> asd</td>
                                <td>asd </td>
                                <td>asd</td>
            
                            </tr>
            
                        </tbody>

                    </table>

				</div>
			</div>
			
			<div class="tabtxt">
				<div>
                    <p>asdasdasdas</p>
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


		a = document.getElementById('inst');

		b = document.createElement('input');
		c = document.createElement('input');

		b.setAttribute('id', 'cont'+ (i++));
		b.setAttribute('name', 'req_file['+j+++'][desc]');
		b.setAttribute('class', 'radfifth uk-input uk-margin-bottom');
		b.setAttribute('placeholder', 'Descripción');

		c.setAttribute('id', 'cont'+ (i++));
		c.setAttribute('name', 'req_file['+k+++'][url]');
		c.setAttribute('class', 'radfifth uk-input uk-margin-bottom');
		c.setAttribute('placeholder', 'Url');

		div.append(b, c);
		a.append(div);

		//create your delete button after you click try it
		del = document.createElement('a');
        del.style.textDecoration = 'none';
        del.innerHTML = 'Eliminar X';
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