@extends('footer')
@extends('header')

@section('title')
I Seminario Virtual en Derecho | Alappont
@endsection

@section('content')


<div class="uk-text-left" style="padding: 5px; background:#3F3F3F; color: #f0f2f5;" >
    <!--<span style="font-size:16px; color: #f0f2f5;" class=" uk-button-link uk-text-uppercase " type="button" >Alappont <i class="fa fa-external-link"  style="font-size:16px;"></i> </span>-->
    <span style="font-size:16px;" class="uk-text-uppercase"> Aula Virtual </span>
    <span style="font-size:16px;" class="uk-text-uppercase"> / I Seminario Virtual en Derecho</span>
    <!--<span style="font-size:16px;" >{ { $cuotas->links() } }</span>-->
</div>


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
function vid6() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("vid").innerHTML = this.responseText;
    };
  };
  xhttp.open("GET", "{{asset('aulas/IJornadaDerecho/vid6.txt')}}", true);
  xhttp.send();
};

function vid7() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("vid").innerHTML = this.responseText;
    };
  };
  xhttp.open("GET", "{{asset('aulas/IJornadaDerecho/vid7.txt')}}", true);
  xhttp.send();
};

function vid8() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("vid").innerHTML = this.responseText;
    };
  };
  xhttp.open("GET", "{{asset('aulas/IJornadaDerecho/vid8.txt')}}", true);
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
              <h2 class="tituloLec">I Seminario Virtual en Derecho</h2>

        <hr class="hr-pading">

        <div uk-slider="center: true " class="uk-text-center  ">

            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                <ul class="uk-slider-items uk-child-width-1-1@s uk-grid ">
                    <li>
                          <div class="lecciones" onclick="vid1()">1 de 9 - El Ministerio Público al servicio de la comunidad – Abog. Erick Fernando Hernandez Ascencio</div>
                    </li>
                    <li>
                          <div class="lecciones" onclick="vid2()">2 de 9 - Desnaturalización de Contrato de Locación de Servicios – Abog. Jaime Diego Huailla Calle</div>
                    </li>
                    <li>
                      <div class="lecciones" onclick="vid3()">3 de 9 - Código e Introducción a las Ciencias Penales – Abog. Renzo Francisco Peña Colán</div>
                    </li>
                    <li>
                      <div class="lecciones" onclick="vid4()">4 de 9 - Los Sujetos Procesales en el Nuevo Código Procesal Penal – Abog. Virna Alicia Sánchez García</div>
                    </li>
                    <li>
                      <div class="lecciones" onclick="vid5()">5 de 9 - Estándares de prueba y presunción de inocencia – Abog. Diego Alarcón Donayre</div>
                    </li>
                    <li>
                      <div class="lecciones" onclick="vid6()">6 de 9 - Distinción de tributación municipal con tributación nacional – Abog. Russell Saúl Chire Gutierrez</div>
                    </li>
                    <li>
                      <div class="lecciones" onclick="vid7()">7 de 9 - Régimen laboral de las trabajadoras del hogar – Abog. Jaime Diego Huailla Calle</div>
                    </li>
                    <li>
                      <div class="lecciones" onclick="vid8()">8 de 9 - La función del fiscal de prevención del delito – Abog. Erick Fernando Hernandez Ascencio</div>
                    </li>
                    <li>
                      <div class="lecciones" onclick="agra()">9 de 9 - Agradecimientos</div>
                    </li>
                </ul>

                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

            </div>
            <hr class="hr-pading">
        </div>
</div>


<div class="uk-text-left " uk-grid>

    <div class="uk-width-1-4@m aulamenu padcero" id="aulamenu">
        <p class="lecciones" onclick="vid1()">El Ministerio Público al servicio de la comunidad – Abog. Erick Fernando Hernandez Ascencio [56:52]</p>
        <hr class="hr-pading">
        <p class="lecciones" onclick="vid2()">Desnaturalización de Contrato de Locación de Servicios – Abog. Jaime Diego Huailla Calle [1:34:43]</p>
        <hr class="hr-pading">
        <p class="lecciones" onclick="vid3()">Código e Introducción a las Ciencias Penales – Abog. Renzo Francisco Peña Colán [54:41]</p>
        <hr class="hr-pading">
        <p class="lecciones" onclick="vid4()">Los Sujetos Procesales en el Nuevo Código Procesal Penal – Abog. Virna Alicia Sánchez García [1:04:41]</p>
        <hr class="hr-pading">
        <p class="lecciones" onclick="vid5()">Estándares de prueba y presunción de inocencia – Abog. Diego Alarcón Donayre</p>
        <hr class="hr-pading">
        <p class="lecciones" onclick="vid6()">Distinción de tributación municipal con tributación nacional – Abog. Russell Saúl Chire Gutierrez</p>
        <hr class="hr-pading">
        <p class="lecciones" onclick="vid7()">Régimen laboral de las trabajadoras del hogar – Abog. Jaime Diego Huailla Calle</p>
        <hr class="hr-pading">  
        <p class="lecciones" onclick="vid8()">La función del fiscal de prevención del delito – Abog. Erick Fernando Hernandez Ascencio</p>
        <hr class="hr-pading">                   
        <p class="lecciones" onclick="agra()">Agradecimientos </p>
     
    </div>


    <div class="uk-width-expand@m padceroo aulacontent uk-text-center " id="vid">
        <div class="iframe-container">
        <iframe  class="video " width="950" height="700" src="https://www.youtube.com/embed/VJjF1WCERqA?start=99" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <!--<iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FAlappont%2Fvideos%2F669064990538153%2F&show_text=0&width=560" width="1100" height="700" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>-->
        </div>
        <button onclick="window.open('https://drive.google.com/file/d/1ZkfTA0msBrVuPlTsC3wRLGNyiK58gGtn/view?usp=sharing')" class="uk-align-center uk-margin-small-top uk-button uk-button-default uk-button-large radcard">Descargar diapositivas</button>
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