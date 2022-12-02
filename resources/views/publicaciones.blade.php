@extends('footer')
@extends('header')

@section('title')
asdsa - Alappont
@endsection

@section('content')


<div class="uk-text-left" style="padding: 5px; background:#3F3F3F; color: #f0f2f5;" >
    <!--<span style="font-size:16px; color: #f0f2f5;" class=" uk-button-link uk-text-uppercase " type="button" >Alappont <i class="fa fa-external-link"  style="font-size:16px;"></i> </span>-->
    <span style="font-size:16px;" class="uk-text-uppercase"> publicaciones </span>
    <span style="font-size:16px;" class="uk-text-uppercase"> / Alejandro Herrera</span>
    <!--<span style="font-size:16px;" >{ { $cuotas->links() } }</span>-->
</div>



<div class="matriculaCont" style="">

        <div class=" matriculaTitle matriculaTit1" style="">
          <h2 style="margin-bottom: 0px !important;">Alejandro Herrera Garduño</h2>
        </div>

        <div class="contentMatricula" uk-grid >

            <div class="uk-width-expand@m  cursoContent" id="vid">
                    <div class="" >

                        <div class="matriculaTitle matriculaMargCeroBut"  >
                            <h3 class="matriculaMargCeroBut">Publicaciones</h3>
                        </div>

                        <div style="margin: 0px; margin-top: 10px;" class="uk-text-left">
                            <p>
                            Eficacia de la Psicoterapia Analítico Funcional para Disminuir el Trastorno de Evitación Experiencial:Un estudio piloto

                            http://revistas.iudigital.edu.co/index.php/ids/article/view/71/69
                            </p>

                            <p> <a style="color: #fff;"> BibTeX</a> | <a href=""  uk-icon="link"></a> Enlace de descarga</p>

<pre>
<code>
@article{garcia2022eficacia,
  title={Eficacia de la Psicoterapia Anal{\'\i}tico Funcional para Disminuir el Trastorno de Evitaci{\'o}n Experiencial: Un estudio piloto},
  author={Garc{\'\i}a, Horacio B {\'A}lvarez and Villafa{\~n}a, Jos{\'e} N Rangel and Gardu{\~n}o, Alejandro Herrera and others},
  journal={Revista Innovaci{\'o}n Digital y Desarrollo Sostenible-IDS},
  volume={2},
  number={2},
  pages={122--130},
  year={2022}
}
</code>
</pre>




<p>
Psicoterapia Analítico Funcional Mediado por las Tecnologías: Reporte de caso en conductas interpersonales.

http://104.36.166.45/index.php/ids/article/view/86/84
</p>

<p> <a style="color: #fff;"> BibTeX</a> | <a href=""  uk-icon="link"></a> Enlace de descarga</p>

<pre>
<code>
@article{martinez2022psicoterapia,
  title={Psicoterapia Anal{\'\i}tico Funcional Mediado por las Tecnolog{\'\i}as: Reporte de caso en conductas interpersonales},
  author={Mart{\'\i}nez, Erick Jes{\'u}s Acevedo and {\'A}lvarez-Garc{\'\i}a, Horacio Balam and Gardu{\~n}o, Alejandro Herrera},
  journal={Revista Innovaci{\'o}n Digital y Desarrollo Sostenible-IDS},
  volume={3},
  number={1},
  pages={53--58},
  year={2022}
}
</code>
</pre>
         


<p>
Falibilismo, Continuidad y Evolución del Conductismo en Psicología Desde la Perspectiva de Charles Sanders Peirce.

http://revistas.iudigital.edu.co/index.php/ids/article/view/33/31
</p>

<p> <a style="color: #fff;"> BibTeX</a> | <a href=""  uk-icon="link"></a> Enlace de descarga</p>

<pre>
<code>
@article{herrera2021falibilismo,
  title={Falibilismo, Continuidad y Evoluci{\'o}n del Conductismo en Psicolog{\'\i}a Desde la Perspectiva de Charles Sanders Peirce.},
  author={Herrera-Gardu{\~n}o, Alejandro and Parra-Bola{\~n}os, Nicol{\'a}s and Mart{\'\i}nez-Su{\'a}rez, Pedro Carlos},
  journal={Revista Innovaci{\'o}n Digital y Desarrollo Sostenible-IDS},
  volume={1},
  number={2},
  pages={94--107},
  year={2021}
}
</code>
</pre>


<p>
¿La Psicología Conductista Como Una Ciencia O Una Tecnología? Respondiendo A Edward Bradford Titchener

http://104.36.166.45/index.php/ids/article/view/31/29
</p>

<p> <a style="color: #fff;"> BibTeX</a> | <a href=""  uk-icon="link"></a> Enlace de descarga</p>

<pre>
<code>
@article{herrera2021psicologia,
  title={?` La Psicolog{\'\i}a Conductista Como Una Ciencia O Una Tecnolog{\'\i}a? Respondiendo A Edward Bradford Titchener},
  author={Herrera-Gardu{\~n}o, Alejandro and Parra-Bola{\~n}os, Nicol{\'a}s and Castro, Jes{\'u}s Ahal{\'a}n Castro},
  journal={Revista Innovaci{\'o}n Digital y Desarrollo Sostenible-IDS},
  volume={1},
  number={2},
  pages={74--82},
  year={2021}
}
</code>
</pre>




                        </div>

                    </div>
            </div>



            <div class="uk-width-1-4@m  padcero matriculaMenu  " id="aulamenu" style=" background: #242526; padding: 0px !important; border-radius: 10px 10px 10px 10px;">


              <div class="uk-text-center " style="padding: 30px;">
                <img class="imgCursoCard imgPonentes" src="http://127.0.0.1:8000/courses/instructores/ins_1591106047.Alejandro_Herrera_Garduno.jpg" style="border-radius:10000px;" >
              </div>

              <div style="margin: 20px;" class="uk-text-left">
                <p>Profesor asociado de psicología en la Universidad Hispana, además de critico y revisor invitado en The Foundation University Journal of Psychology.</p>
              </div>
            </div>


        </div>




        


</div>


<!--Alert de datos recibidos-->
<script>
  var msg = '{{Session::get('alert')}}';
  var exist = '{{Session::has('alert')}}';
  if(exist){
    alert(msg);
  }
</script>
<!--END Alert de datos recibidos-->



<script>
  /*
  var mostrador = documentGetElementById('mostrador'),

  function myFunction(x) {
       if (x.matches) { // If media query matches
        mostrador.removeAttribute(uk-grid);
       }
     }
   
  var x = window.matchMedia("(max-width: 959px)")
  myFunction(x) // Call listener function at run time
  x.addListener(myFunction) // Attach listener function on state changes   
     */
</script>
  

@endsection