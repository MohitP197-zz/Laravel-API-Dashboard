@extends('admin/Layout.masters')
@section('title')
COMTECH
@endsection
@section('content')
@include('admin/dashboard')
@endsection

@section('js-files')

<!--// Graph -->
<!-- Bar-chart -->
<script src="{{asset('js/Admin/rumcaJS.js')}}"></script>
<script src="{{asset('js/Admin/example.js')}}"></script>
<!--// Bar-chart -->
<!-- Calender -->
<script src="{{asset('js/Admin/moment.min.js')}}"></script>
<script src="{{asset('js/Admin/pignose.calender.js')}}"></script>
<script>
    //<![CDATA[
                $(function () {
                    $('.calender').pignoseCalender({
                        select: function (date, obj) {
                            obj.calender.parent().next().show().text('You selected ' +
                                (date[0] === null ? 'null' : date[0].format('YYYY-MM-DD')) +
                                '.');
                        }
                    });
        
                    $('.multi-select-calender').pignoseCalender({
                        multiple: true,
                        select: function (date, obj) {
                            obj.calender.parent().next().show().text('You selected ' +
                                (date[0] === null ? 'null' : date[0].format('YYYY-MM-DD')) +
                                '~' +
                                (date[1] === null ? 'null' : date[1].format('YYYY-MM-DD')) +
                                '.');
                        }
                    });
                });
                //]]>
</script>
<!--// Calender -->


<!-- Graph -->
<script src="{{asset('js/Admin/SimpleChart.js')}}"></script>
<script>
    var graphdata4 = {
                linecolor: "Random",
                title: "Thursday",
                values: [{
                        X: "6",
                        Y: 300.00
                    },
                    {
                        X: "7",
                        Y: 101.98
                    },
                    {
                        X: "8",
                        Y: 140.00
                    },
                    {
                        X: "9",
                        Y: 340.00
                    },
                    {
                        X: "10",
                        Y: 470.25
                    },
                    {
                        X: "11",
                        Y: 180.56
                    },
                    {
                        X: "12",
                        Y: 680.57
                    },
                    {
                        X: "13",
                        Y: 740.00
                    },
                    {
                        X: "14",
                        Y: 800.89
                    },
                    {
                        X: "15",
                        Y: 420.57
                    },
                    {
                        X: "16",
                        Y: 980.24
                    },
                    {
                        X: "17",
                        Y: 1080.00
                    },
                    {
                        X: "18",
                        Y: 140.24
                    },
                    {
                        X: "19",
                        Y: 140.58
                    },
                    {
                        X: "20",
                        Y: 110.54
                    },
                    {
                        X: "21",
                        Y: 480.00
                    },
                    {
                        X: "22",
                        Y: 580.00
                    },
                    {
                        X: "23",
                        Y: 340.89
                    },
                    {
                        X: "0",
                        Y: 100.26
                    },
                    {
                        X: "1",
                        Y: 1480.89
                    },
                    {
                        X: "2",
                        Y: 1380.87
                    },
                    {
                        X: "3",
                        Y: 1640.00
                    },
                    {
                        X: "4",
                        Y: 1700.00
                    }
                ]
            };
            $(function () {
                $("#Hybridgraph").SimpleChart({
                    ChartType: "Hybrid",
                    toolwidth: "50",
                    toolheight: "25",
                    axiscolor: "#E6E6E6",
                    textcolor: "#6E6E6E",
                    showlegends: false,
                    data: [graphdata4],
                    legendsize: "140",
                    legendposition: 'bottom',
                    xaxislabel: 'Hours',
                    title: 'Weekly Profit',
                    yaxislabel: 'Profit in $'
                });
            });
</script>


<!-- profile-widget-dropdown js-->
<script src="{{asset('js/Admin/profile-widget-dropdown.js')}}"></script>
<!--// profile-widget-dropdown js-->

<!-- Count-down -->
<script src="{{asset('js/Admin/simplyCountdown.js')}}"></script>
<link href="{{asset('css/Admin/simplyCountdown.css')}}" rel='stylesheet' type='text/css' />
<script>
    var d = new Date();
            simplyCountdown('simply-countdown-custom', {
                year: d.getFullYear(),
                month: d.getMonth() + 2,
                day: 25
            });
</script>
<!--// Count-down -->

<!-- pie-chart -->
<script src="{{asset('js/Admin/amchart.js')}}"></script>
<script>
    var chart;
            var legend;
    
            var chartData = [{
                    country: "Lithuania",
                    value: 260
                },
                {
                    country: "Ireland",
                    value: 201
                },
                {
                    country: "Germany",
                    value: 65
                },
                {
                    country: "Australia",
                    value: 39
                },
                {
                    country: "UK",
                    value: 19
                },
                {
                    country: "Latvia",
                    value: 10
                }
            ];
    
            AmCharts.ready(function () {
                // PIE CHART
                chart = new AmCharts.AmPieChart();
                chart.dataProvider = chartData;
                chart.titleField = "country";
                chart.valueField = "value";
                chart.outlineColor = "";
                chart.outlineAlpha = 0.8;
                chart.outlineThickness = 2;
                // this makes the chart 3D
                chart.depth3D = 20;
                chart.angle = 30;
    
                // WRITE
                chart.write("chartdiv");
            });
</script>
<!--// pie-chart -->
@endsection