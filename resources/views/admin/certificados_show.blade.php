@extends('header')

@section('title')
Administrador | Alappont
@endsection

@section('content')


<div id="app"><!---VUE-->

<div class="slideLec uk-text-center">
              <h2 class="tituloLec">Certificados emitidos</h2>

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

      <h3 class="">Certificados emitidos</h3>

        <div>
          <p><strong style="color: red;">*Los controladores están en desarrollo. Si se presenta algún error tomar captura del error que aparece y comunicárselo a Luis al correo: luisalejandromalaga@gmail.com</strong>
          </p>
        </div>
      
        <table class="uk-table uk-table-small uk-table-divider">
            <thead >
                <tr >
                    <th class="uk-text-center">#</th>
                    <th class="uk-text-center">Nombre del usuario</th>
                    <th class="uk-text-center">Nombre del curso</th>
                    <th class="uk-text-center">En calidad de...</th>
                    <th class="uk-text-center">Código del certificado</th>
                    <th class="uk-text-center">Fecha de emisión</th>
                    <th class="uk-text-center">Certificado</th>
                </tr>
            </thead>

            @forelse($certificados ?? '' as $certificado)
            <tbody>
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$certificado->user_name}}</td>
                    <td>{{$certificado->curso_name}}</td>
                    <td>{{$certificado->calidad}}</td>
                    <td>{{$certificado->codigo}}</td>
                    <td>{{$certificado->fecha}}</td>
                    <td><a onclick="window.open('{{asset('/').$certificado->certificado}}')" class="uk-button uk-button-default btnlogin uk-margin-bottom"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></td>
                </tr>
            </tbody>
            @empty
                <div class="uk-text-center">
                    <p>Aún no se ha emitido ningún certificado.</p>
                </div>
            @endforelse  


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