<?php 
  
  include('database/koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM tb_metode_pembayaran WHERE id_pembayaran = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        EDIT METODE PEMBAYARAN
                    </div>
                    <div class="card-body">
                        <form action="index.php?page=metode_pembayaran&act=update" method="POST">

                <div class="form-group">
                  <label>Nama Supplier</label>
                  <input type="text" name="nama_mp" value="<?php echo $row['nama_mp'] ?>"  class="form-control">
                  <input type="hidden" name="id_pembayaran" value="<?php echo $row['id_pembayaran'] ?>">
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