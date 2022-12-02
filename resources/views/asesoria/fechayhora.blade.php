<link rel="stylesheet" href="{{asset('vanillajs-datepicker/vanillajs-datepicker.css')}}">

<script src="{{asset('vanillajs-datepicker/vanillajs-datepicker.js')}}"></script>
<!--Importa el moment.js-->
<script src="{{asset('momentjs/moment.js')}}"></script>


<div class="uk-grid-small" uk-grid style="align-items: center;">

  <div class="uk-width-1-2@s uk-text-center">
    <label class="uk-form-label" for="form-stacked-text">Fecha:</label>

    <div id="datepickerDiv" data-date="" style="color: #000 !important;"></div>

    <script >
      const elem = document.getElementById('datepickerDiv');
      const datepicker = new Datepicker(elem, {
      language: 'es',
      });
    </script>
  </div>

  <div class=" uk-width-1-2@s uk-text-center" >
    <label class="uk-form-label" for="form-stacked-text">Hora:</label>
    <div class="uk-form-controls">
      <select id="horas"  class="radfifth uk-select" name="req_hora">
        <option value="23">Hasta media noche</option>
        <option value="1">1 hrs</option>
        <option value="2">2 hrs</option>
        <option value="3">3 hrs</option>
        <option value="4">4 hrs</option>
        <option value="5">5 hrs</option>
        <option value="6">6 hrs</option>
        <option value="7">7 hrs</option>
        <option value="8">8 hrs</option>
        <option value="9">9 hrs</option>
        <option value="10">10 hrs</option>
        <option value="11">11 hrs</option>
        <option value="12">12 hrs</option>
        <option value="13">13 hrs</option>
        <option value="14">14 hrs</option>
        <option value="15">15 hrs</option>
        <option value="16">16 hrs</option>
        <option value="17">17 hrs</option>
        <option value="18">18 hrs</option>
        <option value="19">19 hrs</option>
        <option value="20">20 hrs</option>
        <option value="21">21 hrs</option>
        <option value="22">22 hrs</option>
        <option value="23">23 hrs</option>
      </select>
    </div>

    <hr>
    <p class="uk-margin-remove">
      Falta:
    </p>

    <div class="uk-grid-collapse uk-child-width-expand@s uk-text-center uk-margin-large-top uk-text-lead uk-margin-remove" uk-grid>
        <div>
            <div>
              <p class="uk-margin-remove">
                <span id="diasSpan"></span> <br>días
              </p>
            </div>
        </div>
        <div>
            <div>
              <p class="uk-margin-remove">
                <span id="horasSpan"></span><br>horas
              </p>
            </div>
        </div>
        <div>
            <div>
              <p class="uk-margin-remove">
                <span id="minutosSpan"></span><br>minutos
              </p>
            </div>
        </div>
    </div>



    <div class="alpt-text-size-5px uk-text-left">
      <p>
        *Reecuerda que el tiempo maximo de espera son 5 días, toma tus precauciones y procura enviarnos a tiempo tu trabajo.
        <br>
        *Puedes solicitar un trabajo en menos tiempo, pero se somete a evaluación.
      </p>
    </div>
  </div>



</div>


<hr>
<button onclick="fecha()" style="background-color: #075ea8;" class="radfifth uk-align-center uk-button uk-button-default" onclick="return confirm('¿Estás seguro de que deseas crear esta cuota?');">Crear nuevo Requerimiento</button>


<script>
//Esta función es para selecionar la fecha del datepicker
function fecha()
{
  let fecha = datepicker.getDate();
  if( fecha === undefined )
  {
    alert
    document.getElementById('diasSpan').innerHTML = '-';
    document.getElementById('horasSpan').innerHTML = '-';
    document.getElementById('minutosSpan').innerHTML = '-';
  }else{
    //alert( fecha );
    let horas = parseInt(document.getElementById('horas').value);//Toma el valor de la hora
    fecha.setHours(horas);//Inserta la hora dentro de la fecha
    let fecha_futura = moment( fecha );
    let fecha_actual = moment();
    //Estas de aca usan moment.js (Recomendado)
    let fecha_dia = fecha_futura.diff(fecha_actual, 'days');
    fecha_actual.add(fecha_dia, 'days');
    //
    let fecha_horas = fecha_futura.diff(fecha_actual, 'hours');
    fecha_actual.add(fecha_horas, 'hours');
    //
    let fecha_minutos = fecha_futura.diff(fecha_actual, 'minutes');

    document.getElementById('diasSpan').innerHTML = fecha_dia;
    document.getElementById('horasSpan').innerHTML = fecha_horas;
    document.getElementById('minutosSpan').innerHTML = fecha_minutos;
  }

}
window.onload = fecha;
document.getElementById("horas").addEventListener('input', fecha);
document.getElementById("datepickerDiv").addEventListener('click', fecha);

</script>


<style>
.alpt-text-size-5px
{
  font-size: 12px;
}
</style>
