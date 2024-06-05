<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman_Admin</title>
    <!-- <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 50vh;
            width: 50%;
            color: white;
            margin: auto;
        }
        
        .content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 10px;
            text-align: center;
            background-color: gray;
            width: 80%;
            height: 80%;
            font-size: 1rem;
            font-family: 'Segoe UI', Tahoma, 'Geneva', Verdana, sans-serif;
            border-radius: 50px;
        }

        button {
            font-size: 1rem;
            background-color: lightblue;
            border-radius: 50px;
            padding: 5px;
            border: 2px solid black;
            width: 100px;
            cursor: pointer;
        }

        a {
            text-decoration: none;
            color: black;
        }  

    </style> -->
        <style>
        * {
        /* margin: 0;
        padding: 0;
        box-sizing: border-box; */
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
        /* background: transparent; */
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
