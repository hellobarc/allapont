<div>
    <form class=" formperfil uk-form-horizontal " action="{{route('admin/tesis/tesis_avanceCrear')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="uk-margin uk-text-left">
            <label class="uk-form-label" for="form-horizontal-text">TÍTULO DE LA INVESTIGACIÓN: </label>
            
            <div class="uk-form-controls">
                <select id="verificar"  class="radfifth uk-select" name="tesis_name">
                    @foreach ($tesis as $tesi)
                        <option>{{$tesi->tesis_name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="uk-margin uk-text-left" style="display: none">
            <label class="uk-form-label" for="form-horizontal-text">FECHA DE ENTREGA:</label>

            <div class="uk-form-controls">
                <input class="radfifth uk-input " id="" type="text" name="req_date" value="<?php date_default_timezone_set("America/New_York"); $date = date('Y-m-d H:i:s'); echo($date);?>" >
            </div>

            @if($errors->has('name'))
                <div class="uk-text-center">No puedes dejar este campo en blanco.</div>
            @endif
        </div>

        <hr>
        <div class="uk-margin uk-text-left">
            <label class="uk-form-label" for="form-horizontal-text">COMENTARIO:</label>

            <div class="uk-form-controls">
                <textarea class="rad-10 uk-textarea" rows="5" placeholder="" name="req_coment" required> </textarea>
            </div>
            @if($errors->has('name'))
            <div class="uk-text-center">No puedes dejar este campo en blanco.</div>
            @endif
        </div> 


        <hr>
        <h3 class="">Agregar Documentos</h3>
        <div class="uk-margin-bottom uk-margin-top manoAzul  radfifth uk-button uk-button-default" id=""  onclick="instruc()" >Agregar campo</div> 
        <div class="uk-margin uk-text-left" id="inst"></div> 

        
        <hr>
        <p>AGREGA UNA FECHA DE ENTREGA:</p>
        <div class="uk-margin uk-text-left">
            <label class="uk-form-label" for="form-horizontal-text">DÍA: </label>

            <div class="uk-form-controls">
                <select id="verificar"  class="radfifth uk-select" name="req_dia">
                    <option >1</option>
                    <option >2</option>
                    <option >3</option>
                    <option >4</option>
                    <option >5</option>
                    <option >6</option>
                    <option >7</option>
                    <option >8</option>
                    <option >9</option>
                    <option >10</option>
                    <option >11</option>
                    <option >12</option>
                    <option >13</option>
                    <option >14</option>
                    <option >15</option>
                    <option >16</option>
                    <option >17</option>
                    <option >18</option>
                    <option >19</option>
                    <option >20</option>
                    <option >21</option>
                    <option >22</option>
                    <option >23</option>
                    <option >24</option>
                    <option >25</option>
                    <option >26</option>
                    <option >27</option>
                    <option >28</option>
                    <option >29</option>
                    <option >30</option>
                    <option >31</option>
                </select>
            </div>
        </div>

        <div class="uk-margin uk-text-left">
            <label class="uk-form-label" for="form-horizontal-text">MES: </label>
            <div class="uk-form-controls">
                <select id="verificar"  class="radfifth uk-select" name="req_mes">
                    <option value="1">Enero</option>
                    <option value="2">Febrero</option>
                    <option value="3">Marzo</option>
                    <option value="4">Abril</option>
                    <option value="5">Mayo</option>
                    <option value="6">Junio</option>
                    <option value="7">Julio</option>
                    <option value="8">Agosto</option>
                    <option value="9">Septiembre</option>
                    <option value="10">Octubre</option>
                    <option value="11">Noviembre</option>
                    <option value="12">Diciembre</option>
                </select>
            </div>
        </div>

        <div class="uk-margin uk-text-left">
            <label class="uk-form-label" for="form-horizontal-text">AÑO: </label>
            <div class="uk-form-controls">
                <select id="verificar"  class="radfifth uk-select" name="req_agno">
                    <option>2020</option>
                    <option selected >2021</option>
                    <option>2022</option>
                    <option>2023</option>
                    <option>2024</option>
                    <option>2025</option>
                    <option>2026</option>
                    <option>2027</option>
                    <option>2028</option>
                    <option>2029</option>
                    <option>2030</option>
                    <option>2031</option>
                    <option>2032</option>
                </select>
            </div>
        </div>



        <div class="uk-margin uk-text-left">
            <label class="uk-form-label" for="form-horizontal-text">HORA: </label>
            <div class="uk-form-controls">
                <select id="verificar"  class="radfifth uk-select" name="req_hora">
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
        </div>

        <div>
            Elige una hora para la entrega, en caso de no tener hora de entrega selecciona hasta media noche.
        </div>


        <button class="radfifth uk-align-center uk-button uk-button-default" onclick="return confirm('¿Estás seguro de que deseas crear esta cuota?');">Crear nuevo Requerimiento</button> 

    </form>	
</div>