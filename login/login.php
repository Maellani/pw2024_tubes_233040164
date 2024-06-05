<?php
session_start();

if (isset($_SESSION['login'])) {
    header("Location: ../halaman/index.php");
    exit;
}

require'../function/functions.php';

// ketika tombol login ditekan
if (isset($_POST['login'])) {
    $login = login($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="login">
        <form action="" method="POST">
            <h1>Login</h1>
            <?php if (isset($login['error'])) : ?>
            <p><?= $login['pesan']; ?></p>
            <?php endif; ?>
            <div class="input-box">
                <input type="text" name="username" id="username" placeholder="Username" autofocus autocomplete="off" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" id="password" placeholder="Password" autocomplete="off" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Remember Me</label>
                <a href="#">Forgot Password</a>
            </div>
            <button type="submit" name="login" class="btn">Login</button>
            <div class="register">
                <p>Don't have an account? <a href="registrasi.php">Register</a></p>
            </div>
        </form>
    </div>
</body>
</html>