<?php
Route::get('/', function () {
    return view('welcome');
});

// Laravel 8+ recommended way to reference controllers
use App\Http\Controllers\TodosController; /// we need to use this code to reference controllers, it is not mentioned in the course ----------

Route::get('todos', [TodosController::class, 'index']);
Route::get('todos/{todo}', [TodosController::class, 'show']);
Route::get('new-todos', [TodosController::class, 'create']);
Route::post('store-todos', [TodosController::class, 'store']);
