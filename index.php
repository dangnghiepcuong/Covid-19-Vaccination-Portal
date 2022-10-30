<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cổng thông tin tiêm chủng Covid-19</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="index.js"></script>
</head>

<body>

    <div class="header">
        <div class="header-alignment">
            <a href="index.php">
                <img src="image/CVM-Logo.png" alt="CVM-Logo">
                <span class="title">CỔNG THÔNG TIN TIÊM CHỦNG COVID-19</span>
            </a>

            <div class="nav">
                <div>
                    <ul>
                        <li>
                            <a class="menu-section" href="#">Khai báo</a>
                        </li>

                        <li>
                            <a class="menu-section" href="#">Tiêm chủng</a>
                        </li>

                        <li>
                            <a class="menu-section" href="#">Thống kê</a>
                        </li>
                    </ul>
                </div>
                <button class="btn-login" id="btn-login">Đăng nhập</btn>

            </div>
        </div>
    </div>

    <!-- LOGIN FORM -->
    <div class="form-login" id="form-login">

        <form action="/action_page.php" class="form-container">

            <p class="btn-close" id="btn-close-form-login">X</p>

            <p class="title">Đăng nhập</p>
            <br><br>
            <label for="phone_number"><b>SĐT/Tên tài khoản</b></label>
            <input type="text" name="phone_number" required>
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

    <div class="form-reg-acc" id="form-reg-acc">

        <form action="/action_page.php" class="form-container">

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


    <!-- SLIDER -->
    <div class="slider">

        <div class="slideshow-container">

            <div class="mySlides fade">
                <img src="image/banner_with_flag.png" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="image/banner_covid19.png" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="image/banner_vaccine.png" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="image/banner_codong.png" style="width:100%">
            </div>

        </div>

        <div class="frame-slider_dot" style="text-align:center">
            <span class="slider_dot"></span>
            <span class="slider_dot"></span>
            <span class="slider_dot"></span>
            <span class="slider_dot"></span>
        </div>

        <script type="text/javascript" src="main.js"></script>
    </div>

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

    <div class="content-below">

    </div>


    <!-- FOOTER -->
    <footer class="footer">
        <!-- <div class="footer-alignment-side"></div> -->
        <div class="footer-content">&copy; Bản quyền thuộc TRUNG TÂM CÔNG NGHỆ PHÒNG, CHỐNG DỊCH COVID-19 QUỐC GIA</div>
        <div class="footer-content">Phát triển bởi Chrysanthemums</div>
        <div class="footer-logo"><img src="image/Logo BỘ.png" alt="Logo Bộ Y Tế "></div>
        <!-- <div class="footer-alignment-side"></div> -->
    </footer>
</body>

<script type="text/javascript" src="FE_interaction.js">
</script>

</html>