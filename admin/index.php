<?php
$title = 'dashboard';
require 'functions.php';
require 'layout_header.php';
$query = 'SELECT * FROM atlit';
$data = ambildata($conn, $query);
?>
<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">DASHBOARD</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">dashboard</a></li>
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
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Atlit</h3>
                <ul class="list-inline two-part">
                    <li>
                        <div id="sparklinedash2"></div>
                    </li>
                    <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span class="counter text-purple">10</span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
                <h3 class="box-title">Atlit</h3>
                <div class="table-responsive">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th width="15%">Nama Atlit</th>
                                <th width="15%">Kemampuan</th>
                                <th width="15%">Nilai Performance</th>
                                <th width="15%">Kemajuan Performance</th>
                                <th width="15%">kesehatan atlit</th>
                                <th width="15%">Riwayat Afiliasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($data as $row): ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td>Nama Athlit</td>
                                    <td>Details</td>
                                    <td>Details</td>
                                    <td>Details</td>
                                    <td>Details</td>
                                    <td>Details</td>
                                    <!-- Contoh buat aksi tapi urgteu bisa nyambungken ka data na -->
                                     <!-- <td align="center">  -->
                                          <!-- <a href="detail.php?id=<?= htmlspecialchars($row['atlit']); ?>" data-toggle="tooltip" data-placement="bottom" title="Edit" class="btn btn-success btn-block">Detail</a> -->
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require 'layout_footer.php';
?>