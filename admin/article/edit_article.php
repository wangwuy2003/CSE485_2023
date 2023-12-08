<?php
    include '../header.php';
    require_once '../connection.php';
    $ma_bviet = $_GET['id'];
    $sql2 = "select * from baiviet where ma_bviet = '$ma_bviet'";
    $result2 = mysqli_query($connection, $sql2);
    $each = mysqli_fetch_array($result2);

    $sql = "select * from theloai";
    $theloai = mysqli_query($connection, $sql);

    $sql1 = "select * from tacgia";
    $tacgia = mysqli_query($connection, $sql1);
?>
<main class="container mt-5 mb-5">
    <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
    <div class="row">
        <div class="col-sm">
            <h3 class="text-center text-uppercase fw-bold">Cập nhật bài viết</h3>
            <form action="process_update_article.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="ma_bviet" value="<?php echo $each['ma_bviet'] ?>">
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="text" name="">Tiêu đề</span>
                    <input type="text" class="form-control" name="tieude" value="<?php echo $each['tieude'] ?>">
                </div>

                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="text" name="">Tên bài hát</span>
                    <input type="text" class="form-control" name="ten_bhat" value="<?php echo $each['ten_bhat'] ?>">
                </div>

                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="text" name="">Mã thể loại</span>
                    <div class="form-floating">
                        <select class="form-select" aria-label="Default select example" name="ma_tloai">
                            <?php foreach($theloai as $theloai): ?>
                                <option
                                        value="<?php echo $theloai['ma_tloai'] ?>"
                                        <?php if($each['ma_tloai'] === $theloai['ma_tloai']){ ?>
                                            selected
                                        <?php } ?>
                                >
                                    <?php echo $theloai['ten_tloai'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="text" name="">Tóm tắt</span>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="tomtat">
                            <?php echo $each['tomtat'] ?>
                        </textarea>
                    </div>
                </div>

                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="text" name="">Nội dung</span>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="noidung">
                            <?php echo $each['noidung'] ?>
                        </textarea>
                    </div>
                </div>

                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="text" name="">Tác giả</span>
                    <div class="form-floating">
                        <select class="form-select" aria-label="Default select example" name="ma_tgia">
                            <?php foreach($tacgia as $tacgia): ?>
                                <option
                                        value="<?php echo $tacgia['ma_tgia'] ?>"
                                    <?php if($each['ma_tgia'] === $tacgia['ma_tgia']){ ?>
                                        selected
                                    <?php } ?>
                                >
                                    <?php echo $tacgia['ten_tgia'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <!--                <div class="input-group mt-3 mb-3">-->
                <!--                    <span class="input-group-text" id="text" name="">Ngày viết</span>-->
                <!--                    <input type="datetime-local" class="form-control" name="ngayviet">-->
                <!--                </div>-->

                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="text" name="">Hình ảnh</span>
                    <input type="file" class="form-control" name="hinhanh" value="<?php echo $each['hinhanh'] ?>">
                </div>


                <div class="form-group  float-end ">
                    <input type="submit" value="Cập nhật" class="btn btn-success">
                    <a href="index.php" class="btn btn-warning ">Quay lại</a>
                </div>
            </form>
        </div>
    </div>
</main>
<footer class="bg-white d-flex justify-content-center align-items-center border-top border-secondary  border-2" style="height:80px">
    <h4 class="text-center text-uppercase fw-bold">TLU's music garden</h4>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>