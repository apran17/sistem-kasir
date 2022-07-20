<?php

include('../konek.php');

$id = $_GET['id'];

$query = "SELECT * FROM tbl_member WHERE id_member = $id LIMIT 1";

$result = mysqli_query($connection, $query);

$row = mysqli_fetch_array($result);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Edit Member</title>
</head>

<body>

    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        EDIT MEMBER
                    </div>
                    <div class="card-body">
                        <form action="update.php" method="POST">

                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" value="<?php echo $row['nama'] ?>" required class="form-control">
                                <input type="hidden" name="id_member" value="<?php echo $row['id_member'] ?>">
                            </div>

                            <div class="form-group">
                                <label>No Telp</label>
                                <input type="bigint" name="no_telp" value="<?php echo $row['no_telp'] ?>" required class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat" value="<?php echo $row['alamat'] ?>" required class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Jenis Kelamin</label><br>
                                <input type="radio" name="jenis_kelamin" value="LAKI-LAKI" value="<?php echo $row['jenis_kelamin'] ?>" required>LAKI-LAKI
                                <input type="radio" name="jenis_kelamin" value="PREMPUAN" value="<?php echo $row['jenis_kelamin'] ?>" required>PREMPUAN
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