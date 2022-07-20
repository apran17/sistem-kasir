<?php

//include koneksi database
include('../konek.php');

//get data dari form
$id_supplier     = $_POST['id_supplier'];
$nama_supplier = $_POST['nama_supplier'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];
$no_rekening = $_POST['no_rekening'];
//query update data ke dalam database berdasarkan ID
$query = "UPDATE tbl_supplier SET nama_supplier = '$nama_supplier',  no_telp = '$no_telp', alamat ='$alamat', no_rekening = '$no_rekening' WHERE id_supplier = '$id_supplier'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if ($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}
