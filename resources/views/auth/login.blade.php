@extends('footer')
@extends('header')



@section('title')
Iniciar sesión | Alappont
@endsection


@section('content')


<div class=" uk-flex uk-height-medium  uk-margin uk-text-center" style="height: auto;">
    <div class=" logingbcard uk-margin-auto uk-margin-auto-vertical uk-width-1-2@s uk-card uk-card-default uk-card-body" style="margin-top: 50px !important; margin-bottom: 100px !important;" >
        <h2>Iniciar sesión</h2>
        <hr>
        <form method="POST" action="{{ route('login') }}" class="uk-margin">
            @csrf


            <div class="uk-margin">
                <div  class="">{{ __('Correo electrónico:') }}</div>
                <div class="uk-inline">
                    <span class="uk-form-icon" uk-icon="icon: user"></span>
                    <input id="email" type="email" class="radfifth uk-input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus >
                </div>
            </div>



            <div class="uk-margin uk-margin-bottom">
                <div  class="">{{ __('Contraseña:') }}</div>
                <div class="uk-inline">
                    <span class="uk-form-icon" uk-icon="icon: lock"></span>
                    <input id="password" type="password" class="radfifth uk-input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" >
                </div>
            </div>

                    @error('password')
                        <div class="invalid-feedback uk-margin-bottom" role="alert" style="color: red;">
                            <strong>Los datos son incorrectos. Vuelve a intentarlo o regístrate.</strong>
                        </div>
                    @enderror

                    @error('email')
                        <div class="invalid-feedback uk-margin-bottom" role="alert" style="color: red;">
                            <strong>Los datos son incorrectos. Vuelve a intentarlo o regístrate.</strong>
                        </div>
                    @enderror



            <!--<div class="uk-margin-bottom">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="uk-checkbox" type="checkbox" name="remember" id="remember {{ old('remember') ? 'checked' : '' }}">

                        <label class="form-check-label" for="remember">
                            {{ __('Recordar mis datos de inicio de sesión') }}
                        </label>
                    </div>
                </div>
            </div>-->

            <div class="">
                <div class="">
                    <button type="submit" class="uk-button uk-button-default btnlogin uk-margin-bottom">
                        {{ __('Iniciar sesión') }}
                    </button>
                    <br>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('¿Olvidaste tu contraseña?') }}
                        </a>
                    @endif
                </div>
            </div>
        </form>
        <hr>
        <div class="uk-margin-top">
            <p>¿No tienes cuenta?</p>
            <button onclick="window.location.href='{{ url('register')}}'" class="uk-button uk-button-default btnlogin uk-margin-bottom">Regístrate de manera gratuita</button>
                
        </div>

    </div>
</div>


@endsection
