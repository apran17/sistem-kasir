
  <div class="container" style="margin-top: 80px">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header text-center">
            DATA BARANG
          </div>
          <div class="card-body">
            <a href="index.php?page=barang&act=tambah" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
            <table class="table table-bordered" id="myTable">
              <thead>
                <tr>
                  <th scope="col">NO</th>
                  <th scope="col">NAMA KATEGORI</th>
                  <th scope="col">NAMA SUPPLIER</th>
                  <th scope="col">NAMA BARANG</th>
                  <th scope="col">STOCK</th>
                  <th scope="col">HARGA MODAL</th>
                  <th scope="col">HARGA JUAL</th>
                  <th scope="col">TANGGAL MASUK</th>
                  <th scope="col">AKSI</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                     
                     $no = 1;
                     $query = mysqli_query($connection,"SELECT * FROM tb_barang 
                     inner join tb_kategori on tb_kategori.id_kategori=tb_barang.id_kategori
                     inner join tb_supplier on tb_supplier.id_supplier = tb_barang.id_supplier");
                     while($row = mysqli_fetch_array($query)){
                 
                 ?>
                 <?php
                  $harga_modal=$row['harga_modal'];
                  $result1 = number_format($harga_modal,2,',','.');
                  $harga_jual=$row['harga_jual'];
                  $result2 = number_format($harga_jual,2,',','.');
                  ?>

                 <tr>
                     <td><?php echo $no++ ?></td>
                     <td><?php echo $row['nama_kt'] ?></td>
                     <td><?php echo $row['nama_sp'] ?></td>
                     <td><?php echo $row['nama_br'] ?></td>
                     <td><?php echo $row['stock'] ?></td>
                     <td>Rp.<?php echo $result1?></td>
                     <td>Rp.<?php echo $result2?></td>
                     <td><?php echo $row['tanggal_masuk'] ?></td>

                    <td class="text-center">
                    <a href="index.php?page=barang&act=edit&id=<?php echo $row['id_barang'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                      <a href="index.php?page=barang&act=hapus&id=<?php echo $row['id_barang'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
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