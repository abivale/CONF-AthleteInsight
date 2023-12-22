<?php
session_start();

if ($_SESSION) {
    if ($_SESSION['role'] == 'admin') {
    } else {
        header('location:../index.php');
    }
} else {
    header('location:../index.php');
}

$conn = mysqli_connect('localhost', 'root', '', 'athlete_insight');

function ambildata($conn, $query)
{
    $data = mysqli_query($conn, $query);
    if (mysqli_num_rows($data) > 0) {
        while ($row = mysqli_fetch_assoc($data)) {
            $hasil[] = $row;
        }

        return $hasil;
    }
}

function bisa($conn, $query)
{
    $db = mysqli_query($conn, $query);

    if ($db) {
        return 1;
    } else {
        return 0;
    }
}


// Fungsi untuk mencari data berdasarkan kata kunci
function cariData($data, $keyword)
{
    $hasil = [];
    foreach ($data as $row) {
        if (stripos($row['nama'], $keyword) !== false || stripos($row['nama_club'], $keyword) !== false) {
            $hasil[] = $row;
        }
    }
    return $hasil;
}


function ambilsatubaris($conn, $query)
{
    $db = mysqli_query($conn, $query);
    return mysqli_fetch_assoc($db);
}

function hapus($where, $table, $redirect)
{
    $query = 'DELETE FROM ' . $table . ' WHERE ' . $where;
    echo $query;
}
