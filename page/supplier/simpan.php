<?php


//include koneksi database
include('database/koneksi.php');

$nama_sp           = $_POST['nama_sp'];
$hp            = $_POST['hp'];
$alamat       = $_POST['alamat'];
$no_rekening      = $_POST['no_rekening'];



//query insert data ke dalam database
$query = "INSERT INTO tb_supplier (nama_sp, hp, alamat, no_rekening)
VALUES ('$nama_sp', '$hp', '$alamat', '$no_rekening')";
//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php?page=supplier");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}
