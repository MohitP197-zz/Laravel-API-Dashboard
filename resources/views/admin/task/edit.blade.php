@extends('admin/layout.masters')
@section('title')
COMTECH
@endsection
@section('content')
<section class="forms-section">
    <!-- Forms-->
    <div class="outer-w3-agile mt-3">
        <h4 class="tittle-w3-agileits mb-4">Edit Task Details</h4>
        <form role="form" action="{{route('tasks.update',$task->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="task">Task</label>
                    <input type="text" class="form-control" name="task_name" value="{{$task->task_name}}" id="name"
                        placeholder="Task" required="">
                </div>
                <div class="form-group col-md-6">
                    <label for="user_id">User</label>
                    <select id="user_id" name="user_id" class="form-control">
                        @foreach ($users as $user)
                        <option value="{{ $user->name }}"
                            {{ ( $user->name == $task->user_id) ? 'selected' : '' }}>
                            {{ $user->name }} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="category">Category</label>
                    <select id="category" name="category" class="form-control">
                        <option selected="">Choose...</option>
                        {{--  <option value="Security Camera">Security Camera</option>
                        <option value="Video Recording">Video Recording</option>
                        <option value="EPABX">EPABX</option>
                        <option value="Attendance System">Attendance System</option>
                        <option value="Fire Fighting">Fire Fighting</option>  --}}

                        @foreach ($categories as $category)
                        <option value="{{ $category->category }}"
                            {{ ( $category->category == $task->category) ? 'selected' : '' }}>
                            {{ $category->category }} </option>
                        @endforeach
                    </select>
                    </select>
                </div>


                <div class="form-group col-md-6">
                    <label for="location">Location</label>
                    <input type="text" class="form-control" value="{{$task->location}}" name="location" id="location"
                        placeholder="location" required="">
                </div>
                <div class="form-group col-md-12">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description"
                        placeholder="Description of the Task" required="">{{$task->description}}</textarea>
                </div>

            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
        </form>
    </div>
</section>
@endsection