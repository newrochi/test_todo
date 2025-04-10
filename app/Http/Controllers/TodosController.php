<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index(){
        $todos=Todo::all();
        return view('todos.index')->with('todos',$todos);
    }

    public function show($id){
        $todo=Todo::find($id);
        return view('todos.show')->with('todo',$todo);
    }
}
