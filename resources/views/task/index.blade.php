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
          <th scope="col">User</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      {{--  <a href="{{route('task.create')}}">Create</a>  --}}
      <a href="{{route('tasks.create')}}">Create</a>
      <tbody>
        @foreach($getTasks as $task)
        <tr>
          <td>{{$task->task_name}}</td>
          <td>{{$task->description}}</td>
          <td>{{$task->latitude}}</td>
          <td>{{$task->longitude}}</td>
          <td>{{$task->user_id}}</td>
          <td>
            <form action="{{route('tasks.destroy',$task->id)}}" method="POST">
              <a href="{{ route('tasks.edit',$task->id) }}">Edit</a>
                {!! csrf_field() !!}
                @method('DELETE')
                <button type="submit">
                    Delete
                </button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
