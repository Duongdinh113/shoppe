<?php
    require "../model/connect.php";
    
    $type = $_GET["id"];
    $query = "DELETE FROM type WHERE id_t = $type";
    connect($query);
    header("location:../view/admin/type.php");
  
    

?>