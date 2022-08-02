<?php


//include koneksi database
include('database/koneksi.php');
$id_cabang           = $_POST['id_cabang'];
$nama_ks           = $_POST['nama_ks'];
$alamat_ks       = $_POST['alamat_ks'];
$hp_ks            = $_POST['hp_ks'];
$jenis_kelamin_ks      = $_POST['jenis_kelamin_ks'];



//query insert data ke dalam database
$query = "INSERT INTO tb_kasir (id_cabang, nama_ks, alamat_ks, hp_ks, jenis_kelamin_ks)
VALUES ('$id_cabang ', '$nama_ks', '$alamat_ks', '$hp_ks', '$jenis_kelamin_ks')";
//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php?page=kasir");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}
