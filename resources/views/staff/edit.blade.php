@extends('layouts.app')

@section('content')
<div class="container">
  <form role="form" action="{{route('staffs.update',$getStaffs->id)}}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
        <div class="form-group">
          <label for="exampleInputEmail1">Task</label>
          <input type="text" value="{{$getStaffs->name}}" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Task name">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Role</label>
          <input type="text" name="role" value="{{$getStaffs->role}}" class="form-control" id="exampleInputPassword1" placeholder="Description">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Email</label>
          <input type="text" name="email" class="form-control" value="{{$getStaffs->email}}" id="exampleInputPassword1" placeholder="Location">
        </div>
      
      
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection
