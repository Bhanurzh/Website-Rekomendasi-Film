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
    <title>Popcorn Time Series</title>

    <!-- CSS -->
    <link rel="stylesheet" href="./asset/css/genre-series.css">
    <link rel="stylesheet" href="./asset/css/index.css">

    <!-- Box Icons -->
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
    <!-- Navbar -->
    <div class="nav-wrapper">
        <div class="container">
            <div class="nav">
                <a href="index.php" class="logo">
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

    <div class="header">
        <h2>Series</h2>
    </div>

    <section>
        <!-- Series Movie -->
        <div class="genre-header">
            Popular Series
        </div>
        <div class="container-film">
            <div class="list-film">
                <a href="#">
                    <img src="./asset/images/series/image3.jpg" alt="">
                </a>
            </div>
            <div class="list-film">
                <a href="#">
                    <img src="./asset/images/series/image1.jpg" alt="">
                </a>
            </div>
            <div class="list-film">
                <a href="#">
                    <img src="./asset/images/series/image2.jpg" alt="">
                </a>
            </div>
            <div class="list-film">
                <a href="#">
                    <img src="./asset/images/series/image4.jpg" alt="">
                </a>
            </div>
            <div class="list-film">
                <a href="#">
                    <img src="./asset/images/series/image5.jpg" alt="">
                </a>
            </div>
            <div class="list-film">
                <a href="#">
                    <img src="./asset/images/series/image6.jpg" alt="">
                </a>
            </div>
            <div class="list-film">
                <a href="#">
                    <img src="./asset/images/series/image7.jpg" alt="">
                </a>
            </div>
            <div class="list-film">
                <a href="#">
                    <img src="./asset/images/series/image8.jpg" alt="">
                </a>
            </div>
            <div class="list-film">
                <a href="#">
                    <img src="./asset/images/series/image9.jpg" alt="">
                </a>
            </div>
            <div class="list-film">
                <a href="#">
                    <img src="./asset/images/series/image10.jpg" alt="">
                </a>
            </div>
            <div class="list-film">
                <a href="#">
                    <img src="./asset/images/series/image11.jpg" alt="">
                </a>
            </div>
            <div class="list-film">
                <a href="#">
                    <img src="./asset/images/series/image12.jpg" alt="">
                </a>
            </div>
            <div class="list-film">
                <a href="#">
                    <img src="./asset/images/series/image13.jpg" alt="">
                </a>
            </div>
            <div class="list-film">
                <a href="#">
                    <img src="./asset/images/series/image14.jpeg" alt="">
                </a>
            </div>
            <div class="list-film">
                <a href="#">
                    <img src="./asset/images/series/image15.jpg" alt="">
                </a>
            </div>
        </div>
        <!-- End Series Movie -->
    </section>

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
                        <h4>Series</h4>
                        <ul>
                            <li><a href="#">Popular Series</a></li>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="./asset/js/index.js"></script>
</body>
</html>