<?php

include('database/koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM tb_perusahaan WHERE id_perusahaan = '$id'";

if ($connection->query($query)) {
    header("location: index.php?page=perusahaan");
} else {
    echo "DATA GAGAL DIHAPUS!";
}