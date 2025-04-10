@extends('todos.layouts.todo_layout')

@section('content')
<h1>{{$todo->title}}</h1>
<p>{{$todo->description}}</p>
@endsection
