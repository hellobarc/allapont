@extends('footer')
@extends('header')

@section('title')
Violencia contra las mujeres | Alappont
@endsection

@section('content')

<div class="uk-text-center " >
            <h2 class="uk-margin-top">La violencia contra las mujeres durante el estado de emergencia nacional</h2>

            <div class="uk-width-expand@m" id="vid">
              <div class="iframe-container">
                 <iframe  class="video " width="1100" height="700" src="https://www.youtube.com/embed/gy4AE3Fxd8g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>

              <button onclick="window.open('https://drive.google.com/file/d/1-uc4d4DeglWAW-7WDrWQ65OnEMx2rUWP/view?usp=sharing')" class="uk-align-center uk-margin-small-top uk-button uk-button-default uk-button-large radcard">Descargar diapositivas</button>
          </div>
</div>

@endsection