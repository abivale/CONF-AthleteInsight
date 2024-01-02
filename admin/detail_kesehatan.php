<?php
$title = 'detailkesehatan';
require 'functions.php';
require 'layout_header.php';
$id = $_GET['id'];

// $sql = "SELECT * FROM nilai_kemampuan WHERE id_atlit = $id LIMIT 1";
$sql = "SELECT atlit.card, kesehatan_fisik.*, kesehatan_mental.*
        FROM atlit
        INNER JOIN kesehatan_fisik ON atlit.id_atlit = kesehatan_fisik.id_atlit
        INNER JOIN kesehatan_mental ON atlit.id_atlit = kesehatan_mental.id_atlit
        WHERE atlit.id_atlit = $id
        LIMIT 1";

// $sql = "SELECT atlit.card, kesehatan_mental.* FROM atlit
//         INNER JOIN kesehatan_mental ON atlit.id_atlit = kesehatan_mental.id_atlit
//         WHERE kesehatan_mental.id_atlit = $id LIMIT 1";  

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mengambil baris data sebagai array asosiatif
    $row = $result->fetch_assoc();

    // Mengakses nilai dari kolom-kolom yang diambil
    $card = $row['card'];
    $STR = $row['STR'];
    $ME = $row['ME'];
    $AGI = $row['AGI'];
    $FLEX = $row['FLEX'];
    $PE = $row['PE'];
    $NT = $row['NT'];

    $CH = $row['CH'];
    $MV = $row['MV']; 
    $CC = $row['CC'];
    $EM = $row['EM'];
    $WT = $row['WT'];
    $PA = $row['PA'];
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
            <h4 class="page-title">Kesehatan Atlit</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Kesehatan Atlit</a></li>
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
            <p>CH: <?= $CH ?></p>
            <p>MV: <?= $MV ?></p>
            <p>CC: <?= $CC ?></p>
            <p>EM: <?= $EM ?></p>
            <p>WT: <?= $WT ?></p>
            <p>PA: <?= $PA ?></p>
        </div>
    </div> -->

    
    <div class="flex-container">
        <div class="flex-left2">
            <canvas id="myChart"></canvas>
        </div>
        <img class="flex-center" src="../assets/img/<?= $card ?>.png"></img>
        <div class="flex-right2">
            <canvas id="myChart2"></canvas>
        </div>
    </div>

    <!-- <script src="../assets/chart/radarChart.js"></script> -->
    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
        type: 'radar',
        data: {
            labels: ['STR', 'ME', 'AGI', 'FLEX', 'PE', 'NT'],
            datasets: [{
            label: 'Fisik',
            data: [<?= $STR ?>, <?= $ME ?>, <?= $AGI ?>, <?= $FLEX ?>, <?= $PE ?>, <?= $NT ?>],
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

        const ctx2 = document.getElementById('myChart2');

        new Chart(ctx2, {
        type: 'radar',
        data: {
            labels: ['CH', 'MV', 'CC', 'EM', 'WT', 'PA'],
            datasets: [{
            label: 'Mental',
            data: [<?= $CH ?>, <?= $MV ?>, <?= $CC ?>, <?= $EM ?>, <?= $WT ?>, <?= $PA ?>],
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