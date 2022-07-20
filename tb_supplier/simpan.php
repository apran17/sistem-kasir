<?php

//include koneksi database
include('../konek.php');

//get data dari form
$nama_supplier           = $_POST['nama_supplier'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];
$no_rekening = $_POST['no_rekening'];


//query insert data ke dalam database
$query = "INSERT INTO tbl_supplier (nama_supplier, no_telp, alamat, no_rekening)
VALUES ('$nama_supplier', '$no_telp', '$alamat', '$no_rekening')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if ($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");
} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";
}
