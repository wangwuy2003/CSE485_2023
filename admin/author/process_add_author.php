<?php
    require_once '../connection.php';

    $name = $_POST['ten_tgia'];
    $photo = $_POST['hinh_tgia'];

    $sql = "insert into tacgia (ten_tgia, hinh_tgia) values(?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->execute([$name, $photo]);

    header('location:index.php');