@extends('header')

@section('title')
Editar curso - Alappont
@endsection

@section('content')
<div id="app"><!---VUE-->



<div class="loginbg uk-flex uk-height-medium  uk-margin uk-text-center" style="height: auto;">
    <div class=" logingbcard uk-margin-auto uk-margin-auto-vertical uk-width-1-2@s uk-card uk-card-default uk-card-body" style="margin-top: 70px !important; margin-bottom: 100px !important" >

        <form class=" formperfil uk-form-horizontal " action="{{url('/entregar_avance/'.$avance[0]['avance_id'])}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="uk-margin uk-text-left">
                <label class="uk-form-label" for="form-horizontal-text">NOMBRE DE LA INVESTIGACIÓN:</label>

                <div class="uk-form-controls">
                    <input class="radfifth uk-input " id="" type="text" name="" value="<?php echo($avance[0]['tesis_name']);?>" disabled >
                </div>

                @if($errors->has('name'))
                    <div class="uk-text-center">No puedes dejar este campo en blanco.</div>
                @endif
            </div>


            <div class="uk-margin uk-text-left" style="display: none">
                <label class="uk-form-label" for="form-horizontal-text">NOMBRE DE LA INVESTIGACIÓN:</label>

                <div class="uk-form-controls">
                    <input class="radfifth uk-input " id="" type="text" name="name" value="<?php echo($avance[0]['tesis_name']);?>"  >
                </div>

                @if($errors->has('name'))
                    <div class="uk-text-center">No puedes dejar este campo en blanco.</div>
                @endif
            </div>            

            <hr>
            <div class="uk-margin uk-text-left">
                <label class="uk-form-label" for="form-horizontal-text">FECHA DE ENTREGA:</label>

                <div class="uk-form-controls">
                    <input class="radfifth uk-input " id="" type="text" name="" value="<?php date_default_timezone_set("America/New_York"); $date = date('Y-m-d H:i:s'); echo($date);?>" disabled >
                </div>

                @if($errors->has('name'))
                    <div class="uk-text-center">No puedes dejar este campo en blanco.</div>
                @endif
            </div>

            <div class="uk-margin uk-text-left" style="display: none">
                <label class="uk-form-label" for="form-horizontal-text">FECHA DE ENTREGA:</label>

                <div class="uk-form-controls">
                    <input class="radfifth uk-input " id="" type="text" name="ent_date" value="<?php date_default_timezone_set("America/New_York"); $date = date('Y-m-d H:i:s'); echo($date);?>" >
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
            <div class="uk-margin uk-text-left">
                <label class="uk-form-label" for="form-horizontal-text">COMENTARIO:</label>

                <div class="uk-form-controls">
                    <textarea class=" rad-10 uk-textarea" rows="5" placeholder="" name="ent_coment" required> </textarea>
                </div>
                @if($errors->has('name'))
                <div class="uk-text-center">No puedes dejar este campo en blanco.</div>
                @endif
            </div> 
            <hr>
            
            <div class="uk-margin uk-text-left">
                <label class="uk-form-label" for="form-horizontal-text">APORTE %:</label>

                <div class="uk-form-controls">
                    <input class="radfifth uk-input " id="" type="text" name="aporte" value=""  >
                </div>

                @if($errors->has('name'))
                    <div class="uk-text-center">No puedes dejar este campo en blanco.</div>
                @endif
            </div>
            <hr>
            <button class="radfifth uk-align-center uk-button uk-button-default" onclick="return confirm('¿Estás seguro de que deseas crear esta cuota?');">Crear nuevo Requerimiento</button> 

            
        </form>

    </div>
</div>

<script>
	i = 1;
	j = 0;
    k = 0;
    s = 0;

    function instruc() {
        div = document.createElement('div');
        div.setAttribute('id', 'div'+ (s++));

		a = document.getElementById('inst');

		b = document.createElement('input');
		c = document.createElement('input');

		b.setAttribute('id', 'cont'+ (i++));
		b.setAttribute('name', 'ent_files['+j+++'][desc]');
		b.setAttribute('class', 'radfifth uk-input uk-margin-bottom');
		b.setAttribute('placeholder', 'Descripción');

		c.setAttribute('id', 'cont'+ (i++));
		c.setAttribute('name', 'ent_files['+k+++'][url]');
		c.setAttribute('class', 'radfifth uk-input uk-margin-bottom');
		c.setAttribute('placeholder', 'Url');

        div.append(b, c);
		a.append(div);

        //create your delete button after you click try it
        var del = document.createElement('a');
        del.style.textDecoration = 'none';
        del.innerHTML = 'Eliminar';
        del.style.color = 'white';
        del.style.backgroundColor = 'blue';
        //assign a function for it when clicked
        del.onclick = function() { deleteButton(div,this)};
        //del.onclick = function() { deleteButton(div)}; 
        div.appendChild(del);
        <!--  deleteButton(div);  --> 
    }

    function deleteButton(x,y) {
        var a = document.getElementById('inst');
        //remove the div
        a.removeChild(x);
        //remore the button
        a.removeChild(y);

        //FALTA CONFIGURAR PARA QUE FUNCIONE BIEN
    }

</script>


</div>
@endsection
