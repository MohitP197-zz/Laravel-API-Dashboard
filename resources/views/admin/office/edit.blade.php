@extends('admin/layout.masters')
@section('title')
COMTECH
@endsection
@section('content')
<section class="forms-section">
    <!-- Forms-->
    <div class="outer-w3-agile mt-3">
        <h4 class="tittle-w3-agileits mb-4">Add New Office</h4>
        <form role="form" action="{{route('offices.update',$officesses->id)}}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="office_name">Office Name</label>
                    <input type="text" class="form-control" value="{{$officesses->office_name}}" name="office_name" id="office_name"
                        placeholder="Name of Office" required="">
                </div>
                <div class="form-group col-md-6">
                    <label for="location">Location</label>
                    <input type="text" class="form-control" value="{{$officesses->location}}" name="location" id="location" placeholder="Location"
                        required="">
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
                    <label for="task_id">User</label>
                    <select id="task_id" name="task_id" class="form-control">
                        @foreach($tasks as $task)
                        <option value="{{$task->id}}">{{$task->task_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-12">
                    <label for="description">Description</label>
                    <textarea class="form-control" value="{{$officesses->description}}" name="description" id="description"
                        placeholder="Description of the Task" required=""></textarea>
                </div>

            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
        </form>
    </div>
</section>
@endsection