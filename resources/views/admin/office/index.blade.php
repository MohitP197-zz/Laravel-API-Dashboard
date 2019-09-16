@extends('admin/layout.masters')
@section('title')
COMTECH
@endsection
@section('content')
<section class="tables-section">
    <!-- table7 -->
    <div class="outer-w3-agile mt-3">
        <h4 class="tittle-w3-agileits mb-4">Offices</h4>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Office</th>
                        <th scope="col">Location</th>
                        <th scope="col">Description</th>
                        <th scope="col">Task</th>
                        <th scope="col">User</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <a href="{{route('offices.create')}}">Create</a>

                <tbody>
                    <tr>
                        @foreach($officesses as $office)
                    <tr>
                        <td>{{$office->id}}</td>
                        <td>{{$office->office_name}}</td>
                        <td>{{$office->location}}</td>
                        <td>{{$office->description}}</td>
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
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
    <!--// table7 -->

</section>
@endsection