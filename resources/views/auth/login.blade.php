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
        <!-- <x-auth-session-status class="mb-4" :status="session('status')" /> -->
        <div class="auth__form-group">
            <input type="email" name="email" class="auth__form-input" placeholder="Email Address">
        </div>
        <div class="auth__form-group">
            <input type="password" name="password" class="auth__form-input" placeholder="Password">
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

<!-- Session Status -->


<!-- <form method="POST" action="{{ route('login') }}">
        @csrf

     
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

      
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form> -->