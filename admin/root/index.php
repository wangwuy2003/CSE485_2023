<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header('Location:../../index.php');
        exit(1);
    }
    require_once '../connection.php';
    include "../header.php";
    $sql = "select * from theloai";
    $stmt = $db->query($sql);
    $num = $stmt->rowCount();

    $sql1 = "select * from tacgia";
    $stmt1 = $db->query($sql1);
    $num1 = $stmt1->rowCount();

    $sql2 = "select * from baiviet";
    $stmt2 = $db->query($sql2);
    $num2 = $stmt2->rowCount();

    $sql3 = "select * from users";
    $stmt3 = $db->query($sql3);
    $num3 = $stmt3->rowCount();
?>
<main class="container mt-5 mb-5">
    <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
    <div class="row">
        <div class="col-sm-3">
            <div class="card mb-2" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title text-center">
                        <a href="" class="text-decoration-none">Người dùng</a>
                    </h5>
                    <h5 class="h1 text-center">
                        <?php echo $num3 ?>
                    </h5>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card mb-2" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title text-center">
                        <a href="" class="text-decoration-none">Thể loại</a>
                    </h5>
                    <h5 class="h1 text-center">
                        <?php echo $num ?>
                    </h5>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card mb-2" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title text-center">
                        <a href="" class="text-decoration-none">Tác giả</a>
                    </h5>
                    <h5 class="h1 text-center">
                        <?php echo $num1 ?>
                    </h5>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card mb-2" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title text-center">
                        <a href="" class="text-decoration-none">Bài viết</a>
                    </h5>

                    <h5 class="h1 text-center">
                        <?php echo $num2 ?>
                    </h5>
                </div>
            </div>
        </div>
    </div>
</main>
<footer class="bg-white d-flex justify-content-center align-items-center border-top border-secondary  border-2"
        style="height:80px">
    <h4 class="text-center text-uppercase fw-bold">TLU's music garden</h4>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
