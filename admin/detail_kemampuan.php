<?php
$title = 'detailkemampuan';
require 'functions.php';
require 'layout_header.php';
$query = 'SELECT * FROM nilai_kemampuan';
$data = ambildata($conn, $query);
?>
<link rel="stylesheet" href="../style.css">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Nilai Kemampuan Atlit</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">nilai kemampuan</a></li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <!-- ============================================================== -->
    <!-- Different data widgets -->
    <div class="flex-container">
        <img class="img-soccer" style="flex-grow: 1" src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSza4hrtGHwbXEAjTHJRdkM7TLDP8j6Smv29bgYkZuxHbC1O9Hg" alt="">
        <div class="img-soccer" style="flex-grow: 1;">
            <canvas id="myChart"></canvas>
        </div>
    </div>

    <script src="../assets/chart/radarChart.js"></script>

    <!-- ============================================================== -->
    <!-- .row -->
    <div class="row">
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
        </div>
    </div>
</div>
<?php
require 'layout_footer.php';
?>