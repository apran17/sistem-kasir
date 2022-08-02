<?php


//include koneksi database
include('database/koneksi.php');

$nama           = $_POST['nama'];
$hp            = $_POST['hp'];
$alamat       = $_POST['alamat'];
$jenis_kelamin      = $_POST['jenis_kelamin'];



//query insert data ke dalam database
$query = "INSERT INTO tb_member (nama, hp, alamat, jenis_kelamin)
VALUES ('$nama', '$hp', '$alamat', '$jenis_kelamin')";
//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php?page=member");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}
