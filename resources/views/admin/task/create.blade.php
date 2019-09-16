@extends('admin/layout.masters')
@section('title')
COMTECH
@endsection
@section('content')
<section class="forms-section">
    <!-- Forms-->
    <div class="outer-w3-agile mt-3">
        <h4 class="tittle-w3-agileits mb-4">Add New Task</h4>
        <form role="form" action="{{ route('tasks.store') }}" method="POST" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="task">Task</label>
                    <input type="text" class="form-control" name="task_name" id="name" placeholder="Task" required="">
                </div>
                <div class="form-group col-md-6">
                    <label for="user_id">User</label>
                    <select id="user_id" name="user_id" class="form-control">
                        @foreach($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="category">Category</label>
                    <select id="category" name="category" class="form-control">
                        <option selected="">Choose...</option>
                        <option value="Security Camera">Security Camera</option>
                        <option value="Video Recording">Video Recording</option>
                        <option value="EPABX">EPABX</option>
                        <option value="Attendance System">Attendance System</option>
                        <option value="Fire Fighting">Fire Fighting</option>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="latitude">Latitude</label>
                    <input type="text" class="form-control" name="latitude" id="latitude" placeholder="Latitude"
                        required="">
                </div>
                <div class="form-group col-md-6">
                    <label for="longitude">Longitude</label>
                    <input type="text" class="form-control" name="longitude" id="longitude" placeholder="Longitude"
                        required="">
                </div>
                <div class="form-group col-md-12">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description"
                        placeholder="Description of the Task" required=""></textarea>
                </div>

            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
        </form>
    </div>
</section>
@endsection