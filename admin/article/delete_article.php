<?php
    require_once '../connection.php';

    $id = $_GET['id'];

    $sql = "delete from baiviet where ma_bviet = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$id]);
    header('location: index.php');