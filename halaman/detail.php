<?php

session_start();

if(!isset($_SESSION['login'])) {
    header("Location: ../login/login.php");
    exit;
}


require '../function/functions.php';

//ambil id dari URL
$id = $_GET['id'];

//query kendaraan berdasarkan id
$p = query("SELECT * FROM kendaraan WHERE id = $id");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail_Kendaraan</title>
    <link rel="stylesheet" href="../css/">
  </head>
  <body>

<h3 class="text-center py-5">Detail Kendaraan</h3>
<div class="row">
  <div class="col-5">
  <img src="../img/<?= $p["image"]; ?>" width="300">
  </div>
  <div class="col-7"> 
    <ul style="list-style: none;">
    <li>Nama : <?= $p["nama"]; ?></li>
    <li>Merk : <?= $p["merk"]; ?></li>
    <li>Spesifikasi : <?= $p["spesifikasi"]; ?></li>
    <li>Tahun : <?= $p["tahun"]; ?></li>
    <li>Harga : <?= $p["harga"]; ?></li>
    <li>Stok : <?= $p["stok"]; ?></li>
   
    <li><a href="halaman.user.php" class="btn btn-info">Kembali ke daftar kendaraan</a></li>
</ul>  
</div>
</div>

<?php
    require'../views/partials/footer.php';
    ?>