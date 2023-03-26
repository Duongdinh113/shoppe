<?php
    function headerRender(){
        return '
        
        <div class="flex gap-10 items-center">
            <img src="image/logo.png" alt="">

            <ul class="flex gap-3">
                <li><a class="hover:text-[orange] font-bold text-[20px] text-[gray] active:bg-[orange]" href="index.php">Trang Chủ</a></li>
                <li><a class="hover:text-[orange] font-bold text-[20px] text-[gray] active:bg-[orange]" href="sanpham.php">Sản Phẩm</a></li>
                <li><a class="hover:text-[orange] font-bold text-[20px] text-[gray] active:bg-[orange]" href="giam_gia.php">Hàng giảm giá</a></li>
                <li><a class="hover:text-[orange] font-bold text-[20px] text-[gray] active:bg-[orange]" href="">Liên Hệ</a></li>
                <li><a class="hover:text-[orange] font-bold text-[20px] text-[gray] active:bg-[orange]" href="./giohang.php">giỏ hàng</a></li>
            </ul>
           
        </div>
   
        ';
    }
?>