@extends('layouts.layout')

@section('content')
    <div class="wrapper pizza-details">
        <h1> 🍕 Order for {{$pizza->name}} - {{$pizza->id}}</h1>
        <p class="type">Type - {{$pizza->type}}</p>
        <p class="base"> Base - {{$pizza->base}}</p>
        <p class="amount">Amount- {{$pizza->price}}</p>
        <h2>Toppings:</h2>
        @if($pizza->toppings)
            <span>yes!</span>
        @endif
        <ul>
            @foreach ($pizza->toppings as $topping)
                <li>{{$topping}}</li>
            @endforeach
        </ul>
        <form action="/pizzas/{{$pizza->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="complete-btn">
                <img class="poop-logo" src="/img/poop.png" />
                Complete Order
            </button>
        </form>
    </div>

    <a href="/pizzas" class="back-btn"><-- Back to all pizzas --></a>

@endsection
