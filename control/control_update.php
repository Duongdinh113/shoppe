<?php 
// echo 1;die;
    require "../models/connect.php";
   
    
    
    $id = $_POST["product-id"];

    $productName = $_POST["product-name"];
    $productDesc = $_POST["product-desc"];
    $productImage = $_FILES["product-image"]["name"];
    $productPrice = $_POST["product-price"];
    $categoryId = $_POST["category"];
    

    // var_dump($_POST);die;
    
    $query = "UPDATE products SET name='$productName', descrtiption='$productDesc', image ='$productImage' , price=$productPrice , class=$categoryId WHERE id= '$id'"; 
    move_uploaded_file($_FILES["product-image"]["tmp_name"],"../image/".$_FILES["product-image"]["name"]);
   
    connect($query);
    // var_dump($query);die;
    header("location: ../view/admin/product_management.php");
?>  