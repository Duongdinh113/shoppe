<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Standard</title>
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
    <div class="ml-[368px] grid justify-items-center">
      <div>
        <div class="mt-[96px] text-center w-[730px]">
            <p class="font-medium text-3xl">About</p>
            <p class="mt-[24px] font-weight text-xl text-[#000000]">
                Who we are and why we do what we do!
                   </p>
                   <p class="mt-[64px] text-base text-start ">Duis rutrum dictum libero quis rutrum. Etiam sed neque aliquam, sollicitudin ante a, gravida arcu. Nam fringilla molestie velit, eget pellentesque risus scelerisque a. Nam ac urna maximus, tempor magna et, placerat urna. Curabitur eu magna enim. Proin placerat tortor lacus, ac sodales lectus placerat quis. </p>
                <p class="text-2xl text-[#000000] mt-10 font-weight text-start">Top trends</p>
            <div class="mt-[39px]">
                <a href=""><img class="w-[730px]" src="../images/Img 04.png" alt=""></a>
            </div>
        </div>
        <div class="mt-[64px]">
            <div class="text-start inline-block mr-[200px] w-[730px]">
                <p class="text-base font-weight ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                    placerat, augue a volutpat hendrerit, sapien tortor faucibus augue, a maximus elit ex vitae
                    libero. Sed quis mauris eget arcu facilisis consequat sed eu felis. Nunc sed porta augue.
                </p>
                <div class="ml-3 text-start">
                    <ul class="mt-4">
                        <li>
                ● consectetur adipiscing elit. Aliquam placerat
                       
    
                        </li>
                        <li>
                ● Lorem ipsum dolor sit amet consectetur 
                        
    
                        </li>
                    </ul>

                </div>

            </div>
            <div class="block">
                <a href=""><img class="mt-[58px] w-[730px]" src="../images/Img 04.png" alt=""></a>

            </div>
        </div>
        <div class="mt-[48px] ">
            <div class=" w-[730px]">
                <p class="text-2xl text-[#000000] mt-10 font-weight text-start">Produced with care
                </p>
             <a href=""><img class="mt-[23px] w-[730px]" src="../images/Img 01.png" alt=""></a>
             <p class="mt-[48px] text-base text-start font-weight ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                placerat, augue a volutpat hendrerit, sapien tortor faucibus augue, a maximus elit ex vitae
                libero. Sed quis mauris eget arcu facilisis consequat sed eu felis. Nunc sed porta augue.
            </p>
                
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
