@extends('layouts.app')
@section('content')

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <style type="text/css">
        .box {
            width: 800px;
            margin: 0 auto;
        }
    </style>
    <script type="text/javascript">
        var analytics = <?php echo $status; ?>

        google.charts.load('current', {
            'packages': ['corechart']
        });

        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable(analytics);

            var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
            chart.draw(data);
        }
    </script>
</head>

<section class="content-header">
    <h1 class="pull-left">Dashboard</h1>
</section>
<div class="content">
    <div class="clearfix"></div>

    @include('flash::message')
    <div class="container">
        <h3 align="center">Jumlah paket yang telah diterima maupun sedang di proses</h3><br />

        <div class="panel panel-default">
            <div class="panel-body" align="center">
                <div id="pie_chart" style="width:750px; height:450px;">

                </div>
            </div>
        </div>

    </div>

    <div class="clearfix"></div>
    <div class="box box-primary">
    </div>
    <div class="text-center">

    </div>
</div>
@endsection