<?php

//include koneksi database
include('database/koneksi.php');

//get data dari form
$id_barang           = $_POST['id_barang'];
$id_kategori          = $_POST['id_kategori'];
$id_supplier           = $_POST['id_supplier'];
$nama_br           = $_POST['nama_br'];
$stock           = $_POST['stock'];
$harga_modal      = $_POST['harga_modal'];
$harga_jual     = $_POST['harga_jual'];
$tanggal_masuk  =$_POST['tanggal_masuk'];

$harga_modal           = preg_replace("/[^0-9]/", "", $harga_modal);
$harga_int           = (int) $harga_modal;


$harga_jual           = preg_replace("/[^0-9]/", "", $harga_jual);
$harga_int           = (int) $harga_jual;


//query update data ke dalam database berdasarkan ID
$query = "UPDATE tb_barang SET id_kategori = '$id_kategori', id_supplier = '$id_supplier', nama_br = '$nama_br', stock = '$stock', harga_modal = '$harga_modal', harga_jual = '$harga_jual', tanggal_masuk = '$tanggal_masuk' WHERE id_barang = '$id_barang'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php?page=barang");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>