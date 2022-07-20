<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Data Kategori</title>
</head>

<body>

    <!-- Example Code -->

    <nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="../index.php">HOME</a>
                    <a class="nav-link" href="../tb_barang/index.php">BARANG</a>
                    <a class="nav-link" href="../tb_cabang/index.php">CABANG</a>
                    <a class="nav-link" href="../tb_kasir/index.php">KASIR</a>
                    <a class="navbar-brand" href="#">KATEGORI</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="nav-link" href="../tb_member/index.php">MEMBER</a>
                    <a class="nav-link" href="../tb_metode_pembayaran/index.php">METODE PEMBAYARAN</a>
                    <a class="nav-link" href="../tb_perusahaan/index.php">PERUSAHAAN</a>
                    <a class="nav-link" href="../tb_supplier/index.php">SUPPLIER</a>
                    <a class="nav-link" href="">TRANSAKSI</a>
                    <a class="nav-link" href="">TRANSAKSI DETAIL</a>
                </div>
            </div>

        </div>
    </nav>

    <!-- End Example Code -->

    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        DATA KATEGORI
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
                                $query = mysqli_query($connection, "SELECT * FROM tbl_kategori");
                                while ($row = mysqli_fetch_array($query)) {
                                ?>

                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $row['nama_kategori'] ?></td>
                                        <td class="text-center">
                                            <a href="edit.php?id=<?php echo $row['id_kategori'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                                            <a href="hapus.php?id=<?php echo $row['id_kategori'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
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