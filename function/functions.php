<?php 

function koneksi()
{
   return mysqli_connect('localhost', 'root', '', 'pw2024_tubes_233040164');
}

function query($query)
{
// Koneksi ke database
$conn = koneksi();

// Query ke tabel mahasiswa
$result = mysqli_query($conn, $query);

// jika hasilnya hanya 1 data
if(mysqli_num_rows($result) ==1) {
    return mysqli_fetch_assoc($result);
}


$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}

return $rows;
}


// fungsi tambah
function tambah($data) 
{
    $conn = koneksi();

    $image = htmlspecialchars($data['image']);
    $nama = htmlspecialchars($data['nama']);
    $merk = htmlspecialchars($data['merk']);
    $spesifikasi = htmlspecialchars($data['spesifikasi']);
    $tahun = htmlspecialchars($data['tahun']);
    $harga = htmlspecialchars($data['harga']);
    $stok = htmlspecialchars($data['stok']);

    $query = "INSERT INTO kendaraan
                VALUES('0', '$image', '$nama', '$merk', '$spesifikasi', '$tahun', '$harga', '$stok')
            ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    echo  mysqli_error($conn);
    return mysqli_affected_rows($conn);
}

// fungsi keyword cari
function cari($keyword) {
    $conn = koneksi();

    $query = "SELECT * FROM kendaraan
                WHERE 
                nama LIKE '%$keyword%' OR 
                merk LIKE '%$keyword%' OR
                tahun LIKE '%$keyword%'
                ";
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
        }

    return $rows;
    }


// fungsi hapus
function hapus($id) 
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM kendaraan WHERE id = $id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}


// fungsi ubah
function ubah($data) 
{
    $conn = koneksi();

    $id = $data['id'];
    $image = htmlspecialchars($data['image']);
    $nama = htmlspecialchars($data['nama']);
    $merk = htmlspecialchars($data['merk']);
    $spesifikasi = htmlspecialchars($data['spesifikasi']);
    $tahun = htmlspecialchars($data['tahun']);
    $harga = htmlspecialchars($data['harga']);
    $stok = htmlspecialchars($data['stok']);

    $query = "UPDATE kendaraan SET
                image = '$image', 
                nama = '$nama', 
                merk = '$merk', 
                spesifikasi = '$spesifikasi', 
                tahun = '$tahun', 
                harga = '$harga', 
                stok = '$stok'
            WHERE id = $id";

    mysqli_query($conn, $query) or die(mysqli_error($conn));
    echo  mysqli_error($conn);
    return mysqli_affected_rows($conn);
}


// fungsi login
function login($data)
{
    $conn = koneksi();

    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);

    if (query("SELECT * FROM users WHERE username = '$username' && password = '$password'"))  {
        // set session
        $_SESSION['login'] = true;

        header("Location: ../halaman/index.php");
        exit;
    } else {
        return [
            'error' => true,
            'pesan' => 'Username / Password Salah!'
        ];
    }
}


// fungsi registrasi
function registrasi($data)
{
    $conn = koneksi();

    $username = htmlspecialchars(strtolower($data['username']));
    $password1 = mysqli_real_escape_string($conn, $data['password1']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);


    // jika username / password kosong
    if(empty($username) || empty($password1) || empty($password2)) {
        echo "<script>
        alert('username / password tidak boleh kosong!');
        document.location.href = 'registrasi.php';
        </script>";
        return false;
    }

    // jika username / password sudah ada
    if (query("SELECT * FROM users WHERE username = '$username'")) {
        echo "<script>
        alert('username sudah terdaftar!');
        document.location.href = 'registrasi.php';
        </script>";
        return false;
    }

    // jika konfirmasi password tidak sesuai
    if ($password1 !== $password2) {
        echo "<script>
        alert('konfirmasi password tidak sesuai!');
        document.location.href = 'registrasi.php';
        </script>";
        return false;
    }

    // jika password < 5 digit
    // if(strlen($password1) < 5) {
    //     echo "<script>
    //     alert('password terlalu pendek!');
    //     document.location.href = 'registrasi.php';
    //     </script>";
    //     return false; 
    // }

    // jika username / password sudah sesuai
    // enkripsi password
    $password_baru = password_hash($password1, PASSWORD_DEFAULT);
    // insert ke tabel users
    $query = "INSERT INTO users
               VALUES 
                (null, '$username', '$password_baru')
            ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

?>

