<?php
session_start();

include 'database/koneksi.php';

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
<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" href="assets/css/jquery.dataTables.min.css">
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
                            <p>password / username salah</p>
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

                            <button type="submit" name="login" class="btn btn-success">Log In</button>

                            <a href="registerasi.php" class="btn btn-primary">daftar</a>
                        </form>

                </div>
            </div>
        </div>
    </div>
</div>

</html>