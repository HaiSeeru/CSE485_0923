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
            <a onclick="return confirm ('Bạn có chắc chắn muốn xóa?');" href="./core/del_user.php?sid=<?php echo $row['id']; ?>" class="btn btn-outline-warning"><i class="bi bi-trash3"></i></a>
        </td>
    <?php
}
    ?>