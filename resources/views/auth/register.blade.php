@extends('layouts.auth')
@section('content')
        <h2 class="text-2xl font-bold mb-6 text-gray-800 text-center">Registo</h2>

        <x-alerts />

        <form action="/register" method="POST">
            @csrf

            <x-form.input-text label="Nome" name="name" required />
            <x-form.input-text label="Email" name="email" type="email" required />
            <x-form.input-text label="Password" name="password" type="password" required />
            <x-form.input-text label="Confirmação da Password" name="password_confirmation" type="password" required />

            <div class="flex items-center justify-between mb-6">
                <x-form.input-checkbox label="" name="terms" required>
                    Concordo com os <a href="#" class="text-blue-600 hover:underline">termos e condições</a>
                </x-form.input-checkbox>
            </div>

            <div class="mb-6">
                <x-link href="{{ route('login') }}" label="Já tem uma conta? Entre agora" />
            </div>

            <x-button-primary label="Registar" class="w-full" />
        </form>
@endsection
