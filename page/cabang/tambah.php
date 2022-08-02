<div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header text-center">
                        TAMBAH PERUSAHAAN CABANG
                    </div>
                    <div class="card-body">
                        <form action="index.php?page=cabang&act=simpan" method="POST">

                            <div class="form-group">
                                <label>Perusahaan Pusat</label>
                                <?php
                                $query = mysqli_query($connection, "SELECT * FROM tb_perusahaan"); ?>
                                <select name="id_perusahaan" class="form-control">
                                    <?php while ($row = mysqli_fetch_array($query)) { ?>
                                        <option value="<?php echo $row['id_perusahaan'] ?>"><?php echo $row['nama_pn']; ?></option>
                                    <?php }   ?>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label>Nama </label>
                                <input type="text" name="nama_cb" required class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat_cb" required class="form-control">
                            </div>

                            <div class="form-group">
                                <label>No Hp</label>
                                <input type="number"  name="hp_cb" required class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email_cb" required class="form-control">
                            </div>

                            <button type="submit" class="btn btn-success">SIMPAN</button>
                            <button type="reset" class="btn btn-warning">RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>