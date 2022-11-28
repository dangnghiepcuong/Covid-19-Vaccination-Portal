<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/btn.css">
    <link rel="stylesheet" href="css/filter-panel.css">
    <link rel="stylesheet" href="css/MOHProvideAccount.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/MOHProvideAccount.js"></script>
    <script src="js/animation-btn.js"></script>
    <title>Cấp tài khoản đơn vị tiêm chủng</title>
</head>

<body>
    <!-- HEADER -->
    <?php
    include("headerMOH.php");
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
            <div class="provide-panel">
                <div class="frame">
                    <div class="provide-account">
                        <p>Tạo tài khoản đơn vị</p>
                        <label for="city">Tỉnh/Thành phố </label><br>
                        <select name="city" id="select-province">
                            <option value="">HCM</option>
                        </select>
                        <hr>
                        <br>
                        <label for="num">Số lượng tài khoản cần tạo</label><br>
                        <input type="text" name="num" required value=""><br>
                        <hr>
                    </div>
                </div>
            </div>

            <div class="group_btn">
                <button class="btn-medium-filled">Xác nhận</button>
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