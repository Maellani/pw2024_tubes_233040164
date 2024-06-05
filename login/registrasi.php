<?php
require'../function/functions.php';

if (isset($_POST['registrasi'])) {
    if(registrasi($_POST) > 0 ) {
        echo "<script>
        alert('user baru berhasil di tambahkan, silahkan login!');
        document.location.href = 'login.php';
        </script>";
    } else {
        echo 'user gagal ditambahkan!';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/registrasi.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

<div class="register">
    <h1>Form Registrasi</h1>
<form action="" method="POST">
    <div class="input-box">
        <input type="text" name="username" placeholder="Username" autofocus autocomplete="off" required>
        <i class='bx bxs-user'></i>
    </div>
    <div class="input-box">
        <input type="password" name="password1" placeholder="Password" autocomplete="off" required>
        <i class='bx bxs-lock-alt'></i>
    </div>
    <div class="input-box">
        <input type="password" name="password2" placeholder="Konfirmasi Password" autocomplete="off" required>
        <i class='bx bxs-lock-alt'></i>
    </div>
    <button type="submit" name="registrasi" class="btn">Register</button>
    <div class="login">
        <p>Have an account? <a href="login.php">Login</a></p>
    </div>
</form>

</body>
</html>