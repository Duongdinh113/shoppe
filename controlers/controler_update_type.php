<?php
    require "../model/connect.php";
    $id = $_POST["id"];
   
    $type = $_POST["type"];
    $query = "UPDATE type SET name='$type' WHERE id_t = $id";
    connect($query);
    header("location:../view/admin/type.php");
?>