<?php

//include koneksi database
include('../konek.php');

//get data dari form
$id_kategori     = $_POST['id_kategori'];
$nama_kategori = $_POST['nama_kategori'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE tbl_kategori SET nama_kategori = '$nama_kategori' WHERE id_kategori = '$id_kategori'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if ($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}
