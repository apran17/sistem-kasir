<div class="container" style="margin-top: 80px">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header text-center">
                    TAMBAH BARANG
                </div>
                <div class="card-body">
                    <form action="index.php?page=barang&act=simpan" method="POST">

                        <div class="form-group">
                            <label>Id Kategori</label>
                            <?php
                            $query = mysqli_query($connection, "SELECT * FROM tb_kategori"); ?>
                            <select name="id_kategori" class="form-control">
                                <?php while ($row = mysqli_fetch_array($query)) { ?>
                                    <option value="<?php echo $row['id_kategori'] ?>"><?php echo $row['nama_kt']; ?></option>
                                <?php }   ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Id Supplier</label>
                            <?php
                            $query = mysqli_query($connection, "SELECT * FROM tb_supplier"); ?>
                            <select name="id_supplier" class="form-control">
                                <?php while ($row = mysqli_fetch_array($query)) { ?>
                                    <option value="<?php echo $row['id_supplier'] ?>"><?php echo $row['nama_sp'] ?></option>
                                <?php }   ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama_br" required class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Stock</label>
                            <input type="int" name="stock" required class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Harga Modal</label>
                            <input type="int" id="rupiah" name="harga_modal" required class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Harga Jual</label>
                            <input type="int" id="rupiah1" name="harga_jual" required class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Tanggal Masuk</label>
                            <input type="date" name="tanggal_masuk" required class="form-control">
                        </div>

                        <button type="submit" class="btn btn-success">SIMPAN</button>
                        <button type="reset" class="btn btn-warning">RESET</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>