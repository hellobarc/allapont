@extends('header')

@section('title')
Administrador - Alappont
@endsection

@section('content')
<div id="app"><!---VUE-->



<div class="slideLec uk-text-center">
              <h2 class="tituloLec">Postulantes</h2>

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

      <h3 class="">Solicitudes de trabajo</h3>
        <table class="uk-table uk-table-small uk-table-divider">
            <thead >
                <tr >
                    <th class="uk-text-center">#</th>
                    <th class="uk-text-center">Nombre</th>
                    <th class="uk-text-center">Correo</th>
                    <th class="uk-text-center">Celular</th>
                    <th class="uk-text-center">Comentario</th>
                    <th class="uk-text-center">Curriculum</th>
                    <th class="uk-text-center">Acciones</th>
                </tr>
            </thead>


            @foreach($postulantes ?? '' as $postulante)
            <tbody>
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$postulante->Nombre}}</td>
                    <td>{{$postulante->Correo}}</td>
                    <td>{{$postulante->Celular}}</td>
                    <td>{{$postulante->Comentario}}</td>
                    <td>{{$postulante->Curriculum}}</td>
                    <td>Editar | 

                        <form method="POST" action="{{url('/admin/postulantes/'.$postulante->id)}}">
                         @csrf
                         {{method_field('DELETE')}}
                         <button type="submit" onclick="return confirm('¿Estás seguro que deseas borrar esta entrada?');">BORRAR</button>   
                        </form>

                    </td>
                </tr>

            </tbody>
            @endforeach 
        </table>
      




    </div>
</div>


</div>

@endsection