<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>SẢN PHẨM</title>
</head>
<body>
<div class="container">
    <?php
    session_start();
    ?>
   
       
           
                <div class="header">
                    <div class="menu1">
                        <h1><img src="image/logo.png" alt=""></h1>
                    </div>

                    <div class="menu2">
                        <ul class="">
                            <li><a href="index.php">Trang Chủ</a></li>
                            <li><a href="sanpham.php">Sản Phẩm </a></li>
                            <li><a href="giam_gia.php">Hàng Giảm Giá </a></li>
                            <li><a href="">Liên Hệ </a></li>
                            <li><a href="./giohang.php">Giỏ Hàng</a></li>
                        </ul>
                    </div>
                    <div class="btn">
                        <?php
        if(empty($_SESSION["email"])){
            echo ' <div >
            <button > <a href="dangNhap.php">Đăng nhập</a></button>
            <button >  <a href="dangKi.php">Đăng kí</a></button>
            </div>';
        }else{  
           echo '<div class="text-center w-[216px]">
           <a  href="../control/login_out.php"><button >Đăng xuất</button></a>
           <p >'.$_SESSION["email"].'</p>
           
            </div>';
        }
        ?>



                    </div>
               
            </div>
          

        
   
   
            <div  >
   
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

    <div >
    <div class="product">
        <div >
            <div class="sanpham" >
        <?php foreach($categoryidList as $item):?>
            <div>
                 <h1 >
                    <a href="./sanpham.php?id=<?= $item["id"]?>"><?= $item["name"]?></a>
                </h1>
            </div>
        <?php endforeach?>
        </div>
       <div>
        <!-- thêm giỏ hàng -->
       
       </div>
         </div>
        <div class="box" >
            <div class="sanpham2">
                <?php foreach($productList as $item1):?>
                <div class="sp-box">
                <a href="./chiTietSanPham.php?id=<?= $item1["id"]?>"><img src="<?= "../image/".$item1["image"]?>" alt=""> </a>
                    <h3><?= $item1["name"]?></h3>
                    <h3><?= $item1["descrtiption"]?></h3>
                    <h3 class="text-[red]"><?= $item1["price"]."$"?></h3>
                </div>
                
                <?php endforeach?>
            </div>
        </div>
    </div>
    </div>
   
</body>
</html>