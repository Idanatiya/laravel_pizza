<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

//**Tips */
//retreive all records from sql db.
// $pizzas = Pizza::all();

//order by property and get all results
// $pizzas = Pizza::orderBy('name','desc')->get();

//fetch records that match certain condition
// $pizzas = Pizza::where('price','>',60)->get();


class PizzaController extends Controller {
    //index is a naming convention for /pizzas
    public function index() {
        //fetch recods and order based on date
        $pizzas = Pizza::latest()->get();
        return view(
            'pizzas.index',
            ['pizzas' =>  $pizzas]
        );
    }

    public function show($id) {
        //find only the specific pizza with that id
        $pizza = Pizza::findOrFail($id);
        return view('pizzas.show', ['pizza' => $pizza]);
    }

    public function create() {
        return view('pizzas.create');
    }

    public function store() {
        //make a pizza instance from the model
        $pizza = new Pizza();
        //grab the query params from the url using request
        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->amount = request('amount');
        $pizza->toppings = request('toppings');
        // error_log(request('toppings'));

        //save to DB.
        $pizza->save();
        return redirect('/')->with('msg', 'Thanks for your order');
    }

    //delete a record
    public function destroy($id) {
        $pizza = Pizza::findOrFail($id);
        error_log($pizza);
        $pizza->delete();

        return redirect('/pizzas');

    }
}
