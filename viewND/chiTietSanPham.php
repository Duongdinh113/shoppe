<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/layout.css">
    <title>CHI TIẾT SẢN PHẨM </title>
</head>
<style>
    .spct{
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
    }
    .boxa img{
        height: 150px;
        width: 150px;
        border: 1px solid #cdcdcd;
        margin-top: 10%;
    }
    h1{
        text-align: center;
    }
    .boxct img{
        width: 500px;
        height: 450px;
    }
    h3{
        text-align: center;
    }
    .boxbl{
        margin-left: 40%;
        margin-top: 10%;
    }

</style>
<body>



    <div class="container">
        <header>
            <div class="logo">
                <img src="image/SHOPPE.png" alt="">
            </div>
            <div class="menu">
                <ul class="">
                    <li><a href="index.php">Trang Chủ</a></li>
                    <li><a href="sanpham.php">Sản Phẩm </a></li>
                    <li><a href="giam_gia.php">Hàng Giảm Giá </a></li>
                    <li><a href="lienhe.php">Liên Hệ </a></li>
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




        <div class="spct mr">

            <div class="boxa">
                <div>
                <img src="image/tải xuống.jpg" alt="">
                </div>
                <div>
                    <img src="image/tải xuống.jpg" alt="">
                </div>
                <div>
                    <img src="image/tải xuống.jpg" alt="">
                </div>
            </div>
            <div class="boxct">

            <h1> CHI TIẾT SẢN PHẨM</h1>
            <?php

            require "../models/connect.php";
            $id = $_GET["id"];
            $query = "SELECT * FROM products WHERE id = $id";
            $product = getAll($query);
            $comments = "SELECT * FROM comment WHERE idp = $id";
            $comment = getAll($comments);
            //    giỏ hàng
            ?>



            <?php foreach ($product as $details): ?>

                <img src="<?= " ../image/" . $details["image"] ?>" alt="">
                <h3>
                    <?= $details["descrtiption"] ?>
                </h3>
            <?php endforeach ?>
            </div>
            <div class="boxbl">
                <?php foreach ($comment as $bl): ?>
                    <div>
                        <h4>
                            <?= $bl["name"] ?>
                        </h4>
                        <p>
                            <?= $bl["date"] ?>
                        </p>
                        <h4>
                            <?= $bl["comment"] ?>
                        </h4>
                    </div>
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
                        <input type="text" hidden value="<?php echo $p['namee'] ?>" name="name" id="">
                        <input type="number" min="1" value="1" name="sl" id="">
                        <input type="text" hidden value="<?php echo $p['image'] ?>" name="image" id="">
                        <input type="text" hidden value="<?php echo $p['price'] ?>" name="price" id=""> <br>
                        <a href="../control/gioHang_control.php"><button>Thêm vào giỏ hàng</button></a>
                    </form>

                    <form action="../control/comment.php" method="POST">
                        <div>
                            <input type="text" hidden value="<?= $id ?>" name="id_p" id="">
                            <input type="text" hidden value="<?= $_SESSION["email"] ?>" name="name" id="">
                            <input type="text" hidden value="<?= $_SESSION["id"] ?>" name="id_u" id="">

                            <textarea name="comment" id="" cols="30" rows="10" placeholder="sản phẩm tốt"></textarea>
                            <button>Bình Luận</button>
                        </div>
                    </form>

                <?php

                } else {
                    echo " <button   ><a href='../viewND/dangNhap.php?'>đăng nhập để bình luận</a></button>";
                }
                ?>
           
        </div>
    </div>

</body>

</html>
