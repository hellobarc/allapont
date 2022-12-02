@extends('footer')

@extends('header')

@section('title')
TEST - Alappont
@endsection
<link href="{{asset('prism/prism.css')}}" rel="stylesheet" />
<script src="{{asset('prism/prism.js')}}"></script>

<style>
table, td, th {
	border: 0.01px solid ;
  padding-top: 0px;
}
table {
	margin: 0 auto;
	border-collapse: collapse;
  text-align: center;
}
</style>



@section('content')

<div  class="uk-container uk-container-small" style="margin-top:3%; margin-bottom:3%;">
    <article class="">
      <h2 class="uk-article-title"><a class="uk-link-reset" href="">Trait Meta-Mood Scale 24 (TMMS-24) </a></h2>
      <hr class="">
      <div class="margin-inv-serv" style="margin-top:50px; border: solid 1px #3E4042; border-radius:10px; ">
          <div style="padding: 10px; " >
              <div class="uk-text-left  " style="border-left: solid 5px #3E4042; padding-left:15px;" >
                  <h2 class="" style="margin:0px">ítems</h2>
              </div>
          </div>
      </div>
      <div style="overflow: auto; margin-top:10px;">
        <table style="">
          <tr style="  border-collapse: collapse;">
            <th>#</th>
            <th width="400px">ítems</th>
            <th width="100px">Nada de Acuerdo</th>
            <th width="100px">Algo de Acuerdo </th>
            <th width="100px">Bastante de acuerdo</th>
            <th width="100px">Muy de Acuerdo</th>
            <th width="100px">Totalmente de acuerdo</th>
          </tr>
          <tr>
            <td>1.</td>
            <td>Presto mucha atención a los sentimientos.</td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
          </tr>
          <tr>
            <td>2.</td>
            <td>Normalmente me preocupo mucho por lo que siento. </td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
          </tr>
          <tr>
            <td>3.</td>
            <td>Normalmente dedico tiempo a pensar en mis emociones. </td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
          </tr>
          <tr>
            <td>4.</td>
            <td>Pienso que merece la pena prestar atención a mis emociones y estado de ánimo. </td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
          </tr>
          <tr>
            <td>5.</td>
            <td>Dejo que mis sentimientos afecten a mis pensamientos. </td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
          </tr>
          <tr>
            <td>6.</td>
            <td>Pienso en mi estado de ánimo constantemente.</td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
          </tr>
          <tr>
            <td>7.</td>
            <td>A menudo pienso en mis sentimientos.  </td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
          </tr>
          <tr>
            <td>8.</td>
            <td>Presto mucha atención a cómo me siento. </td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
          </tr>

          <tr>
            <td>9.</td>
            <td>Tengo claros mis sentimientos. </td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
          </tr>
          <tr>
            <td>10.</td>
            <td>Frecuentemente puedo definir mis sentimientos.</td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
          </tr>
          <tr>
            <td>11.</td>
            <td>Casi siempre sé cómo me siento. </td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
          </tr>
          <tr>
            <td>12.</td>
            <td>Normalmente conozco mis sentimientos sobre las personas. </td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
          </tr>
          <tr>
            <td>13.</td>
            <td>A menudo me doy cuenta de mis sentimientos en diferentes situaciones.</td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
          </tr>
          <tr>
            <td>14.</td>
            <td>Siempre puedo decir cómo me siento. </td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
          </tr>
          <tr>
            <td>15.</td>
            <td>A veces puedo decir cuáles son mis emociones.</td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
          </tr>
          <tr>
            <td>16.</td>
            <td>Puedo llegar a comprender mis sentimientos.</td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
          </tr>


          <tr>
            <td>17.</td>
            <td>Aunque a veces me siento triste, suelo tener una visión optimista.</td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
          </tr>
          <tr>
            <td>18.</td>
            <td>Aunque me sienta mal, procuro pensar en cosas agradables.</td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
          </tr>
          <tr>
            <td>19.</td>
            <td>Cuando estoy triste, pienso en todos los placeres de la vida.</td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
          </tr>

          <tr>
            <td>20.</td>
            <td>Intento tener pensamientos positivos aunque me sienta mal. </td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
          </tr>
          <tr>
            <td>21.</td>
            <td>Si doy demasiadas vueltas a las cosas, complicándolas, trato de calmarme.</td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
          </tr>

          <tr>
            <td>22.</td>
            <td>Me preocupo por tener un buen estado de ánimo.</td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
          </tr>
          <tr>
            <td>23.</td>
            <td>Tengo mucha energía cuando me siento feliz.</td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
          </tr>
          <tr>
            <td>24.</td>
            <td>Cuando estoy enfadado intento cambiar mi estado de ánimo</td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
          </tr>
        </table>
      </div>

      <div class="margin-inv-serv" style="margin-top:50px; border: solid 1px #3E4042; border-radius:10px; ">
          <div style="padding: 10px; " >
              <div class="uk-text-left  " style="border-left: solid 5px #3E4042; padding-left:15px;" >
                  <h2 class="" style="margin:0px">Algorítmo en Python 🐍</h2>
              </div>
          </div>
      </div>

      <p>
        Se emplean los paquetes numpy y pandas.
      </p>
      <pre><code class="language-python">
