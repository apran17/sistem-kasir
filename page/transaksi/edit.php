<?php

include('database/koneksi.php');

$id = $_GET['id'];

$query = "SELECT * FROM tb_transaksi WHERE id_transaksi = $id LIMIT 1";

$result = mysqli_query($connection, $query);

$row = mysqli_fetch_array($result);

?>

<div class="container" style="margin-top: 80px">
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="card">
        <div class="card-header text-center">
          EDIT DATA TRANSAKSI
        </div>
        <div class="card-body">
          <form action="index.php?page=transaksi&act=update" method="POST">

            <div class="col text-center ">
              <button type="button" class="btn btn-primary" id="member">member</button>
              <button type="button" class="btn btn-primary" id="nonmember">pembeli</button>
            </div>

            <div class="form-group">
              <label>Nama Kasir</label>
              <?php
              $query = mysqli_query($connection, "SELECT * FROM tb_kasir");
              ?>
              <select name="id_kasir" class="form-control">
                <?php while ($row1 = mysqli_fetch_array($query)) { ?>
                  <option value="<?php echo $row1['id_kasir'] ?>"><?php echo $row1['nama_ks']; ?></option>
                <?php }   ?>
              </select>
            </div>

            <div id="showpembeli" style="display:none;" class="form-group">
              <label>Nama Pembeli</label>
              <input type="text" name="nama_pembeli" value="<?php echo $row['nama_pembeli'] ?>" class=" form-control">
            </div>

            <div id="showmember" style="display:none;" class="form-group">
              <label>Nama Member</label>
              <?php

              $query = mysqli_query($connection, "SELECT * FROM tb_member");
              ?>
              <select name="id_member" class="form-control">
                <option value="19" selected></option>
                <?php while ($row1 = mysqli_fetch_array($query)) { ?>
                  <option value="<?php echo $row1['id_member'] ?>"><?php echo $row1['nama']; ?></option>
                <?php }   ?>
              </select>
            </div>

            <div class="form-group">
              <label>Metode Pembayaran</label>
              <?php

              $query = mysqli_query($connection, "SELECT * FROM tb_metode_pembayaran");
              ?>
              <select name="id_pembayaran" class="form-control">
                <?php while ($row1 = mysqli_fetch_array($query)) { ?>
                  <option value="<?php echo $row1['id_pembayaran'] ?>"><?php echo $row1['nama_mp']; ?></option>
                <?php }   ?>
              </select>
            </div>


            <div class="form-group">
              <label>Kode Invoice</label>
              <input type="text" readonly name="kode_inv" value="<?php echo $row['kode_inv'] ?>" class="form-control">
              <input type="hidden" name="id_transaksi" value="<?php echo $row['id_transaksi'] ?>">
              <input type="hidden" name="status" value="proses">
            </div>

            <div class="form-group">
              <label>Waktu Transaksi</label>
              <input type="datetime_local" required name="waktu_transaksi" value="<?php echo $row['waktu_transaksi'] ?>" class="form-control">
            </div>

            <div class="form-group">
              <label>PPN</label>
              <input type="int" required name="ppn" value="<?php echo $row['ppn'] ?>" class="form-control">
            </div>

            <div class="form-group">
              <label>DISKON</label>
              <input type="int" required name="diskon" value="<?php echo $row['diskon'] ?>" class="form-control">
            </div>


            <div class="form-group">
              <label>status</label><br>
              <input type="radio" name="status" value="<?php echo $row['status'] ?>" value="Proses">
              <label for="proses">Proses</label>
              <input type="radio" name="status" value="Selesai">
              <label for="selesai">Selesai</label>
            </div>

            <button type="submit" class="btn btn-success">UPDATE</button>
            <button type="reset" class="btn btn-warning">RESET</button>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  document.getElementById('member').addEventListener('click', () => {
    document.getElementById('showpembeli').style.display = 'none';
    document.getElementById('showmember').style.display = 'block';
  })

  document.getElementById('nonmember').addEventListener('click', () => {
    document.getElementById('showmember').style.display = 'none';
    document.getElementById('showpembeli').style.display = 'block';
  })
</script>