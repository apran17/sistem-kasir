<?php
include('database/koneksi.php');
//get data dari form
$id_transaksi_dtl                     = $_POST['id_transaksi_dtl'];
$jumlah                     = $_POST['jumlah'];
$harga_total                = $_POST['harga_total'];
$id_barang                  =$_POST['id_barang'];
$id_transaksi               =$_POST['id_transaksi'];
$persen                    = 100;

$sql2=mysqli_query($connection, "SELECT harga_jual from tb_barang where id_barang='$id_barang'");
$sql1=mysqli_query($connection, "SELECT *  from tb_transaksi where id_transaksi='$id_transaksi'");


$harga=mysqli_fetch_array($sql2);
$tb_transaksi=mysqli_fetch_array($sql1);


$harga_jual=$harga['harga_jual'];
$ppn_awal=$tb_transaksi['ppn'];
$diskon_awal=$tb_transaksi['diskon'];

$ppn_akhir=$ppn_awal / $persen;
$diskon_akhir=$diskon_awal / $persen;
$harga_awal=$harga_jual * $jumlah;
$hitung_ppn=$harga_awal * $ppn_akhir;
$harga_ppn=$harga_awal - $hitung_ppn;
$hitung_diskon=$harga_ppn * $diskon_akhir;
$harga_total=$harga_ppn - $hitung_diskon;



//query update data ke dalam database berdasarkan ID
$query = "UPDATE tb_transaksi_detail SET jumlah = '$jumlah', harga_total = '$harga_total', id_barang = '$id_barang', id_transaksi = '$id_transaksi' WHERE id_transaksi_dtl = '$id_transaksi_dtl'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php?page=detail&id=$id_transaksi");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}
 
?>
?>