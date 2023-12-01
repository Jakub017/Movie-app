@extends('layouts.auth')

@section('title', 'Reset Password - Movie App')


@section('content')
<div class="auth__form-wrapper auth__form-wrapper--forgot">
    <div class="auth__logo-wrapper">
        <a href="{{route('home')}}" class="auth__home">
            <img src="{{asset('img/logo-white.png')}}" alt="" class="auth__logo">
        </a>

    </div>
    <h2 class="auth__heading">New password</h2>
    <p class="auth__text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero atque magni maxime, aliquam
        eius odit.</p>
    <form method="POST" action="{{ route('password.store') }}" class="auth__form">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <x-auth-session-status class="mb-4" :status="session('status')" />
        <div class="auth__form-group">
            <i class="auth__icon fa-solid fa-envelope"></i>
            <input value="{{ old('email', $request->email) }}" type="email" name="email" class="auth__form-input"
                placeholder="Email Address">
        </div>

        <div class="auth__form-group">
            <i class="auth__icon fa-solid fa-key"></i>
            <input type="password" name="password" class="auth__form-input" placeholder="New password">
        </div>

        <div class="auth__form-group">
            <i class="auth__icon fa-solid fa-key"></i>
            <input type="password" name="password_confirmation" class="auth__form-input"
                placeholder="Password confirmation">
        </div>

        <button class="auth__submit">Reset password</button>
    </form>
</div>
<!-- <div class="auth__slider">
    <img src="{{asset('img/auth.png')}}" alt="" class="auth__image">
</div> -->
@endsection