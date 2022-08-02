<?php

//include koneksi database
include('database/koneksi.php');

//get data dari form
$id_kasir           = $_POST['id_kasir'];
$id_cabang           = $_POST['id_cabang'];
$nama_ks           = $_POST['nama_ks'];
$alamat_ks      = $_POST['alamat_ks'];
$hp_ks           = $_POST['hp_ks'];
$jenis_kelamin_ks     = $_POST['jenis_kelamin_ks'];



//query update data ke dalam database berdasarkan ID
$query = "UPDATE tb_kasir SET id_cabang = '$id_cabang', nama_ks = '$nama_ks', alamat_ks = '$alamat_ks', hp_ks = '$hp_ks', jenis_kelamin_ks = '$jenis_kelamin_ks'
WHERE id_kasir = '$id_kasir'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php?page=kasir");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>