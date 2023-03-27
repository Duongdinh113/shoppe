<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/style.css">
    <title>Indext</title>
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
            <div>

        
   
    
    <?php

        require '../models/connect.php';
        $query = "SELECT * FROM products";
        $productList = getAll($query);
        //  echo "<pre>";
        //  var_dump($productList);die;
        
        
    ?>




    <div  >
        <div class="product mr" >
            <?php  for($i = 0; $i < 4; $i++):?>
            <div >
               <div class="div"> <img  src="<?= " ../image/".$productList[$i]["image"]?>"> </div>
                <h3>
                    <?= $productList[$i]["name"]?>
                </h3>
                <p >
                    <?= $productList[$i]["descrtiption"]?>
                </p>
                <span >
                    <?= $productList[$i]["price"]."$"?>
                </span>
            </div>
            <?php endfor?>

        </div>
           
    </div>
    <div class="showadd mr">
    <h1>Show more</h1>


    <h2>Tips & Tricks</h2>


    <div class="tips">
        <div class="tips-box">
            <img src="image/item5.png" alt="">
            <p>How to create a living room to love</p>
            <p>20 jan 2020</p>
        </div>
        <div class="tips-box">
            <img src="image/item6.png" alt="">
            <p>Solution for clean look working space
            </p>
            <p>10 jan 2020</p>
        </div >
        <div class="tips-box">
            <img src="image/item7.png" alt="">
            <p class="font-bold">Make your cooking activity more fun with good setup</p>
            <p>20 jan 2020</p>
        </div>
    </div>
</div>
            </div>

<div class="footer mr">
  <div class="anh"><h1>  <img src="image/logo.png" alt=""></h1></div>
    <div class="menu2">
        <ul class="">
            <li><a href="#">HOME</a></li>
            <li><a href="#">PRODUCTS</a></li>
            <li><a href="#">ABOUT US </a></li>
            <li><a href="">CONTRACT US </a></li>

        </ul>
    </div>
</div>   
</div>
</div>
</body>

</html>