<?php
    require_once 'connection.php';

    $id = $_POST['ma_tloai'];
    $name = $_POST['ten_tloai'];
    $hinh_tgia = $_POST['hinh_tgia'];

    $sql = "update theloai 
    set
    ten_tloai = '$name',
    hinh_tgia = '$hinh_tgia'
    where ma_tloai = $id";

    mysqli_query($connection, $sql);
    header('location:author.php');


