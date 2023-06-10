<?php 

    require 'functions.php';

    if (isset($_POST['submit'])){

        $genre = $_POST['genre'];
        $upload_image = $_FILES['uploadImage']['name'];
        $upload_image_size = $_FILES['uploadImage']['size'];
        $upload_image_tmp_name = $_FILES['uploadImage']['tmp_name'];
        $upload_image_folder = './asset/images/genre_img_uploaded/'.$upload_image;

        if(!empty($upload_image)){
            if($upload_image_size > 5000000){
                $message[] = 'Ukuran Gambar Terlalu Besar!';
            }
            else{
                $image_upload_query = mysqli_query($conn, "INSERT INTO genre SET genre_film = '$genre', image_url = '$upload_image'");
                if($image_upload_query){
                    move_uploaded_file($upload_image_tmp_name, $upload_image_folder);
                }
                $message[] = 'Gambar Berhasil di Upload!';
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
    <title>Input Gambar</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');
        body{
            background: rgba(0, 0, 0, 0.5) url('./asset/images/web-bg.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-blend-mode: darken;
            width: 100%;
            font-family: "Poppins", sans-serif;
        }
        .container{
            position: absolute;
            width: 400px;
            padding: 10px 5px 40px 20px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(0, 0, 0, 0.8);
            background-blend-mode: darken;
            border-radius: 20px;
        }
        .form-upload{
            color: #fff;
        }
        .form-upload h3{
            text-align: center;
        }
        .form-upload input{
            margin-top: 20px;
        }
        .submit input{
            padding: 5px 10px;
            font-weight: 600;
            color: #fff;
            background: #AA1D1D;
            border: none;
            border-radius: 5px;
            outline: none;
            cursor: pointer;
        }
        .submit input:hover{
            background: #AA1D1D;
            box-shadow: 0 0 5px #AA1D1D, 0 0 25px #AA1D1D, 0 0 50px #AA1D1D;
            transition: all 0.3s ease 0s;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-upload">
            <h3>Upload gambar film</h3>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="genre">
                    Genre Film
                    <select name="genre" require>
                        <option>---</option>
                        <option value="horror">horror</option>
                        <option value="action">action</option>
                        <option value="drama">drama</option>
                        <option value="scifi">scifi</option>
                        <option value="comedy">comedy</option>
                    </select>
                </div>
                <div class="upload" require>
                    <input type="file" name="uploadImage" accept="image/jpg, image/jpeg, image/png">
                </div>
                <div class="submit">
                    <input type="submit" name="submit"value="Upload">
                </div>
            </form>
            <?php
                if(isset($message)){
                    foreach($message as $message){
                        echo '<div class="message"><p>'.$message.'</p></div>';
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>