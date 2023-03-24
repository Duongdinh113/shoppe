<?php
// echo 1;die;
require "../model/connect.php";
$name = $_POST["name"];
$price = $_POST["price"];
$describe = $_POST["describe"];
$id_type = $_POST["id_type"];
$image = $_FILES["image"]["name"];
$deal = $_POST["deal"];
$query = "INSERT INTO `products`( `name`, `image`, `price`, `describe`, `deal`, `id_type`) VALUES ('$name','$image',$price,'$describe',$deal,$id_type)";
// $query = "INSERT INTO products ( name, image, price, describe, id_type) VALUES ('$name','$image',$price,'$describe',$id_type)";

move_uploaded_file($_FILES["image"]["tmp_name"],"../image/".$_FILES["image"]["name"]);

connect($query);
header("location:../view/admin/product.php");
?>