@extends('admin.Layout.masters')
@section('title')
COMTECH
@endsection
@section('content')
<section class="tables-section">
    <!-- table7 -->
    <div class="outer-w3-agile mt-3">
        <h4 class="tittle-w3-agileits mb-4">Technicians Task Report</h4>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Technician</th>
                        <th scope="col">Email</th>
                        <th scope="col">Completed Projects</th>
                        <th scope="col">Pending Projects</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        @foreach($reports as $report)
                    <tr>
                        <td>{{$report->id}}</td>
                        <td>{{$report->name}}</td>
                        <td>{{$report->email}}</td>
                        <td>50</td>
                        <td>20</td>

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