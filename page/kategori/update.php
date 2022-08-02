<?php

//include koneksi database
include('database/koneksi.php');

//get data dari form

$id_kategori = $_POST['id_kategori'];
$nama_kt           = $_POST['nama_kt'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE tb_kategori SET nama_kt = '$nama_kt'WHERE id_kategori = '$id_kategori'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php?page=kategori");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>