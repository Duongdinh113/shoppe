<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,th,td{
            border: 1px solid black;
           
        }
    </style>
</head>
<body>
    <table>
       <thead>
        <tr>
            <th>id</th>
            <th>Loại sản phẩm</th>
            <th></th>
        </tr>
       </thead>
    <?php
   
        require "../../model/connect.php";
        $query = "SELECT * FROM type";
        $type = getAll($query);
    ?>
    <a href="./add_new_type.php">Thêm loại sản phẩm</a>
    <?php foreach($type as $types):?>
        <tbody>
            <tr>
                <td>
                    <?php echo $types["id_t"]?>
                </td>
                <td>
                    <?php echo $types["name"]?>
                </td>
                <td>
                    <a href="../../controlers/controler_delete_type.php?id=<?php echo $types["id_t"]?>">xóa</a>
                    <a href="./update_type.php?id=<?php echo $types["id_t"]?>">sửa</a>
                </td>
            </tr>
        </tbody>
    <?php endforeach?>
    </table>
</body>
</html>