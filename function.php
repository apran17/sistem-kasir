<?php

include('database/koneksi.php');

function register($data)
{
    global $connection;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($connection, $data["password"]);
    $password2 = mysqli_real_escape_string($connection, $data["password2"]);

    // cek user yang sudah ada atau belum
    $result = mysqli_query($connection, "SELECT username FROM user WHERE
            username ='$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah terdaftar!')</script>";
        return false;
    }
    // cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
        alert('konfirmasi password tidak sesuai');
        </script>";
        return false;
    }
    // ensripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    // tambah ke database
    mysqli_query($connection, "INSERT INTO user VALUES('', '$username', '$password')");
    return mysqli_affected_rows($connection);
}
