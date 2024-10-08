<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://kit.fontawesome.com/1147679ae7.js" crossorigin="anonynous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="./image/logo_store.png" type="image/icon type">
    <title>Sneaker Store | HomePage</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="image/logo-sneaker-removebg.png" width="100%">
        </div>
        <div class="menu">
            <li><a href="index.php">HOME PAGE</a></li>
            <li><a href="">PRODUCT</a>
                <ul class="sub-menu">
                    <li><a href="nike_product.html">NIKE</a></li>
                    <li><a href="adidas_product.html">ADIDAS</a></li>
                    <li><a href="vans_product.html">VANS</a></li>
                </ul>
            </li>
            <li><a href="about.html">ABOUT</a></li>
            <li><a href="contact.html">CONTACT</a></li>
        </div>
        <div class="others">
            <li><input placeholder="Tìm kiếm" type="text">
                <i class="fa-light fa-magnifying-glass"></i></li>
           <li> <a class="fas fa-user" href="user.php" ></a></li>
           <li> <a class="fas fa-shopping-cart" href=""></a></li>
           <li> <a class="fa fa-sign-out" href="logout.php"></a></li>
        </div>
    </header>
    <!---------------------------------slider------------------------>
    <section id="Slider">
        <div class="aspect-ratio-169">
            <img src="image/img2.jpg">
            <img src="image/img1.jpg">
            <img src="image/img5.jpg">
            <img src="image/img3.jpg" width="900%">
            <img src="image/img4.jpg">
        </div>
        <div class="dot-container">
            <div class="dot active"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </section>
    <script src="./js/script.js"></script>
</body>
</section>
 <!------------------------- footer----------------------------------------->
<footer>
    <div class="footer-container">
        <div class="sec aboutus">
            <h2>About us</h2>
            <p>We're from VanLang University majoring in IT</p>
            <ul class="sci">
                <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href=""><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        <div class="sec quicklinks">
            <h2>Quick Links</h2>
            <ul>
                <li><a href="about.html">About</a></li>
                <li><a href="">FAQ</a></li>
                <li><a href="">Privacy Policu</a></li>
                <li><a href="">Help</a></li>
                <li><a href="">Terms & Conditions</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </div>
        <div class="sec quicklinks">
            <h2>Shop</h2>
            <ul>
                <li><a href="nike_product.html">Nike</a></li>
                <li><a href="adidas_product.html">Adidas</a></li>
                <li><a href="vans_product.html">Vans</a></li>
            </ul>
        </div>
        <div class="sec contact">
            <h2>Contact Us</h2>
            <ul class="info">
                <li>
                    <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                    <span>Address: Alley 69/68 E. Dang Thuy Tram, Ward 13, Binh Thanh, Ho Chi Minh City</span>
                </li>
                <li>
                    <span><i class="fa fa-phone"></i></span>
                    <p><a href="tel:+84 12 345 6789">Phone: +84 12 345 6789</a></p>
                </li>
                <li>
                    <span><i class="fa fa-envelope"></i></span>
                    <p><a href="emailto:@vanlanguni.edu.vn">@vanlanguni.edu.vn</a></p>
                </li>
            </ul>
        </div>
    </div>
</footer>
<div class="copyrightText">
    <p>Project Team @2022</p>
</div>
<!-- --------------------End--------------------- -->
</html>