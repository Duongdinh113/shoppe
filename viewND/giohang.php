<?php 
 session_start();
if (isset($_SESSION['id'] )&& ($_SESSION['id']>0)){
     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" href="css/layout.css">
    <title>GIỎ HÀNG </title>
</head>
<style>
     .container {
        max-width: 1200px;
        padding: 0;
        margin: 0 auto;
        box-sizing: border-box;
    }
    img{
        width: 100px;
        height: 100px;
    }
    button a{
        font-size: 20px;
        color:white;
        text-decoration: none;
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
<?php
  
     require "../models/connect.php";
     $id_user = $_SESSION['id'];
     $query = "SELECT * FROM cart WHERE id_user = $id_user";
     
    $pr = getAll($query);
    
    ?>
   
    <table class="table">
        <thead>
            <tr>
                <th>stt</th>
                <th>tên sản phẩm</th>
                <th>image</th>
                <th>số lượng</th>
                <th>Giá</th>
            </tr>
        </thead>
        <tbody>
        
            <?php $tong = 0;
            $count = 0;
            ?>
          
            <?php foreach($pr as $pro):?>
            <tr>
                <?php $count = $count + 1?>
                <td><?= $count?></td>
                <td><h3><?= $pro['name']?></h3></td>
                <td><img src="<?= "../image/".$pro['image']?>" alt=""></td>
                <td><input type="number" value="<?= $pro['sl']?>" name="" id=""></td>
                <td> <h3><?= $pro['gia']?></h3></td>
                <td> <button class="btn btn-success"> <a href="../control/control_xoaDonhang.php?id=<?php echo $pro['id_p']?>">xóa</a>  </button></td>
               <?php 
                    $sl = $pro['sl'];
                     $gia = $pro['gia'];
                     $tong = $tong + ($sl * $gia);
               ?>
              
                <?php endforeach?>
            </tr>
            <tr>
                <td> Tổng tiền</td>
                <td></td>
                <td></td>
                <td></td>
                <td><?= $tong?></td>
            </tr>
        </tbody>
    </table>
  <a href="./thongTin.php"><button>Thanh Toán</button></a>
  </div>
</body>
                
</html>
<?php }else{
    header("location:./dangNhap.php");
}
?>
