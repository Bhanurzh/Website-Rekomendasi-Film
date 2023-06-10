<?php
    session_start();

    require 'functions.php';

    $user = $_SESSION['login'];

    if(isset($_POST['updateProfile'])){
        $updateName = stripcslashes($_POST['updateName']);
        $updateUsername = strtolower(stripcslashes($_POST['updateUsername']));
        $updateEmail = stripcslashes($_POST['updateEmail']);

        mysqli_query($conn, "UPDATE users SET name = '$updateName', username = '$updateUsername', email = '$updateEmail' WHERE username = '$user'");
        
        $updatePassword = mysqli_real_escape_string($conn, $_POST['updatePassword']);
        $newPassword = mysqli_real_escape_string($conn, $_POST['newPassword']);
        $confirmPassword = mysqli_real_escape_string($conn, $_POST['confirmPassword']);
        $result = mysqli_query($conn, "SELECT * FROM users where username = '$user'");

        if(mysqli_num_rows($result) > 0){
            $fetch = mysqli_fetch_assoc($result);

            if(!empty($updatePassword) || !empty($newPassword) || !empty($confirmPassword)){
                if( password_verify($updatePassword, $fetch['password']) ){
                }
                else{
                    $message[] = 'Password Sebelumnya Tidak Sesuai!';
                }

                if($newPassword != $confirmPassword){
                    $message[] = 'Konfirmasi Password Tidak Sesuai!';
                }
                else{
                    $password = password_hash($newPassword, PASSWORD_DEFAULT);
                    mysqli_query($conn, "UPDATE users SET password = '$password' WHERE username = '$user'");
                    $message[] = 'Password Berhasil di Update';
                }
            }
        }

        $update_image = $_FILES['updateImage']['name'];
        $update_image_size = $_FILES['updateImage']['size'];
        $update_image_tmp_name = $_FILES['updateImage']['tmp_name'];
        $update_image_folder = './asset/img_uploaded/'.$update_image;

        if(!empty($update_image)){
            if($update_image_size > 2000000){
                $message[] = 'Ukuran Gambar Terlalu Besar!';
            }
            else{
                $image_update_query = mysqli_query($conn, "UPDATE users SET image = '$update_image' WHERE username = '$user'");
                if($image_update_query){
                    move_uploaded_file($update_image_tmp_name, $update_image_folder);
                }
                $message[] = 'Gambar Berhasil di Update!';
            }
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    
    <link rel="stylesheet" href="./asset/css/update-profile.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"/>
</head>
<body>
    <div class="bgImage"></div>
    <div class="container-update-profile">
        <div class="update-profile-header">
            <a href="profile.php" class="back-to-profile-page"><i class="bi bi-arrow-left-circle"></i></a>
            <h2>Edit Profile</h2>
            <p></p>
        </div>
        <?php
           $select = mysqli_query($conn, "SELECT * FROM users WHERE username = '$user'");
           if(mysqli_num_rows($select) > 0){
              $fetch = mysqli_fetch_assoc($select);
           }
        ?>
        <div class="update-profile">
            <?php
                if($fetch['image'] == ''){
                    echo '<img src="./asset/images/default-avatar.png">';
                }
                else{
                    echo '<img src="./asset/img_uploaded/'.$fetch['image'].'">';
                }
            ?>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="input-container">
                <div class="input-box">
                    <span>Name</span>
                    <input type="text" name="updateName" value="<?php echo $fetch['name']; ?>" class="box">
                    <span>Username</span>
                    <input type="text" name="updateUsername" value="<?php echo $fetch['username']; ?>" class="box">
                    <span>Email</span>
                    <input type="text" name="updateEmail" value="<?php echo $fetch['email']; ?>" class="box">
                    <span>Profile Picture</span>
                    <input type="file" name="updateImage" accept="image/jpg, image/jpeg, image/png" class="box">
                </div>
                <div class="input-box">
                    <span>Old Password</span>
                    <input type="password" name="updatePassword" placeholder="Password Sebelumnya" class="box">
                    <span>New Password</span>
                    <input type="password" name="newPassword" placeholder="Masukan Password Baru" class="box">
                    <span>Confirm Password</span>
                    <input type="password" name="confirmPassword" placeholder="Konfirmasi Password Baru" class="box">
                    <input type="submit" value="Update Profile" name="updateProfile" class="btn">
                </div>
            </div>
            <?php
                if(isset($message)){
                    foreach($message as $message){
                        echo '<div class="message"><p>'.$message.'</p></div>';
                    }
                }
            ?>
        </form>
     </div>
</body>
</html>