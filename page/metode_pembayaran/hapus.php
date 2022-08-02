<?php

include('database/koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM tb_metode_pembayaran WHERE id_pembayaran = '$id'";

if ($connection->query($query)) {
    header("location: index.php?page=metode_pembayaran");
} else {
    echo "DATA GAGAL DIHAPUS!";
}