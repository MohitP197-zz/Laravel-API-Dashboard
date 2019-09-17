@extends('admin/layout.masters')
@section('title')
COMTECH
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Stats -->
        <div class="outer-w3-agile col-xl">
            <div class="stat-grid p-3 d-flex align-items-center justify-content-between bg-primary">
                <div class="s-l">
                    <h5>Tasks</h5>
                    <p class="paragraph-agileits-w3layouts text-white">Total</p>
                </div>
                <div class="s-r">
                    <h6>{{$tasks}}
                        <i class="far fa-edit"></i>
                    </h6>
                </div>
            </div>
            <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-success">
                <div class="s-l">
                    <h5>Technicians</h5>
                    <p class="paragraph-agileits-w3layouts">Total</p>
                </div>
                <div class="s-r">
                    <h6>{{$technician}}
                        <i class="far fa-smile"></i>
                    </h6>
                </div>
            </div>
            <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-danger">
                <div class="s-l">
                    <h5>Offices</h5>
                    <p class="paragraph-agileits-w3layouts">Total</p>
                </div>
                <div class="s-r">
                    <h6>{{$office}}
                        <i class="fas fa-tasks"></i>
                    </h6>
                </div>
            </div>
            <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-warning">
                <div class="s-l">
                    <h5>Feedbacks</h5>
                    <p class="paragraph-agileits-w3layouts">Total</p>
                </div>
                <div class="s-r">
                    <h6>{{$feedback}}
                        <i class="fas fa-users"></i>
                    </h6>
                </div>
            </div>
        </div>
        <!--// Stats -->
        <!-- Pie-chart -->
        <div class="outer-w3-agile col-xl ml-xl-3 mt-xl-0 mt-3">
            <h4 class="tittle-w3-agileits mb-4">Pie Chart</h4>
            <div id="chartdiv"></div>
        </div>
        <!--// Pie-chart -->
    </div>
</div>
<!-- Simple-chart -->
<div class="outer-w3-agile mt-3">
    <h4 class="tittle-w3-agileits mb-4">Graph</h4>
    <div id="Hybridgraph" class="simple-chart1">
    </div>
</div>
<!--// Simple-chart -->

<!--// Bar-Chart -->
<div class="outer-w3-agile mt-3">
    <h4 class="tittle-w3-agileits mb-4">Bar Chart</h4>
    <div id="chart-1"></div>
</div>
<!--// Bar-Chart -->


<!-- Countdown -->
<div class="outer-w3-agile mt-3 outer-w3-agile-bg">
    <h4 class="tittle-w3-agileits mb-4 text-white">Countdown Timer</h4>
    <div class="simply-countdown-custom" id="simply-countdown-custom"></div>
</div>
@endsection