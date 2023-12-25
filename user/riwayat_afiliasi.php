<?php
$title = 'afiliasi';
require 'functions.php';
require 'layout_header.php';
$query = 'SELECT afiliasi.*, atlit.nama FROM afiliasi INNER JOIN atlit ON afiliasi.id_atlit = atlit.id_atlit';
$data = ambildata($conn, $query);

?>

<!-- HTML menampilkan data -->
<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Data Master Pendaftar</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Pendaftar</a></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
                <div class="text-right">
                    <button id="btn-refresh" class="btn btn-primary box-title text-right" title="Refresh Data"><i class="fa fa-refresh" id="ic-refresh"></i></button>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered thead-dark" id="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Nama Atlet</th>
                                <th>Nama Club</th>
                                <th>Club</th>
                                <th>Tahun Bergabung</th>
                                <th>Tahun Keluar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (isset($data)) {
                                foreach ($data as $row) : ?>
                                    <tr>
                                        <td><?= $row['id_afiliasi'] ?></td>
                                        <td><?= $row['nama'] ?></td>
                                        <td><?= $row['nama_club'] ?></td>
                                        <td><?= $row['club'] ?></td>
                                        <td><?= $row['tahun_gabung'] ?></td>
                                        <td><?= $row['tahun_keluar'] ?></td>
                                    </tr>
                            <?php endforeach;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- table -->
    <!-- ============================================================== -->
    <div class="row">

    </div>
</div>
<?php
require 'layout_footer.php';
?>