@extends('layouts.app')

@section('content')
<div class="container">
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Staff</th>
          <th scope="col">Role</th>
          <th scope="col">Email</th>
        </tr>
      </thead>
      <a href="{{route('staffs.create')}}">Create</a>
      <tbody>
        @foreach($getStaffs as $staff)
        <tr>
          <td>{{$staff->name}}</td>
          <td>{{$staff->role}}</td>
          <td>{{$staff->email}}</td>
          <td>
            <form action="{{route('staffs.destroy',$staff->id)}}" method="POST">
              <a href="{{ route('staffs.edit',$staff->id) }}">Edit</a>
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
