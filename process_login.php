<?php

    $user = $_POST['user'];
    $password = $_POST['password'];

    require_once 'connection.php';

    $sql = "select * from users where (username = '$user' OR email='$user')";
    $result = mysqli_query($connection, $sql);
    $number_row = mysqli_fetch_array($result);

    if ($number_row > 0) {
        session_start();
        $pass_saved = $number_row['password'];
        $each = mysqli_fetch_array($result);
        $id = $each['id'];
        if (password_verify($password, $pass_saved)) {
            $_SESSION['id'] = $id;
            $_SESSION['name'] = $each['username'];
            header('location:index.php');
        } else {
            $error = "Password invalid";
            header("Location:login.php?error=$error");
        }
    } else {
        $error = "Username not found";
        header("Location:login.php?error=$error");
    }



