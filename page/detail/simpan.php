<?php


//get data dari form
function save($data)
{
    global $connection;
    $jumlah                     = $_POST['jumlah'];
    $harga_total                = $_POST['harga_total'];
    $id_barang                  = $_POST['id_barang'];
    $id_transaksi               = $_POST['id_transaksi'];
    $persen                    = 100;

    $sql2 = mysqli_query($connection, "SELECT harga_jual from tb_barang where id_barang='$id_barang'");


    $harga = mysqli_fetch_array($sql2);


    $harga_jual = $harga['harga_jual'];

    $harga_total = $harga_jual * $jumlah;

    $result = mysqli_query($connection, "SELECT id_barang FROM tb_transaksi_detail WHERE
            id_barang ='$id_barang' and id_transaksi='$id_transaksi'");

    if (mysqli_fetch_column($result)) {
        echo "<script>
                alert('barang sudah ada di transaksi anda')</script>";

        return false;
    }

    mysqli_query($connection, "INSERT INTO tb_transaksi_detail  VALUES ('', '$jumlah', '$harga_total', '$id_barang', '$id_transaksi')");
    return mysqli_affected_rows($connection);
}
?>
<?php
