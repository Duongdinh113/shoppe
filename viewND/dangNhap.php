    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Document</title>
    </head>


    <body class="max-w-full m-auto">
        <?php 
            require "header.php";
            echo headerRender();
        ?> 
        <p class="absolute top-[380px] right-[500px] font-bold text-[20px] text-[red]">
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
        <div class="flex justify-center my-[100px]">
            <div class="flex max-w-[700px] gap-5 items-center">
                <div class="max-w-[350px]">
                    <img class="max-w-full" src="image/item9.png" alt="">
                </div>
                <div class="max-w-[350px]">
                    <div class="text-center">
                        <p class="font-bold text-[24px] text-[#37A9CD]">Đăng nhập</p>
                    </div>
                    <form class="grid gap-y-[7px]" action="./dangNhap.php" method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label><br>
                            
                            <input  class="w-[360px] h-[40px]  pl-[5px] border-[#37A9CD] border-[1px] rounded" type="email" placeholder="dinhdvph29050@gamil.com" name="email" required="">
                        
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Mật khẩu<br>
                            <input class="w-[360px] h-[40px]  pl-[5px] border-[#37A9CD] border-[1px] rounded" required=""  type="password" name="pass">
                        </div>
                        <div>
                        
                        </div>
                        <div class="grid gap-y-[10px] pt-[60px]">
                            <button class="w-[360px] h-[40px] bg-[#37A9CD] font-bold text-[white] border-[1px] border-[#37A9CD]  rounded" type="submit" name="btn">Đăng nhập ngay</button>
                            <button class="w-[360px] h-[40px] bg-[#37A9CD] font-bold text-[white] border-[1px] border-[#37A9CD]  rounded items-center flex justify-center" type="submit" class="btn btn-primary">
                                <img src="image/iconfinder_Google_1298745 1.png" alt="">
                                <p>Đăng nhập với tài khoản Google</p> 
                            </button>
                        </div>
                        <div class="text-center">
                            <a class="text-[#37A9CD]" href="">Quên mật khẩu</a>
                            <p>bạn chưa có tài khoản?<a class="text-[#37A9CD]" href="dangKi.php">Đăng kí ngay</a></p>
                        </div>
                        <div class="text-center">
                            <a class="text-[#37A9CD]" href="./change_Password.php">đổi mật kh</a></p>
                        </div>
                    </form>
                
                </div>
            </div>
        </div>
        <script src="vadiform_DK.js"></script>
        <?php 
            require "foodter.php";
            echo foodterRender();
        ?> 
    </body>

    </html>