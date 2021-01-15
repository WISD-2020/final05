@extends('layouts.master')

@section('content')

<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mt-4">
                <x-jet-label for="account" value="{{ __('身分證字號') }}" />
                <x-jet-input id="account" class="block mt-1 w-full" type="text" name="account" maxlength="10" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">

                <x-jet-button class="ml-4">
                    {{ __('Login') }}
                </x-jet-button>

            </div>

            <div class="flex items-center justify-end mt-4">

                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

            </div>
            <div class="flex items-center justify-end mt-4">
                <button class="btn btn-dark">
                    <a href="{{ route('register') }}"><left>{{ __('尚未註冊點此') }} </left></a>
                </button>
            </div>


        </form>
    </x-jet-authentication-card>
</x-guest-layout>

@endsection
