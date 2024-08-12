@extends('layouts.auth')
@section('content')
        <h2 class="text-2xl font-bold mb-6 text-gray-800 text-center">Redefinição da Senha</h2>

        <p class="mb-6 text-gray-600 text-center">
            Insira o seu email para receber um link de redefinição de senha.
        </p>

        <x-alerts />

        <form action="{{ route('password.update') }}" method="POST">
            @csrf

            <input type="hidden" name="token" value="{{ request()->route('token') }}">
            <input type="hidden" name="email" value="{{ request()->email }}">
            <x-form.input-text label="Password" name="password" type="password" required />
            <x-form.input-text label="Confirmação da Password" name="password_confirmation" type="password" required />
            <x-button-primary label="Redefinir a password" class="w-full" />
        </form>

@endsection
