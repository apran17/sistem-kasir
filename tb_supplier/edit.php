<?php

include('../konek.php');

$id = $_GET['id'];

$query = "SELECT * FROM tbl_supplier WHERE id_supplier = $id LIMIT 1";

$result = mysqli_query($connection, $query);

$row = mysqli_fetch_array($result);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Edit Supplier</title>
</head>

<body>

    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        EDIT SUPPLIER
                    </div>
                    <div class="card-body">
                        <form action="update.php" method="POST">

                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama_supplier" value="<?php echo $row['nama_supplier'] ?>" required class="form-control">
                                <input type="hidden" name="id_supplier" value="<?php echo $row['id_supplier'] ?>">
                            </div>

                            <div class=" form-group">
                                <label>No Telp</label>
                                <input type="bigint" name="no_telp" value="<?php echo $row['no_telp'] ?>" required class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat" value="<?php echo $row['alamat'] ?>" required class="form-control">
                            </div>

                            <div class="form-group">
                                <label>No Rekening</label>
                                <input type="bigint" name="no_rekening" value="<?php echo $row['no_rekening'] ?>" required class="form-control">
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