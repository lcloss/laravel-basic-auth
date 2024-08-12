@extends('layouts.auth')
@section('content')
        <h2 class="text-2xl font-bold mb-6 text-gray-800 text-center">Recuperação de Senha</h2>

        <p class="mb-6 text-gray-600 text-center">
            Insira o seu email para receber um link de redefinição de senha.
        </p>

        <x-alerts />

        <form action="{{ route('password.email') }}" method="POST">
            @csrf

            <x-form.input-text label="Email" name="email" type="email" required />
            <x-button-primary label="Enviar Link de Recuperação" class="w-full" />
            <div class="mb-2 mt-6">
                <x-link href="{{ route('register') }}" label="Ainda não registado? Crie uma conta" />
            </div>
            <div class="mb-6">
                <x-link href="{{ route('login') }}" label="Já tem uma conta? Entre agora" />
            </div>
        </form>

@endsection
