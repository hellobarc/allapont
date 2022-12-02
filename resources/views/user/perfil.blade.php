@extends('footer')
@extends('header')

@section('title')
Mi Perfil - Alappont
@endsection

@section('content')







<div class="uk-padding-large">
    <article class="uk-article">

		<h2 class="uk-article-title"><a class="uk-link-reset" href="">¡Bienvenid@!  {{ Auth::user()->name }}</a></h2>
		<hr class="">



		<div class="" uk-grid>

		    <div class="uk-width-1-4@m usermenu padcero uk-text-center" id="aulamenu">

				<img src="{{asset('/').Auth::user()->avatar}}" class="radprofilepic" >

				<form enctype="multipart/form-data" action="{{route('change.imagen')}}" method="POST">
					@csrf


				    <div class="uk-margin" uk-margin>
				        <div uk-form-custom="target: true">
				            <input type="file" name="avatar" accept="image/*" required>
				            <input class="uk-input uk-form-width-medium" type="text" placeholder="Selecciona o arrastra una foto" disabled style="border: solid 2px; border-style: dashed;" required>
				        </div>
				        <br>
				        <button class="radfifth uk-button uk-button-default" onclick="return confirm('¿Estás seguro de que deseas actualizar tus datos?');">Actualizar foto</button>
				    </div>


				    <!---<div class="uk-margin" uk-margin>
				    	<div class="uk-margin">
				        <input accept="image/*" type="file" id="" name="avatar" style="border: solid 2px; border-style: dashed;" required >
				        </div>

				        <button class="radfifth uk-button uk-button-default">Actualizar foto</button>
				    </div>-->
				</form>
		    </div>


		    <div class="uk-width-expand@m padceroo usercontent " id="vid">
		    	<div class="uk-text-center">
		    		<h4>DATOS PERSONALES:</h4>
		    	</div>
		    	<form class=" formperfil uk-form-horizontal " action="{{route('user.update')}}" method="POST" enctype="multipart/form-data">
					@csrf
					{{ method_field('patch') }}


				    <div class="uk-margin">
				        <label class="uk-form-label" for="form-horizontal-text">NOMBRES Y APELLIDOS: </label>

				        <div class="uk-form-controls">
				            <input class="radfifth uk-input " id="form-horizontal-text form-control{{ $errors->get('name') ? 'has-error' : '' }}" type="text" name="name" value="{{ $usuario ->name }}" >
				        </div>
				        @if($errors->has('name'))
							<div class="uk-text-center">No puedes dejar este campo en blanco.</div>
						@endif

				    </div>
				    <button class="radfifth uk-align-center uk-button uk-button-default" onclick="return confirm('¿Estás seguro de que deseas actualizar tus datos?');">Editar nombres y apellidos</button> 
  		
		    	</form>
		    	<hr>
		    	

		    	<form class=" uk-form-horizontal " action="{{route('user.celular')}}" method="POST" enctype="multipart/form-data">
					@csrf
					{{ method_field('patch') }}
				    <div class="uk-margin">
				        <label class="uk-form-label" for="form-horizontal-text">NÚMERO DE CELULAR: </label>
				        <div class="uk-form-controls">
				            <input class="radfifth uk-input" id="form-horizontal-text form-control{{ $errors->get('celular') ? 'has-error' : '' }}" type="text" name="celular"  value="{{ $usuario ->celular }}" >
				        </div>
				        @if($errors->has('celular'))
							<div class="uk-text-center">No puedes dejar este campo en blanco.</div>
						@endif				        
				    </div>
				    <button class="radfifth uk-align-center uk-button uk-button-default" onclick="return confirm('¿Estás seguro de que deseas actualizar tus datos?');">Editar número de celular</button>   		
		    	</form>
		    	<hr>
		    	

		    	<form class=" uk-form-horizontal " action="{{route('user.email')}}" method="POST" enctype="multipart/form-data">
					@csrf
					{{ method_field('patch') }}
		    

				    <div class="uk-margin">
				        <label class="uk-form-label" for="form-horizontal-text">CORREO ELECTRÓNICO: </label>
				        <div class="uk-form-controls">
				            <input class="radfifth uk-input form-control{{ $errors->get('email') ? 'has-error' : '' }}" id="form-horizontal-text" type="email" name="email"  value="{{ $usuario ->email }}" required>

				        </div>

				        @if($errors->has('email'))
							<div class="uk-text-center">Esta dirección de correo ya está tomada. Intenta otra.</div>
						@endif

				    </div>

				    <button class="radfifth uk-align-center uk-button uk-button-default" onclick="return confirm('¿Estás seguro de que deseas actualizar tus datos?');">Editar dirección de correo</button>   		
		    	</form>
		    	<hr>


<!---------------------------CAMBIAR CONTRASEÑA---------------------------------------------------------------->

		    	<div class="uk-text-center">
		    		<h4>CAMBIAR CONTRASEÑA:</h4>
		    	</div>
		    	<form class=" uk-form-horizontal " action="{{route('change.password')}}" method="POST" enctype="multipart/form-data">
					@csrf

				    <div class="uk-margin">
				        <label class="uk-form-label" for="form-horizontal-text">CONTRASEÑA ACTUAL: </label>
				        <div class="uk-form-controls">
				            <input class="radfifth uk-input form-control" id="password" type="password"   name="current_password" autocomplete="current-password">
				        </div>

				        @if($errors->has('current_password'))
							<div class="uk-text-center">{{$errors->first('current_password')}}</div>
						@endif

				    </div>


				    <div class="uk-margin">
				        <label class="uk-form-label" for="form-horizontal-text">NUEVA CONTRASEÑA: </label>
				        <div class="uk-form-controls">
				            <input class="radfifth uk-input form-control" id="form-horizontal-text" type="password" autocomplete="new-password" name="new_password"  autocomplete="current-password">
				        </div>

				        @if($errors->has('new_password'))
							<div class="uk-text-center">{{$errors->first('new_password')}}</div>
						@endif

				    </div>



				    <div class="uk-margin">
				        <label class="uk-form-label" for="form-horizontal-text">REPETIR CONTRASEÑA: </label>
				        <div class="uk-form-controls">
				            <input name="new_confirm_password" class="radfifth uk-input form-control" id="new_confirm_password" type="password"  autocomplete="current-password">
				        </div>



				        @if($errors->has('new_confirm_password'))

							<div class="uk-text-center">{{$errors->first('new_confirm_password')}}</div>
						@endif

				    </div>
				    	<!--La nueva contraseña y su confirmación deben coincidir.-->

				    <button class="radfifth uk-align-center uk-button uk-button-default" onclick="return confirm('¿Estás seguro de que deseas actualizar tus datos?');">Editar contraseña</button>   		
		    	</form>







		    	<!--------------------------------------------------->







































			</div>

		</div>

    </article>
<hr>
 	<button class="uk-align-center uk-margin-small-top uk-button uk-button-default uk-button-large radcard" onclick="window.location.href = '{{ url('/')}}';">Salir</button>    



    <!--Alert de datos recibidos-->
    <script>
      var msg = '{{Session::get('alert')}}';
      var exist = '{{Session::has('alert')}}';
      if(exist){
        alert(msg);
      }
    </script>
    <!--END Alert de datos recibidos-->



</div>		     


@endsection