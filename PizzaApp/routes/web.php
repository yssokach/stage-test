<?php

use App\Http\Controllers\PizzaController;
use App\Http\Controllers\OrderController;

Route::get('pizzas', [PizzaController::class, 'index']);
Route::get('pizzas/create', [PizzaController::class, 'create']);
Route::post('pizzas', [PizzaController::class, 'store']);
Route::get('pizzas/{pizza}', [PizzaController::class, 'show']);

Route::post('orders', [OrderController::class, 'create']);
Route::get('orders/{order}', [OrderController::class, 'show']);
