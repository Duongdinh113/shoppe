<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/layout.css">
    <link rel="stylesheet" href="css/sanpham.css">
    <title>SẢN PHẨM</title>
</head>
<body>
<div class="container">
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
                    <li><a href="donHangdaMua.php">Đơn Hàng </a></li>
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
    
    $query = "SELECT * FROM categoryid";
    $categoryidList = getAll($query);
    ?>
     <?php 
          
          if(empty($_GET["id"])){
              $query = "SELECT * FROM products";
          }
          else {
              $id = $_GET["id"];
               
              $query = "SELECT * FROM products WHERE class = $id";
          }
          $productList = getAll($query);
           
      ?>
         <div class="slide">  
            <!-- Danh mục -->
            <div class="loai">
                <?php foreach($categoryidList as $item):?>
                    <div class="loai1">
                        <h1>
                            <a href="./sanpham.php?id=<?= $item["iddm"]?>"><?= $item["namee"]?></a>
                        </h1>
                    </div>    
                <?php endforeach?>
            </div>
                <!-- Sản phẩm -->
                <div class="sanpham">
                    <?php foreach($productList as $item1):?>
                        <div class="sanpham1">
                            
                                <a href="./chiTietSanPham.php?id=<?= $item1["id"]?>"><img class="img" src="<?= "../image/".$item1["image"]?>" alt=""> </a>
                                    <h3><?= $item1["name"]?></h3>
                                    <p><?= $item1["descrtiption"]?></p>
                                    <span class="gia"><?= $item1["price"]."$"?></span>
                           
                        </div>
                    <?php endforeach?>
                </div>
        </div>
</div>   
</body>
</html>