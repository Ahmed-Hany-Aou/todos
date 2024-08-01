<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;

Route::get('/', function () {
    return view('todos.welcome');
});

Route::resource('todos', TodosController::class);
