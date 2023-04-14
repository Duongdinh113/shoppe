<?php 
    require "../models/connect.php";
    $id = $_POST['id'];
    $name = $_POST['xacnhan'];
    $query = "UPDATE `bill` SET `orderstatus`='$name' WHERE id = '$id'";
    connect($query);
    header("location:../view/admin/quanLi_donHang.php");
?>