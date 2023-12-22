<?php
$title = 'kemampuan';
require 'functions.php';
require 'layout_header.php';
$query = 'SELECT * FROM nilai_kemampuan';
$data = ambildata($conn, $query);
?>
<link rel="stylesheet" href="../style.css">
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
    
<div class="grid-container">
    <div>
        <img src="../assets/img/Haaland.png" alt="Avatar" style="width:100%" >
    </div>
    <div>
        <img src="../assets/img/Haaland.png" alt="Avatar" style="width:100%" >
    </div>
    <div>
        <img src="../assets/img/Haaland.png" alt="Avatar" style="width:100%" >
    </div>
    <div>
        <img src="../assets/img/Haaland.png" alt="Avatar" style="width:100%" >
    </div>
    <div>
        <img src="../assets/img/Haaland.png" alt="Avatar" style="width:100%" >
    </div>
    <div>
        <img src="../assets/img/Haaland.png" alt="Avatar" style="width:100%" >
    </div>
    <div>
        <img src="../assets/img/Haaland.png" alt="Avatar" style="width:100%" >
    </div>
    <div>
        <img src="../assets/img/Haaland.png" alt="Avatar" style="width:100%" >
    </div>
    <div>
        <img src="../assets/img/Haaland.png" alt="Avatar" style="width:100%" >
    </div>
    <div>
        <img src="../assets/img/Haaland.png" alt="Avatar" style="width:100%" >
    </div>
    <div>
        <img src="../assets/img/Haaland.png" alt="Avatar" style="width:100%" >
    </div>
    <div>
        <img src="../assets/img/Haaland.png" alt="Avatar" style="width:100%" >
    </div>
    <div>
        <img src="../assets/img/Haaland.png" alt="Avatar" style="width:100%" >
    </div>
    <div>
        <img src="../assets/img/Haaland.png" alt="Avatar" style="width:100%" >
    </div>
    <div>
        <img src="../assets/img/Haaland.png" alt="Avatar" style="width:100%" >
    </div>
    <div>
        <img src="../assets/img/Haaland.png" alt="Avatar" style="width:100%" >
    </div>
    <div>
        <img src="../assets/img/Haaland.png" alt="Avatar" style="width:100%" >
    </div>
    <div>
        <img src="../assets/img/Haaland.png" alt="Avatar" style="width:100%" >
    </div>
    <div>
        <img src="../assets/img/Haaland.png" alt="Avatar" style="width:100%" >
    </div>
    <div class="grid-item">
        <img src="../assets/img/Haaland.png" alt="Avatar" style="width:100%" >
    </div>
</div>







    <!-- <div class="card">
        <img src="https://thumb.viva.co.id/media/frontend/thumbs3/2023/11/01/6541e20473772-cristiano-ronaldo-meminta-suporter-lawan-tutup-mulut_1265_711.jpg" alt="Avatar" style="width:100%">
        <div class="container2">
            <h4><b>John Doe</b></h4> 
            <p>Architect & Engineer</p> 
        </div>
    </div> -->

    <a href="./detail_kemampuan.php">Pindah</a>
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