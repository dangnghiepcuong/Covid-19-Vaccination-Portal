<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/RegistrationManagement.css">
    <link rel="stylesheet" href="css/btn.css">
    <link rel="stylesheet" href="css/filter-panel.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/RegistrationManagement.js"></script>
    <script src="js/animation-btn.js"></script>
        <title>Tra cứu thông tin tiêm chủng công dân</title>
    </head>

    <body>
        <!-- Header -->
        <?php
            include("headerCitizen.php")
        ?>
        <!-- End Header -->

        <!-- Nav function panel -->
        <div class="nav-func-pages">
            <div class="nav-func-title">
                <a href="VaccinationInfoCitizen.php">Tra cứu thông tin tiêm chủng của công dân</a>
            </div>

            <div class="nav-directory">
                <div class="dicrectory">
                    <a href="HomePageCitizen.php">Trang chủ</a>
                </div>

                <div class="dicrectory">&nbsp;/&nbsp;</div>

                <div class="directory-selected">
                    <a href="VaccinationInfoCitizen.php">Tra cứu thông tin tiêm chủng của công dân</a>
                </div>
            </div>
        </div>
        <!-- End Nav function panel -->

        <br>

        <!-- Func Panel -->
        <div class="holder-function-panel">
            <div class="nav-panel">
                <br>
                <br>
                <div class="title">Trang công dân</div>
                <div class="tittle-bg"></div>
                <br>

                <div class="menu">
                    <ul class="list">
                        <br>
                        <li>Thông tin tài khoản</li><br>
                        <li>Thông tin công dân</li><br>
                        <li>Quản lý lịch đăng ký tiêm chủng</li><br>
                        <li>Tra cứu thông tin tiêm chủng</li><br>
                        <li>Chứng nhận tiêm chủng</li><br>
                        <li>Thêm người thân</li><br>
                    </ul>
                </div>
            </div>

            <div class="function-panel">
                    <br>
            </div>          
        </div>

         <!-- FADED COVER -->
         <div class="gradient-bg-faded" id="gradient-bg-faded"></div>

        <br>
        
        <?php
        include("footer.php");
        ?>
        
    </body>
</html>