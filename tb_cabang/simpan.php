<?php

//include koneksi database
include('../konek.php');

//get data dari form
$id_perusahaan          = $_POST['id_perusahaan'];
$nama_cabang                   = $_POST['nama_cabang'];
$alamat                 = $_POST['alamat'];
$no_telp                = $_POST['no_telp'];
$email                  = $_POST['email'];


//query insert data ke dalam database
$query = "INSERT INTO tbl_cabang (id_perusahaan, nama_cabang,  alamat, no_telp, email)
VALUES ('$id_perusahaan', '$nama_cabang', '$alamat', '$no_telp', '$email')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if ($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";
}
