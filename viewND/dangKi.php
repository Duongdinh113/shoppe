<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
    <title>ĐĂNG KÍ </title>
</head>


<body >
    <div class="container">
<div >
       
    
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
                    if(empty($_SESSION["email"])){
                    echo ' <div >
                    <button id="signin"> <a href="dangNhap.php">Đăng nhập</a></button>
                    <button id="signup">  <a href="dangKi.php">Đăng kí</a></button>
                    </div>';
                    }else{  
                    echo '<div class="text-center w-[216px]">
                    <a  href="../control/login_out.php"><button >Đăng xuất</button></a>
                    <p >'.$_SESSION["email"].'</p>
                            
                    </div>';
                    }
                ?>
            </div>
        </header>
   
    <div >
        <div class="footer ">
            <div >
                <img  src="image/dangky.jpg" alt="">
            </div>
            <div class="formdk ">
                <h2 >Đăng ký</h2>
                <form action="../control/control_dK.php" method="POST" enctype="multipart/form-data" class="">
                   <div class="mr1"> <label for="">Họ và tên</label> <br>
                    <input  type="text" placeholder="Họ & tên" name="username" id="username" required="" minlength="6"> 
                    </div>
                    <div class="mr1">
                       <label for="">Email</label> <br>
                    <input  type="email" placeholder="điền email" name="email" id="email" required=""  > </div>
                   <div class="mr1">
                    <label for=""> Ảnh</label> <br>
                    <input type="file" name="avatar" > 
                   </div>
                   <div class="mr1"> <label for="">Mật Khẩu</label> <br>
                    <input  type="password" minlength="6" required="" placeholder="nhập mật khẩu" name="password" id="password">
                    </div>
                  <div class="mr1">
                  <label for="">Nhập lại mật khẩu</label> <br>
                    <input  type="password" minlength="6"  required="" placeholder="nhập lại mật khẩu" name="retype-password" id="retype-password"> <br>
                   
                 
                  </div>
                   <div class="mr1" id="ShowErr"> 
                    <button  type="submit" name="register" id="register" >Đăng ký </button>
                    </div>
                </form>
            </div>
        </div>
</div></div>
<footer>
            <div class="logocuoi">
            <img src="image/logo_1.1.png" alt="">
            </div>
            <div class="menucuoi">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Products</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Contact Us</a></li>
                </ul>
            </div>
        </footer>
</div>
</body>

</html>