<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/layout.css">
    <title>CHI TIẾT SẢN PHẨM </title>
</head>
<style>
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
.a{
    width: 50px;
    border-radius: 50%;
    border: 0.1875em solid #0F1C3F;
    height: 50px;
   }

</style>
<body>



    <div class="container">
        <header>
            <div class="logo">
                <img src="image/logo_1.1.png" alt="">
            </div>
            <div class="menu">
                <ul class="">
                    <li><a href="index.php">Trang Chủ</a></li>
                    <li><a href="sanpham.php">Sản Phẩm </a></li>
                    <li><a href="giam_gia.php">Hàng Giảm Giá </a></li>
                    <li><a href="">Liên Hệ </a></li>
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



        <div class="spctmr">

            <?php

            require "../models/connect.php";
            $id = $_GET["id"];
            $query = "SELECT * FROM products WHERE id = $id";
            $product = getAll($query);
            $comments = "SELECT * FROM comment WHERE idp = $id";
            $comment = getAll($comments);
            //    giỏ hàng
            ?>


            <div class="anhsp">
                <?php foreach ($product as $details) : ?>

                    <img src="<?= " ../image/" . $details["image"] ?>" alt="">
                <?php endforeach ?>
            </div>
            <div class="dathang">
                <?php foreach ($product as $details) : ?>
                    <h2>
                        <?= $details["descrtiption"] ?>
                    </h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam placerat, augue a volutpat hendrerit, sapien tortor faucibus augue, a maximus elit ex vitae libero. Sed quis mauris eget arcu facilisis consequat sed eu felis.
                    </p>
                <?php endforeach ?>





                <?php
                if (isset($_SESSION["id"]) && ($_SESSION["id"]) > 0) {

                    $id_p = $_GET["id"];
                    $id_user = $_SESSION["id"];

                    $a = "SELECT * FROM products WHERE id = $id_p";
                    $p = getOne($a);

                ?>
                    <form action="../control/gioHang_control.php" method="POST" enctype="multipart/form-data">
                        <input type="text" hidden value="<?php echo $id_p ?>" name="id_p" id="">
                        <input type="text" hidden value="<?php echo $id_user ?>" name="id_user" id="">
                        <input type="text" hidden value="<?php echo $p['name'] ?>" name="name" id="">
                        <input type="number" min="1" value="1" name="sl" id="">
                        <input type="text" hidden value="<?php echo $p['image'] ?>" name="image" id="">
                        <input type="text" hidden value="<?php echo $p['price'] ?>" name="price" id=""> <br>
                        <b>Tình Trạng : Còn Hàng</b>
                        <hr>
                        <a href="../control/gioHang_control.php"><button>Thêm vào giỏ hàng</button></a>
                    </form>

                    <div class="icon">
                        <i class="fa-solid fa-heart"></i>
                        <i class="fa-regular fa-envelope"></i>
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-twitter"></i>
                    </div>

                <?php

                } else {
                    echo " <button   ><a href='../viewND/dangNhap.php?'>đăng nhập để bình luận</a></button>";
                }
                ?>
            </div>
        </div>
        <h3>Đánh giá sản phẩm</h3>
        <div class="binhluansp">
            <?php
            if (isset($_SESSION["id"]) && ($_SESSION["id"]) > 0) {

                $id_p = $_GET["id"];
                $id_user = $_SESSION["id"];

                $a = "SELECT * FROM products WHERE id = $id_p";
                $p = getOne($a);

            ?>
                <form action="../control/comment.php" method="POST">
                    <div>
                        <input type="text" hidden value="<?= $id ?>" name="id_p" id="">
                        <input type="text" hidden value="<?= $_SESSION["email"] ?>" name="name" id="">
                        <input type="text" hidden value="<?= $_SESSION["id"] ?>" name="id_u" id="">
                        <div class="chitietsp">
                            <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam placerat, augue a volutpat hendrerit, sapien tortor faucibus augue, a maximus elit ex vitae libero. Sed quis mauris eget arcu facilisis consequat sed eu felis. Nunc sed porta augue. Morbi porta tempor odio, in molestie diam bibendum sed.</h4>
                            <p>Weight: 0.3 kg
                                Dimentions: 15 x 10 x 1 cm
                                Colours: Black, Browns, White
                                Material: Metal</p>

                        </div>
                        <textarea name="comment" id="topbinhluan" cols="180" rows="10" placeholder="sản phẩm tốt"></textarea>

                    </div>
                    <button>Bình Luận</button>
                </form>

            <?php
            } else {
                echo " <button   ><a href='../viewND/dangNhap.php?'>đăng nhập để bình luận</a></button>";
            }
            ?>
        </div>



        <div class="topbinhluan">
            <?php foreach ($comment as $bl) : ?>
                <div>
                    <h3>
                        <?= $bl["name"] ?>
                    </h3>
                    <h2>
                        <?= $bl["date"] ?>
                    </h2>
                    <h4>
                        <?= $bl["comment"] ?>
                    </h4>
                </div>
            <?php endforeach ?>
        </div>



    </div>

</body>

</html>
