<?php

//include koneksi database
include('../konek.php');

//get data dari form
$id_perusahaan     = $_POST['id_perusahaan'];
$nama_perusahaan = $_POST['nama_perusahaan'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$email = $_POST['email'];
$tanggal_berdiri = $_POST['tanggal_berdiri'];
$npwp = $_POST['npwp'];
//query update data ke dalam database berdasarkan ID
$query = "UPDATE tbl_perusahaan SET nama_perusahaan = '$nama_perusahaan',  alamat ='$alamat', no_telp = '$no_telp', email = '$email', tanggal_berdiri = '$tanggal_berdiri', npwp = '$npwp' WHERE id_perusahaan = '$id_perusahaan'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if ($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}
