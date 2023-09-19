<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        tr td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <?php
    $arrs = ['PHP', 'HTML', 'CSS', 'JS']
    ?>

    <table>
        <tr>
            <td>Tên khóa học</td>
        </tr>
        <?php
        for ($i = 0; $i < 4; $i++) {
        ?>
            <tr>
                <td><?php echo $arrs[$i] ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>