@extends('footer')

@extends('header')

@section('title')
La psicología - Alappont
@endsection


@section('content')




<style type="text/css">
.article{
  padding-top: 3%;
  padding-bottom: 3%;
  padding-left: 3%;
  padding-right: 3%;
  background:#fff !important; 
  color:#000 !important;
}
.h{
  color:#000 !important;
}

.input{
  width: 100px; 
  text-align: center;
  border: 0;
  background:#fff !important; 
  color:#000 !important;
  padding: 0px;
  height: 23px;
}


table, td, th {
	border: 0.01px solid black;
  padding-top: 0px;
  
}
table {
	margin: 0 auto;
	border-collapse: collapse;
  text-align: center;
}
</style>


<script>


window.onload = function() {
  //Calcular las sumas de los observados
  let observados_x_11 = parseInt(document.getElementById("observados_x_11").value);
  let observados_x_12 = parseInt(document.getElementById("observados_x_12").value);
  let observados_x_13 = parseInt(document.getElementById("observados_x_13").value);
  let observados_x_21 = parseInt(document.getElementById("observados_x_21").value);
  let observados_x_22 = parseInt(document.getElementById("observados_x_22").value);
  let observados_x_23 = parseInt(document.getElementById("observados_x_23").value);
  let observados_x_31 = parseInt(document.getElementById("observados_x_31").value);
  let observados_x_32 = parseInt(document.getElementById("observados_x_32").value);
  let observados_x_33 = parseInt(document.getElementById("observados_x_33").value);  
  let observados_suma_fil_1 = observados_x_11+observados_x_12+observados_x_13;
  let observados_suma_fil_2 = observados_x_21+observados_x_22+observados_x_23;
  let observados_suma_fil_3 = observados_x_31+observados_x_32+observados_x_33;
  let observados_suma_col_1 = observados_x_11+observados_x_21+observados_x_31;
  let observados_suma_col_2 = observados_x_12+observados_x_22+observados_x_32;
  let observados_suma_col_3 = observados_x_13+observados_x_23+observados_x_33;
  let observados_suma_total = observados_x_11+observados_x_12+observados_x_13+observados_x_21+observados_x_22+observados_x_23+observados_x_31+observados_x_32+observados_x_33;

  let observados_total_x1 = document.getElementById("observados_total_x1").value = observados_suma_fil_1;
  let observados_total_x2 = document.getElementById("observados_total_x2").value = observados_suma_fil_2;
  let observados_total_x3 = document.getElementById("observados_total_x3").value = observados_suma_fil_3;
  let observados_total_1x = document.getElementById("observados_total_1x").value = observados_suma_col_1;
  let observados_total_2x = document.getElementById("observados_total_2x").value = observados_suma_col_2;
  let observados_total_3x = document.getElementById("observados_total_3x").value = observados_suma_col_3;
  let observados_total = document.getElementById("observados_total").value = observados_suma_total;

  //Calcular los esperados
  let esperados_calculo_x_11 = (observados_total_x1*observados_total_1x)/observados_total;
  
  let esperados_x_11 = document.getElementById("esperados_x_11").value = esperados_calculo_x_11;














  document.getElementById("observados_x_11").addEventListener('input', calcular);
  document.getElementById("observados_x_12").addEventListener('input', calcular); 
  document.getElementById("observados_x_13").addEventListener('input', calcular); 
  document.getElementById("observados_x_21").addEventListener('input', calcular);
  document.getElementById("observados_x_22").addEventListener('input', calcular); 
  document.getElementById("observados_x_23").addEventListener('input', calcular); 
  document.getElementById("observados_x_31").addEventListener('input', calcular);
  document.getElementById("observados_x_32").addEventListener('input', calcular); 
  document.getElementById("observados_x_33").addEventListener('input', calcular); 

  function calcular() {
    //Calcular las sumas de los observados
    let observados_x_11 = parseInt(document.getElementById("observados_x_11").value);
    let observados_x_12 = parseInt(document.getElementById("observados_x_12").value);
    let observados_x_13 = parseInt(document.getElementById("observados_x_13").value);
    let observados_x_21 = parseInt(document.getElementById("observados_x_21").value);
    let observados_x_22 = parseInt(document.getElementById("observados_x_22").value);
    let observados_x_23 = parseInt(document.getElementById("observados_x_23").value);
    let observados_x_31 = parseInt(document.getElementById("observados_x_31").value);
    let observados_x_32 = parseInt(document.getElementById("observados_x_32").value);
    let observados_x_33 = parseInt(document.getElementById("observados_x_33").value);  
    let observados_suma_fil_1 = observados_x_11+observados_x_12+observados_x_13;
    let observados_suma_fil_2 = observados_x_21+observados_x_22+observados_x_23;
    let observados_suma_fil_3 = observados_x_31+observados_x_32+observados_x_33;
    let observados_suma_col_1 = observados_x_11+observados_x_21+observados_x_31;
    let observados_suma_col_2 = observados_x_12+observados_x_22+observados_x_32;
    let observados_suma_col_3 = observados_x_13+observados_x_23+observados_x_33;
    let observados_suma_total = observados_x_11+observados_x_12+observados_x_13+observados_x_21+observados_x_22+observados_x_23+observados_x_31+observados_x_32+observados_x_33;

    let observados_total_x1 = document.getElementById("observados_total_x1").value = observados_suma_fil_1;
    let observados_total_x2 = document.getElementById("observados_total_x2").value = observados_suma_fil_2;
    let observados_total_x3 = document.getElementById("observados_total_x3").value = observados_suma_fil_3;
    let observados_total_1x = document.getElementById("observados_total_1x").value = observados_suma_col_1;
    let observados_total_2x = document.getElementById("observados_total_2x").value = observados_suma_col_2;
    let observados_total_3x = document.getElementById("observados_total_3x").value = observados_suma_col_3;
    let observados_total = document.getElementById("observados_total").value = observados_suma_total;

    //Calcular los esperados
    let esperados_calculo_x_11 = (observados_total_x1*observados_total_1x)/observados_total;
    
    let esperados_x_11 = document.getElementById("esperados_x_11").value = esperados_calculo_x_11;
  };

};



