<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
    <style>
        table,
        th,
        td {
            border: 1px solid orange;
        }
    </style>
</head>

<body class="max-w-full m-auto">
<?php
        session_start();
    ?>

<div>
        <div class="flex justify-between mx-[20px]">
            <div class="">
                <img src="../../viewND/image/logo.png" alt="">
            </div>
            <div class="flex ">
                <div class="flex">
                <p>xin chào <div class="text-[#37A9CD]"><?php echo $_SESSION["email"]?></div><a href="../../control/login_out.php"><button class="border-[1px] bg-[#38A169] rounded hover:text-[white]">logout</button></a></p>
                    <img src="" alt="">
                </div>
            </div>
        </div>
        <div class="flex gap-5 justify-between mx-[30px] my-[50px]">
            <div class="w-[200px] border-r-[1px] border-[#CBD5E0] h-[550px]">
                <div class="">
                    <ul>
                    <li class="flex items-center gap-2 border-[1px] w-[200px] h-[40px] border-[orange] hover:bg-[orange] hover:text-[white] font-bold"><img class="w-[20px]" src="../../viewND/image/Vector.png" alt=""><a href="dashboard.php">Dashboard</a></li>
                        <li class="flex items-center gap-2 border-[1px] w-[200px] h-[40px] border-[orange] hover:bg-[orange] hover:text-[white] font-bold"><img class="w-[20px]" src="../../viewND/image/Vector (1).png" alt=""><a href="product_management.php">Quản lý sản phẩm</a></li>
                        <li class="flex items-center gap-2 border-[1px] w-[200px] h-[40px] border-[orange] hover:bg-[orange] hover:text-[white] font-bold"><img class="w-[20px]" src="../../viewND/image/Vector (2).png" alt=""><a href="quanLi_user.php">Quản lý user</a></li>
                        <li class="flex items-center gap-2 border-[1px] w-[200px] h-[40px] border-[orange] hover:bg-[orange] hover:text-[white] font-bold"><img class="w-[20px]" src="../../viewND/image/Vector (3).png" alt=""><a href="./quanLi_danhMuc.php">Quản lý danh mục</a></li>
                        <li class="flex items-center gap-2 border-[1px] w-[200px] h-[40px] border-[orange] hover:bg-[orange] hover:text-[white] font-bold"><img class="w-[20px]" src="../../viewND/image/Vector (4).png" alt=""><a href="./quanLi_donHang.php">Quản lí đơn hàng</a></li>
                        <li class="flex items-center gap-2 border-[1px] w-[200px] h-[40px] border-[orange] hover:bg-[orange] hover:text-[white] font-bold"><img class="w-[20px]" src="../../viewND/image/Vector (4).png" alt=""><a href="thongKe.php">Thống kê</a></li>
                    </ul>
                </div>
            </div>
            <div>
                <div class="max-w-[1000px]">
                    <p class="absolute text-[white] font-bold right-[450px] top-[170px]">Thống Kê</p>
                    <img class="max-w-full" src="../../viewND/image/Rectangle 152.png" alt="">
                </div>
                <div class="">
                <br>
                <br>
                <br>
              
    <table class="w-[1000px] h-[200px]">
        <thead>
            <tr class="bg-[black] h-[50px]">
                <th class="text-[white]">Mã Danh Mục</th>
                <th class="text-[white]">Tên Danh Mục</th>
                <th class="text-[white]">Số Lượng </th>
                <th class="text-[white]">Giá Cao Nhất</th>
                <th class="text-[white]">Giá Thấp Nhất</th>
                <th class="text-[white]">Giá Trung Bình</th>
              
            </tr>
        </thead>
    
        <tbody>
      <?php
   require "../../models/connect.php";

            
       $sql=" SELECT categoryid.iddm as maxdm, categoryid.namee as tendm, count(products.id) as countsp, MAX(products.price) as maxprice, MIN(products.price) as minprice, AVG(products.price) as avgprice FROM  categoryid JOIN products ON categoryid.iddm=products.class GROUP BY categoryid.iddm ";
   
       $listtk=getAll($sql);
     
            ?>
            
                <?php foreach( $listtk as $tk):?>
                <tr>
                   
                    <td class="text-center">
                        <?php echo $tk ["maxdm"]?>
                    </td>

                    <td>
                    <?php echo $tk ["tendm"]?>
                    </td>
                    <td>
                    <?php echo $tk ["countsp"]?>
                    </td>
                    <td>
                    <?php echo $tk ["maxprice"]?>
                    </td>

                    <td>
                    <?php echo $tk ["minprice"]?>
                    </td>

                    <td>
                    <?php echo $tk ["avgprice"]?>
                    </td>
                </tr>
                <?php endforeach ?>
                
        </tbody>
                </table>
                </div>
            </div>
            
        </div>
        <div id="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Loại sản phẩm');
    data.addColumn('number', 'Số sản phẩm');

    // Add rows to the data table using a loop
    <?php foreach ($listtk as $tk): ?>
      data.addRow(["<?php echo $tk["tendm"] ?>", <?php echo $tk["countsp"] ?>]);
    <?php endforeach ?>

    // Set chart options
    var options = {
      title: "Thống kê số sản phẩm theo loại",
      pieHole: 1
    };

    // Instantiate and draw the chart
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    chart.draw(data, options);
  }
</script>
    </div>
    
    
</body>

</html>