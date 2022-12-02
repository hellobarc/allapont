@extends('footer')
@extends('header')

@section('title')
Despido Arbitrario | Alappont
@endsection

@section('content')



<script>
function updateTimer() {
  future  = Date.parse("June 11, 2020 19:00:00");
  now     = new Date();
  diff    = future - now;

  days  = Math.floor( diff / (1000*60*60*24) );
  hours = Math.floor( diff / (1000*60*60) );
  mins  = Math.floor( diff / (1000*60) );
  secs  = Math.floor( diff / 1000 );

  d = days;
  h = hours - days  * 24;
  m = mins  - hours * 60;
  s = secs  - mins  * 60;

  document.getElementById("timer")
    .innerHTML =
      '<h2>' + d + '<span> días</span></h2>' +
      '<h2>' + h + '<span> horas</span></h2>' +
      '<h2>' + m + '<span> minutos</span></h2>' +
      '<h2>' + s + '<span> segundos</span></h2>' ;
}
setInterval('updateTimer()', 1000 );    
</script>



<div class="uk-text-center " style="height: 800px;">



            <h2 class="uk-margin-top">Despido Arbitrario</h2>

            <!--<button onclick="window.open('https://drive.google.com/file/d/1ZkfTA0msBrVuPlTsC3wRLGNyiK58gGtn/view?usp=sharing')" class="uk-align-center uk-margin-small-top uk-button uk-button-default uk-button-large radcard">Descargar diapositivas</button>-->
           
            <p>Este evento inicia el 11 de junio del 2020 a las 19:00 h. Exactamente en:</p>

            <div id="timer"></div>
           



            <!--
            <div id="embedWidget"></div>

            <script type='text/javascript'>
                var _options = {
                    '_license_key':'969-787-716',
                    '_role_token':'',
                    '_registration_token':'',
                    '_widget_containerID':'embedWidget',
                    '_widget_width':'100%',
                    '_widget_height':'100vh',
                };
                (function() {
                    !function(i){
                        i.Widget=function(c){
                            'function'==typeof c&&i.Widget.__cbs.push(c),
                            i.Widget.initialized&&(i.Widget.__cbs.forEach(function(i){i()}),
                            i.Widget.__cbs=[])
                        },
                        i.Widget.__cbs=[]
                    }(window);
                    var ab = document.createElement('script'); 
                    ab.type = 'text/javascript'; 
                    ab.async = true;
                    ab.src = 'https://embed.livewebinar.com/em?t='+_options['_license_key']+'&'+Object.keys(_options).reduce(function(a,k){
                            a.push(k+'='+encodeURIComponent(_options[k]));
                            return a
                        },[]).join('&');
                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ab, s);
                })();
            </script>
            -->









</div>





@endsection