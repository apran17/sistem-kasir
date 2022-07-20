<?php

//include koneksi database
include('../konek.php');

//get data dari form
$id_metode_pembayaran      = $_POST['id_metode_pembayaran'];
$nama               = $_POST['nama'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE tbl_metode_pembayaran SET nama = '$nama' WHERE id_metode_pembayaran = '$id_metode_pembayaran'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if ($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}
