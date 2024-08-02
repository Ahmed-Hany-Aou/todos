<?php
use App\Http\Controllers\TodosController;

Route::get('/', function () {
    return view('todos.welcome');
});

Route::get('todos', [TodosController::class, 'index']);
Route::get('todos/{todo}', [TodosController::class, 'show']);
Route::get('new-todos', [TodosController::class, 'create']);
Route::post('store-todos', [TodosController::class, 'store']);
Route::get('todos/{todo}/edit', [TodosController::class, 'edit']);
Route::post('todos/{todo}/update-todos', [TodosController::class, 'update']);
Route::post('todos/{todo}/delete', [TodosController::class, 'destroy']);
