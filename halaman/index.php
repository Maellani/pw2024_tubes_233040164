<?php
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
    </head>
<body>
<?php require "../views/partials/nav.php"; ?>
<div class="container">
    <h3 class="text-center py-3">Daftar Kendaraan</h3>
    <form action="" method="POST">
        <input type="text" name="keyword" size="40" placeholder="masukan keyword pencarian....." autocomplete="off" autofocus class="keyword">
        <button type="submit" name="cari" class="tombol-cari">Cari</button>
    </form>
    <br>
</div>
<div class="container2">
    <table border="1" cellpadding="10" cellspacing="0" class="table table-striped">
            <tr>
                <th>#</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Merk</th>
                <th>Spesifikasi</th>
                <th>Tahun</th>
                <th>Harga</th>
                <th>Stok</th>
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
                <td><?= $p["merk"]; ?></td>
                <td><?= $p["spesifikasi"]; ?></td>
                <td><?= $p["tahun"]; ?></td>
                <td><?= $p["harga"]; ?></td>
                <td><?= $p["stok"]; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $p['id']; ?>" class="btn btn-warning">Update</a><br>
                    <br>
                    <a href="hapus.php?id=<?= $p['id']; ?>" onclick="return confirm ('apakah anda yakin?');" class="btn btn-danger">Delete</a>
                </td>
            </tr>
                <?php endforeach; ?>
    </table>
</div>

<script src="../js/script.js"></script>

<?php 
require'../views/partials/footer.php'; 
?>

 </body>
 </html>