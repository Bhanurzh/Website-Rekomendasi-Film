<?php
    $conn = mysqli_connect('localhost', 'root', '', 'popcorn_time');

    function registrasi($data){
        global $conn;

        $name = stripcslashes($data['fullname']);
        $username = strtolower(stripcslashes($data['username']));
        $email = stripcslashes($data['email']);
        $password = mysqli_real_escape_string($conn, $data['password']);
        $password2 = mysqli_real_escape_string($conn, $data['password2']);

        //Cek Username sudah ada atau belum
        $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
        
        if(mysqli_fetch_assoc($result)){
            echo "<script>
                    alert('Username Sudah Digunakan!');
                  </script>";
            return false;
        }

        //Cek Email sudah ada atau belum
        $result2 = mysqli_query($conn, "SELECT username FROM users WHERE email = '$email'");

        if(mysqli_fetch_assoc($result2)){
            echo "<script>
                    alert('Email Sudah Digunakan!');
                  </script>";
            return false;
        }

        // Cek konfirmasi Password
        if($password !== $password2){
            echo "<script>
                    alert('Password Tidak Sesuai!');
                  </script>";
            return false;
        }

        //Enkripsi Password
        $password = password_hash($password, PASSWORD_DEFAULT);

        //Tambahkan userbaru ke database
        mysqli_query($conn, "INSERT INTO users (name, username, email, password) VALUES('$name', '$username', '$email', '$password')");

        return mysqli_affected_rows($conn);
    }
?>