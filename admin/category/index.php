<?php
    global $db;
    require '../connection.php';
    include "../header.php";
    $sql = "select * from theloai";
    $stmt = $db->query($sql);
    $result = $stmt->fetchAll();
?>

<main class="container mt-5 mb-5">
    <!-- <h3 class="text-center text-uppercase mb-3 text-primry">CẢM NHẬN VỀ BÀI HÁT</h3> -->
    <div class="row">
        <div class="col-sm">
            <a href="add_category.php" class="btn btn-success">Thêm mới</a>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên thể loại</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($result as $each): ?>
                    <tr>
                        <td><?php echo $each['ma_tloai'] ?></td>
                        <td><?php echo $each['ten_tloai'] ?></td>
                        <td>
                            <a href="edit_category.php?id=<?php echo $each['ma_tloai'] ?>"><i
                                        class="fa-solid fa-pen-to-square"></i></a>
                        </td>
                        <td>
                            <a href="delete_category.php?id=<?php echo $each['ma_tloai'] ?>"><i
                                        class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</main>
<?php include "../footer.php" ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
