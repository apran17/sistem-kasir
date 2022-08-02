<?php


//include koneksi database
include('database/koneksi.php');

$nama_pn           = $_POST['nama_pn'];
$alamat            = $_POST['alamat'];
$hp       = $_POST['hp'];
$email      = $_POST['email'];
$tanggal_berdiri       = $_POST['tanggal_berdiri'];
$npwp       = $_POST['npwp'];




//query insert data ke dalam database
$query = "INSERT INTO tb_perusahaan (nama_pn, alamat, hp, email, tanggal_berdiri, npwp)
VALUES ('$nama_pn', '$alamat', '$hp', '$email', '$tanggal_berdiri', '$npwp')";
//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php?page=perusahaan");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}
