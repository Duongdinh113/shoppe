<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    .container {
        width: 600px;
        margin: 0 auto;
        padding-top: 10%;
    }

    h2 {
        text-align: center;
    }

    p {
        width: 350px;
        margin-left: 20%;
    }
</style>

<body>
    <div class="container">

        <h2>Contact Us</h2>
        <p>Say Hello send us your thoughts about our products or share
            your ideas with our Team!</p>
        <form action="../control/control_contact.php" method="POST" name="frmDK" onsubmit="return dk()">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Họ và tên </label>
                <input type="text" class="form-control" name="name" id="exampleFormControlInput1"
                    placeholder="nhập họ tên " required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nhập email"
                    required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"> Nhập số điện thoại </label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="sdt">
                <p class="errSDT" style="color:red ;"></p>

            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Vấn đề </label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="vấn đề " required>
            </div>
            <button type="submit" class="btn btn-success">SEND</button>



        </form>
        <script>
            function dk() {

                var sdt = document.frmDK.sdt.value;

                var errSDT = document.querySelector(".errSDT");

                let flag = true;
                if (sdt == "") {
                    errSDT.innerHTML = "SDT không được rỗng"
                    flag = false;
                }
                else {
                    let regSDT = /^0\d{9}$/
                    if (!sdt.match(regSDT)) {
                        errSDT.innerHTML = "SDT sai định dạng"
                        flag = false;
                    }
                    else errSDT.innerHTML = ""
                }



                if (flag == true) {
                    alert("đăng ký thành công");
                    return true;
                }
                else {
                    return false;
                }
            }
        </script>
    </div>
</body>

</html>
