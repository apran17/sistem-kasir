<?php

//include koneksi database
include('database/koneksi.php');

//get data dari form
$id_cabang           = $_POST['id_cabang'];
$id_perusahaan          = $_POST['id_perusahaan'];
$nama_cb           = $_POST['nama_cb'];
$alamat_cb           = $_POST['alamat_cb'];
$hp_cb           = $_POST['hp_cb'];
$email_cb      = $_POST['email_cb'];


//query update data ke dalam database berdasarkan ID
$query = "UPDATE tb_cabang SET id_perusahaan = '$id_perusahaan', nama_cb = '$nama_cb', alamat_cb = '$alamat_cb', hp_cb = '$hp_cb', email_cb = '$email_cb' WHERE id_cabang = '$id_cabang'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php?page=cabang");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>