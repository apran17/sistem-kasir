<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Tambah</title>
</head>

<body>

    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        TAMBAH MEMBER
                    </div>
                    <div class="card-body">
                        <form action="simpan.php" method="POST">

                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>No Telp</label>
                                <input type="bigint" name="no_telp" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat" class="form-control" required>
                            </div>


                            <div class="form-group">
                                <label>Jenis Kelamin</label><br>
                                <input type="radio" name="jenis_kelamin" value="LAKI-LAKI" required>
                                <label>LAKI-LAKI</label>
                                <input type="radio" name="jenis_kelamin" value="PREMPUAN" required>
                                <label>PREMPUAN</label>
                            </div>




                            <button type="submit" class="btn btn-success">SIMPAN</button>
                            <button type="reset" class="btn btn-warning">RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.js"></script>
</body>

</html>