</script>


<div class="article">
  <h1 class="h">Prueba Chi-cuadrado</h1>

  <hr>
  <p>
    La prueba chi es una prueba de asociación entre dos variables nominales u ordinales, las cuales pueden representarse en una tabla de doble entrada. El estadístico se obtiene calculando los valores esperados y aplicando la siguiente ecuación:

    \begin{equation}
      \chi^2=\sum^f_{i=1}\sum^c_{j=1}\frac{(o-e)^2}{e}; \ \chi^2 \in [0,\infty)
    \end{equation}

    Donde:
    <br>
    \(f\): Son las filas
    <br>
    \(e\): Son las columnas 
    <br>
    \(o\): Son los valores observados
    <br>
    \(e\): Son los valores esperados
  </p>

  <p>
    El valor \(\chi^2\) calculado tiene una distribución Chi-cuadrado, por lo cual luego se puede obtener su significancia realizando la integral del área bajo la curva en el intervalo \( [\chi^2,\infty)\). Además, para el cálculo de esta integral se requieren de los grados de libertad de la pruebas que están dados por \(k=(f-1)(c-1)\).
  </p>
  <hr>
  <h3 class="h">Ejemplo:</h3>
  <p>Un investigador desea conocer la relación entre el Nivel socioeconómico y la Satisfacción laboral. Los datos recolectados se presentan a continuación:</p>

  <div style="text-align: center;">
    <p>Tabla 1. Tabla cruzada entre el Nivel socioeconómico y la Satisfacción laboral (Observados)  </p>
  </div>

  <table >
    <tr>
      <td rowspan="2" colspan="2" width="100px"></td>
      <td colspan="3" width="100px">Satisfacción laboral</td>
      <td rowspan="2" width="100px">Total</th>
    </tr>
    <tr>
      <td width="100px">Neutro</td>
      <td width="100px">Satisfactorio </td>
      <td width="100px">Muy Satisfactorio</td>
    </tr>
    <tr>
      <td rowspan="3" width="100px">Nivel socioeconómico</td>
      <td width="100px">Bajo</td>
      <td><input type="text" class="input" value=" " id="observados_x_11"></td>
      <td><input type="text" class="input" value=" " id="observados_x_12"></td>
      <td><input type="text" class="input" value=" " id="observados_x_13"></td>
      <td><input type="text" class="input" value=" " id="observados_total_x1" disabled></td>
    </tr>
    <tr>
      <td width="100px">Medio</td>
      <td><input type="text" class="input" value=" " id="observados_x_21"></td>
      <td><input type="text" class="input" value=" " id="observados_x_22"></td>
      <td><input type="text" class="input" value=" " id="observados_x_23"></td>
      <td><input type="text" class="input" id="observados_total_x2" disabled></td>
    </tr>
    <tr>
      <th>Alto</th>
      <td><input type="text" class="input" value=" " id="observados_x_31"></td>
      <td><input type="text" class="input" value=" " id="observados_x_32"></td>
      <td><input type="text" class="input" value=" " id="observados_x_33"></td>
      <td><input type="text" class="input" id="observados_total_x3" disabled></td>
    </tr>

    <tr>
      <th colspan="2">Total</th>
      <td><input type="text" class="input" id="observados_total_1x" disabled></td>
      <td><input type="text" class="input" id="observados_total_2x" disabled></td>
      <td><input type="text" class="input" id="observados_total_3x" disabled></td>
      <td><input type="text" class="input" id="observados_total" disabled></td>
    </tr>
  </table>
  <br>


  <div style="text-align: center;">
    <p>Tabla 2. Tabla cruzada entre el Nivel socioeconómico y la Satisfacción laboral (Esperados) </p>
  </div>

  <table >
    <tr>
      <td rowspan="2" colspan="2" width="100px"></td>
      <th colspan="3" width="100px">Satisfacción laboral</th>
      <th rowspan="2" width="100px">Total</th>
    </tr>
    <tr>
      <td width="100px">Neutro</td>
      <td width="100px">Satisfactorio </td>
      <td width="100px">Muy Satisfactorio</td>
    </tr>
    <tr>
      <th rowspan="3" width="100px">Nivel socioeconómico</th>
      <th width="100px">Bajo</th>
      <td><input type="text" class="input" value=" " id="esperados_x_11"></td>
      <td><input type="text" class="input" value=" " id="esperados_x_12"></td>
      <td><input type="text" class="input" value=" " id="esperados_x_13"></td>
      <td><input type="text" class="input" value=" " id="esperados_total_x1" disabled></td>
    </tr>
    <tr>
      <th width="100px">Medio</th>
      <td><input type="text" class="input" value=" " id="esperados_x_21"></td>
      <td><input type="text" class="input" value=" " id="esperados_x_22"></td>
      <td><input type="text" class="input" value=" " id="esperados_x_23"></td>
      <td><input type="text" class="input" id="esperados_total_x2" disabled></td>
    </tr>
    <tr>
      <th>Alto</th>
      <td><input type="text" class="input" value=" " id="esperados_x_31"></td>
      <td><input type="text" class="input" value=" " id="esperados_x_32"></td>
      <td><input type="text" class="input" value=" " id="esperados_x_33"></td>
      <td><input type="text" class="input" id="esperados_total_x3" disabled></td>
    </tr>

    <tr>
      <th colspan="2">Total</th>
      <td><input type="text" class="input" id="esperados_total_1x" disabled></td>
      <td><input type="text" class="input" id="esperados_total_2x" disabled></td>
      <td><input type="text" class="input" id="esperados_total_3x" disabled></td>
      <td><input type="text" class="input" id="esperados_total" disabled></td>
    </tr>
  </table>




  <hr>
  <p>Luis Alejandro Málaga Allca</p>
  <p>Director de Investiagación, Desarrollo e Inovación </p>
  <p>Alappont S.A.C.</p>
</div>









@endsection