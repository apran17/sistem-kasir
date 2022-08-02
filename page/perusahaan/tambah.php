<div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header text-center">
                        TAMBAH DATA PERUSAHAAN
                    </div>
                    <div class="card-body">
                        <form action="index.php?page=perusahaan&act=simpan" method="POST">

                <div class="form-group">
                  <label>Nama Perusahan</label>
                  <input type="text" required name="nama_pn"class="form-control">
                  
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <input type="varchar" name="alamat" required class="form-control">
                </div> 

                <div class="form-group">
                  <label>No Hp</label>
                  <input type="int" name="hp" required class="form-control">
                </div> 
                
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" required class="form-control">
                </div>

                <div class="form-group">
                  <label>Tanggal Berdiri</label>
                  <input type="date" name="tanggal_berdiri" required class="form-control">
                </div>

                <div class="form-group">
                  <label>NpWp</label>
                  <input type="varchar" name="npwp" required class="form-control">
                </div> 


                            <button type="submit" class="btn btn-success">SIMPAN</button>
                            <button type="reset" class="btn btn-warning">RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>