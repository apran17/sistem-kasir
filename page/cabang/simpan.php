<?php


//include koneksi database
include('database/koneksi.php');

$id_perusahaan   = $_POST['id_perusahaan'];
$nama_cb   = $_POST['nama_cb'];
$alamat_cb           = $_POST['alamat_cb'];
$hp_cb            = $_POST['hp_cb'];
$email_cb       = $_POST['email_cb'];



//query insert data ke dalam database
$query = "INSERT INTO tb_cabang ( id_perusahaan, nama_cb, alamat_cb, hp_cb, email_cb)
VALUES ( '$id_perusahaan', '$nama_cb', '$alamat_cb', '$hp_cb', '$email_cb')";
//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php?page=cabang");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}
