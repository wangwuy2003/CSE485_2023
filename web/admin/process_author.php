<?php
    require_once 'connection.php';

    $id = $_POST['ma_tgia'];
    $name = $_POST['ten_tgia'];

    $sql = "update tacgia 
    set
    ten_tgia = '$name'
    where ma_tgia = $id";

    mysqli_query($connection, $sql);
    header('location:category.php');