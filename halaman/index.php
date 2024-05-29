<?php
require'../views/partials/nav.php';

session_start();

if(!isset($_SESSION['login'])) {
    header("Location: ../login/login.php");
    exit;
}


require'../function/functions.php';
$product = query("SELECT * FROM kendaraan");

// ketika tombol cari diketik
if (isset($_POST['cari'])) {
    $product = cari($_POST['keyword']);
}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin_Dealer's Automotive</title>
    <link rel="stylesheet" href="../css/style.css">
   
  </head>
<body>
<div class="container">
    <h3 class="text-center py-3">Daftar Kendaraan</h3>

    <a href="tambah.php" class="btn btn-info">Tambah Data Kendaraan</a>
    <br><br>

    <form action="" method="POST">
        <input type="text" name="keyword" size="40" placeholder="masukan keyword pencarian....." autocomplete="off" autofocus>
        <button type="submit" name="cari"class="btn btn-info">Cari</button>
    </form>
    <br>

    <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>#</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>

            <?php if (empty($product)) : ?>
            <tr>
                <td colspan="4">
                    <p style="color: red; font-style:italic">data kendaraan tidak ditemukan!</p>
                </td>
            </tr>
            <?php endif; ?>


            <?php $i = 1;
            foreach($product as $p) : ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><img src="../img/<?= $p["image"]; ?>" width="300"></td>
                <td><?= $p["nama"]; ?></td>
                <td>
                    <a style="text-decoration:none" href="detail.php?id=<?= $p['id']; ?>" class="btn btn-primary">lihat detail</a>
                </td>
            </tr>
                <?php endforeach; ?>
    </table>
</div>

<?php
    require'../views/partials/footer.php';
    ?>