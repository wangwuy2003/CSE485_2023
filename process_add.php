<?php
const _HOST='localhost';
const _DB='cse485_2023';
const _USER='root';
const _PASSWORD='';
const linkFILE='./images/authors/';
$option=[
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];
try{
    if(class_exists('PDO')){
        $sql='mysql:host='._HOST.';dbname='._DB;
        $cnn=new PDO($sql,_USER,_PASSWORD,$option);
        
        
    }
}
catch(PDOException $ex){
    echo $ex->getMessage();
}

try{
     

    if(isset($_SERVER["REQUEST_METHOD"]) == "POST") {
        if(!empty($_FILES['file']['name'])&& $_FILES['file']['error']==0){
            $imagDir = linkFILE.$_FILES['file']['name'];
            move_uploaded_file($_FILES['file']['tmp_name'],$imagDir);
            
        $tieude = 'tieude'; 
        $ten_bhat = 'ten_bhat';
        $ma_tloai = 'ma_tloai'; 
        $tomtat = 'tomtat'; 
        $noidung = 'noidung'; 
        $ma_tgia = 'ma_tgia'; 
        $ngayviet = 'ngayviet'; 
        $hinhanh='hinhanh';
    
        $sqlQuery = "INSERT INTO baiviet ( tieude, ten_bhat, ma_tloai, tomtat, noidung, ma_tgia, ngayviet,hinhanh) 
                     VALUES (:tieude, :ten_bhat, :ma_tloai, :tomtat, :noidung, :ma_tgia, :ngayviet, :hinhanh)";
        $stmt = $cnn->prepare($sqlQuery);
        $data = array(
            'tieude' => $_POST['tieude'],
            'ten_bhat'=> $_POST['ten_bhat'],
            'ma_tloai'=> $_POST['ma_tloai'],
            'tomtat'=> $_POST['tomtat'],
            'noidung'=> $_POST['noidung'],
            'ma_tgia'=> $_POST['ma_tgia'],
            'ngayviet'=> $_POST['ngayviet'],
            'hinhanh'=>$imagDir

        );
        $stmt->execute($data);
        
        header("Location: baiviet.php");
        exit();
        }
    
    } 
}catch(PDOException $ex){
    echo $ex->getMessage();
}
?>
