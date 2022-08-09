<?php
include('database/koneksi.php');
//get data dari form
$id_transaksi_dtl                     = $_POST['id_transaksi_dtl'];
$jumlah                     = $_POST['jumlah'];
$harga_total                = $_POST['harga_total'];
$id_barang                  = $_POST['id_barang'];
$id_transaksi               = $_POST['id_transaksi'];
$persen                    = 100;

$sql2 = mysqli_query($connection, "SELECT harga_jual from tb_barang where id_barang='$id_barang'");



$harga = mysqli_fetch_array($sql2);



$harga_jual = $harga['harga_jual'];
$harga_total = $harga_jual * $jumlah;

//query update data ke dalam database berdasarkan ID
$query = "UPDATE tb_transaksi_detail SET jumlah = '$jumlah', harga_total = '$harga_total', id_barang = '$id_barang', id_transaksi = '$id_transaksi' WHERE id_transaksi_dtl = '$id_transaksi_dtl'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if ($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php?page=detail&id=$id_transaksi");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>
?>