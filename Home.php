<?php 
session_start();

if(!$_SESSION['berhasil']) {
    header("Location: login.php");
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="darkmodeHome.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
    <link rel="shortcut icon" href="favicon_io/favicon.ico">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Welcome to Library.io</title>

    <style>
        html{
            scroll-behavior: smooth;
        }
        .carousel-caption{
            position: absolute;
            bottom: 200px;
            color:#f7f7f7;
        }
        .carousel-caption h5{
            font-size: 40px;
            font-weight: 750;
        }
        .ho:hover{
            text-shadow: none !important;
            box-sizing: border-box !important;
            cursor: pointer !important;
            transition: all 1s ease !important;
            -webkit-transform: scale(1.1) !important;
            -ms-transform: scale(1.1) !important;
            transform: scale(1.1) !important;
            z-index: 2;
        }
        #TopBtn{
            position: fixed;
            bottom: 90px;
            right: 10px;
            width: 40px;
            height: 35px;
            border: none;
        }
        .setan{
            width: 40px;
            height: 30px;
            background-color: #C9CCD5;
            border-radius: 40px 40px 0 0;
            position: relative;
            cursor: pointer;
            animation: floating 2s infinite ease-in-out;
        }
        @keyframes floating{
            50%{
                transform: translateY(-30px);
            }
        }
        .muka{
            width:23px;
            position: absolute;
            top:10px;
            left: calc(5px);
        }
        .mata{
            height: 24px;
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin-bottom: 12px;
        }
        .mata span{
            width: 6px;
            height:6px;
            background-color: black;
            border-radius: 50%;
            transition: .3s linear;
        }
        .setan:hover .eyes span{
            height: 1px;
        }
        .kaki{
            position: absolute;
            width: 100%;
            bottom: -10px;
            left: 0px;
            display:flex;
        }
        .kaki span{
            flex: 1;
            height: 20px;
            background-color: #C9CCD5;
            border-radius: 0 0 20px 20px;
        }
        .kaki span:first-child{
            border-radius: 0 0 20px 12px;
        }
        .kaki span:last-child{
            border-radius: 0 0 12px 20px;
        }
        @media screen and (max-width:1500px){
            .carousel-caption{
                padding-bottom: 1%;
            }
        }
        @media screen and (max-width:1200px){
            .carousel-caption h1{
                font-size: 18px;
            }
            .carousel-caption p{
                font-size: 15px;
            }
        }
        @media screen and (max-width:992px){
            .carousel-caption p{
                display: none;
            }
        }
        @media screen and (max-width:768px){
            .carousel-caption h1{
                font-size: 23px;
            }
            .carousel-caption {
                padding-bottom: 5%;
            }
        }
        @media screen and (max-width:576px){
            #carouselExampleCaptions{
                display: none;
            }
            #tentang{
                margin-top:50px;
            }
        }
    </style>

