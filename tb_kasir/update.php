<?php

//include koneksi database
include('../konek.php');

//get data dari form
$id_kasir              = $_POST['id_kasir'];
$id_cabang              = $_POST['id_cabang'];
$nama_kasir                   = $_POST['nama_kasir'];
$no_telp                = $_POST['no_telp'];
$alamat                 = $_POST['alamat'];
$jenis_kelamin          = $_POST['jenis_kelamin'];
//query update data ke dalam database berdasarkan ID
$query = "UPDATE tbl_kasir SET id_cabang = '$id_cabang', nama_kasir = '$nama_kasir',  no_telp = '$no_telp', alamat ='$alamat', jenis_kelamin = '$jenis_kelamin' WHERE id_kasir = '$id_kasir'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if ($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}
