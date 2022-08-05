<div class="container" style="margin-top: 80px">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header text-center">
          DATA TRANSAKSI
        </div>
        <div class="card-body table-responsive">
          <a href="index.php?page=transaksi&act=tambah" class="btn btn-md btn-success te" style="margin-bottom: 10px">TAMBAH DATA</a>
          <table class="table table-bordered" id="myTable">
            <thead>
              <tr>
                <th scope="col">NO</th>
                <th scope="col">NAMA KASIR</th>
                <th scope="col">NAMA MEMBER</th>
                <th scope="col">KODE INVOICE</th>
                <th scope="col">WAKTU TRANSAKSI</th>
                <th scope="col">NAMA PEMBELI</th>
                <th scope="col">PPN</th>
                <th scope="col">DISKON</th>
                <th scope="col">METODE PEMBAYARAN</th>
                <th scope="col">TOTAL PEMBAYARAN</th>
                <th scope="col">STATUS</th>
                <th scope="col">AKSI</th>
              </tr>
            </thead>
            <tbody>
              <?php

              $no = 1;
              $query = mysqli_query($connection, " SELECT *, DATE_FORMAT(waktu_transaksi, '%W, %d/%m/%Y %H:%i') AS waktu_transaksi FROM tb_transaksi
                      inner join tb_kasir on tb_kasir.id_kasir=tb_transaksi.id_kasir
                      inner join tb_member on tb_member.id_member=tb_transaksi.id_member 
                      inner join tb_metode_pembayaran on tb_metode_pembayaran.id_pembayaran=tb_transaksi.id_pembayaran");
              while ($row = mysqli_fetch_array($query)) {
                $id_transaksi = $row['id_transaksi'];
                $query2 = mysqli_query($connection, "SELECT SUM(harga_total) AS harga_total FROM tb_transaksi_detail where id_transaksi='$id_transaksi'");
                while ($row2 = mysqli_fetch_array($query2)) {
                  $harga = $row2['harga_total'];
                  $ppn = $row['ppn'];
                  $diskon = $row['diskon'];
                  $persen                    = 100;
                  $ppn_awal = $ppn / $persen;
                  $ppn_akhir = $ppn_awal * $harga;
                  $diskon_awal = $diskon / $persen;
                  $diskon_akhir = $diskon_awal * $harga;
                  $total_pembayaran_awal = $harga + $ppn_akhir;
                  $total_pembayaran = $total_pembayaran_awal - $diskon_akhir;


                  $query3 = mysqli_query($connection, "UPDATE tb_transaksi SET total_pembayaran = '$total_pembayaran' where id_transaksi = '$id_transaksi'");
              ?>
                  <?php
                  $harga_modal = $row['total_pembayaran'];
                  $result1 = number_format($harga_modal, 2, ',', '.');
                  ?>

                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row['nama_ks'] ?></td>
                    <td><?php echo $row['nama'] ?></td>
                    <td><?php echo $row['kode_inv'] ?></td>
                    <td><?php echo $row['waktu_transaksi'] ?></td>
                    <td><?php echo $row['nama_pembeli'] ?></td>
                    <td><?php echo $row['ppn'] ?>%</td>
                    <td><?php echo $row['diskon'] ?>%</td>
                    <td><?php echo $row['nama_mp'] ?></td>
                    <td>Rp.<?php echo $result1 ?></td>
                    <td><?php echo $row['status'] ?></td>

                    <td class="text-center">
                      <?php if ($row['status'] === "proses") {
                        echo '<a href="index.php?page=transaksi&act=edit&id=' . $id_transaksi . '" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="index.php?page=transaksi&act=hapus&id=' . $id_transaksi . '" class="btn btn-sm btn-danger">HAPUS</a>
                        <a href="index.php?page=detail&id=' . $id_transaksi . '" class="btn btn-sm btn-warning">DETAIL</a>';
                      } else if ($row['status'] === "selesai") {
                        echo '<a href="index.php?page=cetak&id=' . $id_transaksi . '" class="btn btn-sm btn-info">STRUK</a>';
                      } ?>
                    </td>
                  </tr>

              <?php }
              } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>