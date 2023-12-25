<?php
$title = 'detailkemampuan';
require 'functions.php';
require 'layout_header.php';
$id = $_GET['id'];

// $sql = "SELECT * FROM nilai_kemampuan WHERE id_atlit = $id LIMIT 1";
$sql = "SELECT atlit.card, nilai_kemampuan.* FROM atlit
        INNER JOIN nilai_kemampuan ON atlit.id_atlit = nilai_kemampuan.id_atlit
        WHERE nilai_kemampuan.id_atlit = $id LIMIT 1";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mengambil baris data sebagai array asosiatif
    $row = $result->fetch_assoc();

    // Mengakses nilai dari kolom-kolom yang diambil
    $card = $row['card'];
    $nilai_sho = $row['nilai_sho'];
    $nilai_pac = $row['nilai_pac'];
    $nilai_pas = $row['nilai_pas'];
    $nilai_dri = $row['nilai_dri'];
    $nilai_phy = $row['nilai_phy'];
    $nilai_def = $row['nilai_def'];
} else {
    echo "Tidak ada data yang ditemukan.";
}

// $data = ambilsatubaris($conn, $query);
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

    <!-- Tester data Rizal -->
    <!-- <div>
        <div>
        <img src="../assets/img/<?= $card ?>.png" style="width:100%"></img>
            <p>sho: <?= $nilai_sho ?></p>
            <p>pac: <?= $nilai_pac ?></p>
            <p>pas: <?= $nilai_pas ?></p>
            <p>dri: <?= $nilai_dri ?></p>
            <p>phy: <?= $nilai_phy ?></p>
            <p>def: <?= $nilai_def ?></p>
        </div>
    </div> -->

    
    <div class="flex-container">
        <img class="flex-left" src="../assets/img/<?= $card ?>.png"></img>
        <div class="flex-right">
            <canvas id="myChart"></canvas>
        </div>
    </div>

    <!-- <script src="../assets/chart/radarChart.js"></script> -->
    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
        type: 'radar',
        data: {
            labels: ['SHO', 'PAS', 'PHY', 'DEF', 'DRI', 'PAC'],
            datasets: [{
            label: 'Poin',
            data: [<?= $nilai_sho ?>, <?= $nilai_pas ?>, <?= $nilai_phy ?>, <?= $nilai_def ?>, <?= $nilai_dri ?>, <?= $nilai_pac ?>],
            borderWidth: 3
            }]
        },
        options: {
            plugins: {    
            legend: {
                labels: {
                    // This more specific font property overrides the global property
                    font: {
                        size: 18
                    }
                },

            },
            },
            scales: {
            r: {
                pointLabels: {
                    font: {
                        size: 18
                    }
                }
            }
            }
        }
        });
    </script>
    

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