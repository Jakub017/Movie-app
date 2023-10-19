@extends('layouts.auth')

@section('title', 'Register - Movie App')


@section('content')
<div class="auth__form-wrapper">
    <div class="auth__logo-wrapper">
        <img src="{{asset('img/logo-white.png')}}" alt="" class="auth__logo">
    </div>
    <h2 class="auth__heading">Create your <br> account!</h2>
    <p class="auth__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, fugiat. </p>
    <form method="POST" action="{{ route('register') }}" class="auth__form">
        @csrf
        <!-- <x-auth-session-status class="mb-4" :status="session('status')" /> -->
        <div class="auth__form-group">
            <i class="auth__icon fa-solid fa-user"></i>
            <input type="text" name="name" class="auth__form-input" placeholder="Your name">
        </div>
        <div class="auth__form-group">
            <i class="auth__icon fa-solid fa-envelope"></i>
            <input type="email" name="email" class="auth__form-input" placeholder="Email Address">
        </div>
        <div class="auth__form-group">
            <i class="auth__icon fa-solid fa-key"></i>
            <input type="password" name="password" class="auth__form-input" placeholder="Password">
        </div>
        <div class="auth__form-group">
            <i class="auth__icon fa-solid fa-key"></i>
            <input type="password" name="password_confirmation" class="auth__form-input" placeholder="Repeat password">
        </div>
        <button type="submit" class="auth__submit">Register</button>
    </form>
    <div class="auth__spacer">
        <span class="auth__spacer-text">or</span>
    </div>
    <a href="#" class="auth__google"><i class="auth__icon fa-brands fa-google"></i> Sign in with Google</a>
    <p class="auth__already">Already have an account? <a class="auth__link" href="{{ route('login') }}">Login now!</a>
    </p>
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