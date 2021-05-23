@extends('layouts.layout')

@section('content')
    <div class="container">
        <h1>Create A New Pizza:</h1>
        <form class="create-pizza" action="/pizzas" method="POST">
            @csrf
            <label>Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter a name" />
            <label>Choose Pizza Type:</label>
            <select name="type" id="">
                <option value="margherita">Margherita</option>
                <option value="hawaiian">Hawaiin</option>
                <option value="veg supreme">Veg Supreme</option>
                <option value="volcano">Volcano</option>
            </select>
            <label>Choose Base Type:</label>
            <select name="base">
                <option value="cheesy crust">Cheesy Crust</option>
                <option value="garlic crust">Garlic Crust</option>
                <option value="thin & crispy">Thin & crispy</option>
                <option value="thick">Thick</option>
            </select>
            <label>Amount:</label>
            <input type="number" name="amount" placeholder="Enter Amount">
            <fieldset>
                <legend>Extra toppings</legend>
                <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms <br />
                <input type="checkbox" name="toppings[]" value="peppers">Peppers <br />
                <input type="checkbox" name="toppings[]" value="garlic">Garlic <br />
                <input type="checkbox" name="toppings[]" value="olives">Olives <br />
            </fieldset>
            <input type="submit" value="Submit">

        </form>
    </div>

@endsection
