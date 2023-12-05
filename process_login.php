<?php
    session_start();
    $user = $_POST['user'];
    $password = $_POST['password'];

    require_once 'connection.php';

    $sql = "select * from users where (username = '$user' OR email='$user')";
    $stmt = $db->query($sql);
    $number_row = $stmt->rowCount();

    if ($number_row > 0) {
        $row = $stmt->fetch();
        $pass_saved = $row['password']; //Lay mat khau dang luu trong CSDL
        $id = $row['id'];
        $username = $row['username'];
        $level = $row['level'];
        if (password_verify($password, $pass_saved)) {
            session_start();
            $_SESSION['id'] = $id;
            $_SESSION['name'] = $username;
            $_SESSION['level'] = $level;
            var_dump($row);
            header("Location:index.php");
        } else {
            $error = "Password invalid";
            header("Location:login.php?error=$error");
        }
    } else {
        $error = "Username not found";
        header("Location:login.php?error=$error");
    }



