@extends('layouts.main')

@section('title', 'Edit Profile - Movie App')

@section('content')

<div class="edit">
    <div class="edit__wrapper">
        <h1 class="edit__heading">Your profile</h1>

        <div class="edit__tile">
            <h2 class="edit__title">Profile information</h2>
            <p class="edit__text">Update your account's profile information and email address.</p>
            <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                @csrf
            </form>

            <form method="post" action="{{ route('profile.update') }}" class="edit__form">
                @csrf
                @method('patch')

                <div class="edit__group">
                    <label class="edit__label" for="name">Name</label>
                    <input type="text" class="edit__input" id="name" name="name" value="{{old('name', $user->name)}}"
                        required autofocus autocomplete="name">
                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                </div>

                <div>
                    <label class="edit__label" for="email">Email</label>
                    <input type="email" class="edit__input" id="email" name="email"
                        value="{{old('email', $user->email)}}" required autofocus autocomplete="email">
                    <x-input-error class="mt-2" :messages="$errors->get('email')" />
                </div>


                <button type="submit" class="edit__submit">{{ __('Save') }}</button>

                @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="edit__saved">information updated.</p>
                @endif
            </form>
        </div>
        <div class="edit__tile">
            <h2 class="edit__title">Update Password</h2>
            <p class="edit__text">Ensure your account is using a long, random password to stay secure.</p>

            <form method="post" action="{{ route('password.update') }}" class="edit__form">
                @csrf
                @method('put')

                <div class="edit__group">
                    <label class="edit__label" for="current_password">Current Password</label>
                    <input type="password" class="edit__input" id="current_password" name="current_password"
                        autocomplete="current-password">
                    <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                </div>

                <div class="edit__group">
                    <label class="edit__label" for="password">New Password</label>
                    <input type="password" class="edit__input" id="password" name="password"
                        autocomplete="new-password">
                    <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                </div>

                <div class="edit__group">

                    <label class="edit__label" for="password_confirmation">Confirm Password</label>
                    <input type="password" class="edit__input" id="password_confirmation" name="password_confirmation"
                        autocomplete="new-password">
                    <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                </div>

                <button type="submit" class="edit__submit">{{ __('Save') }}</button>

                @if (session('status') === 'password-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="edit__saved">Password updated.</p>
                @endif
            </form>
        </div>

        <div class="edit__tile">
            <h2 class="edit__title">Delete Account</h2>
            <p class="edit__text">Once your account is deleted, all of its resources and data will be permanently
                deleted.</p>
            <form method="post" action="{{ route('profile.destroy') }}" class="edit__form">
                @csrf
                @method('delete')

                <div class="edit__group">
                    <label for="password" class="edit__label">Password</label>
                    <input type="password" class="edit__input" id="password" name="password" />
                    <x-input-error :messages="$errors->userDeletion->get('password')" class="edit__saved" />
                </div>
                <button class="edit__submit edit__submit--delete">
                    Delete account
                </button>
            </form>
        </div>
    </div>
</div>


@endsection