<?php

try {
    require_once 'connect.php';
    $sql = "SELECT * FROM baiviet ORDER BY ngayviet LIMIT 5";

    $query = $conn->prepare($sql);
    $query->execute();

    $posts = $query->fetchAll();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}


?>

<div class=" content container-fluid text-center mt-2">
    <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
        <?php
        $i = 0;
        foreach ($posts as $post) {
            $i++;
        ?>
            <div class="col">
                <div class="song d-flex flex-column mb-3 border border-success-subtle ">
                    <img src="./image/bh-<?= $i; ?>.jpg" alt="">
                    <a href="detail.php?id=<?php echo $post['ma_bviet'] ?>" class="link-underline link-underline-opacity-0">
                        <?php echo $post['ten_bhat']; ?>
                    </a>
                </div>
            </div>
        <?php
        }
        ?>


    </div>
</div>