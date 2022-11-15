<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cổng thông tin tiêm chủng Covid-19</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/btn.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/index.js"></script>
    <script src="js/animation-btn.js"></script>
    </script>
</head>

<body>
    <!-- HEADER -->
    <?php
    include("headerGeneral.php");
    ?>
    <!-- END HEADER -->

    <!-- SLIDER -->
    <?php
    include("HomepageSlider.php");
    ?>
    <!-- END SLIDER -->

    <!-- LOGIN FORM -->
    <div class="form-container" id="form-container-login">
        <form class="form form-login" id="form-login" method="POST" action="HandleLogin.php">
            <p class="btn-close" id="btn-close-form-login">X</p>
            <p class="title">Đăng nhập</p>
            <br><br>
            <label for="username"><b>SĐT/Tên tài khoản</b></label>
            <input type="text" name="username" required>
            <hr>
            <br><br>
            <label for="password"><b>Mật khẩu</b></label>
            <input type="password" name="password" required>
            <hr>
            <div class="btn-linked-page page-reg-acc page-forgot-pass">
                <p id="btn-forgot-password" href="#">Quên mật khẩu</p>
                <p id="btn-create-account">Tạo tài khoản</p>
            </div>
            <br><br>
            <div class="btn-long" id="btn-login-in-form-login">
                <p>Đăng nhập</p>
            </div>
        </form>
    </div>
    <!-- END LOGIN FORM -->

    <!-- REGISTRATION ACCOUNT FORM -->
    <div class="form-container" id="form-container-reg-acc">
        <form class="form form-reg-acc" id="form-reg-acc" action="/action_page.php">
            <p class="btn-close" id="btn-close-form-reg-acc">X</p>
            <p class="title">Đăng ký</p>
            <br><br>
            <label for="phone_number"><b>Số điện thoại</b></label>
            <input type="text" name="phone_number" required>
            <hr>
            <br><br>
            <label for="password"><b>Mật khẩu</b></label>
            <input type="password" name="password" required>
            <hr>
            <br><br>
            <label for="repeat-password"><b>Nhập lại mật khẩu</b></label>
            <input type="password" name="repeat-password" required>
            <hr>
            <br><br>
            <div class="btn-long" id="btn-reg-acc">
                <p>Đăng ký</p>
            </div>
            <div class="btn-linked-page page-login">
                <p id="btn-login-in-form-reg-acc">Đăng nhập</p>
            </div>
            <br>
        </form>
    </div>
    <!-- END REGISTRATION ACCOUNT FORM -->

    <!-- REGISTRATION PERSONAL PROFILE FORM -->
    <div class="container-profile">
        <p class="title">Đăng ký thông tin cá nhân</p>
        
        <div class="row1">
            <div>
                <label for="fisrt_mid_name">Họ và tên đệm <span>(*)</span></label><br>
                <input type="text" name="fisrt_mid_name" required><br>
                <hr>
            </div>

            <div>
                <label for="fisrt_mid_name">Tên <span>(*)</span></label><br>
                <input type="text" name="fisrt_mid_name" required><br>
                <hr>
            </div>

            <div>
                <label for="sex">Giới tính <span>(*)</span></label><br>
                <input type="text" name="sex" required><br>
                <hr>
            </div>
        </div>

        <div class="row2">
            <div>
                <label for="id">Mã định danh <span>(*)</span></label><br>
                <input type="text" name="id" required><br>
                <hr>
            </div>

            <div>
                <label for="birthday">Ngày tháng năm sinh <span>(*)</span></label><br>
                <input type="text" name="birthday" required><br>
                <hr>
            </div>

            <div>
                <label for="hometown">Quê quán <span>(*)</span></label><br>
                <input type="text" name="hometown" required><br>
                <hr>
            </div>
        </div>

        <p>Địa chỉ thường trú:</p>

        <div class="row3">
            <div>
                <label for="city">Tỉnh/Thành phố <span>(*)</span></label><br>
                <input type="text" name="city" required><br>
                <hr>
            </div>

            <div>
                <label for="district">Quận/Huyện <span>(*)</span></label><br>
                <input type="text" name="district" required><br>
                <hr>
            </div>

            <div>
                <label for="town">Xã/Phường/Thị trấn <span>(*)</span></label><br>
                <input type="text" name="town" required><br>
                <hr>
            </div>
        </div>

        <div class="row4">
            <label for="street">Số nhà, tên đường, khu phố/ấp <span>(*)</span></label><br>
            <input type="text" name="street" required><br>
            <hr>
        </div>

        <div class="row5">
            <label for="email">Email <span>(*)</span></label><br>
            <input type="text" name="email" required><br>
            <hr>
        </div>

        <div class="row6">
            <div class="note">
                <span>Lưu ý:</span>
                <ul>
                    <li>Việc đăng ký thông tin hoàn toàn bảo mật và phục vụ cho chiến dịch tiêm chủng Vắc xin COVID-19.</li>
                    <li>Xin vui lòng kiểm tra kỹ các thông tin bắt buộc(VD: Họ và tên, Ngày tháng năm sinh, Số điện thoại, CCCD/Mã định danh công dân/HC ...)</li>
                    <li>Bằng việc nhấn nút "Đăng kí", bạn hoàn toàn hiểu và đồng ý chịu trách nhiệm với các thông tin đã cung cấp.</li>
                </ul>
            </div>

            <div class="group_button">
                <button class="btn-long">Đăng ký</button>
                <button class="btn-long-bordered" id="close_reg_person_profile">Hủy bỏ</button>
            </div>
        </div>
    </div>

    <!-- END REGISTRATION PERSONAL PROFILE FORM -->

    <!-- FADED COVER -->
    <div class="gradient-bg-faded" id="gradient-bg-faded"></div>

    <div class="content">
        <div class="content-alignment-side"></div>
        <div class="content-box">
            <?php
            echo "Hello Chrysan"
            ?>
        </div>
        <div class="content-box"></div>
        <div class="content-box"></div>
        <div class="content-box"></div>
        <div class="content-alignment-side"></div>
    </div>

    <!-- FOOTER -->
    <?php
    include("footer.php")
    ?>
    <!-- END FOOTER -->

    <div class="form-popup-confirm">
        <p class="form-message"></p>
        <div class="holder-btn">
            <button class="btn-medium-filled btn-confirm">OK</button>
        </div>
    </div>

    <!-- FADED COVER -->
    <div class="gradient-bg-faded" id="gradient-bg-faded"></div>

    <?php
    $check = isset($_SESSION['message']);
    if ($check == true) {
        // echo '<script>alert("' . $_SESSION['message'] . '");</script>';
        echo '<script>
        $(".form-message").text("' . $_SESSION['message'] . '");
        $("#gradient-bg-faded").css("display", "block");
        $(".form-popup-confirm").css("display", "block");
        </script>';
        unset($_SESSION['message']);
    }
    ?>
</body>

</html>