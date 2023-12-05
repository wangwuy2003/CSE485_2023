<?php
    require_once '../connection.php';

    $id = $_GET['id'];

    $sql = "delete from tacgia where ma_tgia = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$id]);

    header('location:index.php');
