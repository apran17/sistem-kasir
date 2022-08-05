<?php

session_start();
if (!isset($_SESSION["login"])) {
    header("location: login1.php");
    exit;
}

include 'database/koneksi.php';
include 'page/layout/js.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/jquery.dataTables.min.css">
    <title>INDOMARET</title>
</head>

<body>
    <?php
    include 'page/layout/header.php';
    ?>
    <?php
    $page = '';
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }
    switch ($page) {
        case 'kategori':
            include 'page/kategori/index.php';
            break;
        case 'barang':
            include 'page/barang/index.php';
            break;
        case 'supplier':
            include 'page/supplier/index_sp.php';
            break;
        case 'perusahaan':
            include 'page/perusahaan/index_pusat.php';
            break;
        case 'metode_pembayaran':
            include 'page/metode_pembayaran/index.php';
            break;
        case 'cabang':
            include 'page/cabang/index.php';
            break;
        case 'member':
            include 'page/member/index_mem.php';
            break;
        case 'kasir':
            include 'page/kasir/index_ks.php';
            break;
        case 'transaksi':
            include 'page/transaksi/index.php';
            break;
        case 'detail':
            include 'page/detail/index.php';
            break;
        case 'cetak':
            include 'page/cetak/index.php';
            break;
        default:
            include 'page/home/index.php';
            break;
    }
    function figureRomawi($angka)
    {
        $angka = intval($angka);
        $result = '';

        $array = array(
            'M' => 1000,
            'CM' => 900,
            'D' => 500,
            'CD' => 400,
            'C' => 100,
            'XC' => 90,
            'L' => 50,
            'XL' => 40,
            'X' => 10,
            'IX' => 9,
            'V' => 5,
            'IV' => 4,
            'I' => 1
        );

        foreach ($array as $roman => $value) {
            $matches = intval($angka / $value);

            $result .= str_repeat($roman, $matches);

            $angka = $angka % $value;
        }

        return $result;
    }
    ?>
    <?php

    include 'page/layout/footer.php';

    ?>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/dataTable.min.js"></script>
    <script src="assets/js/scripku.js"></script>
    <script src="assets/js/sw.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
</body>

</html>