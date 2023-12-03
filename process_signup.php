<?php

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    require 'connection.php';

    $sql = "select count(*) from users where username='$username' and email='$email'";
    $result = mysqli_query($connection, $sql);
    $number_rows = mysqli_fetch_array($result)['count(*)'];

    if ($number_rows === 1) {
        header('location:sign_up.php?error=Trùng email hoặc username');
    }

    $hash = password_hash($password, PASSWORD_DEFAULT);

    $sql1 = "insert into users(username, email, password) values('$username', '$email', '$hash')";
    mysqli_query($connection, $sql1);

//    $sql = "select * from users where (username = '$username' OR email='$username')";
//    mysqli_query($connection, $sql);
    header('location:index.php');

