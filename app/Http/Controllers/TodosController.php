<?php

namespace App\Http\Controllers;

//use App\Models\Todo;
use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index()
    {
      //  $todos = Todo::all();
        return view('todos.index')-> with('todos',Todo::all());
    }

    // Other methods (create, store, show, edit, update, destroy)...
}
