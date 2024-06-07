<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman_Admin</title>
    <style>
        * {
        font-family: "Poppins", sans-serif;
        }

        body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: url(../img/bg.jpg);
        }
        .container {
        width: 500px;
        background: transparent;
        border: 2px solid;
        backdrop-filter: blur(10px);
        /* color: #fff; */
        border-radius: 12px;
        padding: 50px 50px;
        }

        .container h1 {
        font-size: 36px;
        text-align: center;
        }

        .container .btn {
        width: 100%;
        height: 45px;
        background: #fff;
        border: none;
        outline: none;
        border-radius: 40px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        cursor: pointer;
        font-size: 16px;
        color: #333;
        font-weight: 600;
        }
        .container a {
        color: black;
        text-decoration: none;
        font-weight: 600;
        }

        .container a:hover {
        text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat datang Admin</h1>        
        <button type="submit" class="btn"><a href="index.php">Home</a></button>
    </div>
</body>
</html>
