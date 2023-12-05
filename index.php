<?php
    include 'header.php';
    require_once 'connection.php';
    $sql = "select * from baiviet";
    $stmt = $db->query($sql);
    $result = $stmt->fetchAll();
?>
<main class="container-fluid mt-3">
    <h3 class="text-center text-uppercase mb-3 text-primary">TOP bài hát yêu thích</h3>
    <div class="row">
        <?php foreach ($result as $each): ?>
            <div class="col-sm-3">
                <div class="card mb-2" style="width: 100%;">
                    <img src="admin/article/<?php echo $each['hinhanh'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            <a href="detail.php?id=<?php echo $each['ma_bviet'] ?>" class="text-decoration-none">
                                <?php echo $each['tieude'] ?>
                            </a>
                        </h5>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</main>
<?php include 'footer.php' ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"

script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous">
</script>