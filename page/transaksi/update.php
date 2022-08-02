<?php

//include koneksi database
include('database/koneksi.php');

//get data dari form
$id_transaksi   = $_POST['id_transaksi'];
$id_kasir   = $_POST['id_kasir'];
$id_member           = $_POST['id_member'];
$id_pembayaran            = $_POST['id_pembayaran'];
$kode_inv                = $_POST['kode_inv'];
$waktu_transaksi             = $_POST['waktu_transaksi'];
$nama_pembeli             = $_POST['nama_pembeli'];
$total_pembayaran             = $_POST['total_pembayaran'];
$ppn             = $_POST['ppn'];
$diskon             = $_POST['diskon'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE tb_transaksi SET  id_kasir = '$id_kasir', id_member = '$id_member', id_pembayaran = '$id_pembayaran', kode_inv = '$kode_inv', waktu_transaksi = '$waktu_transaksi',
 nama_pembeli ='$nama_pembeli', total_pembayaran ='$total_pembayaran', ppn ='$ppn', diskon = '$diskon' WHERE id_transaksi = '$id_transaksi'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php?page=transaksi");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>