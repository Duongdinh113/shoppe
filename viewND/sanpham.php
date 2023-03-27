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
<div class="flex gap-10 items-center">
            <img src="image/logo.png" alt="">

            <ul class="flex gap-3">
                <li><a class="hover:text-[orange] font-bold text-[20px] text-[gray] active:bg-[orange]" href="index.php">Trang Chủ</a></li>
                <li><a class="hover:text-[orange] font-bold text-[20px] text-[gray] active:bg-[orange]" href="sanpham.php">Sản Phẩm</a></li>
                <li><a class="hover:text-[orange] font-bold text-[20px] text-[gray] active:bg-[orange]" href="giam_gia.php">Hàng giảm giá</a></li>
                <li><a class="hover:text-[orange] font-bold text-[20px] text-[gray] active:bg-[orange]" href="">Liên Hệ</a></li>
                <li><a class="hover:text-[orange] font-bold text-[20px] text-[gray] active:bg-[orange]" href="./giohang.php"><img class="w-[40px] h-[50px]" src="../image/images.png" alt=""></a></li>
            </ul>
           
        </div>
    <?php 
    session_start();
     if(empty($_SESSION["email"])){
        echo ' <div class="flex  gap-4 border-[1px]">
        <a href="dangNhap.php"><button class="text-[#0066B2] border-[1px] border-[#0066B2] w-[100px] h-[25px]">Đăng nhập</button></a>
        <a href="dangKi.php"><button class="text-[#0066B2] border-[1px] border-[#0066B2] w-[100px] h-[25px]">Đăng kí</button></a>
        </div>';
    }else{  
       echo '<div class="text-center w-[216px]">
       <a class="" href="../control/login_out.php"><button class="text-[#0066B2] border-[1px] border-[#0066B2] w-[100px] h-[25px]">Đăng xuất</button></a>
       <p class="text-[#0066B2] text-[17px]">'.$_SESSION["email"].'</p>
       
        </div>';
    
    }
    ?>
   
   
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

    <div class="flex justify-center">
    <div class="w-[1000px] flex justify-between">
        <div class="max-w-[250px]">
            <div class="">
        <?php foreach($categoryidList as $item):?>
            <div>
                 <h1 class="">
                    <a href="./sanpham.php?id=<?= $item["id"]?>"><?= $item["name"]?></a>
                </h1>
            </div>
        <?php endforeach?>
        </div>
       <div>
        <!-- thêm giỏ hàng -->
       
       </div>
         </div>
        <div class="max-w-[750px]">
            <div class="grid grid-cols-3 gap-5">
                <?php foreach($productList as $item1):?>
                <div class="">
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
    <?php 
    require "foodter.php";
    echo foodterRender();
    ?>
</body>
</html>