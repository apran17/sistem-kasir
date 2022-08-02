<?php

include('database/koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM tb_barang WHERE id_barang = '$id'";

if ($connection->query($query)) {
    header("location: index.php?page=barang");
} else {
    echo "DATA GAGAL DIHAPUS!";
}