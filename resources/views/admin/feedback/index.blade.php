@extends('admin/layout.masters')
@section('title')
COMTECH
@endsection
@section('content')
<section class="tables-section">
    <!-- table7 -->
    <div class="outer-w3-agile mt-3">
        <h4 class="tittle-w3-agileits mb-4">Feedbacks</h4>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">User</th>
                        <th scope="col">Description</th>
                        <th scope="col">Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <a href="{{route('feedbacks.create')}}">Create</a>

                <tbody>
                    <tr>
                        @foreach($feedbacks as $feedback)
                    <tr>
                        <td>{{$feedback->id}}</td>
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
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
    <!--// table7 -->

</section>
@endsection