<?php 
require_once "../model/connect.php";
$id = $_POST["id"];
$name = $_POST["name"];
$price = $_POST["price"];
$describe = $_POST["describe"];
$id_type = $_POST["id_type"];
$deal = $_POST["deal"];
if (empty($_FILES["image"]["name"])){
    $image = $_POST["Hinh_cu"];
}else {
    $image = $_FILES["image"]["name"];
    move_uploaded_file($_FILES["image"]["tmp_name"],"../img/".$_FILES["image"]["name"]);
}
$query = "UPDATE `products` SET `name`='$name',`image`='$image',`price`='$price',`describe`='$describe',`deal`=$deal,`id_type`='$id_type' WHERE id_p = $id";
connect($query);
header("location:../view/admin/product.php");
?>