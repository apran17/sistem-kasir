<?php

include('../konek.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM tbl_member WHERE id_member = '$id'";

if ($connection->query($query)) {
    header("location: index.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}
