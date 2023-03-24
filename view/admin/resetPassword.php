<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reset Password</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap"
    rel="stylesheet">
</head>
<script>
  tailwind.config = {
    theme: {
      extend: {
        fontFamily: {
          dmSans: "'DM Sans', sans-serif",
        }
      }
    }
  }
</script>

<body>
  <!-- wrapper -->
  <div class="font-dmSans mx-auto mt-10 max-w-[1500px]">
    <!-- header -->
    <div class="mx-7 flex justify-between">
      <div>
        <a href=""><img src="../images/SHOPPE.png" alt=""></a>
      </div>
      <div class="flex">
        <ul class="flex mr-4 border-r-[1px] border-[#707070]">
          <a href="">
            <li class="mr-14">Shop</li>
          </a>
          <a href="">
            <li class="mr-14">Blog</li>
          </a>
          <a href="">
            <li class="mr-14">Our Story</li>
          </a>
        </ul>
        <div class="flex">
          <a href="" class="mr-8 ml-6"><img src="../images/Icon color (7).png" alt=""></a>
          <a href="" class="mr-8"><img src="../images/shopping-cart 1.png" alt=""></a>
          <a href="" class="mr-8"><img src="../images/Icon color (1).png" alt=""></a>
        </div>
      </div>
    </div>
    <div class="mt-10 mx-7 border-b-[1px] border-[#D8D8D8]"></div>
    <!-- main -->
    <div class="mt-[160px] flex justify-center items-center">
        <div class="block">
            <h1 class="text-center font-semibold text-3xl">Have you Forgotten Your Password ?</h1>
            <p class="mt-[40px] font-normal text-base w-[500px] text-center">If you've forgotten your password, enter your e-mail address and we'll send you an e-mail </p>
            <div class="mt-[76px] border-b-2 border-[#D8D8D8]">
                <input class="p-2 w-full" type="email" placeholder="Email">
              </div>
            <button type="submit" class="mt-[64px] bg-black w-[500px] hover:bg-slate-900 hover:text-black"><p class="text-white p-3 font-bold text-base">RESET PASSWORD</p></button>
        </div>
    </div>
    <!-- footer -->
    <div class="mt-[247px] mx-7 mb-[82px]">
        <div class="flex justify-between">
          <div>
            <ul class="flex">
              <li class="font-normal text-base text-[#707070] "><a href="">CONTACT</a></li>
              <li class="font-normal text-base text-[#707070] ml-[41px] "><a href="">TERMS OF SERVICES</a></li>
              <li class="font-normal text-base text-[#707070] ml-[41px] "><a href="">SHIPPING AND RETURNS</a></li>
            </ul>
          </div>
          <div class="border-b-[1px] border-[#000000] w-[400px]">
            <input class="pr-10 mb-3 w-full p-2" type="text" placeholder="Give an email, get the newsletter.">
          </div>
        </div>
        <div class="flex justify-between mt-[48px]">
          <div>
            <p class="font-normal text-base text-[#707070]"> <span class="text-black">© 2021 Shelly</span> Terms of use <span class="text-black">and</span> privacy policy.</p>
          </div>
          <div class="flex">
            <a href=""><img src="../images/Icon color (2).png" alt=""></a>
            <a href=""><img class="ml-[28px]" src="../images/Icon color (3).png" alt=""></a>
            <a href=""><img class="ml-[28px]" src="../images/Icon color (5).png" alt=""></a>
            <a href=""><img class="ml-[28px]" src="../images/Icon color (6).png" alt=""></a>
          </div>
        </div>
    </div>
  </div>
</body>

</html>