<?php
    session_start();

    if( isset($_SESSION['login']) ){
        header("Location: index.php");
        exit;
    }

    require 'functions.php';

    if(isset($_POST['register'])){
        if(registrasi($_POST) > 0){
            $message[] = "Registrasi Berhasil";
            header("Location: login.php");
        }
        else{
            echo mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./asset/css/login-register.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"/>
</head>
<body>
    <div class="background-image"></div>
    <div class="register-box">
        <div class="register-header">
            <a href="login.php" class="back-to-login"><i class="bi bi-arrow-left-circle"></i></a>
            <h2>Register</h2>
            <p></p>
        </div>
        <form action="" method="post">
        <div class="user-box">
                <input type="text" name="fullname" required>
                <label>Name</label>
            </div>
            <div class="user-box">
                <input type="text" name="username" required>
                <label>Username</label>
            </div>
            <div class="user-box">
                <input type="email" name="email" required>
                <label>Email</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" required>
                <label>Password</label>
            </div>
            <div class="user-box">
                <input type="password" name="password2" required>
                <label>Confirm Password</label>
            </div>
            <div class="button-form">
                <input type="submit" value="Register" name="register" id="register">
                <div class="create-acc">
                    <?php 
                        if(isset($message)){
                            foreach($message as $message){
                                echo '<div class="alert"><p>'.$message.'</p></div>';
                            }
                        }
                    ?>
                </div>
            </div>
        </form>
    </div>
</body>
</html>