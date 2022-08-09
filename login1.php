<?php
session_start();

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "db_kasir";

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if ($connection) {
    echo "";
} else {
    echo "Koneksi Gagal! : " . mysqli_connect_error();
}

if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($connection, "SELECT * FROM user where username='$username'");
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {

            $_SESSION["login"] = true;

            header("location: index.php");
            exit;
        }
    }

    $error = true;
}

?>
<html>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/jquery.dataTables.min.css">

<body>
    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card border-primary">
                    <div class="card-header text-primary text-center">
                        Login
                    </div>
                    <div class="card-body text-primary">
                        <form action="" method="POST">

                            <?php if (isset($error)) : ?>
                                <div class="alert alert-danger d-flex align-items-center" role="alert">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                    </svg>
                                    <div class="h5">
                                        Password / Username anda salah
                                    </div>
                                </div>
                            <?php endif; ?>
                            <form action="" method="POST">

                                <div class="form-group">
                                    <label>username</label>
                                    <input type="text" required name="username" class="form-control">

                                </div>

                                <div class="form-group">
                                    <label>password</label>
                                    <input type="password" name="password" required class="form-control">
                                </div>

                                <button type="submit" id="login" name="login" class="btn btn-success">Log In</button>

                                <a href="registerasi.php" class="btn btn-primary">daftar</a>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <Script>
        const Login = document.querySelector('#Login');
        Login.addEventListener('click', function() {
            Swal.fire(
                'The Internet?',
                'That thing is still around?',
                'success')
        });
    </Script>
    <script src="assets/js/sweetalert2.all.min.js"></script>
</body>
</body>

</html>