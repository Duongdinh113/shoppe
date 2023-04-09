<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="header">
                    <div class="menu1">
                        <h1><img src="image/logo.png" alt=""></h1>
                    </div>
                    <div class="menu2">
                        <ul class="">
                            <li><a href="index.php">Trang Chủ</a></li>
                            <li><a href="sanpham.php">Sản Phẩm </a></li>
                            <li><a href="giam_gia.php">Hàng Giảm Giá </a></li>
                            <li><a href="">Liên Hệ </a></li>
                            <li><a href="donHangdaMua.php">Đơn Hàng</a></li>
                            <li><a href="./giohang.php">Giỏ Hàng</a></li>
                        </ul>
                    </div>
                    <div class="btn">
                        <?php
        if(empty($_SESSION["email"])){
            echo ' <div >
            <button > <a href="dangNhap.php">Đăng nhập</a></button>
            <button >  <a href="dangKi.php">Đăng kí</a></button>
            </div>';
        }else{  
           echo '<div >
           <a  href="../control/login_out.php"><button >Đăng xuất</button></a>
           <p >'.$_SESSION["email"].'</p>
           
            </div>';
        }
        ?>



                    </div>
               
           
            <div>

        
    
            </div>
          
  
  
    </div>
<table class="w-[1000px] h-[200px]">
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
            
                <?php foreach($productList as $product):?>
                <tr>
                    
                    
                    <td class="text-center">
                        <?php echo $product["id_bill"]?>
                    </td>
                    <td>
                        
                    <?php
                     $id = $product['id_sp'];
                    $ten_sp = "SELECT * FROM products WHERE id = $id";
                    $ten_sps = getOne($ten_sp);
                    ?> 
                    <?php echo $ten_sps['name']?>
                    </td>
                    <td>
                        <?php echo $product["sl"]?>
                    </td>
                
                    <td>
                        <?php echo $product["total_price"]?>
                    </td>
                
                  
                </tr>
                <?php endforeach?>
                
        </tbody>
                </table>
</body>
</html>