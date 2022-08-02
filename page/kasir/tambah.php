<div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header text-center">
                        TAMBAH DATA KASIR
                    </div>
                    <div class="card-body">
                        <form action="index.php?page=kasir&act=simpan" method="POST">

                            <div class="form-group">
                                <label>id supplier</label>
                                    <?php
                                        $query = mysqli_query($connection,"SELECT * FROM tb_cabang");
                                        $a=" ( ";
                                        $b=" ) ";
                                    ?>
                                <select name="id_cabang" class="form-control">
                                    <?php while($row1=mysqli_fetch_array($query)){?>
                                <option value= "<?php echo $row1['id_cabang']?>"><?php echo $row1['nama_cb'].$a.$row1['alamat_cb'].$b;?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Nama Petugas Kasir</label>
                                <input type="text" name="nama_ks" required class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="varchar" name="alamat_ks" required class="form-control">
                            </div>

                            <div class="form-group">
                                <label>No Hp</label>
                                <input type="int" name="hp_ks" required class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Jenis_kelamin</label><br>
                                <input type="radio"  name="jenis_kelamin_ks" value="LAKI-LAKI">
                                <label for="laki-laki">LAKI-LAKI</label><br>
                                <input type="radio"  name="jenis_kelamin_ks" value="PEREMPUAN">
                                <label for="perempuan">PEREMPUAN</label><br>
                            </div>

                            <button type="submit" class="btn btn-success">SIMPAN</button>
                            <button type="reset" class="btn btn-warning">RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>