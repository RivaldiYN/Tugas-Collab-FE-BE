<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>B.A.D</title>
</head>
<body>
    <div class="background">
        <div class="container">
            <h1 class="mt-4 text-light">About Me</h1>
            <p class="mt-2 text-light">Halo, nama saya <?= $data['nama']; ?>, umur saya <?= $data['umur']; ?> tahun, saya adalah seorang <?= $data['pekerjaan']; ?>. SewaMotor merupakan startup peminjaman/rental motor yang menggunakan aplikasi berbasis web dalam penggunaannya. Dengan adanya aplikasi ini, diharapkan dapat memudahkan para calon client yang ingin bepergian jauh tanpa harus pusing mempunyai motor terlebih dahulu</p>
            <br>
            <div class="fontawesome">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-github"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
    </div>
</div>