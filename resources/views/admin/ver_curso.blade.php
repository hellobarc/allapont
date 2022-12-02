@extends('header')

@section('title')
Administrador - Alappont
@endsection

@section('content')


<div id="app"><!---VUE-->

<div class="slideLec uk-text-center">
        
        <h2 class="tituloLec">Cursos creados</h2>
        
        

        <hr class="hr-pading">

        <div uk-slider="center: true " class="uk-text-center  ">
            <!---->
            <admin-menures></admin-menures> 
            <!---->
            <hr class="hr-pading">
        </div>
</div>


<div class="uk-text-center " uk-grid>

    <div class="uk-width-1-4@m aulamenu padcero" id="aulamenu">

        <admin-menu v-bind:user="{{Auth::user()}}"></admin-menu> 
     
    </div>


    <div class="uk-width-expand@m padceroo aulacontent " id="vid">

      <h3 class="">Cursos creados</h3>

        
        


        <div>
          <p><strong style="color: red;">*Los controladores están en desarrollo. Si se presenta algún error tomar captura del error que aparece y comunicárselo a Luis al correo: luisalejandromalaga@gmail.com</strong>
          </p>
        </div>
      
        <table class="uk-table uk-table-small uk-table-divider">
            <thead >
                <tr >
                    <th class="uk-text-center">#</th>
                    <th class="uk-text-center">Nombre</th>
                    <th class="uk-text-center">Imágen</th>
                    <th class="uk-text-center">url</th>

                    <th class="uk-text-center">Acciones</th>
                </tr>
            </thead>

            @foreach($cursos ?? '' as $curso)
            <tbody>
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$curso->name}}</td>
                    <td><img src="{{asset('/').$curso->avatar}}" class="imgCursoAdmin"></td>
                    <td>
                      <button class="mano  radfifth uk-button uk-button-default" onclick="window.location.href = '{{ url('cursos').'/matricula/'.$curso->url}}';" >Ver curso</button>
                    </td>

                    <td>
                        <form method="POST" action="{{url('/admin/ver_curoso/'.$curso->id)}}">
                         @csrf
                         {{method_field('DELETE')}}
                         <button class="manoAzul  radfifth uk-button uk-button-default uk-margin-small-bottom" type="submit" onclick="return confirm('¿Estás seguro que deseas borrar este curso?');">BORRAR</button>   
                        </form>

                        <a class="manoAzul radfifth uk-button uk-button-default uk-margin-small-bottom" href="{{route('admin/edit_curso', $curso->url)}}">Editar</a>
                    </td>
                </tr>

            </tbody>
            @endforeach 


        </table>
      
      
      <!--  
      <ul class="uk-pagination uk-flex-center" uk-margin>
          <li><a href="#"><span uk-pagination-previous></span></a></li>
          <li><a href="#">1</a></li>
          <li class="uk-disabled"><span>...</span></li>
          <li><a href="#">5</a></li>
          <li><a href="#">6</a></li>
          <li class="uk-active"><span>7</span></li>
          <li><a href="#">8</a></li>
          <li><a href="#"><span uk-pagination-next></span></a></li>
      </ul>-->




    </div>
</div>



</div>

@endsection