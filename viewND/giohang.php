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
    <title>Document</title>
</head>
<style>
    
</style>
<body>
<?php
  
     require "../models/connect.php";
     $id_user = $_SESSION['id'];
     $query = "SELECT * FROM cart WHERE id_user = $id_user";
     
    $pr = getAll($query);
    
    ?>
    <table>
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
                <td><?php echo $count?></td>
                <td><h3><?php echo $pro['name']?></h3></td>
                <td><img src="<?php echo "../image/".$pro['image']?>" alt=""></td>
                <td><input type="number" value="<?php echo $pro['sl']?>" name="" id=""></td>
                <td> <h3><?php echo $pro['gia']?></h3></td>
               
               <?php 
                
               $sl = $pro['sl'];
                $gia = $pro['gia'];
                $tong = $tong + ($sl * $gia);
              
               ?>

                <?php endforeach?>
            </tr>
            <?php 
             
           
            ?>
            <tr>
                <td> Tổng tiền</td>
                <td></td>
                <td></td>
                <td></td>
                <td><?php echo $tong?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
<?php }else{
    header("location:./dangNhap.php");
}
?>