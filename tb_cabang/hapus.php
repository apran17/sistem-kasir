<?php

include('../konek.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM tbl_cabang WHERE id_cabang = '$id'";

if ($connection->query($query)) {
    header("location: index.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}
