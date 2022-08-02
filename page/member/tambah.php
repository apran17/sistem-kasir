<div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header text-center">
                        TAMBAH DATA MEMBER
                    </div>
                    <div class="card-body">
                        <form action="index.php?page=member&act=simpan" method="POST">

                            <div class="form-group">
                                <label>Nama Member</label>
                                <input type="text" name="nama" required class="form-control">
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
                                <label>Jenis_kelamin</label><br>
                                <input type="radio"  name="jenis_kelamin" value="LAKI-LAKI">
                                <label for="laki-laki">LAKI-LAKI</label><br>
                                <input type="radio"  name="jenis_kelamin" value="PEREMPUAN">
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