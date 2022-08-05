<div class="container" style="margin-top: 80px">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header text-center">
          DATA METODE PEMBAYARAN
        </div>
        <div class="card-body">
          <a href="index.php?page=metode_pembayaran&act=tambah" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
          <table class="table table-bordered" id="myTable">
            <thead>
              <tr>
                <th scope="col">NO</th>
                <th scope="col">METODE PEMBAYARAN</th>
                <th scope="col">AKSI</th>
              </tr>
            </thead>
            <tbody>
              <?php

              $no = 1;
              $query = mysqli_query($connection, "SELECT * FROM tb_metode_pembayaran");
              while ($row = mysqli_fetch_array($query)) {

              ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $row['nama_mp'] ?></td>

                  <td class="text-center">
                    <a href="index.php?page=metode_pembayaran&act=edit&id=<?php echo $row['id_pembayaran'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                    <a href="index.php?page=metode_pembayaran&act=hapus&id=<?php echo $row['id_pembayaran'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                  </td>
                </tr>

              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>