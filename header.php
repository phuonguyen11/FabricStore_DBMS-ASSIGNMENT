<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0">
    <title>Là Việt Store</title>
    <!--Boostrap CDN-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--Owl Carousel-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--done library-->
    <!--Custom CSS-->
    <link rel = "stylesheet" href="style.css">
    <?php
    require('./functions.php');
    ?>


</head>
<body>
    <header id = "header">
        <div class="fixed-top">
        <div class ="strip   d-flex justify-content-between px-4 py-1 bg-light">
            <p class ="font-rale font-size-12 text-black-50 m-0">Khách: Bành Ngọc Phương Uyên</p>
            <div class = "font-rale font-size-14">
                <a href ="#" class = "px-3 border-right border-left text-dark">Đăng Xuất</a>
                <a href ="#" class = "px-3 border-right text-dark">Giỏ Hàng (0)</a>

            </div>
        </div>
        <!--Navigation bar-->

        <nav class="navbar navbar-expand-lg navbar-dark color-primary-bg">
            <a class="navbar-brand font-brand font-size-30" href="#">Là Việt</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav m-auto">
                <li class="nav-item active ">
                    <a class="nav-link font-rale font-size-16" href="#banner-area">Trang chủ</a>
                  </li>
                <li class="nav-item active">
                  <a class="nav-link font-rale font-size-16" href="#">Về Là Việt</a>
                </li>
                <li class="nav-item dropdown active">
                  <a class="nav-link dropdown-toggle font-rale font-size-16" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sản Phẩm
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Vải Kate</a>
                    <a class="dropdown-item" href="#">Vải Cotton</a>
                    <a class="dropdown-item" href="#">Vải Caro</a>
                    <a class="dropdown-item" href="#">Vải lụa</a>
                    <a class="dropdown-item" href="#">Vải Djenz</a>


                  </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link active font-rale font-size-16" href="#new-arrivals">Sản Phẩm Mới</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active font-rale font-size-16" href="#">Nhật Ký</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active font-rale font-size-16" href="#">Liên Hệ</a>
                  </li>
              </ul>
              <form action = "#" class = "font-size-14 font-rale">
                <a href="#" class = "py-2  badge rounded-pill color-icon-bg">
                    <span class ="font-size-16 px-2 text-dark"><i class="fas fa-shopping-cart" ></i></span>
                    <span class ="px-3 py-2  text-dark font-size-14">0</span>
                </a>
              </form>
            </div>

          </nav>
        </div>
    </header>
    <main id = "main-site">
