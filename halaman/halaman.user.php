<?php require'../function/functions.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan_User</title>
    <!-- Link Bootstrapt -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Box Icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/halaman.user.css">
    <style>
        .card-img-top {
            height: 50px;
            width: 50px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <header>
       <div class="nav container">
        <!-- menu icon -->
        <i class='bx bx-menu' id="menu-icon"></i>
        <a href="" class="logo">Dealer's <span>Automotive</span></a>
        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#mobil">Product</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#motor">Detail</a></li>
            <li><a href="../login/logout.php">Logout</a></li>
            <!-- <form action="" method="POST">
                 <input type="text" name="keyword" size="40" placeholder="masukan keyword pencarian....." autocomplete="off" autofocus>
                <button type="submit" name="cari"class="btn btn-info">Cari</button>
             </form> -->
        </ul>
       </div> 
    </header>
    
     <!-- Home -->
    <section class="home" id="home">
    </section>

    <!-- Mobil -->
    <section class="mobil" id="mobil">
        <div class="heading">
            <span>Mobil</span>
            <h2>We have all types mobil</h2>
        </div>
        <div class="mobil-container container">
           <div class="box">
            <img src="../img/calya.jpg" alt="">
            <h2>Calya</h2>
           </div> 
           <div class="box">
            <img src="../img/avanza.png" alt="">
            <h2>Ertiga</h2>
           </div> 
           <div class="box">
            <img src="../img/ertiga.png" alt="">
            <h2>Avanza</h2>
           </div> 
           <div class="box">
            <img src="../img/calya.jpg" alt="">
            <h2>Calya</h2>
           </div> 
           <div class="box">
            <img src="../img/avanza.png" alt="">
            <h2>Ertiga</h2>
           </div> 
           <div class="box">
            <img src="../img/ertiga.png" alt="">
            <h2>Avanza</h2>
           </div> 
        </div>
    </section>

    <!-- About -->
    <section class="about container" id="about">
        <img src="../img/mbl.jpg" alt="">
        <div class="about-text">
            <span>About Us</span>
            <h2>Dealer's Automotive <br> Quality Mobil dan Motor</h2>
            <p>Website dealer motor dan mobil ini adalah sebuah website yang dirancang khusus untuk menampilkan sebuah product motor dan mobil.</p>
            <a href="#" class="btn">Learn</a>
        </div>
    </section>

    <!-- Motor -->
    <section class="motor" id="motor">
        <div class="heading">
            <span>Our Motor</span>
            <h2>Semua Jenis Motor</h2>
            <p>Berikut ini beberapa jenis motor dan spesifikasinya</p>
        </div>
        <!-- <div class="box">
            <img src="../img/aerox.png" alt="">
            <span>Mei 2024</span>
            <h3>Aerox 155</h3>
            <p> Deskripsi</p>
            <a href="detail.php" class="btn">Read More<i class='bx bx-right-arrow-alt'></i></a>
        </div>
        <div class="box">
            <img src="../img/genio.png" alt="">
            <span>Mei 2024</span>
            <h3>Genio</h3>
            <p>Deskripsi </p>
            <a href="detail.php" class="btn">Read More<i class='bx bx-right-arrow-alt'></i></a>
        </div>
        <div class="box">
            <img src="../img/grand.png" alt="">
            <span>Mei 2024</span>
            <h3>Grand</h3>
            <p> Deskripsi</p>
            <a href="detail.php" class="btn">Read More<i class='bx bx-right-arrow-alt'></i></a>
        </div> -->
        
        <?php
        $product = query("SELECT * FROM kendaraan");
        
        foreach ($product as $p) : ?>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
               <img src="../img/<?= $p["image"]; ?>" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?= $p["nama"]; ?></h5>
                    <p class><?= $p["harga"]; ?></p>
                    <a href="detail.php?id=<?= $p['id']; ?>" class="btn btn-danger">Read More</a>
                </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    

<!-- <section class="contact" id="contact">
    <div class="contact-in">
        <div class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.201034972413!2d107.59067007403473!3d-6.86649666717979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6be3e8a0c49%3A0x730028bf4627def4!2sUniversitas%20Pasundan!5e0!3m2!1sid!2sid!4v1717485151532!5m2!1sid!2sid" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
            <div class="contact-form">
                <h1>Contact Us</h1>
                <form>
                    <input type="text" placeholder="Name" class="contact-form-txt" />
                    <input type="text" placeholder="Email" class="contact-form-txt"/>
                    <textarea placeholder="Message" class="contact-form-textarea"></textarea>
                    <input type="submit" name="Submit" class="btn"/>
                </form>
            </div>
    </div>
</section> -->
<br>
<?php require'../views/partials/footer.user.php' ?>
    
</body>
</html>

   
    
    
    
  
  