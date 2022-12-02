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
      <h2 class="uk-article-title"><a class="uk-link-reset" href="">Cuestionario de modos de afrontamiento al estrés (COPE) modo 
disposicional  de  Carver,  Scheier  y  Weintraub  (1989)</a></h2>
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
            <th width="50px">#</th>
            <th width="700px">ítems</th>
            <th width="120px">Si</th>
            <th width="120px">No</th>
          </tr>

          <tr>
            <td>1</td>
            <td>Ejecuto acciones adicionales para deshacerme del problema</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Elaboro un plan de acción para deshacerme del problema</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Dejo de lado otras actividades para concentrarme en el problema</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Me esfuerzo esperando el momento apropiado para enfrentar el problema</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>5</td>
            <td>Pregunto a personas que han tenido experiencias similares sobre lo que hicieron</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>6</td>
            <td>Hablo con alguien sobre mis sentimientos </td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>7</td>
            <td>Busco algo bueno de lo que está pasando</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>8</td>
            <td>Aprendo a convivir con el problema</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>9</td>
            <td>Busco la ayuda de Dios</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>10</td>
            <td>Emocionalmente me perturbo y libero mis emociones</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>11</td>
            <td>Me niego a aceptar que el problema ha ocurrido</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>12</td>
            <td>Dejo de lado mis metas</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>13</td>
            <td>Me dedico a trabajar o realizar otras actividades para alejar el problema de mi mente</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>14</td>
            <td>Concentro mis esfuerzos para hacer algo sobre el problema</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>15</td>
            <td>Elaboro un plan de acción</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>16</td>
            <td>Me dedico a enfrentar el problema, y si es necesario dejo de lado otras actividades</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>17</td>
            <td>Me mantengo alejado del problema sin hacer nada, hasta que la situación lo permita</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>18</td>
            <td>Trato de obtener el consejo de otros para saber qué hacer con el problema </td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>19</td>
            <td>Busco el apoyo emocional de amigos o familiares</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>20</td>
            <td>Trato de ver el problema en forma positiva</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>21</td>
            <td>Acepto que el problema ha ocurrido y no podrá ser cambiado</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>22</td>
            <td>Deposito mi confianza en Dios</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>23</td>
            <td>Libero mis emociones</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>24</td>
            <td>Actúo como si el problema no hubiera sucedido realmente</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>25</td>
            <td>Dejo de perseguir mis metas</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>26</td>
            <td>Voy al cine o miro la TV, para pensar menos en el problema</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>27</td>
            <td>Hago paso a paso lo que tiene que hacerse</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>28</td>
            <td>Me pongo a pensar más en los pasos a seguir para solucionar el problema</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>29</td>
            <td>Me alejo de otras actividades para concentrarme en el problema</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>30</td>
            <td>Me aseguro de no crear problemas peores por actuar muy pronto</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>31</td>
            <td>Hablo con alguien para averiguar más sobre el problema</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>32</td>
            <td>Converso con alguien sobre lo que me está sucediendo</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>33</td>
            <td>Aprendo algo de la experiencia</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>34</td>
            <td>Me acostumbro a la idea de que el problema ya ha sucedido</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>35</td>
            <td>Trato de encontrar consuelo en mi religión</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>36</td>
            <td>Siento mucha perturbación emocional y expreso esos sentimientos a otros</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>37</td>
            <td>Me comporto como hubiese ocurrido el problema</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>38</td>
            <td>Acepto que puedo enfrentar al problema y lo dejo de lado</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>39</td>
            <td>Sueño despierto con otras cosas que no se relacionen al problema</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>40</td>
            <td>Actúo directamente para controlar el problema</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>41</td>
            <td>Pienso en la mejor manera de controlar el problema</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>42</td>
            <td>Trato que otras cosas no interfieran en los esfuerzos que pongo para enfrentar el problema </td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>43</td>
            <td>Me abstengo de hacer algo demasiado pronto </td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>44</td>
            <td>Hablo con alguien que podría hacer algo concreto sobre el problema</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>45</td>
            <td>Busco la simpatía y la comprensión de alguien</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>46</td>
            <td>Trato de desarrollarme como una persona a consecuencia de la experiencia</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>47</td>
            <td>Acepto que el problema ha sucedido</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>48</td>
            <td>Rezo más de lo usual</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>49</td>
            <td>Me perturbo emocionalmente y estoy atento al problema</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>50</td>
            <td>Me digo a mí mismo: “Esto no es real”</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>51</td>
            <td>Disminuyo los esfuerzos que pongo para solucionar el problema</td>
            <td>2</td>
            <td>1</td>
          </tr>
          <tr>
            <td>52</td>
            <td>Duermo más de lo usual</td>
            <td>2</td>
            <td>1</td>
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

    </article>

</div>



@endsection