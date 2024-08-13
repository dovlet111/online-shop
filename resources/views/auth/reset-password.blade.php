@extends('layouts.auth')

@section('title', 'Востоновление пароля')

@section('content')
    <x-forms.auth-forms title="Востоновление пароля" action="" method="POST">
        @csrf
        <x-forms.text-input
            name="email"
            type="email"
            placeholder="E-mail"
            requred="true"
            :isError="$errors->has('email')"
        >
        </x-forms.text-input>

        @error('email')
        <x-forms.error>
            {{ $message }}
        </x-forms.error>
        @enderror

        <x-forms.text-input
            name="password"
            type="password"
            placeholder="Пароль"
            requred="true"
            :isError="$errors->has('password')"
        >
        </x-forms.text-input>

        @error('password')
        <x-forms.error>
            {{ $message }}
        </x-forms.error>
        @enderror

        <x-forms.text-input
            name="password_confirmation"
            type="password"
            placeholder="Повторите пароль"
            requred="true"
            :isError="$errors->has('password_confirmation')"
        >
        </x-forms.text-input>

        <x-forms.primary-button>
             Обновить пароль
        </x-forms.primary-button>



        <x-slot:buttons>

        </x-slot:buttons>
    </x-forms.auth-forms>
@endsection
