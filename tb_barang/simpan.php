<?php

//include koneksi database
include('../konek.php');

//get data dari form
$id_supplier = $_POST['id_supplier'];
$id_kategori = $_POST['id_kategori'];
$nama_barang = $_POST['nama_barang'];
$stock = $_POST['stock'];
$harga_modal = $_POST['harga_modal'];
$harga_jual = $_POST['harga_jual'];
$tanggal_masuk = $_POST['tanggal_masuk'];

//query insert data ke dalam database
$query = "INSERT INTO tbl_barang (id_supplier, id_kategori, nama_barang, stock, harga_modal, harga_jual, tanggal_masuk )
VALUES ('$id_supplier', '$id_kategori', '$nama_barang', '$stock', '$harga_modal', '$harga_jual', '$tanggal_masuk')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if ($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");
} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";
}
