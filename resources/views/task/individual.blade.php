@extends('layouts.app')

@section('content')
<div class="container">
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Task Name</th>
          <th scope="col">Description</th>
          <th scope="col">Location</th>
        </tr>
      </thead>
      <tbody>
        @foreach($tasks as $task)
        <tr>
          <td>{{$task->task_name}}</td>
          <td>{{$task->description}}</td>
          <td>{{$task->location}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
