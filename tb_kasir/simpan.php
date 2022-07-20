<?php

//include koneksi database
include('../konek.php');

//get data dari form
$id_cabang          = $_POST['id_cabang'];
$nama_kasir           = $_POST['nama_kasir'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];

//query insert data ke dalam database
$query = "INSERT INTO tbl_kasir( id_cabang, nama_kasir, no_telp, alamat, jenis_kelamin)
VALUES ('$id_cabang', '$nama_kasir', '$no_telp', '$alamat', '$jenis_kelamin')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if ($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");
} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";
}
