@extends('layouts.app')

@section('content')
<div class="container">
  <form role="form" action="{{ route('staffs.store') }}" method="POST" enctype="multipart/form-data">

    {!! csrf_field() !!}
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Role</label>
          <select name="role">
            <option value="admin">Admin</option>  
            <option value="operator">Operator</option>  
            <option value="office_assistant">office Assistant</option>  
            <option value="technician">Technician</option>  
          </select>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Email</label>
          <input type="text" name="email" class="form-control" id="exampleInputPassword1" placeholder="email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="text" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter password">
        </div>

      
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection
