<?php

//include koneksi database
include('../konek.php');

//get data dari form
$id_cabang     = $_POST['id_cabang'];
$id_perusahaan     = $_POST['id_perusahaan'];
$nama_cabang = $_POST['nama_cabang'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$email = $_POST['email'];
//query update data ke dalam database berdasarkan ID
$query = "UPDATE tbl_cabang SET id_perusahaan = '$id_perusahaan', nama_cabang = '$nama_cabang', alamat ='$alamat',  no_telp = '$no_telp', email = '$email' WHERE id_cabang = '$id_cabang'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if ($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}
