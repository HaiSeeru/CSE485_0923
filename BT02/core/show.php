<?php

try {
    require_once 'connect.php';

    $sql = "SELECT id, name, join_date, mail, username FROM users";

    $query = $conn->prepare($sql);
    $query->execute();

    $users = $query->fetchAll();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

foreach ($users as $user) {
    $modalId = "userModal_" . $user['id'];
?>
    <tr>

        <th scope="row">
            <?php echo $user[0]; ?>
        </th>
        <td><?php echo $user[1]; ?></td>
        <td><?php echo $user[2]; ?></td>
        <td><?php echo $user[3]; ?></td>
        <td><?php echo $user[4]; ?></td>
        <td>
            <a href="./core/form_edit_user.php?id=<?php echo $user['id'] ?>" class="btn btn-outline-warning">
                <i class="bi bi-pencil-square"></i>
            </a>
            <a href="" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#<?php echo $modalId; ?>">
                <i class="bi bi-trash3"></i>
            </a>
        </td>

        <!-- DELETE MODAL -->
        <div class="modal fade" id="<?php echo $modalId; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete User</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                        <a href="./core/del_user.php?id=<?= $user[0]; ?>" class="btn btn-outline-danger">Yes</a>
                    </div>
                </div>
            </div>
        </div>


    <?php
}
    ?>