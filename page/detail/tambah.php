<?php
$id_transaksi = $_GET['id'];
require 'simpan.php';

if (isset($_POST["simpan"])) {

  if (save($_POST) > 0) {

    echo "<script>
        alert('user baru berhasil ditambahkan!')
        </script>";
    header("location: index.php?page=detail&act=home&id=$id_transaksi");
    exit;
  } else {
    echo mysqli_error($connection);
  }
}


?>

<div class="container" style="margin-top: 80px">
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="card">
        <div class="card-header text-center">
          TAMBAHKAN DETAIL TRANSAKSI
        </div>
        <div class="card-body">
          <form action="" method="POST">

            <div class="form-group">
              <label>Barang</label>
              <?php
              $query = mysqli_query($connection, "SELECT * FROM tb_barang");
              $a = " ( ";
              $b = " ) ";
              ?>
              <select required name="id_barang" class="form-control">
                <?php while ($row11 = mysqli_fetch_array($query)) { ?>
                  <option value="<?php echo $row11['id_barang'] ?>"><?php echo $row11['nama_br'] . $a . $row11['harga_jual'] . $b; ?></option>
                <?php }   ?>
              </select>
            </div>

            <div class="form-group">
              <label> Kode Invoice</label>
              <?php
              $id_transaksi = $_GET['id'];
              $query = mysqli_query($connection, "SELECT * FROM tb_transaksi where id_transaksi='$id_transaksi'");
              ?>
              <?php while ($row1 = mysqli_fetch_array($query)) { ?>
                <input type="hidden" name="id_transaksi" value="<?php echo $row1['id_transaksi'] ?>" class="form-control">
                <input type="text" readonly name="kode_inv" value="<?php echo $row1['kode_inv'] ?>" class="form-control">
              <?php }   ?>
            </div>


            <div class="form-group">
              <label>Jumlah Barang</label>
              <input required type="int" id="jumlah" name="jumlah" class="form-control">
              <input type="hidden" name="harga_total" class="form-control">
            </div>

            <button type="submit" name="simpan" class="btn btn-success">SIMPAN</button>
            <button type="reset" class="btn btn-warning">RESET</button>
            <a href="index.php?page=detail&act=home&id=<?= $_GET['id'] ?>" class="btn btn-primary">Back</a>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>