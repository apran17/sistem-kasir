<?php

include('database/koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM tb_kategori WHERE id_kategori = '$id'";

if ($connection->query($query)) {
    header("location: index.php?page=kategori");
} else {
    echo "DATA GAGAL DIHAPUS!";
}