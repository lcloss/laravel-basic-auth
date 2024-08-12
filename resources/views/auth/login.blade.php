@php use function Symfony\Component\String\s; @endphp
@extends('layouts.auth')
@section('content')
        <h2 class="text-2xl font-bold mb-6 text-gray-800 text-center">Login</h2>

        <x-alerts />

        <form action="/login" method="POST">
            @csrf

            <x-form.input-text label="Email" name="email" type="email" required />
            <x-form.input-text label="Password" name="password" type="password" class="mb-6" required />

            <div class="flex items-center justify-between mb-6">
                <x-form.input-checkbox label="Remember Me" name="remember" class="" />

                <x-link href="{{ route('password.request') }}" label="Esqueceu a Password?" />
            </div>

            <div class="mb-6">
                <x-link href="{{ route('register') }}" label="Ainda não registado? Crie uma conta" />
            </div>

            <x-button-primary label="Sign In" class="w-full" />
        </form>
@endsection
