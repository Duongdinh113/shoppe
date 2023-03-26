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
    
    <div class="">
    <?php
    session_start();
        require "../models/connect.php";
        $id = $_GET["id"];
        $query = "SELECT * FROM products WHERE id = $id";
        $product = getAll($query);
        $comments = "SELECT * FROM comment WHERE idp = $id";
        $comment = getAll($comments);
    //    giỏ hàng


        

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
    <?php foreach($product as $details):?>
        <img src="<?php echo "../image/".$details["image"]?>" alt="">
        <h2><?php echo $details["descrtiption"]?></h2>
        
        <form action="../control/gioHang_control.php" method="POST" enctype="multipart/form-data">
        <input type="text" hidden value="<?php echo $id_p?>" name="id_p" id="">
        <input type="text" hidden value="<?php echo $id_user?>" name="id_user" id="">
        <input type="text" hidden value="<?php echo $p['name']?>" name="name" id="">
        <input type="number" min="1" value="1" name="sl" id="">
        <input type="text" hidden value="<?php echo $p['image']?>" name="image" id="">
        <input type="text" hidden value="<?php echo $p['price']?>" name="price" id=""> <br>
        <a class="border-[2px] bg-[blue] text-[white] font-bold" href="../control/gioHang_control.php"><button>Thêm vào giỏ hàng</button></a>
    </form>
         
    <?php endforeach?>
    </div>
    <hr class="my-[20px]">
    <?php foreach($comment as $bl):?>
        <div class="my-[20px]">
        <h2 class="font-bold"><?php echo $bl["name"]?></h2>
        <h2><?php echo $bl["date"]?></h2>
        <h4><?php echo $bl["comment"]?></h4>
        </div>
    <?php endforeach?>
    <hr class="my-[20px]">
    <?php 
        if(isset($_SESSION["id"])&&($_SESSION["id"]) > 0){
            
         $id_p = $_GET["id"];
         $id_user = $_SESSION["id"];
 
         $a = "SELECT * FROM products WHERE id = $id_p";
         $p = getOne($a);
        
    ?>
    <form action="../control/comment.php" method="POST">
    <div class="grid">
        <input type="text" hidden value="<?php echo $id?>" name="id_p" id="">
        <input type="text" hidden value="<?php echo $_SESSION["email"]?>" name="name" id="">
        <input type="text" hidden value="<?php echo $_SESSION["id"]?>" name="id_u" id="">
        
        <textarea class="border-[2px] border-[black]" name="comment" id="" cols="30" rows="10" placeholder="sản phẩm tốt"></textarea>
        <button class="">Bình Luận</button>
        </div>
    </form>
    <?php 
    }else{
       echo "<a href='../viewND/dangNhap.php?'>đăng nhập để bình luận</a>";
    }
    ?>
</body>
</html>