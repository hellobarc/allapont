@extends('footer')
@extends('header')

@section('title')
Certificados | Alappont
@endsection

@section('content')

<div class="uk-text-center " uk-grid>

    <div class="uk-width-expand@m  aulacontent " id="vid" style="padding-right: 40px; padding-left: 80px">

      <h3 class="uk-margin-top">Mis Certificados</h3>

      
        <table class="uk-table uk-table-small uk-table-divider" >
            <thead >
                <tr >
                    <th class="uk-text-center">#</th>
                    <th class="uk-text-center">Curso</th>
                    <th class="uk-text-center">En calidad de...</th>
                    <th class="uk-text-center">Código</th>
                    <th class="uk-text-center">Fecha de emisión</th>
                    <th class="uk-text-center">Certificado</th>
                </tr>
            </thead>

            @forelse($certificados ?? '' as $certificado)
            <tbody>
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$certificado->curso_name}}</td>
                    <td>{{$certificado->calidad}}</td>
                    <td>{{$certificado->codigo}}</td>
                    <td>{{$certificado->fecha}}</td>
                    <td><a onclick="window.open('{{asset('/').$certificado->certificado}}')" class="uk-button uk-button-default btnlogin uk-margin-bottom"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></td>
                </tr>

            </tbody>
            @empty
                <div class="uk-text-center">
                    <p>Aún no has obtenido ningún certificado </p>
                </div>
            @endforelse  

        </table>

    </div>
</div>

@endsection