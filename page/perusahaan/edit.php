<?php 
  
  include('database/koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM tb_perusahaan WHERE id_perusahaan = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        EDIT DATA SUPPLIER
                    </div>
                    <div class="card-body">
                        <form action="index.php?page=perusahaan&act=update" method="POST">

                <div class="form-group">
                  <label>Nama Supplier</label>
                  <input type="text" required name="nama_pn" value="<?php echo $row['nama_pn'] ?>"  class="form-control">
                  <input type="hidden" name="id_perusahaan" value="<?php echo $row['id_perusahaan'] ?>">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <input type="varchar" required name="alamat" value="<?php echo $row['alamat'] ?>" class="form-control">
                </div> 

                <div class="form-group">
                  <label>No Hp</label>
                  <input type="int" required name="hp" value="<?php echo $row['hp'] ?>" class="form-control">
                </div> 
                
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" required name="email" value="<?php echo $row['email'] ?>" class="form-control">
                </div>

                <div class="form-group">
                  <label>Tanggal Berdiri</label>
                  <input type="date" required name="tanggal_berdiri" value="<?php echo $row['tanggal_berdiri'] ?>" class="form-control">
                </div>

                <div class="form-group">
                  <label>NpWp</label>
                  <input type="varchar" required name="npwp" value="<?php echo $row['npwp'] ?>" class="form-control">
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