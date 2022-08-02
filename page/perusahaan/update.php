<?php

//include koneksi database
include('database/koneksi.php');

//get data dari form
$id_perusahaan           = $_POST['id_perusahaan'];
$nama_pn           = $_POST['nama_pn'];
$alamat            = $_POST['alamat'];
$hp       = $_POST['hp'];
$email      = $_POST['email'];
$tanggal_berdiri       = $_POST['tanggal_berdiri'];
$npwp       = $_POST['npwp'];



//query update data ke dalam database berdasarkan ID
$query = "UPDATE tb_perusahaan SET nama_pn = '$nama_pn', alamat = '$alamat', hp = '$hp', tanggal_berdiri = '$tanggal_berdiri', npwp = '$npwp'
WHERE id_perusahaan = '$id_perusahaan'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php?page=perusahaan");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>