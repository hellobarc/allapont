@extends('footer')
@extends('header')
@section('title')
Registrarme - Alappont
@endsection
@section('content')


<div class=" uk-flex uk-height-medium  uk-margin uk-text-center" style="height: auto">
    <div class=" logingbcard uk-margin-auto uk-margin-auto-vertical uk-width-1-2@s uk-card uk-card-default uk-card-body" style="margin-top: 50px !important; margin-bottom: 100px !important;" >
        <h2>Registrarme</h2>
        <hr>
        <form method="POST" action="{{ route('register') }}" class="uk-margin" required autocomplete="off">
            @csrf

                <div class="uk-margin">
                    <div  class="">{{ __('Nombres y apellidos:') }}</div>
                    <div class="uk-inline">
                        <span class="uk-form-icon" uk-icon="icon: user"></span>
                        <input id="name" type="text" class="radfifth uk-input form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus autocomplete="off" >
                    </div>
                </div>
                @if ($errors->has('name'))
                    <div class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </div>
                @endif
                <div class="uk-margin">
                    <div  class="">{{ __('Celular:') }}</div>
                    <div class="uk-inline">
                        <span class="uk-form-icon" uk-icon="icon: phone"></span>
                        <input id="celular" type="text" class="radfifth uk-input form-control{{ $errors->has('celular') ? ' is-invalid' : '' }}" name="celular" value="{{ old('celular') }}" required >
                    </div>
                </div>

                @if ($errors->has('celular'))
                    <div class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('celular') }}</strong>
                    </div>
                @endif

                <div class="uk-margin uk-margin-bottom">
                    <div  class="">{{ __('Correo electrónico:') }}</div>
                    <div class="uk-inline">
                        <span class="uk-form-icon" uk-icon="icon: mail"></span>
                        <input id="email" type="email" class="radfifth uk-input input form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="nope" >
                    </div>
                </div>

                @if ($errors->has('email'))
                    <div class="invalid-feedback uk-margin-bottom" role="alert">
                        <strong style="color: red;">Ya existe una cuenta con esta dirección de correo electrónico.</strong>
                    </div>
                @endif






                <div class="uk-margin">
                    <div  class="">{{ __('Contraseña:') }}</div>
                    <div class="uk-inline">
                        <span class="uk-form-icon" uk-icon="icon: lock"></span>
                        <input id="password" type="password" class="radfifth uk-input form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="new-password" >
                    </div>
                </div>


                <div class="uk-margin uk-margin-bottom">
                    <div  class="">{{ __('Confirmar contraseña:') }}</div>

                    <div class="uk-inline">
                        <span class="uk-form-icon" uk-icon="icon: lock"></span>
                        <input id="password-confirm" type="password" class="radfifth uk-input form-control" name="password_confirmation" required >
                    </div>
                </div>
 
                @if ($errors->has('password'))
                    <div class="invalid-feedback uk-margin-bottom" role="alert">
                        <strong style="color: red;">Las contraseñas no coinciden.</strong>
                    </div>
                @endif


                <div class="">
                    <button type="" class="uk-button uk-button-default btnlogin uk-margin-bottom">
                        {{ __('Registrarme') }}
                    </button>
                </div>

        </form>

    </div>
</div>

















@endsection
