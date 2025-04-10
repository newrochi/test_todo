@extends('todos.layouts.todo_layout')

@section('content')
<div class="row">
    <form class="pt-5 w-50" action="{{route('todos.store')}}" method="POST">
      @csrf
        <!-- Name input -->
      <div class="form-outline mb-4 border" >
        <label class="form-label" for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" value="{{(old('title'))? old('title'): ''}}"/>
      </div>

      <!-- Message input -->
      <div class="form-outline mb-4 border">
        <label class="form-label" for="description">Description</label>
        <textarea class="form-control" name="description" id="description" rows="4" >
            {{(old('description'))? old('description'): ''}}
        </textarea>
      </div>

      <!-- Submit button -->
      <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
    </form>
</div>
@endsection
