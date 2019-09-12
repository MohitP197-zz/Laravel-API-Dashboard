@extends('layouts.app')

@section('content')
<div class="container">
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Title</th>
          <th scope="col">User</th>
          <th scope="col">Description</th>
          <th scope="col">Feedback Given At</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($feedbacks as $feedback)
        <tr>
          <td>{{$feedback->title}}</td>
          <td>{{$feedback->user_name}}</td>
          <td>{{$feedback->description}}</td>
          <td>{{$feedback->created_at}}</td>
          <td>
            <form action="{{route('feedbacks.destroy',$feedback->id)}}" method="POST">
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
