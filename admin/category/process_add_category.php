<?php
    require_once '../connection.php';

    $name = $_POST['ten_tloai'];

    $sql = "insert into theloai(ten_tloai) values(?)";
    $stmt = $db->prepare($sql);
    $stmt->execute([$name]);
    header('location:index.php');

