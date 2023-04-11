<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="css/style.css">
       <script src="https://cdn.tailwindcss.com"></script>
        <title>ĐĂNG NHẬP</title>
    </head>


    <body >
        <div class="container">
    
   
    <div >
        <div class="absolute right-[330px] top-[670px]">
            <?php 
            session_start(); // bật công tắc để các dữ liệu được liên kết với nhau 
            /*
                session là một phiên làm việc giữa client và server 
                Một session bắt đầu khi client gửi request đến server, 
                nó tồn tại xuyên suốt từ trang này đến trang khác trong 
                ứng dụng web và chỉ kết thúc khi hết thời gian timeout 
                hoặc khi bạn đóng ứng dụng. 
                Giá trị của session sẽ được lưu trong biến $_SESSION
            */
            require "../models/connect.php";

            $query = "SELECT * FROM users"; //câu lệnh lấy toàn bộ dữ liệu từ bảng users trong DB
            $use = getAll($query); //thực hiện lấy dữ liệu và gán cho biến $use
        
            $check = 0;
            foreach($use as $suv){ //lặp để kiểm tra dữ liệu nhập vào form và dữ liệu trong DB
                if(isset($_POST["btn"])){ //kiểm tra xem button login đã được ấn hay chưa
                    if(!$_POST["email"] == "" && !$_POST["pass"] == ""){ // kiểm tra xem email và password có trống hay không
                        if($_POST["email"] == $suv["email"] && $_POST["pass"] == $suv["password"]){ //kiểm tra xem email và password nhập vào có trùng trong db k
                            $_SESSION["email"] = $_POST["email"]; // nếu khớp dữ liệu trong db thì gán dữ liệu email vào session thông qua key là email
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
                echo "sai tài khoản hoặc mật khẩu" ; 
            }

        ?>
        </div>
        <div class="lg:flex lg:justify-center lg:items-center lg:mt-32">
            <div class="mr-[84px]">
                <a href=""><img class="object-cover h-[560px] rounded-xl"
                        src="https://i.pinimg.com/564x/cb/c7/ef/cbc7ef3b7c86abf36d031c57967c48f5.jpg" alt=""></a>
            </div>
            <form action="./dangNhap.php" method="POST">
                <div class="mt-6 ml-12 ">
                    <h1 class="font-bold text-3xl text-[#37A9CD] text-center">Đăng nhập</h1>
                    <div class="mt-5">
                        <p class="text-base font-semibold lg:font-normal lg:text-lg lg:text-[#4A5568] lg:mt-3">Email</p>
                        <input name="email" type="text" required=""
                            class="border-2 border-[#37A9CD] mt-2 rounded w-[300px] h-[48px] pl-3 "
                            placeholder="irenesm@gmail.com.vn">
                       
                    </div>
                    <div class="mt-6">
                        <p class="mt-3 text-base font-semibold lg:font-normal lg:text-lg lg:text-[#4A5568] lg:mt-3">Mật Khẩu
                        </p>
                        <input name="pass" type="password" required=""
                            class="border-2 border-[#37A9CD] mt-2 rounded w-[300px] h-[48px] pl-3 " placeholder="*********">
        
                    </div>
                    <div>
                        <button name="btn" type="submit"
                            class="mt-8 text-[#FFFFFF] bg-[#37A9CD] text-sm font-bold w-[300px] h-[40px] text-center rounded ">Đăng
                            nhập ngay</button>
                    </div>
                    <div class="mt-9 text-center mr-16 lg:mr-0">
                        <a href="./forgotPassword.php">
                            <p class="font-normal text-sm text-[#37A9CD] cursor-pointer">Quên mật khẩu</p>
                        </a>
                        <div class="flex mt-2 justify-center items-center">
                            <!-- <a href="./change_Password.php">
                                <h6 class="text-[#616161] font-normal text-sm">Đổi mật khẩu?</h6>
                            </a> -->
                            <a href="./dangKi.php">
                                <p class="text-[#37A9CD] font-normal text-sm pl-1">Đăng kí ngay</p>
                            </a>
                        </div>
                    </div>
                </div>

            </form>
        </div>
        <script src="vadiform_DK.js"></script>
        <!-- <div class="footer mr"> -->
  
    </body>

    </html>
