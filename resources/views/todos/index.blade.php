@extends('todos.layouts.todo_layout')

@section('content')
<section class="vh-100 gradient-custom-2">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-12 col-xl-10">

          <div class="card mask-custom">
            <div class="card-body p-4 text-white">

              <div class="text-center pt-3 pb-2">
                <h2 class="my-4">Todoer</h2>
              </div>

              <table class="table text-white mb-0">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Task</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($todos as $todo)
                  <tr class="fw-normal">
                    <th>
                      <span class="ms-2">{{$todo->id}}</span>
                    </th>
                    <td class="align-middle">
                        <a href="{{route('todos.show',['id'=>$todo->id])}}"><span>{{$todo->title}}</span></a>
                    </td>

                    <td class="align-middle">
                        <a href="#" class="btn btn-success">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>


            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

@endsection
