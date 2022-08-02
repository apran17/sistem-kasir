
  <div class="container" style="margin-top: 80px">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            DATA Barang
          </div>
          <div class="card-body">
            <a href="index.php?page=cabang&act=tambah" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
            <table class="table table-bordered" id="myTable">
              <thead>
                <tr>
                  <th scope="col">NO</th>
                  <th scope="col">Nama Kantor Pusat</th>
                  <th scope="col">Nama Cabang</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">No Hp</th>
                  <th scope="col">Email</th>
                  <th scope="col">AKSI</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                     
                     $no = 1;
                     $query = mysqli_query($connection,"SELECT * FROM tb_cabang 
                     inner join tb_perusahaan on tb_perusahaan.id_perusahaan=tb_cabang.id_perusahaan");
                     while($row = mysqli_fetch_array($query)){
                 
                 ?>
                 

                 <tr>
                     <td><?php echo $no++ ?></td>
                     <td><?php echo $row['nama_pn'] ?></td>
                     <td><?php echo $row['nama_cb'] ?></td>
                     <td><?php echo $row['alamat_cb'] ?></td>
                     <td><?php echo $row['hp_cb'] ?></td>
                     <td><?php echo $row['email_cb'] ?></td>
                    

                    <td class="text-center">
                    <a href="index.php?page=cabang&act=edit&id=<?php echo $row['id_cabang'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                      <a href="index.php?page=cabang&act=hapus&id=<?php echo $row['id_cabang'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
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