import numpy as np
import pandas as pd
      </code></pre>
      <p>
        Se importa la base de datos con las respuestas.
      </p>

      <pre><code class="language-python">
datos = pd.read_csv('datos.csv')
      </code></pre>
      <p>
        Se declaran los ítems.
      </p>

      <pre><code class="language-python">
i1 =  datos['1.	 Presto mucha atención a los sentimientos.']
i2 =  datos["2.	 Normalmente me preocupo mucho por lo que siento."]
i3 =  datos["3.	 Normalmente dedico tiempo a pensar en mis emociones."]
i4 =  datos["4.	 Pienso que merece la pena prestar atención a mis emociones y estado de ánimo."]
i5 =  datos["5.	 Dejo que mis sentimientos afecten a mis pensamientos."]
i6 =  datos["6.	 Pienso en mi estado de ánimo constantemente."]
i7 =  datos["7.  A menudo pienso en mis sentimientos."]
i8 =  datos["8.	 Presto mucha atención a cómo me siento."]
i9 =  datos["9.	 Tengo claros mis sentimientos."]
i10 = datos["10. Frecuentemente puedo definir mis sentimientos."]
i11 = datos["11. Casi siempre sé cómo me siento."]
i12 = datos["12. Normalmente conozco mis sentimientos sobre las personas."]
i13 = datos["13. A menudo me doy cuenta de mis sentimientos en diferentessituaciones."]
i14 = datos["14. Siempre puedo decir cómo me siento."]
i15 = datos["15. A veces puedo decir cuáles son mis emociones."]
i16 = datos["16. Puedo llegar a comprender mis sentimientos."]
i17 = datos["17. Aunque a veces me siento triste, suelo tener una visión optimista."]
i18 = datos["18. Aunque me sienta mal, procuro pensar en cosas agradables."]
i19 = datos["19. Cuando estoy triste, pienso en todos los placeres de la vida."]
i20 = datos["20. Intento tener pensamientos positivos aunque me sienta mal."]
i21 = datos["21. Si doy demasiadas vueltas a las cosas, complicándolas, trato de calmarme."]
i22 = datos["22. Me preocupo por tener un buen estado de ánimo."]
i23 = datos["23. Tengo mucha energía cuando me siento feliz."]
i24 = datos["24. Cuando estoy enfadado intento cambiar mi estado de ánimo."]
      </code></pre>
      <p>
        La primera transformación es la suma directa. Se suman los ítems que corresponden a las dimensiones.
      </p>
      <pre><code class="language-python">
#Atención emocional
atencion_t1 = pd.DataFrame(
    np.sum(
    pd.concat([i1,i2,i3,i4,i5,i6,i7,i8], axis=1)
    ,axis=1)
)
atencion_t1 = pd.DataFrame(atencion_t1)
atencion_t1.columns = ['Atención emocional']

