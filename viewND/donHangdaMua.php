<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/layout.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    .container {
        max-width: 1200px;
        padding: 0;
        margin: 0 auto;
        box-sizing: border-box;
    }
   td{
   height: 60px;
   margin-top: 20px
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


        <table class="table">
            <thead>
                <tr class="bg-[black] h-[50px]">
                    <th class="text-[white]">id</th>
                    <th class="text-[white]">Product Name</th>
                    <th class="text-[white]">number</th>
                    <th class="text-[white]">total_price</th>


                </tr>
            </thead>

            <tbody>
                <?php
                require "../models/connect.php";
                //    $query = "SELECT * FROM products"; 
                //    $productList = getAll($query);
                
                $user = "SELECT * FROM billdetail ";

                $productList = getAll($user);


                ?>

                <?php foreach ($productList as $product): ?>
                    <tr>


                        <td class="text-center">
                            <?php echo $product["id_bill"] ?>
                        </td>
                        <td>

                            <?php
                            $id = $product['id_sp'];
                            $ten_sp = "SELECT * FROM products WHERE id = $id";
                            $ten_sps = getOne($ten_sp);
                            ?>
                            <?php echo $ten_sps['name'] ?>
                        </td>
                        <td>
                            <?php echo $product["sl"] ?>
                        </td>

                        <td>
                            <?php echo $product["total_price"] ?>
                        </td>


                    </tr>
                <?php endforeach ?>

            </tbody>
        </table>

    </div>
</body>

</html>
