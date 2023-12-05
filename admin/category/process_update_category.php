<?php
    require_once '../connection.php';

    $id = $_POST['ma_tloai'];
    $name = $_POST['ten_tloai'];

    $sql = "update theloai set ten_tloai = ? where ma_tloai = ?";

    $stmt = $db->prepare($sql);
    $stmt->execute([$name, $id]);
    header('location:index.php');


