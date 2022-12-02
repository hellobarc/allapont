<!---##############################################################-->


@extends('header')

@section('title')
Usuarios | Alappont
@endsection



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
				<span style="font-size:16px;" class="uk-text-uppercase"> / investigaciones / cuotas / usuarios</span>
				<!--<span style="font-size:16px;" >{ { $cuotas->links() } }</span>-->
			</div>
			

            <div class="uk-width-expand@m   " >
                <h3 class="uk-margin-top uk-margin-bottom">Usuarios asignados a esta investigación</h3>
                <div>

                </div>

                <div>
                    
                    @foreach($users as $user)
                    <div class="uk-container uk-container-xsmall">
                        <div class="inve_bot radcard uk-card uk-card-primary uk-card-body">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i> {{$user['name']}}
                            <br>
                            <i class="fa fa-envelope-o" aria-hidden="true"></i> {{$user['email']}}
                            <br>
                            <i class="fa fa-phone-square" aria-hidden="true"></i> {{$user['celular']}}
                        </div>
                    </div>
                    <br>
                    @endforeach
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




