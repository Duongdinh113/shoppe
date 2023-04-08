<?php 
    require 'connect.php';
    $name = $_POST["name"];
    $sdt = $_POST["sdt"];
    $email = $_POST["email"];

    $query = "INSERT INTO contact (name,sdt,email) VALUES ('$name','$sdt','$email')";
    connect($query); //gọi hàm connect() để thực thi câu lệnh insert
    header("location:lienhe.php");
?>