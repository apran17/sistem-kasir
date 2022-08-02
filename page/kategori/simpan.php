<?php


//include koneksi database
include('database/koneksi.php');


$nama_kt           = $_POST['nama_kt'];

      



//query insert data ke dalam database
$query = "INSERT INTO tb_kategori (nama_kt)
VALUES ('$nama_kt')";
//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php?page=kategori");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}
