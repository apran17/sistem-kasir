<?php

//include koneksi database
include('database/koneksi.php');

//get data dari form
$id_supplier           = $_POST['id_supplier'];
$nama_sp           = $_POST['nama_sp'];
$hp           = $_POST['hp'];
$alamat      = $_POST['alamat'];
$no_rekening     = $_POST['no_rekening'];



//query update data ke dalam database berdasarkan ID
$query = "UPDATE tb_supplier SET nama_sp = '$nama_sp', hp = '$hp', alamat = '$alamat', no_rekening = '$no_rekening'
WHERE id_supplier = '$id_supplier'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php?page=supplier");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>