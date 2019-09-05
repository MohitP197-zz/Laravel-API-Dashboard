@extends('layouts.app')

@section('content')
<div class="container">
  <form role="form" action="{{ route('office.store') }}" method="POST" enctype="multipart/form-data">

    {!! csrf_field() !!}
        <div class="form-group">
          <label for="exampleInputEmail1">Office Name</label>
          <input type="text" class="form-control" name="office_name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter office name">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Description</label>
          <input type="text" name="description" class="form-control" id="exampleInputPassword1" placeholder="Description">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Location</label>
          <input type="text" name="location" class="form-control" id="exampleInputPassword1" placeholder="location">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Task</label>
          <input type="text" name="task_id" class="form-control" id="exampleInputPassword1" placeholder="Enter Task">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">User</label>
            <input type="text" name="user_id" class="form-control" id="exampleInputPassword1" placeholder="Enter User">
          </div>

      
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection
