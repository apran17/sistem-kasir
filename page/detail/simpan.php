<?php


//include koneksi database
include('database/koneksi.php');

//get data dari form
$jumlah                     = $_POST['jumlah'];
$harga_total                = $_POST['harga_total'];
$id_barang                  =$_POST['id_barang'];
$id_transaksi               =$_POST['id_transaksi'];
$persen                    = 100;

$sql2=mysqli_query($connection, "SELECT harga_jual from tb_barang where id_barang='$id_barang'");



$harga=mysqli_fetch_array($sql2);



$harga_jual=$harga['harga_jual'];
$harga_total = $harga_jual * $jumlah;



//query insert data ke dalam database
$query = "INSERT INTO tb_transaksi_detail (jumlah, harga_total, id_barang, id_transaksi) VALUES ('$jumlah', '$harga_total', '$id_barang', '$id_transaksi')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php?page=detail&id=$id_transaksi");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}
?>