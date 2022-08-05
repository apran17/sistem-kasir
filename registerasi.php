<?php
require 'function.php';

if (isset($_POST["register"])) {

    if (register($_POST) > 0) {

        echo "<script>
        alert('user baru berhasil ditambahkan!');
        </script>";
        header("location: login1.php");
        exit;
    } else {
        echo mysqli_error($connection);
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Rgisterasi</title>
</head>

<body>
    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card border-primary">
                    <div class="card-header text-primary text-center">
                        REGISTER
                    </div>
                    <div class="card-body text-primary">
                        <form action="" method="POST">

                            <div class="form-group">
                                <label for="username">username :</label>
                                <input type="text" class="form-control" name="username" id="username" required>
                            </div>

                            <div class="form-group">
                                <label for="password">password :</label>
                                <input type="password" class="form-control" name="password" id="password" required>
                            </div>

                            <div class="form-group">
                                <label for="password2">konfirmasi password :</label>
                                <input type="password" class="form-control" name="password2" id="password2" required>
                            </div>

                            <button type="submit" class=" btn btn-success" name="register">register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>