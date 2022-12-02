@extends('header')

@section('title')
Administrador - Alappont
@endsection

@section('content')
<div id="app"><!---VUE-->


<div class="slideLec uk-text-center">
    <h2 class="tituloLec">Lista de investigaciones en progreso</h2>

    <hr class="hr-pading">

    <div uk-slider="center: true " class="uk-text-center  ">
        <admin-menures></admin-menures> 
        <hr class="hr-pading">
    </div>
</div>


<div class="uk-text-center " uk-grid>

    <div class="uk-width-1-4@m aulamenu padcero" id="aulamenu">
        <admin-menu v-bind:user="{{Auth::user()}}"></admin-menu> 
    </div>

    <div class="uk-width-expand@m padceroo aulacontent " id="vid">
      <h3 class="">Lista de investigaciones en progreso</h3>
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

            @foreach($tesis ?? '' as $tesi)
            <tbody>
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$tesi->tesis_name}}</td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td><a onclick="window.open('{{asset('/').$tesi->contrato}}')" class="uk-button uk-button-default btnlogin uk-margin-bottom"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a> </td>

                </tr>

            </tbody>
            @endforeach 
        </table>
    </div>
</div>

</div>
@endsection