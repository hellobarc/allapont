@extends('footer')
@extends('header')

@section('title')
Trabaja en Alappont | Alappont
@endsection

@section('content')





            <div class="uk-container uk-container-small"  style="margin-top:3%; margin-bottom:3%;">
                <article class="uk-article ">

                    <h1 class="uk-article-title" ><a class="uk-link-reset" href="">Empleos</a></h1>
                
                    <p class="uk-text-lead">Contratamos investigadores especialistas en todas las áreas del conocimiento:</p>

                    <hr>

                    <div class="uk-card   uk-card-body uk-width-1-1@m" style="border-radius: 10px; background-color: #18191a !important; align-items: left;">
                        <h3 class="">Redactor científico en ciencias sociales</h3>
                        <ul>
                            <li>Habilidades para redacción</li>
                            <li>Habilidades para ss</li>
                        </ul>
                        <button class="uk-button ">Postularme</button>
                    </div>
                    <br>

                    <div class="uk-card   uk-card-body uk-width-1-1@m" style="border-radius: 10px; background-color: #18191a !important; align-items: left;">
                        <h3 class="">Redactor científico en ciencias sociales</h3>
                        <ul>
                            <li>Habilidades para redacción</li>
                            <li>Habilidades para ss</li>
                        </ul>
                        <button class="uk-button ">Postularme</button>
                    </div>
                    <br>

                </article>
            </div>


















<div class="uk-padding-large">
    <article class="uk-article">

        <h2 class="uk-article-title"><a class="uk-link-reset" href="">Trabaja en Alappont</a></h2>
        <hr class="">



    
            <h2>Contratamos investigadores especialistas en todas las áreas del conocimiento</h2>

              

              

              <div>Pueden postular:</div>
              <ul>
              <li>Estudiantes</li>
              <li>Egresados</li>
              
              
              Bachilleres
              Licenciados
              Magísteres
              Doctores
              De institutos y universidades, públicas y privadas
              </ul>






      Líneas de investigación:
      Sistemas educativos y tecnologías para la educación
      Inteligencia artificial
      Matemáticas básicas y aplicadas
      Ciencias del comportamiento
      Biotecnología y agrotecnología
      Desarrollo de Software para las plataformas
      Ciencias químicas o de materiales
      Producción y animación audiovisual (3D)
      Imagen y fotografía
      Diseño gráfico
      Especialistas en mercadeo y comercialización de productos
      Electrónica
      Física
      Química
      Administración y gestión empresarial
      Especialista en redes sociales y posicionamiento en internet
      Fianzas y economía
      Desarrollo de negocios
      Ingenieros acústicos
      Artistas plásticos y digitales
      Estadísticos
      Ingenieros mecánicos
      Especialistas en recursos humanos
      Motores cohete
      Navegación
      Minería



      Beneficios
      Trabajar en un ambiente altamente competitivo y desafiante con colegas de distintas diciplinas científicas
      Remuneración acorde al mercado laboral
      Alimentación tres comidas diarias
      Pasajes y movilidad
      Contratación mediante planilla con todos los beneficios de ley


      Contratación inmediata
      Horarios flexibles


      <h2>Completa el formulario y postula</h2>

        <form method="POST" action="{{route('postulante')}}" enctype="multipart/form-data">
          @csrf
          Nombre
          <input type="" name="nombre">
          <br>
          Correo
          <input type="" name="correo">
          <br>
          Celular
          <input type="" name="celular">
          <br>
          Cuentanos porque deseas formar parte de Alappont
          <input type="text" name="comentario">
          <br>
          Adjunta tu Curriculum Vitae
          <br>
          <input type="file" multiple name="curriculum">
          
          <!--<a class="js-upload uk-placeholder uk-text-center"
              <span uk-icon="icon: cloud-upload"></span>
              <span class="uk-text-middle">Attach binaries by dropping them here or</span>
              <div uk-form-custom>
                  <input type="file" multiple name="curriculum">
                  <span class="uk-link">selecting one</span>
              </div>
              <progress id="js-progressbar" class="uk-progress" value="0" max="100" hidden></progress>
              
          </a>-->

          
          <br>
          <button>Enviar</button>

        </form>

      <!--<script>

          var bar = document.getElementById('js-progressbar');

          UIkit.upload('.js-upload', {

              url: '',
              multiple: true,

              beforeSend: function () {
                  console.log('beforeSend', arguments);
              },
              beforeAll: function () {
                  console.log('beforeAll', arguments);
              },
              load: function () {
                  console.log('load', arguments);
              },
              error: function () {
                  console.log('error', arguments);
              },
              complete: function () {
                  console.log('complete', arguments);
              },

              loadStart: function (e) {
                  console.log('loadStart', arguments);

                  bar.removeAttribute('hidden');
                  bar.max = e.total;
                  bar.value = e.loaded;
              },

              progress: function (e) {
                  console.log('progress', arguments);

                  bar.max = e.total;
                  bar.value = e.loaded;
              },

              loadEnd: function (e) {
                  console.log('loadEnd', arguments);

                  bar.max = e.total;
                  bar.value = e.loaded;
              },

              completeAll: function () {
                  console.log('completeAll', arguments);

                  setTimeout(function () {
                      bar.setAttribute('hidden', 'hidden');
                  }, 1000);

                  alert('Upload Completed');
              }

          });

      </script>-->

    <!--Alert de datos recibidos-->
    <script>
      var msg = '{{Session::get('alert')}}';
      var exist = '{{Session::has('alert')}}';
      if(exist){
        alert(msg);
      }
    </script>
    <!--END Alert de datos recibidos-->
    </article>

</div>






@endsection