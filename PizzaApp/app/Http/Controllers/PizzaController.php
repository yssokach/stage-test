<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use App\Models\Ingredient;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index()
    {
        $pizzas = Pizza::with('ingredients')->where('status', 'active')->get();
        return view('pizzas.index', compact('pizzas'));
    }

    public function create()
    {
        $ingredients = Ingredient::all();
        return view('pizzas.create', compact('ingredients'));
    }

    public function store(Request $request)
    {
        $pizza = Pizza::create($request->all());
        $pizza->ingredients()->sync($request->ingredients);
        return redirect()->route('pizzas.index');
    }

    public function show(Pizza $pizza)
    {
        return view('pizzas.show', compact('pizza'));
    }
}
