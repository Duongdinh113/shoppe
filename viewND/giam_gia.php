<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/layout.css">
    <title>GIẢM GIÁ</title>
</head>
<style>
    .box {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        margin-left: 10%;
    }

    .dell {
        width: 500px;

        margin-top: 10%;
        height: 600px;
    }

    .dell img {
        width: 400px;
    }

    h2 {
        font-size: 25px;
        font-weight: 600;
        text-transform: capitalize;
    }

    del {
        color: red;
        font-size: 30px;
        font-weight: 500;
    }

    h3 {
        font-size: 25px;
    }

    .c:hover .b {
        display: block;
    }

    .b {
        padding: 40px;
        position: absolute;
        padding-left: 70px;
        display: none;
    }

    .c {
        display: flex;
    }

    .a {
        width: 50px;
        border-radius: 50%;
        border: 0.1875em solid #0F1C3F;
        height: 50px;
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
                    echo '<div class="c"><img class="a" src="../image/' . $_SESSION['image'] . '" alt=""><p>' . $_SESSION['email'] . '</p>
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
        $query = "SELECT * FROM products WHERE deal";
        $productList = getAll($query);
        ?>
        <div class="flex justify-center">
            <div>
                <div class="box">
                    <?php foreach ($productList as $item1) : ?>
                        <div class="dell">


                            <img src="<?= "../image/" . $item1["image"] ?>" alt="">
                            <h2><?= $item1["name"] ?></h2>
                            <p><?= $item1["descrtiption"] ?></p>
                            <del><?= $item1["price"] . "$" ?></del>
                            <h3 class=""><?= $item1["deal"] . "$" ?></h3>

                        </div>
                    <?php endforeach ?>
                </div>
            </div>
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
