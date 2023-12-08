<?php
    require_once '../connection.php';

    $id = $_GET['id'];

    $sql = "delete from tacgia where ma_tgia = $id";

    mysqli_query($connection, $sql);

    header('location:index.php');
