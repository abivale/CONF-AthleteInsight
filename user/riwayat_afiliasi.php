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
            <h4 class="page-title">Riwayat Afiliasi Atlit</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <!-- <li class="active">Riwayat Afiliasi</li> -->
                <li><a href="#">riwayat afiliasi</a></li>
            </ol>
        </div>
    </div>

    <!-- Tabel Riwayat Afiliasi -->
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title">Data Afiliasi</h3>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Atlet</th>
                                <th>Nama Klub</th>
                                <th>Tahun Bergabung</th>
                                <th>Tahun Keluar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $row) : ?>
                                <tr>
                                    <td><?= $row['id_afiliasi'] ?></td>
                                    <td><?= $row['nama'] ?></td>
                                    <td><?= $row['nama_club'] ?></td>
                                    <td><?= $row['tahun_gabung'] ?></td>
                                    <td><?= $row['tahun_keluar'] ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Layout Footer -->
<?php
require 'layout_footer.php';
?>