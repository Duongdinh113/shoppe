<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/layout.css">
    <title>GIẢM GIÁ</title>
</head>
<style>
    .del{
       display:flex;
       height: 400px;
    }
</style>
<body>
    <?php 
    session_start();
    ?>
     <header>
            <div class="logo">
                <img src="image/logo_1.1.png" alt="">
            </div>
            <div class="menu">
                <ul class="">
                    <li><a href="index.php">Trang Chủ</a></li>
                    <li><a href="sanpham.php">Sản Phẩm </a></li>
                    <li><a href="giam_gia.php">Hàng Giảm Giá </a></li>
                    <li><a href="lienhe.php">Liên Hệ </a></li>
                    <li><a href="./giohang.php">Giỏ Hàng</a></li>
                </ul>
            </div>

            <div class="authenticate">
                <?php
                    if(empty($_SESSION["email"])){
                    echo ' <div >
                    <button id="signin"> <a href="dangNhap.php">Đăng nhập</a></button>
                    <button id="signup">  <a href="dangKi.php">Đăng kí</a></button>
                    </div>';
                    }else{  
                    echo '<div class="text-center w-[216px]">
                    <a  href="../control/login_out.php"><button >Đăng xuất</button></a>
                    <p >'.$_SESSION["email"].'</p>
                            
                    </div>';
                    }
                ?>
            </div>
        </header>
    <?php 
    require "../models/connect.php";
    $query = "SELECT * FROM products WHERE deal";
    $productList = getAll($query);
    ?>
    <div class="flex justify-center">
        <div class="max-w-[800px]">
            <div class="grid grid-cols-3 gap-5 w-[800px]">
                <?php foreach($productList as $item1):?>
                <div class="dell">   
                    
                   
                    <img style="width:400px;height:300px; border:1px solid #cdcd"  src="<?= "../image/".$item1["image"]?>" alt="">
                    <h3><?= $item1["name"]?></h3>
                    <h3><?= $item1["descrtiption"]?></h3>
                    <del><?= $item1["price"]."$"?></del>
                    <h3 class=""><?= $item1["deal"]."$"?></h3>
                    
                </div>
                <?php endforeach?>
            </div>
        </div>
    </div>
   
</body>
</html>