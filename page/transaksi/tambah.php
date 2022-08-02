<div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        TAMBAH BARANG
                    </div>
                    <div class="card-body">
                        <form action="index.php?page=transaksi&act=simpan" method="POST">

                        <div class="form-group">
                  <label>Nama Kasir</label>
                <?php                    
                      $query = mysqli_query($connection,"SELECT * FROM tb_kasir"); 
                ?>
                  <select name="id_kasir" class="form-control">
                  <?php while($row1=mysqli_fetch_array($query)){?>
                  <option value= "<?php echo $row1['id_kasir']?>"><?php echo $row1['nama_ks'];?></option>
                  <?php }   ?>
                  </select>
              </div>

                  <div class="form-group">
                  <label>Nama Member</label>
                <?php
                     
                      $query = mysqli_query($connection,"SELECT * FROM tb_member"); 
                      $a=" ( ";
                      $b=" ) ";?>
                  <select name="id_member" class="form-control">
                  <?php while($row1=mysqli_fetch_array($query)){?>
                  <option value= "<?php echo $row1['id_member']?>"><?php echo $row1['id_member'].$a.$row1['nama'].$b;?></option>
                  <?php }   ?>
                  </select> </div>

                  <div class="form-group">
                  <label>Metode Pembayaran</label>
                <?php
                     
                      $query = mysqli_query($connection,"SELECT * FROM tb_metode_pembayaran"); 
                    ?>
                  <select name="id_pembayaran" class="form-control">
                  <?php while($row1=mysqli_fetch_array($query)){?>
                  <option value= "<?php echo $row1['id_pembayaran']?>"><?php echo $row1['nama_mp'];?></option>
                  <?php }   ?>
                  </select> </div>


                <div class="form-group">
                  <label>Waktu Transaksi</label>
                  <input type="datetime-local" name="waktu_transaksi" required class="form-control" >
                </div>

                <div class="form-group">
                  <label>Nama Pembeli</label>
                  <input type="text" name="nama_pembeli" required class="form-control" >
                </div>
                
                <div class="form-group">
                  <label>PPN</label>
                  <input type="int" name="ppn" required class="form-control" >
                </div>

                <div class="form-group">
                  <label>DISKON</label>
                  <input type="int" name="diskon" required class="form-control" >
                </div>
                

                            <button type="submit" class="btn btn-success">SIMPAN</button>
                            <button type="reset" class="btn btn-warning">RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>