<?php
    session_start();

    if( !isset($_SESSION['login']) ){
        header("Location: landing-page.php");
        exit;
    }

    require 'functions.php';

    $user = $_SESSION['login'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <!-- CSS -->
    <link rel="stylesheet" href="./asset/css/profile.css">

    <!-- ICONS -->
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"/>
</head>
<body>
    <div class="bgImage"></div>
    <div class="container-profile">
        <div class="profile-header">
            <a href="index.php" class="back-to-index-page"><i class="bi bi-arrow-left-circle"></i></a>
            <?php
                $result = mysqli_query($conn, "SELECT * FROM users where username = '$user'");
                $fetch = mysqli_fetch_assoc($result);
            ?>
            <h2>Hello, <?php echo $fetch['username']; ?></h2>
            <p></p>
        </div>
        <div class="profile">
            <?php 
                $result = mysqli_query($conn, "SELECT * FROM users where username = '$user'");
                $fetch = mysqli_fetch_assoc($result);

                if($fetch['image'] == ''){
                    echo '<img src="./asset/images/default-avatar.png">';
                }
                else{
                    echo '<img src="./asset/img_uploaded/'.$fetch['image'].'">';
                }
            ?>
            <div class="name">
                <?php echo $fetch['name']; ?>
            </div>
            <div class="btn">
                <a href="update-profile.php" class="btn-update">
                    <span>Edit Profile</span>
                </a>
            </div>
            <div class="btn">
                <a href="logout.php" class="btn-logout">
                    <span>Log Out</span>
                    <i class='bx bx-log-out'></i>
                </a>
            </div>
        </div>
    </div>
</body>
</html>