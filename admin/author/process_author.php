<?php
    require_once '../connection.php';

    $id = $_POST['ma_tgia'];
    $name = $_POST['ten_tgia'];
    $photo = $_POST['hinh_tgia'];

    $sql = "update tacgia 
    set
    ten_tgia = '$name',
    hinh_tgia = '$photo'
    where ma_tgia = $id";

    mysqli_query($connection, $sql);
    header('location:index.php');