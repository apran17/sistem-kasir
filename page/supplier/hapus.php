<?php

include('database/koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM tb_supplier WHERE id_supplier = '$id'";

if ($connection->query($query)) {
    header("location: index.php?page=supplier");
} else {
    echo "DATA GAGAL DIHAPUS!";
}