<?php


//include koneksi database
include('database/koneksi.php');

//get data dari form
$id_kasir                     = $_POST['id_kasir'];
$id_member                    = $_POST['id_member'];
$id_pembayaran                = $_POST['id_pembayaran'];
$kode_inv                     = $_POST['kode_inv'];
$waktu_transaksi              = $_POST['waktu_transaksi'];
$nama_pembeli                 = $_POST['nama_pembeli'];
$total_pembayaran             = $_POST['total_pembayaran'];
$ppn                          = $_POST['ppn'];
$diskon                       = $_POST['diskon'];
$status                       = $_POST['status'];
$tanggal                      = date('d');
$tanggal_romawi               = tanggal($tanggal);
$bulan                        = date('n');
$bulan_romawi                 = bulan($bulan);
$tahun                        = date('y');
$tahun_romawi                 = tahun($tahun);

$query                = mysqli_query($connection, "SHOW TABLE STATUS LIKE 'tb_transaksi'");
$row                  = mysqli_fetch_array($query);
$getid                = $row["Auto_increment"];
$slash                = "/";
$kode_inv             = $getid . $slash . $id_kasir . $slash . $id_pembayaran . $slash . $id_member . $slash . $tanggal_romawi . $slash . $bulan_romawi . $slash . $tahun_romawi;

$total_pembayaran           = preg_replace("/[^0-9]/", "", $total_pembayaran);
var_dump($total_pembayaran);
$harga_int           = (int) $total_pembayaran;
var_dump($harga_int);

//query insert data ke dalam database
$query = "INSERT INTO tb_transaksi (id_kasir, id_member, kode_inv, id_pembayaran, waktu_transaksi, nama_pembeli, total_pembayaran, ppn, diskon, status)
VALUES ('$id_kasir', '$id_member', '$kode_inv', '$id_pembayaran', '$waktu_transaksi', '$nama_pembeli', '$total_pembayaran', '$ppn', '$diskon', '$status')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if ($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php?page=transaksi");
} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";
}
