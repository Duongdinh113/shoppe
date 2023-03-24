<?php 
session_start();
require_once "../../model/connect.php";
$maloai = "SELECT * FROM `type`";
$list = getall($maloai);
// $MK = $_SESSION["Ma_Khach_Hang"];
// $query = "SELECT * FROM `khach_hang` WHERE `Ma_Khach_Hang` = '$MK'";
// $userlist = getone($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="./css/add.css">
<link rel="stylesheet" href="./css/style.css">
<body>
    <div class="container">
    <div class="menu">
            <img src="../../image/image-1.png" alt="">
            <ul>
                <li><img src="../../image/Vector (4).png" alt=""><a href="./index.php">Trở về trang chủ</a></li>
                <li><img src="../../image/Vector (2).png" alt=""><a href="./product-managment.php">Quản lý Sản Phẩm </a></li>
                <li><img src="../../image/Vector (2).png" alt=""><a href="./product-type.php">Quản lý loại hàng</a></li>
                <li><img src="../../image/Vector (2).png" alt=""><a href="./user-managment.php">Quản lý user</a></li>
                <li><img src="../../image/Vector (1).png" alt=""><a href="./comment.php">Bình luận</a></li>
                <li><img src="../../image/Vector.png" alt=""><a href="">Thống kê</a></li>
            </ul>
        </div>
        <div class="content">
        <!-- <div class="welcome" style="margin-top: 20px; margin-bottom: 55px;">
                <p style="line-height:50px; margin-right: 15px">Xin chào <span><?php echo $userlist["Ma_Khach_Hang"] ?></span></p>
                <img src="../../image/images-user/<?php echo $userlist["Hinh"] ?>" alt="" width="50px" height="50px">
                <a href="../../controller/log-uot.php"><button style="height:30px; margin-left: 10px;margin-top: 10px; border: none; border-radius: 5px; background-color: tomato; color: white; ">Log out</button></a>
            </div> -->
            <form action="../../controlers/controler_add-product.php" method="POST" enctype="multipart/form-data">
                <h2>Thêm mới Hàng hóa</h2>
                <label for="">Tên hàng hóa</label> <br> 
                <input type="text" name="name" placeholder="Nhập tên sản phẩm" required> <br>  
                <label for="">Ảnh hàng hóa</label> <br>
                <input type="file" name="image" class="file" required> <br>           
                <label for="">Mô tả</label>
                <textarea name="describe" id="" cols="30" rows="10" placeholder="Nhập mô tả sản phẩm ở đây"></textarea><br>
                <label for="">Giá hàng hóa</label> <br>
                <input type="number" name="price" placeholder="Nhập giá sản phẩm" required min="0"><br>
                <label for="">Giá giảm giá</label> <br>
                <input type="number" name="deal" placeholder="Nhập giá giảm giá" required min="0"><br>            
                <label for="">Mã loại</label><br>
                <select value="" name="id_type">
                    <?php foreach($list as $list):?>
                    <option value="<?php echo $list["id_t"]?>">
                    <?php
                    echo $list["name"];
                    ?>
                </option>
                    <?php endforeach?>
                </select>
                </input>
                <button>Add New Product</button>
            </form>
        </div>
    </div>
</body>

</html>