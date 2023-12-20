<?php
$title = 'dashboard';
require 'functions.php';
require 'layout_header.php';
$query = 'SELECT * FROM kesehatan';
$data = ambildata($conn, $query);
?>
<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Kesehatan</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">kesehatan</a></li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <!-- ============================================================== -->
    <!-- Different data widgets -->
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