</head>
<body style="background-color: #DADDFC;">
    <!---navbar--->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color:#DDDDDD;">
        <div class="container">
            <a class="navbar-brand" style="font-size:45px; color:#0DAA27; font-family: Poetsen One;">Library.io</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item" style="margin: 5px;">
                            <a class="nav-link active" style="font-family: Arial Rounded Mt; font-size:20px;"aria-current="page" href="#home">Beranda</a>
                        </li>
                        <li class="nav-item" style="margin: 5px;">
                            <a class="nav-link active" style="font-family: Arial Rounded Mt; font-size:20px;"aria-current="page" href="#tentang">Tentang</a>
                        </li>
                        <li class="nav-item" style="margin: 5px;">
                            <a class="nav-link active" style="font-family: Arial Rounded Mt; font-size:20px;"aria-current="page" href="#tim">Tim</a>
                        </li>
                        </li>
                        <li class="nav-item" style="margin: 5px;">
                            <a class="nav-link active" style="font-family: Arial Rounded Mt; font-size:20px;"aria-current="page" href="#kategori">Kategori Buku</a>
                        </li>
                        <li class="nav-item" style="margin: 5px;">
                            <a class="nav-link active" style="font-family: Arial Rounded Mt; font-size:20px;"aria-current="page" href="#contact">Kontak</a>
                        </li>
                        <li class="nav-item dropdown" style="margin: 5px;">
                            <a class="nav-link dropdown-toggle" style="font-family: Arial Rounded Mt; font-size:20px;" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profile</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <div class="custom-control custom-switch" style="margin-left: 10px;">
                                    <input type="checkbox" class="custom-control-input" id="darkSwitch">
                                    <label class="custom-control-label" for="darkSwitch" style="font-family: Arial Rounded MT; color:#519872;">Dark mode</label>
                                </div>
                                <li><a class="dropdown-item" style="font-family: Arial Rounded Mt;" href="index.php">Log Out</a></li>
                            </ul>
                        </li>
                        <li class="nav-item" style="margin: 5px;">
                            <a class="btn" style="background-color:#0DAA27;" href="https://github.com/AlyaKagerou"><i class="bi bi-github" style="color:#000; margin: 1px; font-family: Arial Rounded MT;">   Github</i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!---navbar--->

    <!--Carousel Image-->
    <section id="home">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/buku1.jpg" class="d-block w-100 img-fluid" style="width:400px; height:600px;">
                <div class="carousel-caption d-md-block">
                    <h5>Selamat Datang di Library.io</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                    <div class="slider-btn">
                        <button class="btn btn" style="font-family: Arial Rounded MT; background-color:#0DAA27;">Get Started</button>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/buku2.jpg" class="d-block w-100 img-fluid" style="width:400px; height:600px;">
                <div class="carousel-caption d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                    <div class="slider-btn">
                        <button class="btn btn" style="font-family: Arial Rounded MT; background-color:#0DAA27;">Get Started</button>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/buku3.jpg" class="d-block w-100 img-fluid" style="width:400px; height:600px;">
                <div class="carousel-caption d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                    <div class="slider-btn">
                        <button class="btn btn" style="font-family: Arial Rounded MT; background-color:#0DAA27;">Get Started</button>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    </section>
    <!--Carousel Image-->

    <!--tentang-->
    <section id="tentang">
        <div class="container">
            <h1 class="display-1 text-center" style="padding-top: 6rem; font-family: Arial Rounded MT; font-size:40px; color:#0DAA27;">Tentang</h1>
        </div>
        <div class="container">
            <div class="row justify-content-center" style="padding-top: 1rem;">
                <div class="col-md-6 text-lg-start order-2" data-aos="fade-right" data-aos-dudration="1000" data-aos-delay="200">
                    <p class="h6">Di Library.io,  menyediakan buku dari berbagai kategori seperti Novel, Komik, Fiksi, Non Fiksi, Horor, dan lain-lain</p>
                </div>
                <div class="col-lg-5 col-md-6 offset-lg-1" data-aos="fade-left" data-aos-dudration="1000" data-aos-delay="200">
                    <p class="h6">Library.io adalah sebuah website perpustakaan berbasis web yang dapat memberikan akses untuk membaca secara Online. dan juga terdapat fitur download yang bisa diakses jika para pengguna dapat membaca secara Offline.</p>
                </div>
            </div>
        </div>
    </section>
    <!--tentang-->

    <!--tim-->
    <section id="tim">
        <div class="container">
            <h1 class="display-1 text-center" style="margin: 20px; padding-top: 6rem; font-family: Arial Rounded MT; font-size:40px; color:#0DAA27;">Tim Kami</h1>
        </div>
        <div class="container">
            <div class="row" style="padding-top: 4rem;">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="ho card" style="margin: 13px;" data-aos="fade-up" data-aos-duration="1500">
                        <div class="card-body">
                            <h5 class="card-title text-center">Alya Zalfa</h5>
                            <p class="card-text text-center">Web Design Developer</p>
                            <div class="social">
                                <ul class="list-inline text-center">
                                    <li class="list-inline-item"><a href=""><i class="bi bi-facebook" style="color:#113CFC; margin: 10px;"></i></a></li>
                                    <li class="list-inline-item"><a href=""><i class="bi bi-whatsapp" style="color:#49FF00; margin: 10px;"></i></a></li>
                                    <li class="list-inline-item"><a href=""><i class="bi bi-instagram" style="color:palevioletred; margin: 10px;"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="ho card" style="margin: 13px;" data-aos="fade-up" data-aos-duration="2000">
                        <div class="card-body">
                            <h5 class="card-title text-center">Annisa Nur A. A.</h5>
                            <p class="card-text text-center">Web Design Developer</p>
                            <div class="social">
                                <ul class="list-inline text-center">
                                    <li class="list-inline-item"><a href=""><i class="bi bi-facebook" style="color:#113CFC; margin: 10px;"></i></a></li>
                                    <li class="list-inline-item"><a href=""><i class="bi bi-whatsapp" style="color:#49FF00; margin: 10px;"></i></a></li>
                                    <li class="list-inline-item"><a href=""><i class="bi bi-instagram" style="color:palevioletred; margin: 10px;"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="ho card" style="margin: 13px;" data-aos="fade-up" data-aos-duration="2500">
                        <div class="card-body">
                            <h5 class="card-title text-center">Hanafi Ar-Rasyid</h5>
                            <p class="card-text text-center">Web Design Developer</p>
                            <div class="social">
                                <ul class="list-inline text-center">
                                    <li class="list-inline-item"><a href=""><i class="bi bi-facebook" style="color:#113CFC; margin: 10px;"></i></a></li>
                                    <li class="list-inline-item"><a href=""><i class="bi bi-whatsapp" style="color:#49FF00; margin: 10px;"></i></a></li>
                                    <li class="list-inline-item"><a href=""><i class="bi bi-instagram" style="color:palevioletred; margin: 10px;"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="ho card" style="margin: 13px;" data-aos="fade-up" data-aos-duration="3000">
                        <div class="card-body">
                            <h5 class="card-title text-center">Rahmat Sadeli</h5>
                            <p class="card-text text-center">Web Design Developer</p>
                            <div class="social">
                                <ul class="list-inline text-center">
                                    <li class="list-inline-item"><a href=""><i class="bi bi-facebook" style="color:#113CFC; margin: 10px;"></i></a></li>
                                    <li class="list-inline-item"><a href=""><i class="bi bi-whatsapp" style="color:#49FF00; margin: 10px;"></i></a></li>
                                    <li class="list-inline-item"><a href=""><i class="bi bi-instagram" style="color:palevioletred; margin: 10px;"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--tim-->

    <!--Kartu Kategori Buku-->
    <section id="kategori">
        <div class="conteiner">
            <h1 class="display-1 text-center" style="margin: 40px; padding-top: 6rem; font-size:40px; font-family: Arial Rounded MT; color:#0DAA27;">Kategori Buku</h1>
        </div>
        <div class="container">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="card">
                        <img src="image/gambarbuku1.jpg" class="img-fluid" style="padding: 7px;">
                        <div class="card-body">
                            <h5 class="card-title">Novel</h5>
                            <a href="KatalogNovel.html" class="btn btn" style="font-family: Arial Rounded MT; background-color:#0DAA27;">Lihat Katalog</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                <div class="card">
                        <img src="image/gambarbuku2.jpg" class="img-fluid" style="padding: 7px;">
                        <div class="card-body">
                            <h5 class="card-title">Fiksi</h5>
                            <a href="KatalogFiksi.html" class="btn btn" style="font-family: Arial Rounded MT; background-color:#0DAA27;">Lihat Katalog</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                <div class="card">
                        <img src="image/gambarbuku3.jpg" class="img-fluid" style="padding: 7px;">
                        <div class="card-body">
                            <h5 class="card-title">Non Fiksi</h5>
                            <a href="KatalogNonfiksi.html" class="btn btn" style="font-family: Arial Rounded MT; background-color:#0DAA27;">Lihat Katalog</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                <div class="card">
                        <img src="image/gambarbuku4.jpg" class="img-fluid" style="padding:7px;">
                        <div class="card-body">
                            <h5 class="card-title">Horor</h5>
                            <a href="" class="btn btn" style="font-family: Arial Rounded MT; background-color:#0DAA27;">Lihat Katalog</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                <div class="card">
                        <img src="image/gambarbuku6.jpg" class="img-fluid" style="padding: 7px;">
                        <div class="card-body">
                            <h5 class="card-title">Biografi</h5>
                            <a href="" class="btn btn" style="font-family: Arial Rounded MT; background-color:#0DAA27;">Lihat Katalog</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                <div class="card">
                        <img src="image/gambarbuku5.jpg" class="img-fluid" style="padding: 7px;">
                        <div class="card-body">
                            <h5 class="card-title">Romantis</h5>
                            <a href="" class="btn btn" style="font-family: Arial Rounded MT; background-color:#0DAA27;">Lihat Katalog</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                <div class="card">
                        <img src="image/gambarbuku8.jpg" class="img-fluid" style="padding: 7px;">
                        <div class="card-body">
                            <h5 class="card-title">Anak-anak</h5>
                            <a href="" class="btn btn" style="font-family: Arial Rounded MT; background-color:#0DAA27;">Lihat Katalog</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                <div class="card">
                        <img src="image/gambarbuku7.jpg" class="img-fluid" style="padding: 7px;">
                        <div class="card-body">
                            <h5 class="card-title">Dongeng</h5>
                            <a href="" class="btn btn" style="font-family: Arial Rounded MT; background-color:#0DAA27;">Lihat Katalog</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                <div class="card">
                        <img src="image/gambarbuku9.jpg" class="img-fluid" style="padding: 7px;">
                        <div class="card-body">
                            <h5 class="card-title">Astronomi</h5>
                            <a href="" class="btn btn" style="font-family: Arial Rounded MT; background-color:#0DAA27;">Lihat Katalog</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                <div class="card">
                        <img src="image/gambarbuku11.jpg" class="img-fluid" style="padding: 7px;">
                        <div class="card-body">
                            <h5 class="card-title">Komik</h5>
                            <a href="" class="btn btn" style="font-family: Arial Rounded MT; background-color:#0DAA27;">Lihat Katalog</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                <div class="card">
                        <img src="image/gambarbuku12.jpg" class="img-fluid" style="padding: 7px;">
                        <div class="card-body">
                            <h5 class="card-title">Medis</h5>
                            <a href="" class="btn btn" style="font-family: Arial Rounded MT; background-color:#0DAA27;">Lihat Katalog</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                <div class="card">
                        <img src="image/gambarbuku10.jpg" class="img-fluid" style="padding: 7px;">
                        <div class="card-body">
                            <h5 class="card-title">Humaniora</h5>
                            <a href="" class="btn btn" style="font-family: Arial Rounded MT; background-color:#0DAA27;">Lihat Katalog</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Kartu Kategori Buku-->

    <!--Kontak-->
    <section id="contact">
        <div class="container">
            <h1 class="display-1 text-center"  style="margin: 40px; padding-top: 6rem; font-family: Arial Rounded MT; color:#0DAA27; font-size: 40px;">Kontak</h1>
            <div class="row justify-content-center">
                <div class="col-md-6" style="padding: 30px;">
                    <form name="Library.io-contact-form">
                        <div class="mb-3">
                            <label for="nama" class="h6 form-label" style="font-family:Arial Rounded MT;">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="h6 form-label" style="font-family:Arial Rounded MT;">Email</label>
                            <input type="email" class="h6 form-control" id="email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="h6 form-label" style="font-family:Arial Rounded MT;">Pesan</label>
                            <textarea class="form-control" id="pesan" rows="3" name="pesan"></textarea>
                        </div>
                        <button type="submit" class="btn btn" style="font-family:Arial Rounded MT; background-color:#0DAA27;">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--Kontak-->

    <!--Button Back To Top-->
    <button id="TopBtn" class="setan">
        <div class="muka">
            <div class="mata">
                <span></span>
                <span></span>
            </div>
            <div class="mulut"></div>
        </div>

        <div class="kaki">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </button>
    <!--Button Back To Top-->

    <!--footer-->
    <footer class="p-2 text-center" style="background-color: #4E9F3D; margin-top: 85px;">
      <p class="text-lg-center" style="font-family: Montserrat; font-size: 18px; color: black;">&copy 2021 All reserved | Design by Zhalz&Friend</p>
    </footer>
    <!--footer-->

    

    <script src="js/Jquery.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/dark-mode-switch.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        })
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(window).scroll(function(){
                if($(this).scrollTop() > 100){
                    $("#TopBtn").fadeIn();
                }else{
                    $("#TopBtn").fadeOut();
                }
            });

            $("#TopBtn").click(function(){
                $('html, body').animate({scrollTop :1},10);
            });
        });
    </script>
</body>
</html>