@extends('admin/layout.masters')
@section('title')
COMTECH
@endsection
@section('content')
<section class="forms-section">
    <!-- Forms-3 -->
    <div class="outer-w3-agile mt-3">
        <h4 class="tittle-w3-agileits mb-4">Add New Staff</h4>
        <form role="form" action="{{ route('staffs.store') }}" method="POST" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name" required="">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email"
                        required="">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input type="password" class="form-control" name="password" id="inputPassword4"
                        placeholder="Password" required="">
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