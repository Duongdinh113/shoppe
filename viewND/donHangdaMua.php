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

    td {
        height: 60px;
        margin-top: 20px
    }
</style>

<body>
    <div class="container">

    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/layout.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    .lienhe {
        width: 600px;
        margin: 0 auto;
        padding-top: 10%;
    }

    h2 {
        text-align: center;
    }

    p {
        width: 350px;
        margin-left: 20%;
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
                        <li><a href="lienhe.php">Liên Hệ </a></li>
                        <li><a href="donHangdaMua.php">Đơn hàng </a></li>
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
        <div class="lienhe">

            <h2>Contact Us</h2>
            <p>Say Hello send us your thoughts about our products or share
                your ideas with our Team!</p>
            <form action="../control/control_contact.php" method="POST" name="frmDK" onsubmit="return dk()">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Họ và tên </label>
                    <input type="text" class="form-control" name="name" id="exampleFormControlInput1"
                        placeholder="nhập họ tên " required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nhập email"
                        required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"> Nhập số điện thoại </label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="sdt">
                    <p class="errSDT" style="color:red ;"></p>

                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Vấn đề </label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="vấn đề "
                        required>
                </div>
                <button type="submit" class="btn btn-success">SEND</button>



            </form>
        </div>
        <script>
            function dk() {

                var sdt = document.frmDK.sdt.value;

                var errSDT = document.querySelector(".errSDT");

                let flag = true;
                if (sdt == "") {
                    errSDT.innerHTML = "SDT không được rỗng"
                    flag = false;
                }
                else {
                    let regSDT = /^0\d{9}$/
                    if (!sdt.match(regSDT)) {
                        errSDT.innerHTML = "SDT sai định dạng"
                        flag = false;
                    }
                    else errSDT.innerHTML = ""
                }



                if (flag == true) {
                    alert("đăng ký thành công");
                    return true;
                }
                else {
                    return false;
                }
            }
        </script>
    </div>
</body>

</html>


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
