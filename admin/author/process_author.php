<?php
    require_once '../connection.php';

    $id = $_POST['ma_tgia'];
    $name = $_POST['ten_tgia'];
    $photo = $_POST['hinh_tgia'];

    $sql = "update tacgia 
    set
    ten_tgia = ?,
    hinh_tgia = ?
    where ma_tgia = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$name, $photo, $id]);
    header('location:index.php');