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


// fungsi upload
function upload()
{
  $nama_file = $_FILES['image']['name'];
  $tipe_file = $_FILES['image']['type'];   
  $ukuran_file = $_FILES['image']['size'];   
  $error = $_FILES['image']['error'];   
  $tmp_file = $_FILES['image']['tmp_name']; 
  
  // ketika tidak ada gambar yang dipilih
  if ($error == 4) {
    echo "<script>
            alert('pilih gambar terlebih dahulu!');
        </script>";
    return false;
  }

  // cek ekstensi file
  $daftar_image = ['jpg', 'jpeg', 'png'];
  $ekstensi_file = explode('.', $nama_file);
  $ekstensi_file = strtolower(end($ekstensi_file));
  if(!in_array($ekstensi_file, $daftar_image)) {
    echo "<script>
            alert('yang anda pilih bukan gambar!');
        </script>";
    return false;
  }

  // cek type file
  if ($tipe_file != 'image/jpeg' &&  $tipe_file != 'image/png') {
    echo "<script>
            alert('yang anda pilih bukan gambar!');
        </script>";
    return false;
  } 

  // cek ukuran file max 5Mb == 5000000 
  if($ukuran_file > 5000000) {
    echo "<script>
            alert('ukuran terlalu besar!');
        </script>";
    return false;
  }

  // lolos pengecekan 
  // siap upload file
  // generate nama file baru
  $nama_file_baru = uniqid();
  $nama_file_baru .= '.';
  $nama_file_baru .= $ekstensi_file;
  move_uploaded_file($tmp_file, '../img/' . $nama_file_baru);

  return $nama_file_baru;
}


// fungsi tambah
function tambah($data) 
{
    $conn = koneksi();

    //upload gambar (ketika function tambah bernilai false)
    $image = upload();
    if (!$image) {
        return false;
    }


    // $image = htmlspecialchars($data['image']);
    $nama = htmlspecialchars($data['nama']);
    $merk = htmlspecialchars($data['merk']);
    $spesifikasi = htmlspecialchars($data['spesifikasi']);
    $tahun = htmlspecialchars($data['tahun']);
    $harga = htmlspecialchars($data['harga']);
    $stok = htmlspecialchars($data['stok']);

    $query = "INSERT INTO kendaraan(image,nama, merk, spesifikasi, tahun, harga, stokx  )
                VALUES('$image', '$nama', '$merk', '$spesifikasi', '$tahun', '$harga', '$stok')
            ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    echo  mysqli_error($conn);
    return mysqli_affected_rows($conn);
}

// fungsi keyword cari
function cari($keyword) {

    // var_dump($keyword); die();
    $conn = koneksi();

    $query = "SELECT * FROM kendaraan
                WHERE 
                nama LIKE '%$keyword%' OR 
                merk LIKE '%$keyword%' OR
                spesifikasi LIKE '%$keyword%' OR
                tahun LIKE '%$keyword%' OR
                harga LIKE '%$keyword%' OR
                stok LIKE '%$keyword%' 
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

    // cek dulu username
    if ($users = query("SELECT * FROM users WHERE username = '$username'")) {
        // cek password
        if (password_verify($password, $users['password'])) {
            // set session
            $level = query("SELECT level FROM users WHERE username = '$username'")["level"];

            $_SESSION['level'] = $level;
            $_SESSION['login'] = true;
            
            if ($level === "Admin") {
                header("Location: ../halaman/dashboard.php");
                exit;
            } else {
                header("Location: ../halaman/halaman.user.php");
                exit;
            }
        }
     } //jika gagal pasti akan ke sini
         return [
             'error' => true,
            'pesan' => 'Username / Password Salah!'
         ];
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
        </>";
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
               (username, password) VALUES
                ('$username', '$password_baru')
            ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

?>

