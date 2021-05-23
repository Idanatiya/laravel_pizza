@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="title">
            Pizza List
        </div>
  

        @foreach ($pizzas as $pizza)
            <div class="pizza-preview">
                {{$pizza->name}} - {{$pizza->type}} - {{$pizza->base}}
            </div>
        @endforeach
    </div>

@endsection
