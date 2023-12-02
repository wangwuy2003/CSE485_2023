<?php
    require_once 'connection.php';

    $id = $_GET['id'];

    $sql = "delete from theloai where ma_tloai = $id";

    mysqli_query($connection, $sql);

    header('location:category.php');

