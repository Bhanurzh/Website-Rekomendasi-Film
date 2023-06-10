<?php
    session_start();

    if( isset($_SESSION['login']) ){
        header("Location: index.php");
        exit;
    }

    require 'functions.php';

    if( isset($_POST['login']) ){

        $username = $_POST['username'];
        $password = $_POST['password'];

        $result = mysqli_query($conn, "SELECT * FROM users where username = '$username'");

        //Cek Username
        if( mysqli_num_rows($result) === 1 ){
            
            //Cek Password
            $row = mysqli_fetch_assoc($result);
            if( password_verify($password, $row['password']) ){
                //Set Session
                $_SESSION['login'] = $row['username'];
                header("Location: index.php");
            }
        }
        else{
            $message[] = 'Username/Password Salah';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./asset/css/login-register.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"/>
</head>
<body>
    <div class="background-image"></div>
    <div class="login-box">
        <div class="login-header">
            <a href="landing-page.php" class="back-to-landing-page"><i class="bi bi-arrow-left-circle"></i></a>
            <h2>Login</h2>
            <p></p>
        </div>
        <form action="" method="post">
            <div class="user-box">
                <input type="text" name="username" required>
                <label>Username</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" required>
                <label>Password</label>
            </div>
            <div class="button-form">
                <input type="submit" value="Login" name="login" id="login">
                <div class="regist">
                    <?php 
                        if(isset($message)){
                            foreach($message as $message){
                                echo '<div class="alert"><p>'.$message.'</p></div>';
                            }
                        }
                    ?>
                    <p class="ask">Don't have an account?</p>
                    <a href="register.php">Register</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>