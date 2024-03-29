@extends('layouts.app')

@section('content')
<div class="container">
  <form role="form" action="{{route('tasks.update',$task->id)}}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
        <div class="form-group">
          <label for="exampleInputEmail1">Task</label>
          <input type="text" value="{{$task->task_name}}" class="form-control" name="task_name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Task name">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Description</label>
          <input type="text" name="description" value="{{$task->description}}" class="form-control" id="exampleInputPassword1" placeholder="Description">
        </div>
        <div class="form-group">
          <label for="category">Category</label>
          <select name="category">
          <option value="Security Camera">Security Camera</option>  
          <option value="Video Recording">Video Recording</option>  
          <option value="EPABX">EPABX</option>  
          <option value="Attendance System">Attendance System</option>  
          <option value="Fire Fighting">Fire Fighting</option>  
          </select>  
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Latitude</label>
          <input type="text" name="latitude" class="form-control" value="{{$task->latitude}}" id="exampleInputPassword1" placeholder="Location">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Location</label>
          <input type="text" name="longitude" class="form-control" value="{{$task->longitude}}" id="exampleInputPassword1" placeholder="Location">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">User</label>
          <input type="text" name="user_id" class="form-control" value="{{$task->user_id}}" id="exampleInputPassword1" placeholder="User">
        </div>

      
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection
