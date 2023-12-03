<?php
    require_once '../connection.php';

    $id = $_POST['ma_tloai'];
    $name = $_POST['ten_tloai'];

    $sql = "update theloai 
    set
    ten_tloai = '$name'
    where ma_tloai = $id";

    mysqli_query($connection, $sql);
    header('location:index.php');


