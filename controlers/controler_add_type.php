<?php 
    require "../model/connect.php";
    $type = $_POST["type"];
    $query = "INSERT INTO type (name) VALUES ('$type')";
    connect($query);
    header("location:../view/admin/type.php");
  
?>