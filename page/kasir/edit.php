<?php

include('database/koneksi.php');

$id = $_GET['id'];

$query = "SELECT * FROM tb_kasir WHERE id_kasir = $id LIMIT 1";

$result = mysqli_query($connection, $query);

$row = mysqli_fetch_array($result);

?>

<div class="container" style="margin-top: 80px">
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="card">
        <div class="card-header text-center">
          EDIT DATA KASIR
        </div>
        <div class="card-body">
          <form action="index.php?page=kasir&act=update" method="POST">

            <div class="form-group">
              <label>Nama Cabang</label>
              <?php
              $query = mysqli_query($connection, "SELECT * FROM tb_cabang");
              $a = " ( ";
              $b = " ) ";
              ?>
              <select name="id_cabang" class="form-control">
                <?php while ($row1 = mysqli_fetch_array($query)) { ?>
                  <option value="<?php echo $row1['id_cabang'] ?>"><?php echo $row1['nama_cb'] . $a . $row1['alamat_cb'] . $b; ?></option>
                <?php } ?>
              </select>
            </div>

            <div class="form-group">
              <label>Nama Petugas Kasir</label>
              <input type="text" name="nama_ks" value="<?php echo $row['nama_ks'] ?>" class="form-control">
              <input type="hidden" name="id_kasir" value="<?php echo $row['id_kasir'] ?>">
            </div>

            <div class="form-group">
              <label>Alamat</label>
              <input type="varchar" name="alamat_ks" value="<?php echo $row['alamat_ks'] ?>" class="form-control">
            </div>

            <div class="form-group">
              <label>No Hp</label>
              <input type="int" name="hp_ks" value="<?php echo $row['hp_ks'] ?>" class="form-control">
            </div>

            <div class="form-group">
              <label>Jenis_kelamin</label><br>
              <input type="radio" name="jenis_kelamin_ks" value="LAKI-LAKI" value="<?php echo $row['jenis_kelamin_ks'] ?>">
              <label for="laki-laki">LAKI-LAKI</label>
              <input type="radio" name="jenis_kelamin_ks" value="PEREMPUAN" value="<?php echo $row['jenis_kelamin_ks'] ?>">
              <label for="perempuan">PEREMPUAN</label>
            </div>

            <button type="submit" class="btn btn-success">UPDATE</button>
            <button type="reset" class="btn btn-warning">RESET</button>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="../js/bootstrap.js"></script>
<script src="../js/jquery.min.js"></script>
</body>

</html>