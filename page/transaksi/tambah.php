<div class="container" style="margin-top: 80px">
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="card">
        <div class="card-header text-center bs-info">
          TAMBAH DATA TRANSAKSI
        </div>
        <div class="card-body">

          <div class="col text-center ">
            <button class="btn btn-primary" id="member">member</button>
            <button class="btn btn-primary" id="nonmember">pembeli</button>
          </div>

          <form action="index.php?page=transaksi&act=simpan" method="POST">
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
              <input type="text" name="nama_pembeli" class="form-control">
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

            <div class="form-group" hidden>
              <label>Kode Invoice</label>
              <input type="text" readonly name="kode_inv" class="form-control">
            </div>

            <div class="form-group">
              <label>Waktu Transaksi</label>
              <input type="datetime-local" name="waktu_transaksi" required class="form-control">
            </div>


            <div class="form-group" hidden>
              <label>Total Pembayaran</label>
              <input type="int" name="total_pembayaran" class="form-control" readonly>
            </div>

            <div class="form-group">
              <label>PPN</label>
              <input type="int" name="ppn" required class="form-control">
            </div>

            <div class="form-group">
              <label>DISKON</label>
              <input type="int" name="diskon" required class="form-control">
              <input type="hidden" value="proses" name="status">
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

            <button type="submit" class="btn btn-success">SIMPAN</button>
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