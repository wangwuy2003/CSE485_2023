
<?php
    require '../connection.php';
    include '../header.php';
    $sql = "select baiviet.*, theloai.ten_tloai as tentl, tacgia.ten_tgia as tentg from baiviet 
            inner join theloai on baiviet.ma_tloai = theloai.ma_tloai
            inner join tacgia on tacgia.ma_tgia = baiviet.ma_tgia";
    $result = mysqli_query($connection, $sql);
?>

<main class="container mt-5 mb-5">
    <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
    <div class="row">
        <div class="col-sm">
            <a href="../article/add_article.php" class="btn btn-success">Thêm mới</a>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tiêu đề</th>
                    <th scope="col">Tên bài hát</th>
                    <th scope="col">Thể loại</th>
                    <th scope="col">Nội dung</th>
                    <th scope="col">Tác giả</th>
                    <th scope="col">Hình ảnh</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($result as $each): ?>
                    <tr>
                        <td><?php echo $each['ma_bviet'] ?></td>
                        <td><?php echo $each['tieude'] ?></td>
                        <td><?php echo $each['ten_bhat'] ?></td>
                        <td><?php echo $each['tentl'] ?></td>
                        <td>
                            <a href="detail.php">
                                <i class="fa-solid fa-eye" style="color: #209257;"></i>
                            </a>
                        </td>
                        <td><?php echo $each['tentg'] ?></td>
                        <td>
                            <img src="<?php echo $each['hinhanh'] ?>" width="100">
                        </td>
                        <td>
                            <a href="edit_article.php?id=<?php echo $each['ma_bviet'] ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                        </td>
                        <td>
                            <a href="delete_article.php?id=<?php echo $each['ma_bviet'] ?>"><i class="fa-solid fa-trash" style="color: #ff4d4d;"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</main>
<?php include '../footer.php' ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
