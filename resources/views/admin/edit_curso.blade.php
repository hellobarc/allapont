@extends('header')



@section('title')
Editar curso - Alappont
@endsection


@section('content')
<div id="app"><!---VUE-->

<div class="loginbg uk-flex uk-height-medium  uk-margin uk-text-center" style="height: 700px;">
    <div class=" logingbcard uk-margin-auto uk-margin-auto-vertical uk-width-1-2@s uk-card uk-card-default uk-card-body" style="margin-top: 100px !important;" >

        <form class=" formperfil uk-form-horizontal " action="" method="POST" enctype="multipart/form-data">
            @csrf


            <div class="uk-margin uk-text-left">
                <label class="uk-form-label" for="form-horizontal-text">NOMBRE DEL CURSO:</label>

                <div class="uk-form-controls">
                    <input class="radfifth uk-input " id="" type="text" name="name" value="{{$curso->name}}" >
                </div>
              @if($errors->has('name'))
                    <div class="uk-text-center">No puedes dejar este campo en blanco.</div>
                  @endif

            </div>

            <div class="uk-margin uk-text-left">
                <label class="uk-form-label" for="form-horizontal-text">DURACIÓN:</label>

                <div class="uk-form-controls">
                    <input class="radfifth uk-input escribir " id="" type="text" name="time" value="{{$curso->time}}" >
                </div>
            </div>          

            <div class="uk-margin uk-text-left">
                <label class="uk-form-label" for="form-horizontal-text">ACCESO:</label>

                <div class="uk-form-controls">
                    <input class="radfifth uk-input " id="" type="text" name="acceso" value="{{$curso->acceso}}" >
                </div>
            </div> 

            <div class="uk-margin uk-text-left">
                <label class="uk-form-label" for="form-horizontal-text">PRECIO:</label>

                <div class="uk-form-controls">
                    <input class="radfifth uk-input " id="" type="text" name="precio" value="{{$curso->precio}}" >
                </div>
            </div> 
            
            <div class="uk-margin uk-text-left">
                <label class="uk-form-label" for="form-horizontal-text">IMAGEN DEL CURSO:</label>

            <div uk-form-custom="target: true">
                <input type="file" name="avatar" accept="image/*" required>
                <input class="uk-input uk-form-width-medium" type="text" placeholder="Selecciona o arrastra una foto" disabled style="border: solid 2px; border-style: dashed;" required>
            </div>

            </div>

            <button class="radfifth uk-align-center uk-button uk-button-default" onclick="return confirm('¿Estás seguro de que deseas actualizar tus datos?');">Editar curso</button> 
  
      </form>

    </div>
</div>

</div>
@endsection
