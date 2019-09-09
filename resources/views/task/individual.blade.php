@extends('layouts.app')

@section('content')
<div class="container">
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Task Name</th>
          <th scope="col">Description</th>
          <th scope="col">Latitude</th>
          <th scope="col">Longitude</th>
        </tr>
      </thead>
      <tbody>
        @foreach($tasks as $task)
        <tr>
          <td>{{$task->task_name}}</td>
          <td>{{$task->description}}</td>
          <td>{{$task->latitude}}</td>
          <td>{{$task->longitude}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
