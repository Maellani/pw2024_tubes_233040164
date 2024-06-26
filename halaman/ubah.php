<?php
require'../views/partials/nav.php';
session_start();

if(!isset($_SESSION['login'])) {
    header("Location: ../login/login.php");
    exit;
}


require'../function/functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

// ambil id dari url
$id = $_GET['id'];

// query kendaraan berdasarkan id
$p = query("SELECT * FROM kendaraan WHERE id = $id");

// cek apakah tombol ubah sudah ditekan
if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0 ) {
        echo "<script>
                alert('data berhasil diubah');
                document.location.href = 'index.php';
            </script>";
    } else {
        echo "data gagal diubah!";
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ubah_Data_Kendaraan</title>
    <style>
        body {
        color: #eee;
        }

        form {
        max-width: 200%;
        margin: 0 auto;
        padding: 20px;
        background-color: #222;
        text-align: center;
        }

        h3 {
        text-align: center;
        }

        ul {
        list-style: none;
        padding: 0;
        }

        li {
        margin-bottom: 10px;
        }

        label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
        color: white;
        }

        input {
        width: 100vh;
        padding: 10px;
        border: 1px solid #eee;
        border-radius: 50px;
        background-color: transparent;
        color: #eee;
        }
    </style>
  </head>
  <body>
    <h3 class="text-center py-3">Form Ubah Data Kendaraan</h3>
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $p['id']; ?>">
    <ul>
        <li>
            <label>Gambar : <input type="text" name="image" autofocus required value="<?= $p['image']; ?>"></label>
        </li>
        <li>
            <label>Nama : <input type="text" name="nama" required value="<?= $p['nama']; ?>"></label>
        </li>
        <li>
            <label>Merk : <input type="text" name="merk" required value="<?= $p['merk']; ?>"></label>
        </li>
        <li>
            <label>Spesifikasi : <input type="text" name="spesifikasi" required value="<?= $p['spesifikasi']; ?>"></label>
        </li>
        <li>
            <label>Tahun : <input type="text" name="tahun" required value="<?= $p['tahun']; ?>"></label>
        </li>
        <li>
            <label>Harga : <input type="text" name="harga" required value="<?= $p['harga']; ?>"></label>
        </li>
        <li>
            <label>Stok : <input type="text" name="stok" required value="<?= $p['stok']; ?>"></label>
        </li>
        <li>
            <button type="submit" name="ubah" class="btn btn-warning">Ubah Data</button> <a href="index.php" style="text-decoration: none;" class="btn btn-secondary">Kembali</a>
        </li>
    </ul>
    </form>

<?php
require'../views/partials/footer.php';
?>