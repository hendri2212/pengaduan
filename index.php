<?php
    include_once "config/connection.php";
    // include "./assets/lib/fungsi_upload.php";
    session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi - Pengaduan Masyarakat</title>

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="d-flex bg-warning">
        <div class="container d-flex justify-content-between align-items-center text-danger">
            <a href="/pengaduan" class="h4 text-decoration-none">Aplikasi Pengaduan Masyarakat</a>
            <ul class="nav justify-content-end bg-warning my-2">
                <li class="nav-item mx-2">
                    <a class="nav-link btn btn-outline-danger" href="?page=login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-success" href="?page=register">Register</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        <?php include("content.php") ?>
    </div>
</body>
</html>