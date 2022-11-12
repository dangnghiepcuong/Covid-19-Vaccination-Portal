<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cổng thông tin tiêm chủng Covid-19</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/index.js"></script>
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
    <div  class="form-container" id="form-container-login">
        <form class="form form-login" id="form-login" method="POST" action="HandleLogin.php">
            <p class="btn-close" id="btn-close-form-login">X</p>
            <p class="title">Đăng nhập</p>
            <br><br>
            <label for="username"><b>SĐT/Tên tài khoản</b></label>
            <input type="text"  name="username" required>
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
            <div class="long-btn" id="btn-login-in-form-login">
            <p>Đăng nhập</p>
            </div>
        </form>
    </div>
    <!-- END LOGIN FORM -->

    <!-- REGISTRATION ACCOUNT FORM -->
    <div class="form-container" id="form-container-reg-acc">
        <form class="form form-reg-acc" id="form-reg-acc" action="/action_page.php" >
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
            <div class="long-btn" id="btn-reg-acc">
                <p>Đăng ký</p>
            </div>
            <div class="btn-linked-page page-login">
                <p id="btn-login-in-form-reg-acc">Đăng nhập</p>
            </div>
            <br>
        </form>
    </div>
    <!-- END REGISTRATION ACCOUNT FORM -->

    <!-- REGISTRATION PERSONAL INFO FORM -->

    <!-- END REGISTRATION PERSONAL INFO FORM -->

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

    <?php
    $getAlertMessage = $_POST["message"];
    // if ($getAlertMessage != null)
    echo '<script>alert('. $getAlertMessage . ');</script>';
    ?>
</body>
</html>