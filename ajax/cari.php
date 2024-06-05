<?php
require'../function/functions.php';
$product = cari($_GET['keyword']);
?>
 <table border="1" cellpadding="10" cellspacing="0">
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
                    <a href="ubah.php?id=<?= $p['id']; ?>" class="btn btn-warning">Ubah</a><br>
                    <br>
                    <a href="hapus.php?id=<?= $p['id']; ?>" onclick="return confirm ('apakah anda yakin?');" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
                <?php endforeach; ?>
    </table>