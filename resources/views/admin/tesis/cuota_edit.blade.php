@extends('footer')
@extends('header')

@section('title')
Editar Cuota | Alappont
@endsection

@section('content')

<style>

</style>



<div  class="uk-container uk-container-small" style="margin-top:3%; margin-bottom:3%;">
    <article class="">

        <h2 class="uk-article-title"><a class="uk-link-reset" href="">Editar cuota</a></h2>
        <hr class="">
        <a onclick="window.location.href = '{{ url('admin/tesis/tesis_cuotas')}}';">Cuotas</a>
        <div class="loginbg " style="margin: 0px;">
            <div class=" logingbcard uk-margin-auto uk-margin-auto-vertical   uk-card-body"  >
                
                <div>
                    <label for="tesis_name"><h4>Nombre del trabajo:</h4></label>
                    <div class="maginBottom10">
                        <p>{{ $cuotas['tesis_name'] }}</p>
                    </div>
                </div>

                <form class=" formperfil uk-form-horizontal " action="{{url('update_cuota')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="maginBottom10">
                        
                        <input style="display: none;" id="codigo_cuota" name="codigo_cuota" class="rad-10 uk-input " type="text" placeholder="" value="{{ $cuotas['codigo_cuota'] }}">
                        
                        <label for="monto"><h4>Monto:</h4></label>
                        <div class="maginBottom10">        
                            <input id="monto" name="monto" class="rad-10 uk-input " type="text" placeholder="" value="{{ $cuotas['monto'] }}">
                        </div>
                    </div>

                    <button class="uk-button uk-button-primary registro manoAzul uk-margin-top"> Actualizar</button>
                </form>


                

            </div>
        </div>

    </article>

</div>

@endsection