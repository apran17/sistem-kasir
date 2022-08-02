<?php



//get id
$id = $_GET['id'];
$id_transaksi = $_GET['id_transaksi'];

$query = "DELETE FROM tb_transaksi_detail WHERE id_transaksi_dtl = '$id'";

if ($connection->query($query)) {
    header("location: index.php?page=detail&id=$id_transaksi");
} else {
    echo "DATA GAGAL DIHAPUS!";
}