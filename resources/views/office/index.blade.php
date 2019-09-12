@extends('layouts.app')

@section('content')
<div class="container">
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Office</th>
          <th scope="col">Description</th>
          <th scope="col">Location</th>
          <th scope="col">Task</th>
          <th scope="col">User</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <a href="{{route('offices.create')}}">Create</a>
      <tbody>
        @foreach($officesses as $office)
        <tr>
          <td>{{$office->office_name}}</td>
          <td>{{$office->description}}</td>
          <td>{{$office->location}}</td>
          <td>{{$office->task_id}}</td>
          <td>{{$office->user_id}}</td>
          <td>
            <form action="{{route('offices.destroy',$office->id)}}" method="POST">
              <a href="{{ route('offices.edit',$office->id) }}">Edit</a>
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
