@extends('footer')
@extends('header')

@section('title')
El delito de acoso: Un breve comentario | Alappont
@endsection

@section('content')

            

<div class="uk-text-center " >
        <h2 class="uk-margin-top">El delito de acoso: Un breve comentario</h2>

            <div class="uk-width-expand@m" id="vid">
              <div class="iframe-container">
                 <iframe  class="video " width="1100" height="700" src="https://www.youtube.com/embed/U7kWgU1ZsZU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>

              <button onclick="window.open('https://drive.google.com/file/d/1ZFkV3XZ6hnPhvz7zOTj2hZHbBtp8iIzv/view?usp=sharing')" class="uk-align-center uk-margin-small-top uk-button uk-button-default uk-button-large radcard">Descargar diapositivas</button>
          </div>
</div>

@endsection