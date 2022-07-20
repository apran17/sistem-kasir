<?php

//include koneksi database
include('../konek.php');

//get data dari form
$nama           = $_POST['nama'];


//query insert data ke dalam database
$query = "INSERT INTO tbl_metode_pembayaran (nama) VALUES ('$nama')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if ($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");
} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";
}
