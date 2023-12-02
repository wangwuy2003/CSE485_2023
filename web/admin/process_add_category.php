<?php
    require_once 'connection.php';

    $name = $_POST['ten_tloai'];

    $sql = "insert into theloai(ten_tloai) values('$name')";

    mysqli_query($connection, $sql);

    header('location:category.php');

