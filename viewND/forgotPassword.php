<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="lg:flex lg:justify-center lg:items-center lg:mt-32">
            <div class="mr-[84px]">
                <a href=""><img class="object-cover h-[560px] rounded-xl"
                        src="https://i.pinimg.com/564x/1a/70/10/1a7010bc9a4bd96dcd08d9ce2df8c854.jpg" alt=""></a>
            </div>
            <form action="../control/control_forgotPassword.php" method="POST">
                <div class="mt-6 ml-12 ">
                    <h1 class="font-bold text-3xl text-[#37A9CD] text-center">Quen mat khau</h1>
                    <div class="mt-5">
                        <p class="text-base font-semibold lg:font-normal lg:text-lg lg:text-[#4A5568] lg:mt-3">Email</p>
                        <input name="email" type="text" required=""
                            class="border-2 border-[#37A9CD] mt-2 rounded w-[300px] h-[48px] pl-3 " 
                            >
                    </div>
                    <div class="mt-6">
                        <p class="mt-3 text-base font-semibold lg:font-normal lg:text-lg lg:text-[#4A5568] lg:mt-3">username
                        </p>
                        <input name="username" type="text" required=""
                            class="border-2 border-[#37A9CD] mt-2 rounded w-[300px] h-[48px] pl-3 " >
        
                    </div>
                    <div>
                        <button type="submit" name='submit'
                            class="mt-8 text-[#FFFFFF] bg-[#37A9CD] text-sm font-bold w-[300px] h-[40px] text-center rounded ">submit</button>
                    </div>
                </div>
            </form>
        </div>
</body>
</html>
