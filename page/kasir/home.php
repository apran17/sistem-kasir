<div class="container" style="margin-top: 80px">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header text-center">
          DATA KASIR
        </div>
        <div class="card-body">
          <a href="index.php?page=kasir&act=tambah" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
          <table class="table table-bordered" id="myTable">
            <thead>
              <tr>
                <th scope="col">NO</th>
                <th scope="col">NAMA CABANG</th>
                <th scope="col">NAMA KASIR</th>
                <th scope="col">ALAMAT</th>
                <th scope="col">NO HP</th>
                <th scope="col">JENIS KELAMIN</th>
                <th scope="col">AKSI</th>
              </tr>
            </thead>
            <tbody>

              <?php
              $no = 1;
              $query = mysqli_query($connection, "SELECT * FROM tb_kasir 
                     inner join tb_cabang on tb_cabang.id_cabang = tb_kasir.id_cabang");
              while ($row = mysqli_fetch_array($query)) { ?>

                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $row['nama_cb'] ?></td>
                  <td><?php echo $row['nama_ks'] ?></td>
                  <td><?php echo $row['alamat_ks'] ?></td>
                  <td><?php echo $row['hp_ks'] ?></td>
                  <td><?php echo $row['jenis_kelamin_ks'] ?></td>

                  <td class="text-center">
                    <a href="index.php?page=kasir&act=edit&id=<?php echo $row['id_kasir'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                    <a href="index.php?page=kasir&act=hapus&id=<?php echo $row['id_kasir'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
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