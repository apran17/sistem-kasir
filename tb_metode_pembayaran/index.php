<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Data Metode Pembayaran</title>
</head>

<body>

    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        DATA METODE PEMBAYARAN
                    </div>
                    <div class="card-body">
                        <a href="tambah.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
                        <table class="table table-bordered" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">NO.</th>
                                    <th scope="col">NAMA</th>
                                    <th scope="col">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include('../konek.php');
                                $no = 1;
                                $query = mysqli_query($connection, "SELECT * FROM tbl_metode_pembayaran");
                                while ($row = mysqli_fetch_array($query)) {
                                ?>

                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $row['nama'] ?></td>
                                        <td class="text-center">
                                            <a href="edit.php?id=<?php echo $row['id_metode_pembayaran'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                                            <a href="hapus.php?id=<?php echo $row['id_metode_pembayaran'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                                        </td>
                                    </tr>

                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.js"></script>
</body>

</html>