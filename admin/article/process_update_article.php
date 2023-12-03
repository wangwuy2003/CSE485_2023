<?php
    require_once '../connection.php';

    $ma_bviet = $_POST['ma_bviet'];
    $tieude = $_POST['tieude'];
    $ten_bhat = $_POST['ten_bhat'];
    $ma_tloai = $_POST['ma_tloai'];
    $tomtat = $_POST['tomtat'];
    $noidung = $_POST['noidung'];
    $ma_tgia = $_POST['ma_tgia'];
    $hinhanh = $_FILES['hinhanh'];

    $target_dir = "songs/";
    $target_file = $target_dir . basename($_FILES["hinhanh"]["name"]);
    if (move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["hinhanh"]["name"])). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

//    $folder = 'photos/';
//    $file_extension = explode('.', $photo['name'])[1];
//    $file_name = time() . '.' . $file_extension;
//    $path_file = $folder . $file_name;
//
//
//    move_uploaded_file($photo["tmp_name"], $path_file);

    $sql = "update baiviet 
    set
    tieude = '$tieude',
    ten_bhat = '$ten_bhat',
    ma_tloai = '$ma_tloai',
    tomtat = '$tomtat',
    noidung = '$noidung',
    ma_tgia = '$ma_tgia',
    hinhanh = '$target_file'
    where ma_bviet = '$ma_bviet'";

    mysqli_query($connection, $sql);

    header('location:index.php');

