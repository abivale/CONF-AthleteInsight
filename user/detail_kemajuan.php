<?php
$title = 'detailkemajuan';
require 'functions.php';
require 'layout_header.php';
$id = $_GET['id'];

// $sql = "SELECT * FROM nilai_kemampuan WHERE id_atlit = $id LIMIT 1";
$sql = "SELECT atlit.card, update_performance.* FROM atlit
        INNER JOIN update_performance ON atlit.id_atlit = update_performance.id_atlit
        WHERE update_performance.id_atlit = $id LIMIT 1";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mengambil baris data sebagai array asosiatif
    $row = $result->fetch_assoc();

    // Mengakses nilai dari kolom-kolom yang diambil
    $power = $row['power'];
    $stamina = $row['stamina'];
    $speed = $row['speed'];
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
            <h4 class="page-title">Detail Kemajuan Performance Atlit</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">detail kemajuan performance </a></li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <!-- ============================================================== -->
    <!-- Different data widgets -->



    <div class="flex-container">
        <div class="flex-right">
            <canvas id="myChart"></canvas>
        </div>
    </div>

    <!-- <script src="../assets/chart/radarChart.js"></script> -->
    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Power', 'Stamina', 'Speed'],
                datasets: [{
                    label: '2022',
                    data: [<?= $power ?>, <?= $stamina ?>, <?= $speed ?>],
                    borderWidth: 1
                }, {
                    label: '2023',
                    data: [<?= $power ?>, <?= $stamina ?>, <?= $speed ?>],
                    borderWidth: 1
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
                    y: {
                        beginAtZero: true
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