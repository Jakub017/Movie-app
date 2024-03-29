@extends('layouts.auth')

@section('title', 'Register - Movie App')


@section('content')
<div class="auth__form-wrapper">
    <div class="auth__logo-wrapper">
        <a href="{{route('home')}}" class="auth__home">
            <img src="{{asset('img/logo-white.png')}}" alt="" class="auth__logo">
        </a>
    </div>
    <h2 class="auth__heading">Create your <br> account!</h2>
    <p class="auth__text">Join the cinematic universe! Explore, rate, and curate your movie journey with personalized
        recommendations.</p>
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
    <a href="{{route('google.redirect')}}" class="auth__google"><i class="auth__google-icon fa-brands fa-google"></i>
        Sign in
        with Google</a>
    <p class="auth__already">Already have an account? <a class="auth__link" href="{{ route('login') }}">Login now!</a>
    </p>
</div>
<div class="auth__slider">
    <img src="{{asset('img/auth.png')}}" alt="" class="auth__image">
    <div class="auth__info">
        <h3 class="auth__info-heading">Lorem Ipsum</h3>
        <p class="auth__info-text">Dive Into Film Excellence: Our collection brings together both classics and new-age
            cinema, offering a unique experience for every film enthusiast.</p>
    </div>
</div>
@endsection