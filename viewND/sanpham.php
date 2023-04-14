<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/layout.css">
  
    <title>SẢN PHẨM</title>
</head>
<style>
    .slide {
        gap: 20px;
        display: grid;
        grid-template-columns: 1fr 1fr;
        margin-top: 10%
    }


    .sanpham1 {
  
        margin-left: 15%;
        display: grid;
        width: 220px;
        height: 300;
      
    }

   .a{
    width: 50px;
    border-radius: 50%;
    border: 0.1875em solid #0F1C3F;
    height: 50px;
   }

    .img {
        margin-top: 20px;
        max-width: 80%;
    }

    .loai {
        border-radius: 5px;
        width: 400px;
        height: 500px;
        border: 1px solid black;
       
     
        
    }

    .loai h1 {
        width: 400px;
        border-bottom: 1px solid black;
     
        text-align: center;
    }

    .loai a {
        margin-left: 10%;
        text-decoration: none;
        text-transform: capitalize;

    }

    .loai h2 {
        padding-bottom: 25px;
        width: 400px;
        border-bottom:  1px  solid #cdcd;

    }

    .sanpham {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        gap: 30px;
        border-radius: 5px;
    }

    .sanpham1 {
        width: 300px;
    }

    p input{
        width: 250px;
        margin-left: 10px;
    }
h3{
    font-size: 25px;
    font-weight: 700;
    text-transform: capitalize;

}
.formdk{
    margin-top: 15%;
}
 .tim{
    width:300px;
    height: 30px;
    margin-left:10px;
}
.timkiem{
    background: rgb(19, 170, 84);
    color: black;
    height: 30px;

}
.gia{
    font-size: 22px;
    font-weight: 600;
    color: #A18A68;
    margin-left: 2px;
}
.c:hover .b{
    display: block;
}
.b{
    padding: 40px;
    position: absolute;
    padding-left: 70px;
    display: none;
   
}
.c{
    display: flex;
}

</style>

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
                if (empty($_SESSION["email"])) {
                    echo ' <div >
                    <button id="signin"> <a href="dangNhap.php">Đăng nhập</a></button>
                    <button id="signup">  <a href="dangKi.php">Đăng kí</a></button>
                    </div>';
                } else {
                    echo '<div class="c"><img class="a" src="../image/'.$_SESSION['image'].'" alt=""><p>'.$_SESSION['email'].'</p>
                    <div class="b">
                    <p> <a href="../control/login_out.php">Đăng xuất</a></p>
                    <p> <a href="./forgotPassword.php">Đổi mật khẩu</a></p>
                    <p>tài khoản của tôi</p>
                   </div>
                   </div>
                    ';
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

        if (empty($_GET["id"])) {
            $query = "SELECT * FROM products";
        } else {
            $id = $_GET["id"];

            $query = "SELECT * FROM products WHERE class = $id";
        }
        $productList = getAll($query);

        ?>

        <div class="slide">
            <!-- Danh mục -->
            <?php  if(empty($_POST["search"])){
                $sanpham = "SELECT * FROM products";
            }else{
                $search = $_POST["search"];

                $sanpham = "SELECT * FROM products WHERE name LIKE '$search'";
            }
            $productList = getAll($sanpham)?>

            <div class="loai">
                <h1> Danh Mục</h1>
                <?php foreach ($categoryidList as $item): ?>
                    <div class="loai1">
                        <h2>
                            <a href="./sanpham.php?id=<?= $item["iddm"] ?>"><?= $item["namee"] ?></a>
                        </h2>
                    </div>
                <?php endforeach ?>
              
                <div class="formdk">
                    <form action="./sanpham.php" method="POST">
                    
                <input type="text" name="search" class="tim" >
                        <input type="submit" value="Tìm kiếm"  class="timkiem">
                    </form>
                  
                </div>
            </div>

            <!-- Sản phẩm -->
            <div class="sanpham">
                <?php foreach ($productList as $item1): ?>
                    <div class="sanpham1">

                        <a href="./chiTietSanPham.php?id=<?= $item1["id"] ?>"><img class="img"
                                src="<?= "../image/" . $item1["image"] ?>" alt=""> </a>
                        <h3>
                            <?= $item1["name"] ?>
                        </h3>
                        <p>
                            <?= $item1["descrtiption"] ?>
                        </p>
                        <span class="gia">
                            <?="$".  $item1["price"]  ?>
                        </span>

                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</body>

</html>
