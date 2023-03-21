<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Single No Sidebar</title>
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
        <div>
            <div class="mt-[96px] text-center">
                <p class="font-medium text-3xl">Fast Fashion, And Faster Fashion</p>
                <p class="mt-[16px] font-weight text-base text-[#707070]">by <span class="text-[#000000]">ANNY
                        JOHNSON</span> - October 8,2020</p>
                <div class="mt-[39px]">
                    <a href=""><img class="w-full" src="../images/Img 01.png" alt=""></a>
                </div>
            </div>
            <div class="mt-[64px] ml-[400px]">
                <div class="text-start inline-block w-[670px]">
                    <p class="text-base font-weight ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                        placerat, augue a volutpat hendrerit, sapien tortor faucibus augue, a maximus elit ex vitae
                        libero. Sed quis mauris eget arcu facilisis consequat sed eu felis. Nunc sed porta augue.
                    </p>
                    <p class="mt-[20px] text-base font-weight"> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Aliquam placerat, augue a volutpat hendrerit, sapien tortor faucibus augue, a maximus elit ex
                        vitae libero. Sed quis mauris eget arcu facilisis consequat sed eu felis.</p>

                </div>
                <div class="block">
                    <a href=""><img class="mt-[58px] w-[670px]" src="../images/Img 04.png" alt=""></a>

                </div>
            </div>
            <div class="mt-[48px] flex justify-center items-center">
                <div class=" text-start inline-block w-[670px]">
                    <p class="mt-[24px] text-2xl font-weight text-start">Top trends
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam placerat, augue a volutpat
                        hendrerit, sapien tortor faucibus augue, a maximus elit ex vitae libero.
                    </p>
                    <div class="ml-3 text-start">
                        <ul class="mt-4">
                            <li>
                                ● consectetur adipiscing elit. Aliquam placerat
        
                            </li>
                            <li>
                                ● Lorem ipsum dolor sit amet consectetur
        
                            </li>
                            <li>
                                ● sapien tortor faucibus augue
        
                            </li>
                            <li>
                                ● a maximus elit ex vitae libero. Sed quis mauris eget arcu facilisis
        
                            </li>
                        </ul>
    
                    </div>

                </div>
            </div>
            <div class="mt-[48px] ml-[400px] grid justify-items-center w-[670px]">
                <div>
                    <p class="font-weight text-2xl">Leave a reply</p>
                    <p class="mt-3 text-lg text-[#707070]">Your email address will not be published. Required fields are marked *</p>
                    <form action="" class="mt-[74px] block">
                        <input class="mt-10 border-b-[1px] border-[#D8D8D8] w-[400px] " type="text" placeholder="Enter your name*">
                        <input class="mt-10 border-b-[1px] border-[#D8D8D8] w-[400px] " type="text" placeholder="Enter your Email*">
                        <input class="mt-10 border-b-[1px] border-[#D8D8D8] w-[400px] " type="text" placeholder="Enter your Website*">
                        <div class="mt-[24px] flex">
                            <input type="checkbox" name="" id="">
                            <p class="ml-2">Save my name, email, and website in this browser for the next time I comment</p>
                       </div>
                    </form>
                    <p class="mt-[72px] text-sm font-weight text-[#707070]">Your Comment*</p>
                    <div class="mt-[61px] border-t-2 w-full border-[#D8D8D8]">
                        <button type="submit" class="mt-[64px] font-bold text-base bg-black text-white p-4 rounded">POST COMMENT</button>
                    </div>

                </div>
            </div>
            <div class="mt-[64px] ml-[400px] grid justify-items-center w-[670px]">
                <p class="text-2xl font-noraml">Comments(3)</p>
                <div class="mt-[42px]">
                    <div class="flex">
                        <div>
                            <a href=""><img class="" src="../images/Img 03 (1).png" alt=""></a>
                        </div>
                        <div class="ml-[24px]">
                            <p class="text-xl">Scarlet withch <span class="text-sm ml-4 text-[#707070]">6 May, 2020</span></p>
                            <p class="mt-4 text-base text-[#707070]">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. </p>
                        </div>
                    </div>
                    <div class="flex mt-[48px] ml-[80px]">
                        <div>
                            <a href=""><img class="" src="../images/Img 05.png" alt=""></a>
                        </div>
                        <div class="ml-[24px]">
                            <p class="text-xl">Scarlet withch <span class="text-sm ml-4 text-[#707070]">6 May, 2020</span></p>
                            <p class="mt-4 text-base text-[#707070]">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. </p>
                        </div>
                    </div>
                    <div class="mt-[61px] border-t-2 w-full border-[#D8D8D8]">
                    </div>
                    <div class="flex mt-[48px]">
                        <div>
                            <a href=""><img class="" src="../images/Img 03 (1).png" alt=""></a>
                        </div>
                        <div class="ml-[24px]">
                            <p class="text-xl">Scarlet withch <span class="text-sm ml-4 text-[#707070]">6 May, 2020</span></p>
                            <p class="mt-4 text-base text-[#707070]">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. </p>
                        </div>
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
                        <li class="font-normal text-base text-[#707070] ml-[41px] "><a href="">TERMS OF SERVICES</a>
                        </li>
                        <li class="font-normal text-base text-[#707070] ml-[41px] "><a href="">SHIPPING AND RETURNS</a>
                        </li>
                    </ul>
                </div>
                <div class="border-b-[1px] border-[#000000] w-[400px]">
                    <input class="pr-10 mb-3 w-full p-2" type="text" placeholder="Give an email, get the newsletter.">
                </div>
            </div>
            <div class="flex justify-between mt-[48px]">
                <div>
                    <p class="font-normal text-base text-[#707070]"> <span class="text-black">© 2021 Shelly</span> Terms
                        of use
                        <span class="text-black">and</span> privacy policy.
                    </p>
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