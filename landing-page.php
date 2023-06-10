<?php
    session_start();

    if( isset($_SESSION['login']) ){
        header("Location: index.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="./asset/css/login-register.css">
</head>
<body>
    <div class="background-image"></div>
    <div class="landing-box">
        <h2>FIND YOUR FAVORITE MOVIES AND TV SHOWS WITH A BUCKET OF POPCORN</h2>
        <div class="button-start">
            <a href="login.php" class="find">Find Now!</a>
        </div>
    </div>
</body>
</html>