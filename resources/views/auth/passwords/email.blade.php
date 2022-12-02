@extends('footer')
@extends('header')

@section('content')



<div class="loginbg uk-flex uk-height-medium  uk-margin uk-text-center" style="height: auto;">
    <div class=" logingbcard uk-margin-auto uk-margin-auto-vertical uk-width-1-2@s uk-card uk-card-default uk-card-body" style="margin-top: 100px !important; margin-bottom: 100px !important;" >
        <h2>Recuperar contraseña</h2>
        <hr>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                Se envío correo con enlace para recuperar la contraseña
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="uk-margin uk-margin-bottom">
                <div  class="">{{ __('Correo electrónico:') }}</div>
                <div class="uk-inline">
                    <span class="uk-form-icon" uk-icon="icon: user"></span>
                    <input id="email" type="email" class="radfifth uk-input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus >
                </div>
            </div>

            @error('email')
                <div class="invalid-feedback uk-margin-bottom" role="alert" style="color: red;">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror

            <button type="submit" class="uk-button uk-button-default btnlogin uk-margin-bottom">
                {{ __('Enviar correo de recuperación de contraseña') }}
            </button>

        </form>


</div>
@endsection
