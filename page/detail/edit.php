<?php

include('database/koneksi.php');

$id = $_GET['id'];

$query = "SELECT * FROM tb_transaksi_detail WHERE id_transaksi_dtl = $id LIMIT 1";

$result = mysqli_query($connection, $query);

$row = mysqli_fetch_array($result);

?>

<div class="container" style="margin-top: 80px">
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="card">
        <div class="card-header text-center">
          EDIT DETAIL TRANSAKSI
        </div>
        <div class="card-body">
          <form action="index.php?page=detail&act=update" method="POST">

            <div class="form-group">
              <label>Barang</label>
              <?php

              $query = mysqli_query($connection, "SELECT * FROM tb_barang");
              $a = " ( ";
              $b = " ) ";
              ?>
              <select required name="id_barang" class="form-control">
                <?php while ($row1 = mysqli_fetch_array($query)) { ?>
                  <option id="harga" value="<?php echo $row1['id_barang'] ?>"><?php echo $row1['nama_br'] . $a . $row1['harga_jual'] . $b; ?></option>
                <?php }   ?>
              </select>
            </div>

            <div>
              <div class="form-group">
                <?php
                $id_transaksi = $_GET['id'];
                $query = mysqli_query($connection, "SELECT * FROM tb_transaksi");
                ?>
                <?php while ($row1 = mysqli_fetch_array($query)) { ?>
                  <input type="hidden" name="id_transaksi" value="<?php echo $row1['kode_inv']; ?>" class="form-control">
                  <input type="hidden" name="id_transaksi" value="<?php echo $row1['id_transaksi'] ?>" class="form-control">
                <?php }   ?>
                </input>
              </div>

              <div class="form-group">
                <label>Jumlah Barang</label>
                <input required type="int" name="jumlah" class="form-control" value="<?php echo $row['jumlah'] ?>">
                <input type="hidden" name="id_transaksi_dtl" value="<?php echo $row['id_transaksi_dtl'] ?>">
              </div>

              <button type="submit" class="btn btn-success">UPDATE</button>
              <button type="reset" class="btn btn-warning">RESET</button>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>