#Claridad emocional
claridad_t1 = pd.DataFrame(
    np.sum(
    pd.concat([i9,i10,i11,i12,i13,i14,i15,i16], axis=1)
    ,axis=1)
)
claridad_t1 = pd.DataFrame(claridad_t1)
claridad_t1.columns = ['Claridad emocional']

#Reparaciona de emociones
reparacion_t1 = pd.DataFrame(
    np.sum(
    pd.concat([i17,i18,i19,i20,i21,i22,i23,i24], axis=1)
    ,axis=1)
)
reparacion_t1 = pd.DataFrame(reparacion_t1)
reparacion_t1.columns = ['Reparación de las emociones']
      </code></pre>
      <p>
        Se cuentan con reglas de asignación de categorías diferenciadas para hombres y mujeres.
      </p>
      <p>
        En primer lugar está la regla de asignación de categorías para hombres.
      </p>
      <pre><code class="language-python">  
#Atención emocional    
atencion_t2 = []
for i in atencion_t1['Atención emocional']:
  if(21>=i): atencion_t2.append(1)#Debe mejorar su atención: presta poca atención
  if(32>=i>21): atencion_t2.append(2)#Adecuada atención
  if(i>32): atencion_t2.append(3)#Debe mejorar su atención: presta demasiada atención
atencion_t2 = pd.DataFrame(atencion_t2)
atencion_t2.columns = ['Atención emocional']

#Claridad emocional
claridad_t2 = []
for i in claridad_t1['Claridad emocional']:
  if(25>=i): claridad_t2.append(1)#Debe mejorar su atención: presta poca atención
  if(35>=i>25): claridad_t2.append(2)#Adecuada atención
  if(i>35): claridad_t2.append(3)#Debe mejorar su atención: presta demasiada atención
claridad_t2 = pd.DataFrame(claridad_t2)
claridad_t2.columns = ['Claridad emocional']

#Reparaciona de emociones
reparacion_t2 = []
for i in reparacion_t1['Reparación de las emociones']:
  if(23>=i): reparacion_t2.append(1)#Debe mejorar su atención: presta poca atención
  if(35>=i>23): reparacion_t2.append(2)#Adecuada atención
  if(i>35): reparacion_t2.append(3)#Debe mejorar su atención: presta demasiada atención
reparacion_t2 = pd.DataFrame(reparacion_t2)
reparacion_t2.columns = ['Reparación de las emociones']
      </code></pre>
      <p>
        Luego está la regla de asignación de categorías para mujeres.
      </p>
      <pre><code class="language-python">  
#Atención emocional    
atencion_t2 = []
for i in atencion_t1['Atención emocional']:
  if(24>=i): atencion_t2.append(1)#Debe mejorar su atención: presta poca atención
  if(35>=i>24): atencion_t2.append(2)#Adecuada atención
  if(i>35): atencion_t2.append(3)#Debe mejorar su atención: presta demasiada atención
atencion_t2 = pd.DataFrame(atencion_t2)
atencion_t2.columns = ['Atención emocional']

#Claridad emocional
claridad_t2 = []
for i in claridad_t1['Claridad emocional']:
  if(23>=i): claridad_t2.append(1)#Debe mejorar su atención: presta poca atención
  if(34>=i>23): claridad_t2.append(2)#Adecuada atención
  if(i>34): claridad_t2.append(3)#Debe mejorar su atención: presta demasiada atención
claridad_t2 = pd.DataFrame(claridad_t2)
claridad_t2.columns = ['Claridad emocional']

#Reparaciona de emociones
reparacion_t2 = []
for i in reparacion_t1['Reparación de las emociones']:
  if(23>=i): reparacion_t2.append(1)#Debe mejorar su atención: presta poca atención
  if(34>=i>23): reparacion_t2.append(2)#Adecuada atención
  if(i>34): reparacion_t2.append(3)#Debe mejorar su atención: presta demasiada atención
reparacion_t2 = pd.DataFrame(reparacion_t2)
reparacion_t2.columns = ['Reparación de las emociones']
      </code></pre>
    </article>

</div>



@endsection