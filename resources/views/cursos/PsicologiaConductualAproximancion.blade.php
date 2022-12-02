@extends('footer')
@extends('header')

@section('title')
Psicología Conductual - Alappont
@endsection

@section('content')






<div class="uk-text-center " >
            <h2 class="uk-margin-top">Psicología Conductual: Aproximación historiográfica y conceptual a la enfermedad mental</h2>

            <div class="uk-width-expand@m" id="vid">
              <div class="iframe-container">
                 <iframe  class="video " width="1100" height="700" src="https://www.youtube.com/embed/R5BUXpId-OA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>

              <button onclick="window.open('https://drive.google.com/file/d/17L2oseHKXfxyTPvNrp_Q5aWE6xUzM3z0/view?usp=sharing')" class="uk-align-center uk-margin-small-top uk-button uk-button-default uk-button-large radcard">Descargar diapositivas</button>
          </div>
</div>





@endsection