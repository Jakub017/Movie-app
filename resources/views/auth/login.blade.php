@extends('layouts.auth')

@section('title', 'Login - Movie App')


@section('content')
<div class="auth__form-wrapper">
    <div class="auth__logo-wrapper">
        <a href="{{route('home')}}" class="auth__home">
            <img src="{{asset('img/logo-white.png')}}" alt="" class="auth__logo">
        </a>

    </div>
    <h2 class="auth__heading">Login to your <br> account!</h2>
    <p class="auth__text">Dive into a world of movies! Sign in and explore, favorite, and schedule your next watch.</p>
    <form method="POST" action="{{ route('login') }}" class="auth__form">
        @csrf
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <div class="auth__form-group">
            <i class="auth__icon fa-solid fa-envelope"></i>
            <input type="email" name="email" class="auth__form-input" placeholder="Email Address">
        </div>
        <div class="auth__form-group">
            <i class="auth__icon fa-solid fa-key"></i>
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
    <a href="{{route('google.redirect')}}" class="auth__google"><i class="auth__google-icon fa-brands fa-google"></i>
        Login with
        Google</a>
    <p class="auth__already">Don't have an account? <a class="auth__link" href="{{ route('register') }}">Register
            now!</a></p>
</div>
<div class="auth__slider">
    <img src="{{asset('img/auth2.jpg')}}" alt="" class="auth__image">
    <div class="auth__info">
        <h3 class="auth__info-heading">Unleash Cinema</h3>
        <p class="auth__info-text">Discover endless cinema, curated just for you. Stay updated with the latest releases
            and share moments with friends. Sign up today!</p>
    </div>
</div>
@endsection