<?php session_start()?>
<form action="../control/control_add_bill.php" method="POST">
    <div>
        
    <input hidden type="text" value="<?php echo $_SESSION['id']?>" name="id" id="">
    <label for="">Số điện thoại</label>
    <input type="text" name="sdt" id="">
    <label for="">Họ và tên</label>
    <input type="text" name="name" id="">
    <label for="">địa chỉ</label>
    <input type="text" name="diachi" id="">
    </div>
    <button>mua</button>
</form>