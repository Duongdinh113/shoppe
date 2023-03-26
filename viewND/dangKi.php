<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
    <title>ĐĂNG KÍ </title>
</head>
<style>
    label {
        display: block;
        position: relative;
        width: 100%;
        height: 20px;
        margin-top: 5px;
    }

    label::before {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        font-size: 12px;
        font-style: system-ui;
    }

    input::placeholder-shown~label::before {
        content: attr(data-empty);
    }

    input:invalid~label::before {
        content: attr(data-invalid);
        color: red;
    }

    input:not(:placeholder-shown):valid~label::before {
        content: attr(data-valid);
        color: blue;
    }
</style>

<body class="max-w-full m-auto">
<div class="flex justify-center">
       <div class="max-w-[1000px] border-[1px] gap-[130px] flex my-[20px] items-center">
    <div>
    <div class="header">
                    <div class="menu1">
                        <img src="image/logo.png" alt="">
                    </div>

                    <div class="menu2">
                        <ul class="">
                            <li><a href="index.php">Trang Chủ</a></li>
                            <li><a href="sanpham.php">Sản Phẩm</a></li>
                            <li><a href="giam_gia.php">Hàng giảm giá</a></li>
                            <li><a href="">Liên Hệ</a></li>
                            <li><a href="./giohang.php">giỏ hàng</a></li>
                        </ul>
                    </div>
                    <div>
                        <?php
        if(empty($_SESSION["email"])){
            echo ' <div >
            <a href="dangNhap.php"><button >Đăng nhập</button></a>
            <a href="dangKi.php"><button >Đăng kí</button></a>
            </div>';
        }else{  
           echo '<div class="text-center w-[216px]">
           <a  href="../control/login_out.php"><button >Đăng xuất</button></a>
           <p >'.$_SESSION["email"].'</p>
           
            </div>';
        }
        ?>



                    </div>
               
            </div>
            <div>
    </div>
    <div>
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
    </div>
    </div>
    </div>
    <div class="flex justify-center">
        <div class="flex max-w-[700px] items-center gap-5">
            <div class="max-w-[350px]">
                <img class="max-w-full" src="image/item9.png" alt="">
            </div>
            <div class="max-w-[350px]">
                <h2 class="font-bold text-[30px] text-[orange] text-center">Đăng ký</h2>
                <form action="../control/control_dK.php" method="POST" enctype="multipart/form-data" class="">
                    <label for="">Họ và tên</label> <br>
                    <input class="w-[360px] h-[40px]  pl-[5px] border-[orange] border-[1px] rounded" type="text" placeholder="Nguyễn Hoàng Tiến" name="username" id="username" required="" minlength="6"> <br>

                    <label for="">Email</label> <br>
                    <input class="w-[360px] h-[40px]  pl-[5px] border-[orange] border-[1px] rounded" type="email" placeholder="tiennh21@gmail.com" name="email" id="email" required=""  > <br>
                    <input type="file" name="avatar"> <br>
                    <label for="">Mật Khẩu</label> <br>
                    <input class="w-[360px] h-[40px]  pl-[5px] border-[orange] border-[1px] rounded" type="password" minlength="6" required="" placeholder="*********" name="password" id="password"> <br>
                    
                    <label for="">Nhập lại mật khẩu</label> <br>
                    <input class="w-[360px] h-[40px]  pl-[5px] border-[orange] border-[1px] rounded" type="password" minlength="6"  required="" placeholder="*********" name="retype-password" id="retype-password"> <br>
                    
                    <div id="ShowErr"></div>
                    <button type="submit" name="register" id="register" class="my-[10px] w-[360px] h-[40px] bg-[orange] font-bold text-[white] border-[1px] border-[orange]  rounded">Đăng ký </button><br>
                </form>
            </div>
        </div>
</div>
    <?php
    require "foodter.php";
    echo foodterRender();
    ?>
</body>

</html>