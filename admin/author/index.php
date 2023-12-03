<?php
    require '../connection.php';
    include '../header.php';
    $sql = "select * from tacgia";
    $result = mysqli_query($connection, $sql);
?>

<main class="container mt-5 mb-5">
    <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
    <div class="row">
        <div class="col-sm">
            <a href="../author/add_author.php" class="btn btn-success">Thêm mới</a>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên tác giả</th>
                    <th scope="col">Hình tác giả</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($result as $each): ?>
                    <tr>
                        <td><?php echo $each['ma_tgia'] ?></td>
                        <td><?php echo $each['ten_tgia'] ?></td>
                        <td>
                            <img src="<?php echo $each['hinh_tgia'] ?>" alt="" width="100">
                        </td>
                        <td>
                            <a href="edit_author.php?id=<?php echo $each['ma_tgia'] ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                        </td>
                        <td>
                            <a href="delete_author.php?id=<?php echo $each['ma_tgia'] ?>"><i class="fa-solid fa-trash"></i></a>
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
