<div class="container" style="margin-top: 80px">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header text-center">
          DATA TRANSAKSI
        </div>
        <div class="card-body table-responsive">
          <a href="index.php?page=detail&act=tambah&id=<?php echo $_GET['id'] ?>" class="btn btn-md btn-success te" style="margin-bottom: 10px">TAMBAH DATA</a>
          <table class="table table-bordered" id="myTable">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">KODE INVOICE</th>
                <th scope="col">NAMA BARANG</th>
                <th scope="col">HARGA SATUAN</th>
                <th scope="col">JUMLAH</th>
                <th scope="col">HARGA TOTAL</th>
                <th scope="col">AKSI</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $id_transaksi = $_GET['id'];
              $no = 1;
              $query = mysqli_query($connection, "SELECT * FROM tb_transaksi_detail
                         inner join tb_barang on tb_barang.id_barang=tb_transaksi_detail.id_barang
                         inner join tb_transaksi on tb_transaksi.id_transaksi = tb_transaksi_detail.id_transaksi
                         where tb_transaksi_detail.id_transaksi=$id_transaksi");
              while ($row = mysqli_fetch_array($query)) {
              ?>

                <?php
                $harga_jual = $row['harga_jual'];
                $result1 = number_format($harga_jual, 2, ',', '.');
                $harga_total = $row['harga_total'];
                $result2 = number_format($harga_total, 2, ',', '.');
                ?>

                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $row['kode_inv'] ?></td>
                  <td><?php echo $row['nama_br'] ?></td>
                  <td>Rp.<?php echo $result1 ?></td>
                  <td><?php echo $row['jumlah'] ?></td>
                  <td>Rp.<?php echo $result2 ?></td>

                  <td class="text-center">
                    <a href="index.php?page=detail&act=edit&id=<?php echo $row['id_transaksi_dtl'] ?>&id_transaksi=<?php echo $_GET['id'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                    <a href="index.php?page=detail&act=hapus&id=<?php echo $row['id_transaksi_dtl'] ?>&id_transaksi=<?php echo $_GET['id'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                  </td>
                </tr>

              <?php } ?>
            </tbody>
          </table>
          <a href="index.php?page=transaksi" class="btn btn-md btn-primary te" style="margin-bottom: 10px">BACK</a>
        </div>
      </div>
    </div>
  </div>
</div>