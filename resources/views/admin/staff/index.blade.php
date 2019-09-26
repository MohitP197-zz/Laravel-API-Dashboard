@extends('admin.Layout.masters')
@section('title')
COMTECH
@endsection
@section('content')
<section class="tables-section">
    <!-- table7 -->
    <div class="outer-w3-agile mt-3">
        <h4 class="tittle-w3-agileits mb-4">Staffs</h4>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Staff Name</th>
                        <th scope="col">Role</th>
                        <th scope="col">Email</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <a href="{{route('staffs.create')}}">Create</a>

                <tbody>
                    <tr>
                        @foreach($getStaffs as $staff)
                    <tr>
                        <td>{{$staff->id}}</td>
                        <td>{{$staff->name}}</td>
                        <td>{{$staff->role}}</td>
                        <td>{{$staff->email}}</td>
                        <td>{{$staff->created_at}}</td>
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
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
    <!--// table7 -->

</section>
@endsection