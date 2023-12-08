<?php
    require_once '../connection.php';

    $name = $_POST['ten_tgia'];
    $photo = $_POST['hinh_tgia'];

    $sql = "insert into tacgia (ten_tgia, hinh_tgia) values('$name','$photo')";
    mysqli_query($connection, $sql);

    header('location:index.php');