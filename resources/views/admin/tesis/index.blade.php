<!---##############################################################-->


@extends('header')

@section('title')
Investigaciones | Alappont
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
                <span style="font-size:16px;" class="uk-text-uppercase"> / investigaciones</span>
                <!--<span style="font-size:16px;" >{ { $cuotas->links() } }</span>-->
            </div>

            
            <div class="uk-width-expand@m uk-container uk-container-small"  >
                <div class="  " id="vid">
                    <h3 class="uk-margin-top uk-margin-bottom">Sistema de Monitoreo de Investigaciones Alappont</h3>
                
                    <div class=" uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
                        <div onclick="window.location.href = '{{ url('admin/tesis/tesis_agregar')}}';" class="manoAzul">
                            
                            <div class="inve_bot radcard uk-card uk-card-primary uk-card-body">
                                <h3 class="uk-card-title">Registrar una nueva investigación</h3>
                                <p>Acá se debe crear toda nueva investigación que se esté ejecutando en Alappont. Además, se asignan a los diferentes usuarios los proyectos para que puedan visualizarlos.</p>
                            </div>
                            

                        </div>

                        <div onclick="window.location.href = '{{ url('admin/tesis/tesis_cuotas')}}';" class="manoAzul">
                            <div class="inve_bot radcard uk-card uk-card-secondary uk-card-body">
                                <h3 class="uk-card-title">Cuotas</h3>
                                <p>Acá podrás crear, modificar y monitorear las cuotas de los proyectos de investigación que se están ejecutando.</p>
                            </div>
                        </div>

                        <div onclick="window.location.href = '{{ url('admin/tesis/tesis_avances')}}';" class="manoAzul">

                            <div class="inve_bot radcard uk-card uk-card-primary uk-card-body">
                                <h3 class="uk-card-title">Requerimientos y avances</h3>
                                <p>Debes crear un requerimiento para iniciar con el proceso de investigación. Tambien puedes ver los avances que se han realizado.</p>
                            </div>

                        </div>


                        <div onclick="window.location.href = '{{ url('admin/tesis/tesis_list')}}';" class="manoAzul">

                            <div class="inve_bot radcard uk-card uk-card-primary uk-card-body">
                                <h3 class="uk-card-title">Investigaciones en desarrollo</h3>
                                <p>Acá puedes ver todas las tesis que se están ejecutando en tiempo real.</p>
                            </div>

                        </div>

                        <div onclick="window.location.href = '{{ url('admin/tesis/add_servicios')}}';" class="manoAzul">

                            <div class="inve_bot radcard uk-card uk-card-primary uk-card-body">
                                <h3 class="uk-card-title">Servicios</h3>
                                <p>Acá puedes agregar nuevos servicos al sistema.</p>
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
        alert(msg);
    }
</script>
<!--END Alert de datos recibidos-->


</div><!--DEL VUE JS-->
@endsection











