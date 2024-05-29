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

<link rel="stylesheet" href="../css/login.css">

<body>
    <div class="container">
        <div class="content">
            <div class="profile"></div>
                <h3>Form Login</h3>
            <?php if (isset($login['error'])) : ?>
            <p><?= $login['pesan']; ?></p>
            <?php endif; ?>
            <form action="" method="POST">
          <div>
          <label for="username">Username :</label>
                <input type="text" name="username" id="username" autocomplete="off" required>
                <br>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password" autocomplete="off" required>
                <br>
                <button type="submit" name="login">Login</button>
                <br>
                <br>
                <a href="registrasi.php">Register</a>
            </div>  
                </form>        
        </div>
    </div>
</body>