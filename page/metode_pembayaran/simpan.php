<?php


//include koneksi database
include('database/koneksi.php');


$nama_mp           = $_POST['nama_mp'];

      



//query insert data ke dalam database
$query = "INSERT INTO tb_metode_pembayaran (nama_mp)
VALUES ('$nama_mp')";
//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php?page=metode_pembayaran");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}
