<?php
    session_start();

    if( !isset($_SESSION['login']) ){
        header("Location: landing-page.php");
        exit; 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popcorn Time</title>
    
    <!-- CSS -->
    <link rel="stylesheet" href="./asset/css/index.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous"/>

    <!-- Icons -->
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
    <!-- Navbar -->
    <div class="nav-wrapper">
        <div class="container">
            <div class="nav">
                <a href="#" class="logo">
                    <img src="./asset/images/Popcorn.png" alt="Logo">
                </a>
                <ul class="nav-menu" id="nav-menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="series.php">Series</a></li>
                    <li><a href="genre.php">Genre</a></li>
                    <li><a href="profile.php">Profile</a></li>
                </ul>
                <a href="logout.php" class="btn btn-logout">
                    <span>Log Out</span>
                    <i class='bx bx-log-out'></i>
                </a>
                <!-- Responsive MenuBar -->
                <div class="hamburger-menu" id="hamburger-menu">
                    <div class="hamburger"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Navbar -->
    
    <!-- Section Banner Film -->
    <div class="banner-section" id="movie-banner">
        <!-- Banner Slide -->
        <div class="banner-slide">
            <div class="owl-carousel carousel-nav-center" id="banner-carousel">
                
                <!-- Thor : Love and Thunder -->
                <div class="banner-slide-item">
                    <img src="./asset/images/banners/thor-banner.jpeg" alt="">
                    <div class="overlay"></div>
                    <div class="banner-slide-item-content">
                        <div class="item-content-wraper">
                            <div class="item-content-title top-down">
                                Thor : Love and Thunder 
                            </div>
                            <div class="movie-infos top-down delay-2">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>63</span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>119 mins</span>
                                </div>
                                <div class="movie-info">
                                    <span>PG-13</span>
                                </div>
                            </div>
                            <div class="item-content-description top-down delay-4">
                                "Thor: Love and Thunder" menceritakan Thor dalam sebuah perjalanan yang belum pernah ia jalani - pencarian kedamaian batin. Namun, masa pensiunnya terganggu oleh seorang pembunuh galaksi yang dikenal sebagai Gorr sang Dewa Jagal , yang ingin memusnahkan para dewa.
                            </div>
                            <div class="item-action top-down delay-6">
                                <a href="./asset/banner-page/thor.php" class="btn btn-trailer">
                                    <i class="bx bxs-right-arrow"></i>
                                    <span>More Info</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Thor : Love and Thunder -->

                <!-- Doctor Strange In The Multiverse Of Madness -->
                <div class="banner-slide-item">
                    <img src="./asset/images/banners/drstrange-banner.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="banner-slide-item-content">
                        <div class="item-content-wraper">
                            <div class="item-content-title top-down">
                                Doctor Strange In The Multiverse Of Madness
                            </div>
                            <div class="movie-infos top-down delay-2">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>69</span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>126 mins</span>
                                </div>
                                <div class="movie-info">
                                    <span>PG-13</span>
                                </div>
                            </div>
                            <div class="item-content-description top-down delay-4">
                                Perjalanan ke tempat yang tidak diketahui bersama Doctor Strange, dengan bantuan sekutu mistis baik lama maupun baru, melintasi realitas alternatif Multiverse yang membingungkan dan berbahaya untuk menghadapi musuh baru yang misterius.
                            </div>
                            <div class="item-action top-down delay-6">
                                <a href="#" class="btn btn-trailer">
                                    <i class="bx bxs-right-arrow"></i>
                                    <span>More Info</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Doctor Strange In The Multiverse Of Madness -->

                <!-- Top Gun : Maverick -->
                <div class="banner-slide-item">
                    <img src="./asset/images/banners/topgun-banner.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="banner-slide-item-content">
                        <div class="item-content-wraper">
                            <div class="item-content-title top-down">
                                Top Gun : Maverick
                            </div>
                            <div class="movie-infos top-down delay-2">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>84</span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>130 mins</span>
                                </div>
                                <div class="movie-info">
                                    <span>PG-13</span>
                                </div>
                            </div>
                            <div class="item-content-description top-down delay-4">
                                Lebih dari 30 tahun mengabdi sebagai salah satu penerbang Angkatan Laut terbaik, Pete “Maverick” Mitchell berada dalam posisi dambaannya, melakukan aksi-aksi mendobrak sebagai pilot uji nan pemberani, dan menampik setiap kesempatan naik pangkat karena akan membuatnya tak bisa menerbangkan pesawatnya.
                            </div>
                            <div class="item-action top-down delay-6">
                                <a href="#" class="btn btn-trailer">
                                    <i class="bx bxs-right-arrow"></i>
                                    <span>More Info</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Top Gun : Maverick -->

                <!-- Shang-Chi and the Legend of the Ten Rings -->
                <div class="banner-slide-item">
                    <img src="./asset/images/banners/shang-ci-banner.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="banner-slide-item-content">
                        <div class="item-content-wraper">
                            <div class="item-content-title top-down">
                                Shang-Chi and the Legend of the Ten Rings
                            </div>
                            <div class="movie-infos top-down delay-2">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>74</span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>132 mins</span>
                                </div>
                                <div class="movie-info">
                                    <span>PG-13</span>
                                </div>
                            </div>
                            <div class="item-content-description top-down delay-4">
                                Shang-Chi (Simu Liu) harus menghadapi masa lalunya sebelum ia memilih untuk meninggalkan dan bergabung ke dalam sebuah organisasi bernama Ten Rings.
                            </div>
                            <div class="item-action top-down delay-6">
                                <a href="#" class="btn btn-trailer">
                                    <i class="bx bxs-right-arrow"></i>
                                    <span>More Info</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Shang-Chi and the Legend of the Ten Rings -->

                <!-- Fantastic Beasts: The Secrets of Dumbledore -->
                <div class="banner-slide-item">
                    <img src="./asset/images/banners/fantasticbeast-banner.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="banner-slide-item-content">
                        <div class="item-content-wraper">
                            <div class="item-content-title top-down">
                                Fantastic Beasts: The Secrets of Dumbledore
                            </div>
                            <div class="movie-infos top-down delay-2">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>62</span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>142 mins</span>
                                </div>
                                <div class="movie-info">
                                    <span>PG-13</span>
                                </div>
                            </div>
                            <div class="item-content-description top-down delay-4">
                                Profesor Albus Dumbledore mengetahui penyihir Gelap yang kuat Gellert Grindelwald bergerak untuk menguasai dunia sihir. Karena tidak dapat menghentikannya sendirian, dia mempercayakan Magizoologist Newt Scamander untuk memimpin tim yang terdiri dari para penyihir dan seorang pembuat roti Muggle yang pemberani bergabung sebuah dalam misi berbahaya.
                            </div>
                            <div class="item-action top-down delay-6">
                                <a href="#" class="btn btn-trailer">
                                    <i class="bx bxs-right-arrow"></i>
                                    <span>More Info</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Fantastic Beasts: The Secrets of Dumbledore -->

                <!-- Tenet -->
                <div class="banner-slide-item">
                    <img src="./asset/images/banners/Tenet-banner.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="banner-slide-item-content">
                        <div class="item-content-wraper">
                            <div class="item-content-title top-down">
                                Tenet
                            </div>
                            <div class="movie-infos top-down delay-2">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>73</span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>150 mins</span>
                                </div>
                                <div class="movie-info">
                                    <span>PG-13</span>
                                </div>
                            </div>
                            <div class="item-content-description top-down delay-4">
                                Dipersenjatai hanya dengan sepatah kata—Tenet—dan berjuang untuk kelangsungan dunia, sang protagonis mengarungi senjakala dunia spionase internasional dalam sebuah misi yang membawa pada sesuatu yang melebihi alir waktu.
                            </div>
                            <div class="item-action top-down delay-6">
                                <a href="#" class="btn btn-trailer">
                                    <i class="bx bxs-right-arrow"></i>
                                    <span>More Info</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Tenet -->
            </div>
        </div>
        <!-- End Banner Slide -->   
    </div>
    <!-- End Section Banner Film -->

    <!-- Section Film Popular -->
    <div class="section" id="film-popular">
        <div class="container">
            <div class="section-header">
                Film Popular
            </div>
            <div class="owl-carousel carousel-nav-center" id="trending-slide">
                <!-- List Film Popular -->
                <div class="movie-list">
                    <img src="./asset/images/trendings/captain-marvel.jpg" alt="Captain Marvel">
                </div>

                <div class="movie-list">
                    <img src="./asset/images/trendings/Interstellar.jpg" alt="Interstellar">
                </div>

                <div class="movie-list">
                    <img src="./asset/images/trendings/dark-knight.jpg" alt="Dark Knight">
                </div>
                
                <div class="movie-list">
                    <img src="./asset/images/trendings/endgame.jpg" alt="Avengers : Endgame">
                </div>

                <div class="movie-list">
                    <img src="./asset/images/trendings/casino-royale.jpg" alt="Casino Royale">
                </div>

                <div class="movie-list">
                    <img src="./asset/images/trendings/dune.jpg" alt="Dune">
                </div>

                <div class="movie-list">
                    <img src="./asset/images/trendings/eternals.jpg" alt="Eternals">
                </div>

                <div class="movie-list">
                    <img src="./asset/images/trendings/wakanda.jpg" alt="Black Panther : Wakanda Forever">
                </div>

                <div class="movie-list">
                    <img src="./asset/images/trendings/venom.jpg" alt="Venom">
                </div>

                <div class="movie-list">
                    <img src="./asset/images/trendings/shang-chi.jpg" alt="Shang-Chi">
                </div>

                <div class="movie-list">
                    <img src="./asset/images/trendings/black-adam.jpg" alt="Black Adam">
                </div>

                <div class="movie-list">
                    <img src="./asset/images/trendings/pengabdisetan.jpeg" alt="Pengabdi Setan">
                </div>

                <div class="movie-list">
                    <img src="./asset/images/trendings/kkn-dp.jpg" alt="KKN Di Desa Penari">
                </div>
                <!-- End List Film Popular -->
            </div>
        </div>
    </div>
    <!-- End Section Film Popular -->
    
    <!-- Section Featured Movie -->
    <div class="section" id="featured-movie">
        <div class="container">
            <div class="section-header">
                Featured
            </div>
            <div class="movies-slide carousel-nav-center owl-carousel">
                <!-- List Featured Movie -->
                <a href="#" class="movie-item">
                    <img src="./asset/images/featured/Batman.jpg" alt="">
                </a>

                <a href="#" class="movie-item">
                    <img src="./asset/images/featured/jurassic-world.jpg" alt="">
                </a>

                <a href="#" class="movie-item">
                    <img src="./asset/images/featured/sonic.jpg" alt="">
                </a>

                <a href="#" class="movie-item">
                    <img src="./asset/images/featured/minion.jpg" alt="">
                </a>

                <a href="#" class="movie-item">
                    <img src="./asset/images/featured/venom2.jpg" alt="">
                </a>

                <a href="#" class="movie-item">
                    <img src="./asset/images/featured/the-tomorrow-war.jpg" alt="">
                </a>

                <a href="#" class="movie-item">
                    <img src="./asset/images/featured/godzilla-vs-kong.jpeg" alt="">
                </a>

                <a href="#" class="movie-item">
                    <img src="./asset/images/featured/no-time-to-die.jpg" alt="">
                </a>

                <a href="#" class="movie-item">
                    <img src="./asset/images/featured/spiderman-nwh.jpg" alt="">
                </a>

                <a href="#" class="movie-item">
                    <img src="./asset/images/featured/jujutsu.jpg" alt="">
                </a>

                <a href="#" class="movie-item">
                    <img src="./asset/images/featured/dont-look-up.jpg" alt="">
                </a>

                <a href="#" class="movie-item">
                    <img src="./asset/images/featured/quiet-place-2.jpg" alt="">
                </a>

                <a href="#" class="movie-item">
                    <img src="./asset/images/featured/army-of-the-dead.jpg" alt="">
                </a>
                <!-- End List Featured Movie -->
            </div>
        </div>
    </div>
    <!-- End Section Featured Movie -->

    <!-- Section MCU -->
    <div class="section" id="mcu">
        <div class="container">
            <div class="section-header">
                Marvel Cinematic Universe
            </div>
            <div class="movies-slide carousel-nav-center owl-carousel">
                <!-- List MCU -->
                <a href="#" class="movie-item">
                    <img src="./asset/images/mcu/captain-america-1.jpeg" alt="">
                </a>

                <a href="#" class="movie-item">
                    <img src="./asset/images/mcu/captain-marvel.jpg" alt="">
                </a>

                <a href="#" class="movie-item">
                    <img src="./asset/images/mcu/ironman1.jpg" alt="">
                </a>

                <a href="#" class="movie-item">
                    <img src="./asset/images/mcu/ironman2.jpg" alt="">
                </a>

                <a href="#" class="movie-item">
                    <img src="./asset/images/mcu/thor1.jpg" alt="">
                </a>

                <a href="#" class="movie-item">
                    <img src="./asset/images/mcu/avengers1.jpg" alt="">
                </a>
            
                <a href="#" class="movie-item">
                    <img src="./asset/images/mcu/ironman3.jpg" alt="">
                </a>

                <a href="#" class="movie-item">
                    <img src="./asset/images/mcu/thor2.jpg" alt="">
                </a>

                <a href="#" class="movie-item">
                    <img src="./asset/images/mcu/captain-america-2.jpg" alt="">
                </a>

                <a href="#" class="movie-item">
                    <img src="./asset/images/mcu/gotg1.png" alt="">
                </a>

                <a href="#" class="movie-item">
                    <img src="./asset/images/mcu/gotg2.jpg" alt="">
                </a>

                <a href="#" class="movie-item">
                    <img src="./asset/images/mcu/avengers2.jpg" alt="">
                </a>

                <a href="#" class="movie-item">
                    <img src="./asset/images/mcu/ant_man.jpg" alt="">
                </a>

                <a href="#" class="movie-item">
                    <img src="./asset/images/mcu/captain-america-3.jpg" alt="">
                </a>

                <a href="#" class="movie-item">
                    <img src="./asset/images/mcu/thor3.jpg" alt="">
                </a>

                <a href="#" class="movie-item">
                    <img src="./asset/images/mcu/spiderman1.webp" alt="">
                </a>

                <a href="#" class="movie-item">
                    <img src="./asset/images/mcu/black-widow.jpg" alt="">
                </a>

                <a href="#" class="movie-item">
                    <img src="./asset/images/mcu/Doctor_Strange.jpg" alt="">
                </a>

                <a href="#" class="movie-item">
                    <img src="./asset/images/mcu/black-panther.jpg" alt="">
                </a>

                <a href="#" class="movie-item">
                    <img src="./asset/images/mcu/avengers3.jpg" alt="">
                </a>

                <a href="#" class="movie-item">
                    <img src="./asset/images/mcu/ant-man2.jpg" alt="">
                </a>

                <a href="#" class="movie-item">
                    <img src="./asset/images/mcu/avenger4.jpg" alt="">
                </a>

                <a href="#" class="movie-item">
                    <img src="./asset/images/mcu/spiderman2.jpg" alt="">
                </a>

                <a href="#" class="movie-item">
                    <img src="./asset/images/mcu/shang-chi-and-the-legend-of-the-ten-rings.jpeg" alt="">
                </a>
                <!-- End List MCU -->
            </div>
        </div>
    </div>
    <!-- End Section MCU -->

    <!-- Section Kids Movie -->
    <div class="section" id="kids-movie">
        <div class="container">
            <div class="section-header">
                Kids
            </div>
            <div class="movies-slide carousel-nav-center owl-carousel">
                <!-- List Kids Movie -->
                <a href="#" class="movie-item">
                    <img src="./asset/images/kids/kids1.jpg" alt="">
                </a>

                <a href="#" class="movie-item">
                    <img src="./asset/images/kids/kids2.jpg" alt="">
                </a>

                <a href="#" class="movie-item">
                    <img src="./asset/images/kids/kids3.jpg" alt="">
                </a>

                <a href="#" class="movie-item">
                    <img src="./asset/images/kids/kids4.webp" alt="">
                </a>

                <a href="#" class="movie-item">
                    <img src="./asset/images/kids/kids5.jpg" alt="">
                </a>

                <a href="#" class="movie-item">
                    <img src="./asset/images/kids/kids6.webp" alt="">
                </a>

                <a href="#" class="movie-item">
                    <img src="./asset/images/kids/kids7.jpg" alt="">
                </a>

                <a href="#" class="movie-item">
                    <img src="./asset/images/kids/kids8.jpg" alt="">
                </a>

                <a href="#" class="movie-item">
                    <img src="./asset/images/kids/kids9.jpg" alt="">
                </a>

                <a href="#" class="movie-item">
                    <img src="./asset/images/kids/kids10.jpg" alt="">
                </a>
                <!-- End List Kids Movie -->
            </div>
        </div>
    </div>
    <!-- End Section Kids Movie -->

    <!-- Footer -->
    <section>
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col">
                        <h4>About Us</h4>
                        <ul>
                            <li><a href="https://www.instagram.com/bhanurz/" target="_blank">Aswangga Bhanu Rizqullah</a></li>
                            <li><a href="https://www.instagram.com/dhyrapip/" target="_blank">Dhiya Rafiif</a></li>
                            <li><a href="https://www.instagram.com/rchmdawal_/" target="_blank">Rachmad Awal</a></li>
                            <li><a href="https://www.instagram.com/hd_meia/" target="_blank">Kharismalya Meira Putrinadisa</a></li>
                            <li><a href="https://www.instagram.com/rossy.rm_/" target="_blank">Rossyana Rachmad Mas</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>original series</h4>
                        <ul>
                            <li><a href="https://www.hotstar.com/id" target="_blank">disney+</a></li>
                            <li><a href="https://www.netflix.com/id/" target="_blank">netflix</a></li>
                            <li><a href="https://www.hbo.com/" target="_blank">hbo</a></li>
                            <li><a href="https://www.primevideo.com/" target="_blank">prime video</a></li>
                            <li><a href="https://tv.apple.com/" target="_blank">apple tv+</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Home Page</h4>
                        <ul>
                            <li><a href="#movie-banner">Movie Banner</a></li>
                            <li><a href="#film-popular">Film Popular</a></li>
                            <li><a href="#featured-movie">Featured Movie</a></li>
                            <li><a href="#mcu">MCU</a></li>
                            <li><a href="#kids-movie">Kids Movie</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>follow us</h4>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>
    <!-- End Footer -->

    <!-- Script -->
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Owl Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>

    <!-- Index Script -->
    <script src="./asset/js/index.js"></script>
</body>
</html>