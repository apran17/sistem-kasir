
  <div class="container" style="margin-top: 80px">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header text-center">
            Data Transaksi
          </div>
          <div class="card-body table-responsive">
            <a href="index.php?page=detail&act=tambah&id=<?php echo $_GET['id']?>" class="btn btn-md btn-success te" style="margin-bottom: 10px">TAMBAH DATA</a>
            <table class="table table-bordered" id="myTable">
            <thead>
                  <tr>
                  <th scope="col">id</th>
                    <th scope="col">Kode Invoice</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Harga Satuan</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Harga Total</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      $id_transaksi = $_GET['id'];
                      $no = 1; 
                      $query = mysqli_query($connection,"SELECT * FROM tb_transaksi_detail
                         inner join tb_barang on tb_barang.id_barang=tb_transaksi_detail.id_barang
                         inner join tb_transaksi on tb_transaksi.id_transaksi = tb_transaksi_detail.id_transaksi
                         where tb_transaksi_detail.id_transaksi=$id_transaksi");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <?php
                   $harga_jual=$row['harga_jual'];
                   $result1 = number_format($harga_jual,2,',','.');
                   $harga_total=$row['harga_total'];
                   $result2 = number_format($harga_total,2,',','.');
                   ?>
 
                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['kode_inv'] ?></td>
                      <td><?php echo $row['nama_br'] ?></td>
                      <td>Rp.<?php echo $result1?></td>
                      <td><?php echo $row['jumlah'] ?></td>
                      <td>Rp.<?php echo $result2?></td>

                    <td class="text-center">
                    <a href="index.php?page=detail&act=edit&id=<?php echo $row['id_transaksi_dtl'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                    <a href="index.php?page=detail&act=hapus&id=<?php echo $row['id_transaksi_dtl'] ?>&id_transaksi=<?php echo $_GET['id'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                    </td>
                  </tr>

                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>