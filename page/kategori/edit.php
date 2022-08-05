<?php

include('database/koneksi.php');

$id = $_GET['id'];

$query = "SELECT * FROM tb_kategori WHERE id_kategori = $id LIMIT 1";

$result = mysqli_query($connection, $query);

$row = mysqli_fetch_array($result);

?>

<div class="container" style="margin-top: 80px">
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="card">
        <div class="card-header text-center">
          EDIT DATA KATEGORI
        </div>
        <div class="card-body">
          <form action="index.php?page=kategori&act=update" method="POST">

            <div class="form-group">
              <label>Nama Kategori</label>
              <input type="text" name="nama_kt" value="<?php echo $row['nama_kt'] ?>" class="form-control">
              <input type="hidden" name="id_kategori" value="<?php echo $row['id_kategori'] ?>">
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