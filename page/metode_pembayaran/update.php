<?php

//include koneksi database
include('database/koneksi.php');

//get data dari form

$id_pembayaran = $_POST['id_pembayaran'];
$nama_mp           = $_POST['nama_mp'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE tb_metode_pembayaran SET nama_mp = '$nama_mp' 
WHERE id_pembayaran = '$id_pembayaran'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php?page=metode_pembayaran");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>