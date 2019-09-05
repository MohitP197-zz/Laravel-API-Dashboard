@extends('layouts.app')

@section('content')
<div class="container">
  <form role="form" action="{{ route('tasks.store') }}" method="POST" enctype="multipart/form-data">

    {!! csrf_field() !!}
        <div class="form-group">
          <label for="exampleInputEmail1">Task</label>
          <input type="text" class="form-control" name="task_name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter task name">
          <small id="emailHelp" class="form-text text-muted">We will never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Description</label>
          <input type="text" name="description" class="form-control" id="exampleInputPassword1" placeholder="Description">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Location</label>
          <input type="text" name="location" class="form-control" id="exampleInputPassword1" placeholder="Location">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">User</label>
          <select name="user_id">
            @foreach($users as $user)
          <option value="{{$user->id}}">
            {{$user->name}}
          </option>  
          @endforeach
          </select>  
        </div>

      
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection
