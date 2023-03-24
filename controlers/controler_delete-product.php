<?php 
require_once "../model/connect.php";
$id = $_GET["id"];
$query = "DELETE FROM `products` WHERE id_p = '$id'";
connect($query);
header("location:../view/admin/product.php");
?>