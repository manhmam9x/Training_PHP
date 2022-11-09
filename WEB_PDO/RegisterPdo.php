<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mam Sign Up </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="login/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login/css/util.css">
    <link rel="stylesheet" type="text/css" href="login/css/main.css">
    <!--===============================================================================================-->
</head>
<body>
<?php
    include 'Connect.php';
    //Kiểm tra khi người dùng submit form
    if(isset($_POST['btnSave'])){
        $email = $_POST['txtEmail'];
        $password = $_POST['txtPassword'];
        $pwscofirm = $_POST['txtPassconfirm'];
        $name = $_POST['txtName'];
        $address = $_POST['txtAddress'];
        $phone = $_POST['txtPhone'];

        //Check passwordconfirm
        if ($password == $pwscofirm){
            // Mã khóa mật khẩu
            $password = md5($password);
            //Kiểm tra tài khoản tồn tại chưa
            $sqlEmail = "SELECT email FROM users WHERE email = '$email'";
            $resultEmail = mysqli_query($conn,$sqlEmail);
            if (mysqli_num_rows($resultEmail) > 0){
                $err = "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác";
            }else{
                // Tạo truy vấn thêm mới INSERT
                $sql  = "INSERT INTO users(name,email,password,phone,address)";
                $sql .= " VALUES ('$name','$email','$password',$phone,'$address')";

                // Kiểm tra và add dữ liệu
                if(mysqli_query($conn, $sql)){
                     header("Location:LoginPdo.php");
                }else{
                    $err="Lỗi thêm mới." . mysqli_error($conn);
                }
            }
        }else {
            $err = 'Mật khẩu không trùng khớp';
        }
    }
?>
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="login/images/img-01.png" alt="IMG">
            </div>

            <form class="login100-form validate-form" action="" method="post" >
					<span class="login100-form-title">
						Mam Register
					</span>
                <?php
                if(isset($err)):
                    ?>
                    <div style="color: red">
                        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                        <span><?php echo $err; ?></span>
                    </div>
                <?php
                endif;
                ?>
                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="txtEmail" placeholder="Email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Full name is required">
                    <input class="input100" type="text" name="txtName" placeholder="Full Name">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <input class="input100" type="password" name="txtPassword" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <input class="input100" type="password" name="txtPassconfirm" placeholder="Password Confirm">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Address is required">
                    <input class="input100" type="text" name="txtAddress" placeholder="Address">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                       <i class="fa fa-address-book" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Phone is required">
                    <input class="input100" type="number" name="txtPhone" placeholder="Phone">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" name="btnSave">
                        Sign Up
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--===============================================================================================-->
<script src="login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="login/vendor/bootstrap/js/popper.js"></script>
<script src="login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="login/vendor/tilt/tilt.jquery.min.js"></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src="login/js/main.js"></script>

</body>
</html>