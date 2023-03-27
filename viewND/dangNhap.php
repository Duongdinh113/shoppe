    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="css/style.css">
        <title>ĐĂNG NHẬP</title>
    </head>


    <body >
        <div class="container">
    <div class="header">
                    <div class="menu1">
                        <h1><img src="image/logo.png" alt=""></h1>
                    </div>

                    <div class="menu2">
                        <ul class="">
                            <li><a href="index.php">Trang Chủ</a></li>
                            <li><a href="sanpham.php">Sản Phẩm </a></li>
                            <li><a href="giam_gia.php">Hàng Giảm Giá </a></li>
                            <li><a href="">Liên Hệ </a></li>
                            <li><a href="./giohang.php">Giỏ Hàng</a></li>
                        </ul>
                    </div>
                    <div class="btn">
                        <?php
        if(empty($_SESSION["email"])){
            echo ' <div >
            <button > <a href="dangNhap.php">Đăng nhập</a></button>
            <button >  <a href="dangKi.php">Đăng kí</a></button>
            </div>';
        }else{  
           echo '<div >
           <a  href="../control/login_out.php"><button >Đăng xuất</button></a>
           <p >'.$_SESSION["email"].'</p>
           
            </div>';
        }
        ?>



                    </div>
               
           
            <div>

        
    
            </div>
          
  
  
    </div>
   
    <div >
        <p >
        <?php 
            session_start();
            /*
                session là một phiên làm việc giữa client và server 
                Một session bắt đầu khi client gửi request đến server, 
                nó tồn tại xuyên suốt từ trang này đến trang khác trong 
                ứng dụng web và chỉ kết thúc khi hết thời gian timeout 
                hoặc khi bạn đóng ứng dụng. 
                Giá trị của session sẽ được lưu trong biến $_SESSION
            */
            require "../models/connect.php";

            $query = "SELECT * FROM users";
            $use = getAll($query);
        
            $check = 0;
        //    var_dump($_POST);
            foreach($use as $suv){
                if(isset($_POST["btn"])){
                    if(!$_POST["email"] == "" && !$_POST["pass"] == ""){
                        // var_dump($suv["Email"]);die;

                        if($_POST["email"] == $suv["email"] && $_POST["pass"] == $suv["password"]){
                            $_SESSION["email"] = $_POST["email"];
                            if($suv["role"]=="1"){
                                $_SESSION["user"]= $suv["user"];
                                $_SESSION["id"]=$suv["id"];
                                header("location:../view/admin/dashboard.php");
                            }else{
                                $_SESSION["user"]=$suv["user"];
                                $_SESSION["id"]=$suv["id"];
                                header("location:./index.php");
                            } 
                        }else{
                            $check = 1;
                        }
                    }
                
                }
            }
            if($check == 1){
                echo "sai tài khoản hoặc mật khẩu";
            }

        ?>
        </p>
        <div >
            <div class="footer" >
                <div class="anh2" >
                    <img  src="image/dangnhap.jpg" alt="">
                </div>
                <div >
                    <div >
                       <h2 style="text-align:center">ĐĂNG NHẬP</h2>
                    </div>
                    <form class="formdk"  action="./dangNhap.php" method="POST">
                        <div class="mr1">
                            <label for="exampleInputEmail1" >Email</label><br>
                            
                            <input   placeholder="dinhdvph29050@gamil.com" name="email" required="">
                        
                        </div>
                        <div   class="mr1">
                            <label for="exampleInputPassword1" >Mật khẩu<br>
                            <input  required=""  type="password" name="pass">
                        </div>
                       
                        <div class="dangnhap" >
                            <div class="dangnhap1 mr1"><button    type="submit" name="btn">Đăng nhập ngay</button></div>
                            
                          <div class="dangnhap2 mr1">
                            <button    type="submit" class="btn btn-primary">
                            
                            <img src="image/icongg.png" alt=""> <br>
                                <span>Đăng nhập với tài khoản Google</span> 
                               
                            </button>
                            </div>
                        </div>
                        <div class="dangnhap3 mr">
                           <button> <a  href="">Quên mật khẩu</a></button>
                            <p>bạn chưa có tài khoản? <button><a  href="dangKi.php">Đăng kí ngay</a></button></p>
                       
                        <div >
                          <button>  <a  href="./change_Password.php">Đổi mật khẩu </a></button>
                        </div>
                        </div>
                    </form>
                
                </div>
            </div>
        </div>
        <script src="vadiform_DK.js"></script>
        <div class="footer mr">
  <div class="anh"><h1>  <img src="image/logo.png" alt=""></h1></div>
    <div class="menu2">
        <ul class="">
            <li><a href="#">Home</a></li>
            <li><a href="#">Product</a></li>
            <li><a href="#">About us </a></li>
            <li><a href="">Contract us </a></li>

        </ul>
    </div>
</div>  
    </body>

    </html>