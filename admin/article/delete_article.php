<?php
    require_once '../connection.php';

    $id = $_GET['id'];

    $sql = "delete from baiviet where ma_bviet = $id";
    mysqli_query($connection, $sql);
    header('location: index.php');