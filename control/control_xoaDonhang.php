<?php
    require "../models/connect.php";
    $id = $_GET['id'];
    $query = "DELETE FROM cart WHERE id_p = $id";
    connect($query);
    header("location:../viewND/giohang.php");
?>