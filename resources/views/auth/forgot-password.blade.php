@extends('layouts.auth')

@section('title', 'Login - Movie App')


@section('content')
<div class="auth__form-wrapper auth__form-wrapper--forgot">
    <div class="auth__logo-wrapper">
        <img src="{{asset('img/logo-white.png')}}" alt="" class="auth__logo">
    </div>
    <h2 class="auth__heading">Password recovery</h2>
    <p class="auth__text">{{ __('Forgot your password? No problem. Just let us know your email address and we will email
        you a password
        reset link that will allow you to choose a new one.') }}</p>
    <form method="POST" action="{{ route('password.email') }}" class="auth__form">
        @csrf
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <div class="auth__form-group">
            <i class="auth__icon fa-solid fa-envelope"></i>
            <input type="email" name="email" class="auth__form-input" placeholder="Email Address">
        </div>

        <button class="auth__submit">Send recovery link</button>
    </form>
</div>
<!-- <div class="auth__slider">
    <img src="{{asset('img/auth.png')}}" alt="" class="auth__image">
</div> -->
@endsection