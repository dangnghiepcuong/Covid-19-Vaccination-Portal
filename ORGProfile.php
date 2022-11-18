<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/btn.css">
    <link rel="stylesheet" href="css/ORGProfile.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/ORGProfile.js"></script>
    <script src="js/animation-btn.js"></script>
    <title>Thông tin đơn vị tiêm chủng</title>
</head>

<body>
    <!-- HEADER -->
    <?php
    include("headerORG.php");
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
            <div class="info-panel">
                <div class="row1">
                    <div>
                        <label for="id_org">Mã đơn vị tiêm chủng <span>(*)</span></label><br>
                        <input type="text" name="id_org" required value=""><br>
                        <hr>
                    </div>

                    <div>
                        <label for="org_name">Tên tiêm chủng <span>(*)</span></label><br>
                        <input type="text" name="org_name" required value=""><br>
                        <hr>
                    </div>
                </div>

                <div class="group_btn">
                    <button class="btn-medium-filled">Cập nhật</button>
                    <button class="btn-medium-bordered" id="close_reg_person_profile">Hủy bỏ</button>
                </div>
            </div>


        </div>
    </div>

    <br>
    <?php
    include("footer.php")
    ?>
</body>

</html>