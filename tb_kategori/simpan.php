<?php

//include koneksi database
include('../konek.php');

//get data dari form
$nama_kategori           = $_POST['nama_kategori'];


//query insert data ke dalam database
$query = "INSERT INTO tbl_kategori (nama_kategori) VALUES ('$nama_kategori')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if ($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");
} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";
}
