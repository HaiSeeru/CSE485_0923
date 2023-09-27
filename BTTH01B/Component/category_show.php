<?php

try {
    require_once 'connect.php';

    $sql = "SELECT * FROM theloai";
    $query = $conn->prepare($sql);
    $query->execute();

    $categories = $query->fetchAll();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

foreach ($categories as $category) {
    $modalId = "cateModal_" . $category[0];
?>
    <tr>
        <th><?php echo $category[0] ?></th>
        <td><?php echo $category[1] ?></td>
        <td><a href="./edit_category.php"><i class="bi bi-pencil-square"></i></a></td>
        <td>
            <a href="" class="btn-primary" data-bs-toggle="modal" data-bs-target="#<?php echo $modalId ?>">
                <i class="bi bi-trash3"></i>
            </a>
        </td>
    </tr>

    <!-- DELETE MODAL -->
    <div class="modal fade" id="<?php echo $modalId ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Category</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                    <a href="../Component/process_del_category.php?id=<?= $category[0]; ?>" class="btn btn-outline-danger">Yes</a>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>