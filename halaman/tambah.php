<?php
require'../views/partials/nav.php';
session_start();

if(!isset($_SESSION['login'])) {
    header("Location: ../login/login.php");
    exit;
}


require'../function/functions.php';

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('data berhasil ditambahkan');
                document.location.href = 'index.php';
            </script>";
    } else {
        echo "data gagal ditambahkan!";
    }
}


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah_Data_Kendaraan</title>
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
    <h3 class="text-center py-3">Tambah Data Kendaraan</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <ul style="list-style: none;">
            <li>
                <label>Gambar : <input type="file" name="image" autofocus autocomplete="off"></label>
            </li>
            <li>
                <label>Nama : <input type="text" name="nama" autocomplete="off" required></label>
            </li>
            <li>
                <label>Merk : <input type="text" name="merk" autocomplete="off" required></label>
            </li>
            <li>
                <label>Spesifikasi : <input type="text" name="spesifikasi" autocomplete="off" required></label>
            </li>
            <li>
                <label>Tahun : <input type="text" name="tahun" autocomplete="off" required></label>
            </li>
            <li>
                <label>Harga : <input type="text" name="harga" autocomplete="off" required></label>
            </li>
            <li>
                <label>Stok : <input type="text" name="stok" autocomplete="off" required></label>
            </li>
         <br>
            <li>
                <button type="submit" name="tambah" class="btn btn-success">Tambah Data</button> <a href="index.php" style="text-decoration: none;" class="btn btn-secondary">Kembali</a>
            </li>
        </ul>
    </form>

<?php
require'../views/partials/footer.php';
?>
    

