<?php

include('database/koneksi.php');

$id = $_GET['id'];

$query = "SELECT * FROM tb_member WHERE id_member = $id LIMIT 1";

$result = mysqli_query($connection, $query);

$row = mysqli_fetch_array($result);

?>

<div class="container" style="margin-top: 80px">
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="card">
        <div class="card-header text-center">
          EDIT DATA MEMBER
        </div>
        <div class="card-body">
          <form action="index.php?page=member&act=update" method="POST">

            <div class="form-group">
              <label>Nama Member</label>
              <input type="text" name="nama" value="<?php echo $row['nama'] ?>" class="form-control">
              <input type="hidden" name="id_member" value="<?php echo $row['id_member'] ?>">
            </div>

            <div class="form-group">
              <label>No Hp</label>
              <input type="int" name="hp" value="<?php echo $row['hp'] ?>" class="form-control">
            </div>

            <div class="form-group">
              <label>Alamat</label>
              <input type="varchar" name="alamat" value="<?php echo $row['alamat'] ?>" class="form-control">
            </div>

            <div class="form-group">
              <label>Jenis_kelamin</label><br>
              <input type="radio" name="jenis_kelamin" value="LAKI-LAKI" value="<?php echo $row['jenis_kelamin'] ?>">
              <label for="laki-laki">LAKI-LAKI</label>
              <input type="radio" name="jenis_kelamin" value="PEREMPUAN" value="<?php echo $row['jenis_kelamin'] ?>">
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