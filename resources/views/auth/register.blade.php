@extends('layouts.master')

@section('content')

<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="" value="{{ __('性別') }}" />
            </div>

            <div style="display: flex; justify-content: flex-start;" class="mt-4">
                <x-radio id="male" name="sex" value="男性" checked />
                <x-jet-label for="male" value="{{ __('男性') }}" />
                &emsp;&emsp;
                <x-radio id="female" name="sex" value="女性" />
                <x-jet-label for="female" value="{{ __('女性') }}" />
            </div>

            <div class="mt-4">
                <x-jet-label for="birthday" value="{{ __('生日') }}" />
                <x-jet-input id="birthday" class="" type="date" name="birthday" max="$max" required />
            </div>

            <div class="mt-4">
                <x-jet-input id="status" class="" type="hidden" name="status" value="0" />
            </div>

            <div class="mt-4">
                <x-jet-label for="account" value="{{ __('身分證字號') }}" />
                <x-jet-input id="account" class="block mt-1 w-full" type="text" name="account" maxlength="10" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="telephone" value="{{ __('電話') }}" />
                <x-jet-input id="telephone" class="block mt-1 w-full" type="text" name="telephone" onkeyup="value=value.replace(/[^\d]/g,'')" maxlength="10" required />
            </div>


            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>

@endsection
