<?php
Route::get('/', function () {
    return view('todos.welcome');
});

// Laravel 8+ recommended way to reference controllers
use App\Http\Controllers\TodosController; /// we need to use this code to reference controllers, it is not mentioned in the course ----------

Route::get('todos', [TodosController::class, 'index']);
Route::get('todos/{todo}', [TodosController::class, 'show']);
Route::get('new-todos', [TodosController::class, 'create']);
Route::post('store-todos', [TodosController::class, 'store']);
//route:: get('todos/{todo}/edit','TodosController@edit');//// it has been old cant use it again
route:: get('todos/{todo}/edit',[TodosController::class,'edit']);
route ::post('todos/{todo}/update-todos',[TodosController::class, 'update']);

