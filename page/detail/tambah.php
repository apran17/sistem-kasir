<div class="container" style="margin-top: 80px">
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="card">
        <div class="card-header text-center">
          TAMBAHKAN DETAIL TRANSAKSI
        </div>
        <div class="card-body">
          <form action="index.php?page=detail&act=simpan" method="POST">

            <div class="form-group">
              <label>Barang</label>
              <?php
              $query = mysqli_query($connection, "SELECT * FROM tb_barang");
              $a = " ( ";
              $b = " ) ";
              ?>
              <select required name="id_barang" class="form-control">
                <?php while ($row1 = mysqli_fetch_array($query)) { ?>
                  <option value="<?php echo $row1['id_barang'] ?>"><?php echo $row1['nama_br'] . $a . $row1['harga_jual'] . $b; ?></option>
                <?php }   ?>
              </select>
            </div>
            <div>
              <div class="form-group">
                <label> ID Transaksi</label>
                <?php
                $id_transaksi = $_GET['id'];
                $query = mysqli_query($connection, "SELECT * FROM tb_transaksi where id_transaksi='$id_transaksi'");
                ?>
                <select required name="id_transaksi" class="form-control">
                  <?php while ($row1 = mysqli_fetch_array($query)) { ?>
                    <option value="<?php echo $row1['id_transaksi'] ?>"><?php echo $row1['kode_inv']; ?></option>
                  <?php }   ?>
                </select>
              </div>


              <div class="form-group">
                <label>Jumlah Barang</label>
                <input required type="int" id="jumlah" name="jumlah" class="form-control">
              </div>

              <button type="submit" class="btn btn-success">SIMPAN</button>
              <button type="reset" class="btn btn-warning">RESET</button>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>