<?php 
require'../function/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dealer's</title>
    <!-- Link Bootstrapt -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Box Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="../css/halaman.user.css">
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
            <li><a href="#product">Product</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#detail">Details</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="../login/logout.php"><i class="fas fa-user"></i></a></li>
        </ul>
       </div> 
    </header>
    
     <!-- Home -->
    <section class="home" id="home">
    </section>

    <!-- Product -->
    <section class="product" id="product">
        <div class="heading">
            <span>Product</span>
            <h2>We have all types Mobil</h2>
        </div>
        <div class="product-container container">
           <div class="box">
            <img src="../img/calya.jpg" alt="">
            <h2>Calya</h2>
           </div> 
           <div class="box">
            <img src="../img/66627feb73e00.png" alt="">
            <h2>Innova</h2>
           </div> 
           <div class="box">
            <img src="../img/avanza.png" alt="">
            <h2>Avanza</h2>
           </div> 
           <div class="box">
            <img src="../img/6662808ce5bcf.png" alt="">
            <h2>Ertiga</h2>
           </div>
           <div class="box">
            <img src="../img/666280cd2c104.jpg" alt="">
            <h2>Vitara</h2>
           </div>  
           <div class="box">
            <img src="../img/6662803655ee7.png" alt="">
            <h2>Alphard</h2>
           </div>  
        </div>
    </section>

    <!-- About -->
    <section class="about container" id="about">
        <img src="../img/about.jpg" alt="" width="700px">
        <div class="about-text">
            <span>About Us</span>
            <h2>Dealer's Automotive <br> Quality Mobil</h2>
            <p>Website dealer mobil ini adalah sebuah website yang dirancang khusus untuk menampilkan sebuah product dari beberapa mobil.</p>
        </div>
    </section>

    <!-- Details -->
    <section class="detail" id="detail">
        <div class="heading">
            <span>Our Details</span>
            <h2>Semua Jenis Mobil</h2>
            <p>Berikut ini detail beberapa jenis mobil dan spesifikasinya</p>
        </div>
        <div class="container">
          <div class="row">
            <?php
                $product = query("SELECT * FROM kendaraan");
                    foreach ($product as $p): ?>
                        <div class="col pt-3 pb-4">
                            <div class="card"
                                style="width: 15rem; border-radius: 20px ; position: relative; overflow: hidden;">
                                <div class="img-card">
                                    <img src="../img/<?= $p["image"]; ?>" class="card-img-top " alt="..."
                                        style="width:100%; height:205px;">
                                </div>
                                <div class="card-body">
                                <h5 class="card-title"><?= $p["nama"]; ?></h5>
                                    <div class="row">
                                        <div class="col text-stap"><span><?= $p["harga"]; ?></span></div>
                                    </div>
                                  <a href="detail.php?id=<?= $p['id']; ?>" class="btn btn-danger">Read More</a></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    </div>
                    </div>
          
    <!--Contact -->
    <section class="container" id="contact">
        <div class="container">
            <h2 class="h2-responsive section-heading text-center my-2">Contact Us</h2>
            <p class="text-center w-responsive mx-auto mb-1">Untuk informasi lebih lanjut bisa menghubungi nomor yang tertera.</p>
          </div>
          <section class="mb-4">
            <div class="row">
              <div class="col-md-6 mb-md-0 mb-5">
                <form id="contact-form" name="contact-form" action="" method="POST">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="md-form mb-0">
                        <label for="name" class="">Your name</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter Name" autofocus autocomplete="off"/>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="md-form mb-0">
                        <label for="email" class="">Your email</label>
                        <input type="text" id="email" name="email" class="form-control" placeholder="Enter Email" autocomplete="off"/>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 pt-3">
                      <div class="md-form mb-0">
                        <label for="subject" class="">Subject</label>
                        <input type="text" id="subject" name="subject" class="form-control" placeholder="Enter Subject" autocomplete="off" />
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 pt-3">
                      <div class="md-form">
                        <label for="message">Your message</label>
                        <textarea type="text" id="message" name="message" rows="6" class="form-control md-textarea" placeholder="Message" autocomplete="off"></textarea>
                      </div>
                    </div>
                  </div>
                </form>
                <div class="text-center text-md-left mt-3">
                  <a class="btn btn-danger" onclick="document.getElementById('contact-form').submit();">Send</a>
                </div>
                <div class="status"></div>
              </div>
              <div class="col-md-6 mt-3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.201034972413!2d107.59067007403473!3d-6.86649666717979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6be3e8a0c49%3A0x730028bf4627def4!2sUniversitas%20Pasundan!5e0!3m2!1sid!2sid!4v1717485151532!5m2!1sid!2sid" width="620" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
            </div>
          </section>
    </section>

    <!--Footer-->
    <footer class="text-center text-lg-start bg-dark text-white pt-4">
          <section class="footer">
            <div class="container text-center text-md-start mt-5">
              <div class="row mt-3">
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                  <h6 class="text-uppercase fw-bold mb-4"><i class="fab fa-sketch"></i> Dealer's Automotive</h6>
                  <p>Website dealer mobil ini adalah sebuah website yang dirancang khusus untuk menampilkan sebuah product dari beberapa mobil.</p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                  <h6 class="text-uppercase fw-bold mb-4">Products</h6>
                  <p><a href="index.php" class="text-reset">Mobil</a></p>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                  <h6 class="text-uppercase fw-bold mb-4">Useful links</h6>
                  <p><a href="#home" class="text-reset">Home</a></p>
                  <p><a href="#product" class="text-reset">Product</a></p>
                  <p><a href="#about" class="text-reset">About</a></p>
                  <p><a href="#detail" class="text-reset">Detail</a></p>
                  <p><a href="#contact" class="text-reset">Contact</a></p>
                  <p><a href="logout.php" class="text-reset">Logout</a></p>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                  <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                  <p><i class="fa fa-home me-3"></i>Bandung, Jawa Barat, Indonesia</p>
                  <p><i class="fa fa-envelope me-3"></i>dealers@gmail.com</p>
                  <p>
                    <a href="https://web.whatsapp.com/"><i class="fa fa-phone me-3"></i>+62 855-9999-9999</a>
                  </p>
                </div>
              </div>
            </div>
    </section>

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05)">©Created by Dealer's Automotive</a></div>
    <!-- Copyright -->
    </footer>
    
</body>
</html>

   
    
    
    
  
  