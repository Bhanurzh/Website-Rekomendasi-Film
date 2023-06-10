<?php
    session_start();

    if( !isset($_SESSION['login']) ){
        header("Location: landing-page.php");
        exit;
    }

    require '../../functions.php';

    $user = $_SESSION['login'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thor : Love and Thunder</title>

    <link rel="stylesheet" href="../css/movie-info.css">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' >
</head>
<body>
    <div class="container">
        <div class="poster-image">
            <img src="../images/banners/thor-poster.jpg" alt="">
        </div>
        <div class="content-movie">
            <span class="movie-title">
                Thor : Love and Thunder
            </span>
            <p>
                <span>PG-13</span>
                <span>119 Minutes</span>
                <span>Action Comedy Sci-Fi</span>
            </p>
            <span class="stars">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star-half'></i>
            </span>
            <p class="description-movie">
                "Thor: Love and Thunder" menceritakan Thor dalam sebuah perjalanan yang belum pernah ia jalani - pencarian kedamaian batin. 
                Namun, masa pensiunnya terganggu oleh seorang pembunuh galaksi yang dikenal sebagai Gorr sang Dewa Jagal , yang ingin memusnahkan para dewa.
            </p>
            <p>
                <span>Cast: Chris HemsWorth, Christian Bale, Natalie Portman</span>
            </p>
            <div class="btn">
                <a href="../../index.php" class="back">
                    <i class='bx bx-arrow-back'></i>
                </a>
                <button><i class='bx bx-play-circle'></i>Watch Trailer</button>
            </div>
        </div>
        <div class="comment-section">
            <div class="comment-title">
                Review
            </div>
            <?php
                $result = mysqli_query($conn, "SELECT * FROM komentar, users WHERE komentar.id_user = users.id AND topic='Thor4'");

                while($tampil = mysqli_fetch_array($result)){
                    echo "<div class='user-comment-tampil'>";
                        echo "<div class='foto-user'>";
                            if($tampil['image'] == ''){
                                echo '<img src="../images/default-avatar.png">';
                            }
                            else{
                                echo '<img src="../img_uploaded/'.$tampil['image'].'">';
                            }
                        echo "</div>";
                        echo "<div class='kolom-komentar'>";
                            echo "<p>$tampil[username]</p>";
                            echo "$tampil[comment]";
                        echo "</div>";
                    echo "</div>";
                }
            ?>
            <div class="user-comment">
                <?php
                    $result = mysqli_query($conn, "SELECT * FROM users where username = '$user'");
                    $fetch = mysqli_fetch_assoc($result);

                    if($fetch['image'] == ''){
                        echo '<img src="../images/default-avatar.png">';
                    }
                    else{
                        echo '<img src="../img_uploaded/'.$fetch['image'].'">';
                    }
                ?>
                <div class="nama-user">
                    <p><?php echo $fetch['username']; ?></p>
                    <form action="" method="post">
                        <input type="hidden" name="topik" value="Thor4">
                        <textarea name="komentar" cols="30" rows="3" placeholder="Review anda"></textarea>
                        <div class="send">
                            <input type="submit" name="kirim" value="Kirim">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="trailer">
        <video src="../images/banners/Thor-trailer.mp4" controls="true"></video>
        <span class="close">&times;</span>
    </div>

    <script>
        const button = document.querySelector("button");
        const close = document.querySelector(".close");
        const trailer = document.querySelector(".trailer");
        const video = document.querySelector("video");

        button.addEventListener('click', () => {
            trailer.style.visibility = "visible";
            trailer.style.opacity = 1;
        })

        close.addEventListener('click', () => {
            trailer.style.visibility = "hidden";
            trailer.style.opacity = 0;

            video.pause();
            video.currentTime = 0;
        }) 
    </script>
</body>
</html>

<?php

    if(isset($_POST['kirim'])){

        $result = mysqli_query($conn, "SELECT * FROM users where username = '$user'");
        $fetch = mysqli_fetch_assoc($result);
        $id = $fetch['id'];

        mysqli_query($conn, "INSERT INTO komentar SET
        id_user = $id,
        topic = '$_POST[topik]',
        comment = '$_POST[komentar]'") or die(mysqli_error($conn));
    }
?>