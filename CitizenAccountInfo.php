<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/CitizenAccountInfo.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/WebElemnts.js.js"></script>
    <script src="js/CitizenAccountInfo.js"></script>
    <title>Thông tin tài khoản</title>
</head>

<body>
    <!-- HEADER -->
    <?php
    include("headerCitizen.php");
    ?>
    <!-- END HEADER -->

    <!-- NAV FUNCTION -->
    <?php
    include("function-navigation-bar.php");
    ?>
    <!-- END NAV FUNCTION -->
    <br>

    <div class="holder-function-panel">
        <!-- MENU -->
        <?php
        include("function-menu.php");
        ?>
        <!-- END MENU -->

        <!-- FUNCTIONAL PANEL -->
        <div class="function-panel">
            <div class="accinfo-panel">
                <div class="frame">
                    <div class="account">
                        <br>
                        <p>Tài khoản</p>
                        <br>
                        <label for="phone_number">Số điện thoại</label><br>
                        <input type="text" name="phone_number" required value=""><br>
                        <hr>
                        <br>
                        <label for="enter_pass">Nhập mật khẩu hiện tại</label><br>
                        <input type="text" name="enter_pass" required value=""><br>
                        <hr>
                    </div>
                </div>

                <div class="frame">
                    <div class="change-pass">
                        <br>
                        <p>Đổi mật khẩu</p>
                        <br>
                        <label for="new_pass">Mật khẩu mới</label><br>
                        <input type="text" name="new_pass" required value=""><br>
                        <hr>
                        <br>
                        <label for="enter_new_pass">Nhập mật khẩu mới</label><br>
                        <input type="text" name="enter_new_pass" required value=""><br>
                        <hr>
                    </div>
                </div>
            </div>

            <div class="group_btn">
                <button class="btn-medium-filled">Cập nhật</button>
                <button class="btn-medium-bordered" id="close_reg_person_profile">Hủy bỏ</button>
            </div>
        </div>
    </div>

    <br>
    <?php
    include("footer.php")
    ?>

</body>

</html>