<?php

include('database/koneksi.php');

$id = $_GET['id'];

$query = "SELECT * FROM tb_barang WHERE id_barang = $id LIMIT 1";

$result = mysqli_query($connection, $query);

$row = mysqli_fetch_array($result);

?>

<div class="container" style="margin-top: 80px">
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="card">
        <div class="card-header text-center">
          EDIT DATA BARANG
        </div>
        <div class="card-body">
          <form action="index.php?page=barang&act=update" method="POST">

            <div class="form-group">
              <label>id Kategori</label>
              <?php
              $query = mysqli_query($connection, "SELECT * FROM tb_kategori");
              ?>
              <select name="id_kategori" class="form-control">
                <?php while ($row1 = mysqli_fetch_array($query)) { ?>
                  <option value="<?php echo $row1['id_kategori'] ?>"><?php echo $row1['nama_kt']; ?></option>
                <?php }   ?>
              </select>
            </div>

            <div class="form-group">
              <label>id supplier</label>
              <?php


              $query = mysqli_query($connection, "SELECT * FROM tb_supplier");
              $a = " ( ";
              $b = " ) "; ?>
              <select name="id_supplier" class="form-control">
                <?php while ($row1 = mysqli_fetch_array($query)) { ?>
                  <option value="<?php echo $row1['id_supplier'] ?>"><?php echo $row1['alamat'] . $a . $row1['nama_sp'] . $b; ?></option>
                <?php } ?>
              </select>
            </div>




            <div class="form-group">
              <label>Nama</label>
              <input type="text" name="nama_br" value="<?php echo $row['nama_br'] ?>" class="form-control">
              <input type="hidden" name="id_barang" value="<?php echo $row['id_barang'] ?>">
            </div>

            <div class="form-group">
              <label>stock</label>
              <input type="int" name="stock" value="<?php echo $row['stock'] ?>" class="form-control">
            </div>

            <div class="form-group">
              <label>Harga modal</label>
              <input type="int" name="harga_modal" value="<?php echo $row['harga_modal'] ?>" class="form-control">
            </div>

            <div class="form-group">
              <label>Harga jual</label>
              <input type="int" name="harga_jual" value="<?php echo $row['harga_jual'] ?>" class="form-control">
            </div>

            <div class="form-group">
              <label>Tanggal masuk</label>
              <input type="date" name="tanggal_masuk" value="<?php echo $row['tanggal_masuk'] ?>" class="form-control">
            </div>



            <button type="submit" class="btn btn-success">UPDATE</button>
            <button type="reset" class="btn btn-warning">RESET</button>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>