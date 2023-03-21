<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
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
  <div class="font-dmSans mx-auto mt-10 max-w-[1500px] ">
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
    <div class="mx-7 flex">
      <!-- left -->
      <div class="flex-[1] mt-[96px]">
        <h2 class="font-medium text-3xl">Blog</h2>
        <div class="mt-[36px] flex relative ">
          <input class="p-2 mr-2 w-[280px] border-b border-[#707070]" type="text" placeholder="Search...">
          <a href=""><img class="mt-2 absolute left-[250px]" src="../images/Icon color.png" alt=""></a>
        </div>
        <div class="block">
          <a>
            <p class="mt-[62px] font-medium text-xl text-[#000000]"> Categories</p>
          </a>
          <a>
            <p class="mt-[20px] font-normal text-base text-[#707070] hover:text-[#000000] hover:font-medium cursor-pointer ">Fashion</p>
          </a>
          <a>
            <p class="mt-[20px] font-normal text-base text-[#707070] hover:text-[#000000] hover:font-medium cursor-pointer ">Style</p>
          </a>
          <a>
            <p class="mt-[20px] font-normal text-base text-[#707070] hover:text-[#000000] hover:font-medium cursor-pointer ">Accessories</p>
          </a>
          <a>
<p class="mt-[20px] font-normal text-base text-[#707070] hover:text-[#000000] hover:font-medium cursor-pointer ">Season</p>
          </a>
        </div>
      </div>
      <!-- right -->
      <div class="flex-[3] mt-[174px]">
        <div class="grid grid-cols-2 gap-[48px]">
          <div>
            <a href=""><img class="rounded-lg" src="../images/Img 01.png" alt=""></a>
            <a href="">
              <p class="mt-[22px] font-normal text-sm text-[#707070]">Fashion - October 8, 2020</p>
            </a>
            <a href="">
              <p class="mt-[5px] font-normal text-xl text-[#000000]">Top Trends From Spring</p>
            </a>
            <a href="">
              <p class="mt-[14px] font-normal text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                faucibus augue, a maximus elit ex vitae libero...</p>
            </a>
            <a>
              <p class="mt-[24px] font-bold text-base text-[#A18A68] cursor-pointer">Read More</p>
            </a>
          </div>
          <div>
            <a href=""><img class="rounded-lg" src="../images/Img 02.png" alt=""></a>
            <a href="">
              <p class="mt-[22px] font-normal text-sm text-[#707070]">Fashion - October 8, 2020</p>
            </a>
            <a href="">
              <p class="mt-[5px] font-normal text-xl text-[#000000]">Top Trends From Spring</p>
            </a>
            <a href="">
              <p class="mt-[14px] font-normal text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                faucibus augue, a maximus elit ex vitae libero...</p>
            </a>
            <a>
              <p class="mt-[24px] font-bold text-base text-[#A18A68] cursor-pointer">Read More</p>
            </a>
          </div>
          <div>
            <a href=""><img class="rounded-lg" src="../images/Img 03.png" alt=""></a>
            <a href="">
              <p class="mt-[22px] font-normal text-sm text-[#707070]">Fashion - October 8, 2020</p>
            </a>
            <a href="">
              <p class="mt-[5px] font-normal text-xl text-[#000000]">Top Trends From Spring</p>
            </a>
            <a href="">
              <p class="mt-[14px] font-normal text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                faucibus augue, a maximus elit ex vitae libero...</p>
            </a>
            <a>
              <p class="mt-[24px] font-bold text-base text-[#A18A68] cursor-pointer">Read More</p>
            </a>
          </div>
          <div>
            <a href=""><img class="rounded-lg" src="../images/Img 04.png" alt=""></a>
            <a href="">
              <p class="mt-[22px] font-normal text-sm text-[#707070]">Fashion - October 8, 2020</p>
            </a>
            <a href="">
              <p class="mt-[5px] font-normal text-xl text-[#000000]">Top Trends From Spring</p>
            </a>
            <a href="">
<p class="mt-[14px] font-normal text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                faucibus augue, a maximus elit ex vitae libero...</p>
            </a>
            <a>
              <p class="mt-[24px] font-bold text-base text-[#A18A68] cursor-pointer">Read More</p>
            </a>
          </div>
          <div class="mt-[64px] ml-[400px] flex items-center justify-center ">
            <a class="mx-[5px] border border-[#D8D8D8] hover:border-black rounded w-[40px] h-[40px] p-2 hover:bg-black hover:text-white">1</a>
            <a class="mx-[5px] border border-[#D8D8D8] hover:border-black rounded w-[40px] h-[40px] p-2 hover:bg-black hover:text-white">2</a>
            <a class="mx-[5px] border border-[#D8D8D8] hover:border-black rounded w-[40px] h-[40px] p-2 ">
                <img class="mt-2 ml-[4px]  " src="../images/Icon color.png" alt="">
            </a>
          </div>

        </div>
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
          <p class="font-normal text-base text-[#707070]"> <span class="text-black">© 2021 Shelly</span> Terms of use
            <span class="text-black">and</span> privacy policy.</p>
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
