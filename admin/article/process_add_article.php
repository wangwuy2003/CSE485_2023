<?php
    require '../connection.php';

    $tieude = $_POST['tieude'];
    $ten_bhat = $_POST['ten_bhat'];
    $ma_tloai = $_POST['ma_tloai'];
    $tomtat = $_POST['tomtat'];
    $noidung = $_POST['noidung'];
    $ma_tgia = $_POST['ma_tgia'];
    $hinhanh = $_POST['hinhanh'];

    $sql = "insert into baiviet(tieude, ten_bhat, ma_tloai, tomtat, noidung, ma_tgia, hinhanh) values(?, ?, ?, ?, ?, ?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->execute([$tieude, $ten_bhat, $ma_tloai, $tomtat, $noidung, $ma_tgia, $hinhanh]);
    header('location:index.php');