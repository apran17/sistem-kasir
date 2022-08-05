<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Struk</title>
  <?php
  $id_transaksi = $_GET['id'];
  $query = mysqli_query($connection, "SELECT * FROM tb_transaksi
                        INNER JOIN tb_transaksi_detail ON tb_transaksi_detail.id_transaksi = tb_transaksi.id_transaksi
                        INNER JOIN tb_member on tb_member.id_member = tb_transaksi.id_member
                        INNER JOIN tb_metode_pembayaran on tb_metode_pembayaran.id_pembayaran = tb_transaksi.id_pembayaran
                        INNER JOIN tb_kasir on tb_kasir.id_kasir = tb_transaksi.id_kasir
                        INNER JOIN tb_cabang on tb_cabang.id_cabang = tb_kasir.id_cabang
                        INNER JOIN tb_perusahaan on tb_perusahaan.id_perusahaan = tb_cabang.id_perusahaan 
                        WHERE tb_transaksi.id_transaksi = $id_transaksi");
  $query2 = mysqli_query($connection, "SELECT * FROM tb_transaksi_detail inner join tb_transaksi on tb_transaksi.id_transaksi=tb_transaksi_detail.id_transaksi inner join tb_barang on tb_barang.id_barang=tb_transaksi_detail.id_barang where tb_transaksi_detail.id_transaksi=$id_transaksi");
  $row = mysqli_fetch_array($query);
  $total_pembayaran = $row['total_pembayaran'];
  $total = number_format($total_pembayaran, 2, ',', '.');
  ?>
</head>

<body>
  <div class="card" style="width:30%;margin:auto;margin-top:30px;">
    <div class="card-body" style="margin:auto;">
      <h5 class="card-title"> <img src="assets/image/indomaret.png" width="100px" height="60px"> &nbsp;&nbsp; <?php echo $row['nama_pn'] ?> </h5>
      <p class="card-text"><?php echo $row['nama_cb'] ?><br>
        <?php echo $row['alamat_cb'] ?>
        No. Telp : <?php echo $row['hp_cb'] ?>
        <hr>
        <?php echo $row['kode_inv'] ?>&nbsp; | &nbsp;
        <?php echo $row['nama'] ?>&nbsp; | &nbsp;
        <?php echo $row['nama_mp'] ?><br>
        Kasir : <?php echo $row['nama_ks'] ?>
        <hr>
      <table cellpadding="5">
        <tr>
          <th>Nama</th>
          <th>Qty</th>
          <th>Harga(pcs) </th>
          <th>Harga Total*</th>
        </tr>
        <?php while ($row2 = mysqli_fetch_array($query2)) { ?>
          <tr>
            <td><?php echo $row2['nama_br'] ?>&nbsp;&nbsp;</td>
            <td><?php echo $row2['jumlah'] ?>&nbsp;&nbsp;</td>
            <td><?php echo $row2['harga_jual'] ?>&nbsp;&nbsp;</td>
            <td><?php echo $row2['harga_total'] ?>&nbsp;</td><?php } ?></p>
          </tr>
          <tr>
            <td colspan="3">Total : </td>
            <td>Rp.<?php echo $total ?></td>
          </tr>
      </table>
      <hr>
      *sudah termasuk kalkulasi ppn dan diskon
      <br>
      PPN : <?php echo $row['ppn'] ?>%
      <br>
      Diskon : <?php echo $row['diskon'] ?>%
      <hr>
      Call Center : <?php echo $row['hp'] ?> |
      Email : <?php echo $row['email'] ?>
    </div>
  </div>
  <script>
    window.print();
  </script>
</body>

</html>