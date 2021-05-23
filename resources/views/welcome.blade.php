@extends('layouts.layout')

@section('welcome')
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
        <div class="container">
            <img src="/img/pizza-house.png" alt="pizza-house-logo" />
            <h1 class="title">Mario's Pizza - The Best</h1>
            <a href="/pizzas/create">Order A Pizza</a>
        </div>
        @if(session('msg'))
            <div class="alert-msg">
                <span><i class="fas fa-pizza-slice"></i> {{session('msg')}}</span>
            </div>
        @endif
    </div>

@endsection
