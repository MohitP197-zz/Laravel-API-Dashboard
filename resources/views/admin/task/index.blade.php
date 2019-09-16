@extends('admin/layout.masters')
@section('title')
COMTECH
@endsection
@section('content')
<section class="tables-section">
    <!-- table7 -->
    <div class="outer-w3-agile mt-3">
        <h4 class="tittle-w3-agileits mb-4">Tasks</h4>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Task</th>
                        <th scope="col">Description</th>
                        <th scope="col">Status</th>
                        <th scope="col">Technician</th>
                        <th scope="col">Latitude</th>
                        <th scope="col">Longitude</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <a href="{{route('tasks.create')}}">Create</a>

                <tbody>
                    <tr>
                        @foreach($getTasks as $tasks)
                    <tr>
                        <td>{{$tasks->id}}</td>
                        <td>{{$tasks->task_name}}</td>
                        <td>{{$tasks->description}}</td>
                        <td>{{$tasks->status}}</td>
                        <td>{{$tasks->user_id}}</td>
                        <td>{{$tasks->latitude}}</td>
                        <td>{{$tasks->longitude}}</td>
                        <td>
                            <form action="{{route('tasks.destroy',$tasks->id)}}" method="POST">
                                <a href="{{ route('tasks.edit',$tasks->id) }}">Edit</a>
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