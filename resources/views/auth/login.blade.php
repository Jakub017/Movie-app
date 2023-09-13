@extends('layouts.auth')

@section('title', 'Login - Movie App')


@section('content')
<div class="auth__form-wrapper">
    <div class="auth__logo-wrapper">
        <img src="{{asset('img/logo-white.png')}}" alt="" class="auth__logo">
    </div>
    <h2 class="auth__heading">Login to your <br> account!</h2>
    <p class="auth__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, fugiat. </p>
    <form method="POST" action="{{ route('login') }}" class="auth__form">
        @csrf
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <div class="auth__form-group">
            <input type="email" name="email" class="auth__form-input" placeholder="Email Address">
        </div>
        <div class="auth__form-group">
            <input type="password" name="password" class="auth__form-input" placeholder="Password">
        </div>
        <div class="auth__form-group">
            <div class="auth__remember">
                <input type="checkbox" class="" name="remember">
                <span class="auth__remember-text">{{ __('Remember me') }}</span>
            </div>
            @if (Route::has('password.request'))
            <a class="auth__forgot" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
            @endif
        </div>
        <button class="auth__submit">Login</button>
    </form>
    <div class="auth__spacer">
        <span class="auth__spacer-text">or</span>
    </div>
    <a href="#" class="auth__google"><i class="auth__icon fa-brands fa-google"></i> Login with
        Google</a>
    <p class="auth__already">Don't have an account? <a class="auth__link" href="{{ route('register') }}">Register
            now!</a></p>
</div>
<div class="auth__slider">
    <img src="{{asset('img/auth.png')}}" alt="" class="auth__image">
    <div class="auth__info">
        <h3 class="auth__info-heading">Lorem Ipsum</h3>
        <p class="auth__info-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde odio sapiente quo,
            atque consequuntur aut perferendis, odit nesciunt iure quidem.</p>
    </div>
</div>
@endsection