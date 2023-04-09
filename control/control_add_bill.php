<?php 
    function add_bill_detail($detail = [], $bill_id ){
        $id_sp = $detail['id_p'];
        $quantity = $detail['sl'];
        $price = $detail['gia'];
        $total_price = $quantity * $price;
        $query = "INSERT INTO `billdetail`(`id_bill`, `id_sp`, `sl`, `total_price`) VALUES ('$bill_id','$id_sp','$quantity','$total_price')";
        connect($query);
    }
?>

<?php 
    require "../models/connect.php";
    $id =  uniqid();
    $id_user = $_POST['id'];
    $name = $_POST['name'];
    $diachi = $_POST['diachi'];
    $phone= $_POST['sdt'];
   
    $query = "INSERT INTO `bill`(`id`, `id_user`, `fullname`, `phone`, `diachi`) VALUES ('$id','$id_user','$name','$phone','$diachi')";
    

    connect($query);
    $cart_query = "SELECT * FROM cart WHERE id_user = $id_user";
    $cart_body = getAll($cart_query);
    // var_dump($cart_body);
    foreach($cart_body as $cart_bodys){
        add_bill_detail($cart_bodys,$id);
    }
    
    $query = "DELETE FROM cart WHERE id_user = $id_user";
    connect($query);
    header('location:../viewND/daMua.php')
?>