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
    session_start();
    ?>
         <div class="flex justify-center">
       <div class="max-w-[1000px] border-[1px] gap-[130px] flex my-[20px] items-center">
    <div>
    <?php 
    require "header.php";
    echo headerRender();
    ?>
    </div>
    <div>
    <?php 
    
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
    </div>
    </div>
    </div>
        ';
    <?php

        require '../models/connect.php';
        $query = "SELECT * FROM products";
        $productList = getAll($query);
        //  echo "<pre>";
        //  var_dump($productList);die;
        
        
    ?>
   
   
    
     
        <div class="flex justify-center">
            <div class="max-w-[1000px] border-[1px] flex gap-5 my-[20px]">
                <?php  for($i = 0; $i < 4; $i++):?>
                <div class="grid gap-y-[10px]">
                    <img class="max-w-full" src="<?php echo "../image/".$productList[$i]["image"]?>">
                    <h3>
                        <?php echo $productList[$i]["name"]?>
                    </h3>
                    <h3 class="text-[gray]">
                        <?php echo $productList[$i]["descrtiption"]?>
                    </h3>
                    <h3 class="text-[red]">
                        <?php echo $productList[$i]["price"]."$"?>
                    </h3>
                </div>
                <?php endfor?>

            </div>

        </div>
        <div class="flex justify-center">
            <p class="pt-[10px] text-center h-[50px] border-[1px] w-[200px] border-[#F26F21] text-[#F26F21]">Show more</p>
        </div>
        <div class="flex justify-center my-[20px]">
            <p class="text-[30px] font-bold">Tips & Tricks</p>
        </div>
        <div class="flex justify-center">
            <div class="max-w-[1000px] border-[1px] flex gap-5 my-[20px]">
                <div class="grid gap-y-[10px]">
                    <img class="max-w-full" src="image/item5.png" alt="">
                    <p class="font-bold">How to create a living room to love</p>
                    <p class="text-[gray] text-[12px]">20 jan 2020</p>
                </div>
                <div class="grid gap-y-[10px]">
                    <img class="max-w-full" src="image/item6.png" alt="">
                    <p class="font-bold">Solution for clean look working space
                    </p>
                    <p class="text-[gray] text-[12px]">10 jan 2020</p>
                </div>
                <div class="grid gap-y-[10px]">
                    <img class="max-w-full" src="image/item7.png" alt="">
                    <p class="font-bold">Make your cooking activity more fun with good setup</p>
                    <p class="text-[gray] text-[12px]">20 jan 2020</p>
                </div>
            </div>
        </div>
    <?php 
        require "foodter.php";
        echo foodterRender();
    ?>
</body>

</html>