<?php
require_once 'connect.php';

$query = "SELECT id, name, join_date, mail, username FROM users";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
?>

    <tr>

        <th><?php echo $row['id'] ?></th>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['join_date'] ?></td>
        <td><?php echo $row['mail'] ?></td>
        <td><?php echo $row['username'] ?></td>
        <td>
            <a href="./core/edit_user.php?sid=<?php echo $row['id']; ?>" class="btn btn-outline-warning"><i class="bi bi-pencil-square"></i></a>
            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#delModal">
                <i class="bi bi-trash3"></i>
            </button>
        </td>

        <!-- DELETE Modal -->
        <div class="modal fade" id="delModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Xác nhận</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Bạn có chắc chắn muốn xóa?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <a href="./core/del_user.php?sid=<?php echo $row['id']; ?>" class="btn btn-outline-danger">Yes</a>
                    </div>
                </div>
            </div>
        </div>
    <?php
}
    ?>