<?php

include('../konek.php');

$id = $_GET['id'];

$query = "SELECT * FROM tbl_cabang WHERE id_cabang = $id LIMIT 1";

$result = mysqli_query($connection, $query);

$end = mysqli_fetch_array($result);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Edit cabang</title>
</head>

<body>

    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        EDIT CABANG
                    </div>
                    <div class="card-body">
                        <form action="update.php" method="POST">

                            <div class="form-group">
                                <label>Nama Perusahan</label>
                                <?php
                                include '../konek.php';

                                $query = mysqli_query($connection, "SELECT * FROM tbl_perusahaan");
                                $a = " ( ";
                                $b = " ) "; ?>
                                <select name="id_perusahaan" class="form-control">
                                    <?php while ($row = mysqli_fetch_array($query)) { ?>
                                        <option value="<?php echo $row['id_perusahaan'] ?>"><?php echo $row['id_perusahaan'] . $a . $row['nama_perusahaan'] . $b; ?></option>
                                    <?php }   ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama_cabang" value="<?php echo $end['nama_cabang'] ?>" required class="form-control">
                                <input type="hidden" name="id_cabang" value="<?php echo $end['id_cabang'] ?>">
                            </div>


                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat" value="<?php echo $end['alamat'] ?>" required class="form-control">
                            </div>

                            <div class="form-group">
                                <label>No Telp</label>
                                <input type="bigint" name="no_telp" value="<?php echo $end['no_telp'] ?>" required class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" value="<?php echo $end['email'] ?>" required class="form-control">
                            </div>

                            <button type="submit" class="btn btn-success">UPDATE</button>
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