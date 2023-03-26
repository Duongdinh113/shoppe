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
        require "header.php";
        echo headerRender();
    ?>
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
    <?php 
    require "../models/connect.php";
    $query = "SELECT * FROM products WHERE deal";
    $productList = getAll($query);
    ?>
    <div class="flex justify-center">
        <div class="max-w-[800px]">
            <div class="grid grid-cols-3 gap-5 w-[800px]">
                <?php foreach($productList as $item1):?>
                <div>   
                    
                   
                    <img src="<?php echo "../image/".$item1["image"]?>" alt="">
                    <h3><?php echo $item1["name"]?></h3>
                    <h3><?php echo $item1["descrtiption"]?></h3>
                    <del><?php echo $item1["price"]."$"?></del>
                    <h3 class=""><?php echo $item1["deal"]."$"?></h3>
                    
                </div>
                <?php endforeach?>
            </div>
        </div>
    </div>
    <?php 
    require "foodter.php";
    echo foodterRender();
    ?>
</body>
</html>