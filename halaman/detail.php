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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
      a {
        text-decoration: none;
      }

      .container-card {
          display: flex;
          justify-content: center;
          align-items: center;
          height: 115vh;
      }
    </style>
  </head>
<body>
<div class="container-card">
  <div class="card mb-3" style="width: 100%; max-width: 1200px; height: auto;">
      <div class="row g-0">
        <div class="col-md-4 d-flex justify-content-center align-items-center">
            <img src="../img/<?= $p["image"]; ?>" class="img-fluid rounded-start" >
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h3  style="font-weight: 400; text-align: center;">Detail Kendaraan</h3>
            <p class="card-text">Nama : <?= $p["nama"]; ?></p>
            <p class="card-text">Merk : <?= $p["merk"]; ?></p>
            <hr>
            <p class="card-text">Spesifikasi : </p>
            <p class="card-text"><?= $p["spesifikasi"]; ?></p>
            <hr>
            <p class="card-text">Tahun : <?= $p["tahun"]; ?></p>
            <p class="card-text">Harga : <?= $p["harga"]; ?></p>
            <p class="card-text">Stok : <?= $p["stok"]; ?></p>
            <hr>
            <div class="text-center">
                <a href="../halaman/halaman.user.php#detail" class="btn btn-secondary">Kembali ke daftar kendaraan</a>
            </div> 
          </div>
        </div>
      </div>
  </div>
</div>



<!--FOOTER-->
 <footer class="text-center text-lg-start bg-dark text-white pt-4">
      <section class="footer">
        <div class="container text-center text-md-start mt-5">
          <div class="row mt-3">
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <h6 class="text-uppercase fw-bold mb-4"><i class="fab fa-sketch"></i> Dealer's Automotive</h6>
              <p>Website dealer mobil ini adalah sebuah website yang dirancang khusus untuk menampilkan sebuah product dari beberapa mobil.</p>
            </div>

            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <h6 class="text-uppercase fw-bold mb-4">Products</h6>
              <p><a href="index.php" class="text-reset">Mobil</a></p>
            </div>

            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <h6 class="text-uppercase fw-bold mb-4">Useful links</h6>
              <p><a href="halaman.user.php#home" class="text-reset">Home</a></p>
              <p><a href="halaman.user.php#product" class="text-reset">Product</a></p>
              <p><a href="halaman.user.php#about" class="text-reset">About</a></p>
              <p><a href="halaman.user.php#detail" class="text-reset">Detail</a></p>
              <p><a href="halaman.user.php#contact" class="text-reset">Contact</a></p>
              <p><a href="../login/logout.php" class="text-reset">Logout</a></p>
            </div>

            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
              <p><i class="fa fa-home me-3"></i>Bandung, Jawa Barat, Indonesia</p>
              <p><i class="fa fa-envelope me-3"></i>dealers@gmail.com</p>
              <p>
                <a href="https://web.whatsapp.com/"><i class="fa fa-phone me-3"></i>+62 855-9999-9999</a>
              </p>
            </div>
          </div>
        </div>
      </section>


    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05)">©Created by Dealer's Automotive</div>
      <!-- Copyright -->
    </footer>