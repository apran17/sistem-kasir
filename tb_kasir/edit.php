<?php

include('../konek.php');

$id = $_GET['id'];

$query = "SELECT * FROM tbl_kasir WHERE id_kasir = $id LIMIT 1";

$result = mysqli_query($connection, $query);

$end = mysqli_fetch_array($result);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Edit Kasir</title>
</head>

<body>

    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        EDIT KASIR
                    </div>
                    <div class="card-body">
                        <form action="update.php" method="POST">

                            <div class="form-group">
                                <label>Nama Cabang</label>
                                <?php
                                include '../konek.php';

                                $query = mysqli_query($connection, "SELECT * FROM tbl_cabang");
                                $a = " ( ";
                                $b = " ) "; ?>
                                <select name="id_cabang" class="form-control">
                                    <?php while ($row = mysqli_fetch_array($query)) { ?>
                                        <option value="<?php echo $row['id_cabang'] ?>"><?php echo $row['id_cabang'] . $a . $row['nama_cabang'] . $b; ?></option>
                                    <?php }   ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama_kasir" value="<?php echo $end['nama_kasir'] ?>" required class="form-control">
                                <input type="hidden" name="id_kasir" value="<?php echo $end['id_kasir'] ?>">
                            </div>

                            <div class="form-group">
                                <label>No Telp</label>
                                <input type="bigint" name="no_telp" value="<?php echo $end['no_telp'] ?>" required class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat" value="<?php echo $end['alamat'] ?>" required class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Jenis Kelamin</label><br>
                                <input type="radio" name="jenis_kelamin" value="LAKI-LAKI" value="<?php echo $end['jenis_kelamin'] ?>" required>LAKI-LAKI
                                <input type="radio" name="jenis_kelamin" value="PREMPUAN" value="<?php echo $end['jenis_kelamin'] ?>" required>PREMPUAN
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