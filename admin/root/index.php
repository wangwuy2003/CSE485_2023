<?php
    require_once '../connection.php';
    include "../header.php";
    $sql = "select count(ma_tloai) from theloai";
    $result = mysqli_query($connection, $sql);
    $num = mysqli_fetch_array($result)['count(ma_tloai)'];

    $sql1 = "select count(ma_tgia) from tacgia";
    $result1 = mysqli_query($connection, $sql1);
    $num1 = mysqli_fetch_array($result1)['count(ma_tgia)'];

    $sql2 = "select count(ma_bviet) from baiviet";
    $result2 = mysqli_query($connection, $sql2);
    $num2 = mysqli_fetch_array($result2)['count(ma_bviet)'];

    $sql3 = "select count(id) from users";
    $result3 = mysqli_query($connection, $sql3);
    $num3 = mysqli_fetch_array($result3)['count(id)'];
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
