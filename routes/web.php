<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PizzaController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', [PizzaController::class, 'index'] );

Route::get('/pizzas/create',[PizzaController::class, 'create']);

//save a pizza
Route::post('/pizzas',[PizzaController::class, 'store']);


//define route params
Route::get('/pizzas/{id}', [PizzaController::class, 'show']);

//delete a pizza
Route::delete('/pizzas/{id}', [PizzaController::class, 'destroy']);