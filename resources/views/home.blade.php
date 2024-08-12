@extends('layouts.guest')
@section('content')
        <h1 class="text-4xl font-bold text-gray-800 mb-6">Bem-vindo!</h1>
        @guest
        <p class="text-gray-600 mb-8">Escolha uma opção abaixo para continuar:</p>
        @endguest

        <div class="flex justify-center space-x-4">
            @guest
            <a href="/login" class="w-full max-w-xs bg-blue-600 text-white py-3 px-6 rounded-lg hover:bg-blue-700 transition duration-300">
                Login
            </a>
            <a href="/register" class="w-full max-w-xs bg-green-600 text-white py-3 px-6 rounded-lg hover:bg-green-700 transition duration-300">
                Registo
            </a>
            @endguest
            @auth
            <a href="/app" class="w-full max-w-xs bg-red-600 text-white py-3 px-6 rounded-lg hover:bg-red-700 transition duration-300">
                Entrar na App
            </a>
            @endauth
        </div>
@endsection
