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
        $todo=Todo::findOrFail($id);
        return view('todos.show')->with('todo',$todo);
    }

    public function create(){
        return view('todos.create');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $todo=new Todo();
        $todo->title=$validatedData['title'];
        $todo->description=$validatedData['description'];

        $todo->save();

        return redirect()->route('todos.index')->with('success','Todo created successfully');
    }

    public function edit($id){
        $todo=Todo::findOrFail($id);
        return view('todos.edit')->with('todo',$todo);
    }

    public function update(Request $request,$id){
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $todo=Todo::findOrFail($id);
        $todo->title=$validatedData['title'];
        $todo->description=$validatedData['description'];

        $todo->save();

        return redirect()->route('todos.index')->with('success','Todo updated successfully');
    }

    public function delete($id){
        $todo=Todo::findOrFail($id);

        $todo->delete();

        return redirect()->route('todos.index')->with('success','Todo deleted successfully');
    }
}
