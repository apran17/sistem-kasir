<div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header text-center">
                        TAMBAH DATA SUPPLIER
                    </div>
                    <div class="card-body">
                        <form action="index.php?page=supplier&act=simpan" method="POST">

                            <div class="form-group">
                                <label>Nama Supplier</label>
                                <input type="text" name="nama_sp" required class="form-control">
                            </div>

                            <div class="form-group">
                                <label>No Hp</label>
                                <input type="int" name="hp" required class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="varchar" name="alamat" required class="form-control">
                            </div>

                            <div class="form-group">
                                <label>No Rekening</label>
                                <input type="int" name="no_rekening" required class="form-control">
                            </div>

                            <button type="submit" class="btn btn-success">SIMPAN</button>
                            <button type="reset" class="btn btn-warning">RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>