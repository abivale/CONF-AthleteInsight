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
                                        <td class="text-center">
                                            <a href="#" data-toggle="modal" data-target="#modalFoto<?= $row['id_afiliasi']; ?>" title="Lihat Foto" class="btn btn-info"><i class="fa fa-image"></i></a>
                                        </td>
                                        <td><?= $row['tahun_gabung'] ?></td>
                                        <td><?= $row['tahun_keluar'] ?></td>
                                    </tr>

                                    <!-- Modal untuk menampilkan gambar foto -->
                                    <div class="modal fade" id="modalFoto<?= $row['id_afiliasi']; ?>" tabindex="-1" role="dialog" aria-labelledby="modalLabelFoto<?= $row['id_afiliasi']; ?>">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="modalLabelFoto<?= $row['id_afiliasi']; ?>">Foto <?= $row['nama_club']; ?></h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-center">
                                                    <img src="<?= './../assets/img/' . $row['club'] ?>" width="500" height="500" style="margin-top: 10px;">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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