@extends('footer')
@extends('header')

@section('title')
Reunion - Alappont
@endsection

@section('content')

<script>
function vid1() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("vid").innerHTML = this.responseText;
    };
  };
  xhttp.open("GET", "{{asset('aulas/IJornadaDerecho/vid1.txt')}}", true);
  xhttp.send();
};
function vid2() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("vid").innerHTML = this.responseText;
    };
  };
  xhttp.open("GET", "{{asset('aulas/IJornadaDerecho/vid2.txt')}}", true);
  xhttp.send();
};
function vid3() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("vid").innerHTML = this.responseText;
    };
  };
  xhttp.open("GET", "{{asset('aulas/IJornadaDerecho/vid3.txt')}}", true);
  xhttp.send();
};
function vid4() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("vid").innerHTML = this.responseText;
    };
  };
  xhttp.open("GET", "{{asset('aulas/IJornadaDerecho/vid4.txt')}}", true);
  xhttp.send();
};
function vid5() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("vid").innerHTML = this.responseText;
    };
  };
  xhttp.open("GET", "{{asset('aulas/IJornadaDerecho/vid5.txt')}}", true);
  xhttp.send();
};
function agra() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("vid").innerHTML = this.responseText;
    };
  };
  xhttp.open("GET", "{{asset('aulas/IJornadaDerecho/agra.txt')}}", true);
  xhttp.send();
};
</script>



<div class="slideLec uk-text-center">
              <h2 class="tituloLec">REUNIÓN ALAPPONT</h2>

        <hr class="hr-pading">

        <div uk-slider="center: true " class="uk-text-center  ">

            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                <ul class="uk-slider-items uk-child-width-1-1@s uk-grid ">
                    <li>
                          <div class="lecciones" onclick="window.location.href = 'IISeminarioVirtualEnDerecho'">1 de 10 - Esto es un menú, hay mas videos -></div>
                    </li>
                    <li>
                          <div class="lecciones" onclick="vid2()">2 de 10 - Desnaturalización de Contrato de Locación de Servicios – Abog. Jaime Diego Huailla Calle</div>
                    </li>
                    <li>
                      <div class="lecciones" onclick="vid3()">3 de 10 - Código e Introducción a las Ciencias Penales – Abog. Renzo Francisco Peña Colán</div>
                    </li>
                    <li>
                      <div class="lecciones" onclick="vid4()">4 de 10 - Los Sujetos Procesales en el Nuevo Código Procesal Penal – Abog. Virna Alicia Sánchez García</div>
                    </li>
                    <li>
                      <div class="lecciones" onclick="vid5()">5 de 10 - Estándares de prueba y presunción de inocencia – Abog. Diego Alarcón Donayre</div>
                    </li>
                    <li>
                      <div class="lecciones" onclick="agra()">7 de 10 - Agradecimientos</div>
                    </li>

                </ul>

                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

            </div>
            <hr class="hr-pading">
        </div>
</div>


<div class="uk-text-center " uk-grid>

    <div class="uk-width-1-4@m aulamenu padcero" id="aulamenu">

        <h2 class="">REUNIÓN ALAPPONT</h2>

        <hr class="hr-pading">
        <div class="lecciones" onclick="window.location.href = 'IISeminarioVirtualEnDerecho'">Reunión</div>
        <hr class="hr-pading">
        <div class="lecciones" onclick="vid2()">Desnaturalización de Contrato de Locación de Servicios – Abog. Jaime Diego Huailla Calle</div>
        <hr class="hr-pading">
        <div class="lecciones" onclick="vid3()">Código e Introducción a las Ciencias Penales – Abog. Renzo Francisco Peña Colán</div>
        <hr class="hr-pading">
        <div class="lecciones" onclick="vid4()">Los Sujetos Procesales en el Nuevo Código Procesal Penal – Abog. Virna Alicia Sánchez García</div>
        <hr class="hr-pading">
        <div class="lecciones" onclick="vid5()">Estándares de prueba y presunción de inocencia – Abog. Diego Alarcón Donayre</div>
        <hr class="hr-pading">
        <div class="lecciones" onclick="agra()">Agradecimientos </div>
     
    </div>


    <div class="uk-width-expand@m  aulacontent " id="vid" style="padding: 0px;">





      https://www.youtube.com/embed/s9RQctfNXoQ?start=63




        <!--<button onclick="window.open('https://drive.google.com/file/d/1ZkfTA0msBrVuPlTsC3wRLGNyiK58gGtn/view?usp=sharing')" class="uk-align-center uk-margin-small-top uk-button uk-button-default uk-button-large radcard">Descargar diapositivas</button>-->
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

@endsection