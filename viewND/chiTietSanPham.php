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
    .spctmr {
        margin: 0 auto;
        width: 1000px;
        display: grid;
        grid-template-columns: 1fr 1fr;
        column-gap: 60px;
    }

    .anhsp img {
        width: 100%;
    }

    textarea {
        width: 100%;
    }



    a.buynow {
        padding: 10px 0px;
        background-color: darkkhaki;
        position: absolute;
        bottom: -39px;
        width: 100%;
        transition: 0.25s ease-in-out;
        text-align: center;
        text-decoration: none;
    }

    .div a.anh img {
        width: 100%;
        display: block;
        /*mat khoang trang ben duoi*/
    }

    .div a.anh {
        display: block;
    }

    .div {
        position: relative;
        overflow: hidden;
    }

    .div:hover a.buynow {
        bottom: 20px;
    }

    .sanpham {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        border-radius: 5px;
        gap: 25px;
        background-color: #F4F4F4;
        padding: 15px 15px;
    }

    .sanpham1 {
        /* width: 300px; */
        /* border: 1px solid black; */
        border-radius: 15px;
        background-color: white;
    }

    .sanpham1 a img {
        margin: 10px 10px;
        width: 94%;
        height: 300px;
    }


    .thoigian h4{
        padding: 0px 0px 0px 90px;
    }
    .topbinhluan{
        background-color: #f4f4f4;
        border-radius: 10px;
        padding: 15px 15px;
    }
    .topbinhluan h3{
        background-color: white;
        padding: 10px;
    }
    .khachhangbl{
        background-color: white;
        border-radius: 10px;
        padding: 5px 5px;
    }
    .khachhangbl h3{
        background-color: #FFFBF8;
        border-radius: 10px;
        padding-left: 50px;
    }
    .thoigian h5{
        padding: 0px 0px 0px 90px;
        color: #CCCCCC;
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
                    echo '<div class="text-center w-[216px]">
                    <a  href="../control/login_out.php"><button >Đăng xuất</button></a>
                    <p >' . $_SESSION["email"] . '</p>
                            
                    </div>';
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
        <h3>Thông tin sản phẩm</h3>
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
                            <p>Weight: 0.3 kg</p>
                            <p>Dimentions: 15 x 10 x 1 cm</p>
                            <p>Colours: Black, Browns, White</p>
                            <p>Material: Metal</p>




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
            <h3>Đánh giá sản phảm</h3>
            <?php foreach ($comment as $bl) : ?>
                <div class="khachhangbl">
                    <h3>
                        <?= $bl["name"] ?>
                    </h3>
                    <div class="thoigian">
                        <h4>
                            -> <?= $bl["comment"] ?>
                        </h4>
                        <h5>
                            <?= $bl["date"] ?>
                        </h5>

                    </div>

                </div>
            <?php endforeach ?>
        </div>
        <br>
        <h3>Sản Phẩm Tương Tự</h3>
        <?php if (empty($_POST["search"])) {
            $sanpham = "SELECT * FROM products";
        } else {
            $search = $_POST["search"];

            $sanpham = "SELECT * FROM products WHERE name LIKE '$search'";
        }
        $productList = getAll($sanpham) ?>
        <div class="sanpham">
            <?php foreach ($productList as $item1) : ?>
                <div class="sanpham1">

                    <a href="./chiTietSanPham.php?id=<?= $item1["id"] ?>"><img src="<?= "../image/" . $item1["image"] ?>" alt=""> </a>
                    <h3>
                        <?= $item1["name"] ?>
                    </h3>
                    <p>
                        <?= $item1["descrtiption"] ?>
                    </p>
                    <span class="gia">
                        <?= "$" .  $item1["price"]  ?>
                    </span>

                </div>
            <?php endforeach ?>
        </div>



    </div>
    <div class="page-footer">
        <div class="footer">
            <div class="footer-address">
                <h2>HEROBIZ</h2>
                <div class="address">
                    <p>A108 Adam</p>
                    <p>NY 535022</p>
                </div>
                <p>Phone:+1 5589</p>
                <p>Emaillinfo@example.com</p>
            </div>
            <div class="footer-nav">
                <div class="nav">
                    <h3>Useful</h3>
                    <p>Home</p>
                    <p>About us</p>
                    <p>Services</p>
                    <p>Terms of</p>
                    <p>Privacy</p>
                </div>
            </div>
            <div class="nav1">
                <h3>Our</h3>
                <p>Web</p>
                <p>Web</p>
                <p>Product</p>
                <p>Marketing</p>
                <p>Graphic</p>
            </div>
            <div class="footer-contaect">
                <div class="contaect">
                    <h3>Our</h3>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam moster magna</p>
                </div>
                <form action="">
                    <input type="text" name="" id="">
                    <button></button>
                </form>
            </div>
        </div>
        <div class="sub-footer">
            <div class="chu">
                <div class="end">
                    <span>©</span>
                    <span>HeroBiz</span>
                    <span>. All Rights<span>
                </div>
                <div class="designed">
                    <span>Designed</span>
                    <span><a href="">BootstrapMade</a></span>
                </div>
            </div>
            <div class="block">
                <div class="block-same"></div>
                <div class="block-same"></div>
                <div class="block-same"></div>
                <div class="block-same"></div>
                <div class="block-same"></div>
            </div>
        </div>
    </div>

</body>

</html>
