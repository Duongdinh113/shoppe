<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <?php
    require "../../model/connect.php";
    $id = $_GET["id"];
    
    $query = "SELECT * FROM type WHERE id_t = $id";
    $type = getOne($query);

    ?>
<form action="../../controlers/controler_update_type.php" method="POST">
        <div class="grid">
        <label for="">id</label>
        <input class="border[1px]" type="text" name="id" id="" value="<?php echo $id?>">
        <label for="">loại sản phẩm</label>
        <input class="border[1px]" type="text" name="type" id="">
        <button>Sửa</button>
        </div>
    </form>
</body>
</html>