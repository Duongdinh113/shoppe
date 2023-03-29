<?php
               require "../../models/connect.php";
       $sql="select categoryid.id as maxdm, categoryid=name as tendm, count(products.id) as countsp, min(products.price) as minprice, max(products.price) as maxprice, avg(products.price) as avgprice";
       $sql="from products left join categoryid on categoryid.id=products.id";
       $sql="order by categoryid.id desc";
       $listtk=connect($query);           
       header("location:../view/admin/thongke.php");
            ?>