@extends('header')

@section('title')
Administrador - Alappont
@endsection

@section('content')

<div id="app"><!---VUE-->


<div class="slideLec uk-text-center">
              <h2 class="tituloLec">Compra de cursos</h2>

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

      <h3 class="">Compra de cursos</h3>
        <table class="uk-table uk-table-small uk-table-divider">
            <thead >
                <tr >
                    <th class="uk-text-center">#</th>
                    <th class="uk-text-center">Id del usuario</th>
                    <th class="uk-text-center">Nombre del usuario</th>
                    <th class="uk-text-center">Nombre del curso</th>
                    <th class="uk-text-center">Monto</th>
                    <th class="uk-text-center">Comprobante</th>
                    <th class="uk-text-center">Monto verficado</th>
                    <th class="uk-text-center">Acciones</th>
                </tr>
            </thead>

            @foreach($matriculas ?? '' as $matricula)
            <tbody>
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$matricula->user_id}}</td>
                    <td>{{$matricula->user_name}}</td>
                    <td>{{$matricula->curso_name}}</td>
                    <td>{{$matricula->curso_precio}}</td>
                    <td><img src="{{asset('/').$matricula->voucher}}" onclick="window.open('{{asset('/').$matricula->voucher}}')" class="manoAzul imgCursoAdmin"></td>
                    <td>{{$matricula->monto_verif}}</td>
                    <td>

                        <form method="POST" action="{{url('/matricula_update/'.$matricula->id)}}">
                         @csrf
                         <label for="monto">Ingresa el monto del comprobnate:</label>
                         <input id="monto" name="verificar" type="text" value="{{$matricula->monto_verif}}">
                         <hr>
                         <label for="verificar">Estado: {{$matricula->status}}</label>
                         <br>
                         <select id="verificar" name="acceso">

                          <option>Sin acceso</option>
                          
                          <option>Acceso autorizado</option>
                          
                          </select>
                         <hr>
                         <button type="submit" onclick="return confirm('¿Estás seguro que deseas borrar esta entrada?');">Guardar</button>   
                        </form>

                    </td>
                </tr>

            </tbody>
            @endforeach 

        </table>
      



    </div>
</div>




<script>

//Esta función controla el display del menu
 /* function myFunction(x) {
    if (x.matches) { // If media query matches
      document.getElementById("aulamenu").style.display = "none";
    }
  }

  var x = window.matchMedia("(max-width: 1600px)")
  myFunction(x) // Call listener function at run time
  x.addListener(myFunction) // Attach listener function on state changes */


</script>

</div>
@endsection