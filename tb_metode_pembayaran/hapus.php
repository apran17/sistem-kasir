<?php

include('../konek.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM tbl_metode_pembayaran WHERE id_metode_pembayaran = '$id'";

if ($connection->query($query)) {
    header("location: index.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}
