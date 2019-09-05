@extends('layouts.app')

@section('content')
<div class="container">
  <form role="form" action="{{route('office.update',$officesses->id)}}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
        <div class="form-group">
          <label for="exampleInputEmail1">Office</label>
          <input type="text" value="{{$officesses->office_name}}" class="form-control" name="office_name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Office name">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Description</label>
          <input type="text" name="description" value="{{$officesses->description}}" class="form-control" id="exampleInputPassword1" placeholder="Description">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Location</label>
          <input type="text" name="location" class="form-control" value="{{$officesses->location}}" id="exampleInputPassword1" placeholder="Location">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Task</label>
            <input type="text" name="task_id" class="form-control" value="{{$officesses->task_id}}" id="exampleInputPassword1" placeholder="Task">
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1">User</label>
              <input type="text" name="user_id" class="form-control" value="{{$officesses->user_id}}" id="exampleInputPassword1" placeholder="User">
            </div>
      
      
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection
