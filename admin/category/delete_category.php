<?php
    require_once '../connection.php';

    $id = $_GET['id'];

    $sql = "delete from theloai where ma_tloai = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$id]);

    header('location:index.php');

