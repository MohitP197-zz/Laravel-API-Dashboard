@extends('admin/layout.masters')
@section('title')
COMTECH
@endsection
@section('content')
<section class="forms-section">
    <!-- Forms-3 -->
    <div class="outer-w3-agile mt-3">
        <h4 class="tittle-w3-agileits mb-4">Edit Staff Details</h4>
        <form role="form" action="{{route('staffs.update',$getStaffs->id)}}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" value="{{$getStaffs->name}}" name="name" id="name"
                        placeholder="Name" required="">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" value="{{$getStaffs->email}}" name="email" id="inputEmail4"
                        placeholder="Email" required="">
                </div>
                <div class="form-group col-md-6">
                    <label for="role">Role</label>
                    <select id="role" name="role" class="form-control">
                        <option selected="">Choose...</option>
                        <option value="admin">Admin</option>
                        <option value="office_assistant">Assistant</option>
                        <option value="operator">Operator</option>
                        <option value="technician">Technician</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
        </form>
    </div>
</section>
@endsection