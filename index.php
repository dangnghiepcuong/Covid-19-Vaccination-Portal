<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cổng thông tin tiêm chủng Covid-19</title>
    <link rel="stylesheet" href="style.css">
               
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
                            <a class="MenuSection" href="#">Tin tức</a>
                        </li>

                        <li>
                            <a class="MenuSection" href="#">Lịch tiêm</a>
                        </li>

                        <li>
                            <a class="MenuSection" href="#">Tiêm chủng</a>
                        </li>

                        <li>
                            <a class="MenuSection" href="#">Thống kê</a>
                        </li>
                    </ul>
                </div>
                <button class="btnLogin" id="btn-Login" onclick="openLoginForm()">Đăng nhập</btn>
                <script type="text/javascript" src="FE_interaction.js"></script>
     
            </div>
        </div>
    </div>

    <!-- LOGIN FORM -->
<div class="form-login" id="form-login">

  <form action="/action_page.php" class="form-login-container">

    <p class="form-login-btn-close" onclick="closeLoginForm()">X</p>
    <script type="text/javascript" src="FE_interaction.js"></script>
       
    <p class="form-title">Đăng nhập</p>
    <br><br>
    <label for="phone_number"><b>SĐT/Tên tài khoản</b></label>
    <input type="text" name="phone_number" required>
    <hr>
    <br><br>
    <label for="password"><b>Mật khẩu</b></label>
    <input type="password" name="password" required>
    <hr>
    <div class="btn-linked-page">
        <a id="btn-ForgotPassword" href="#">Quên mật khẩu</a>
        <a id="btn-CreateAccount" href="#">Tạo tài khoản</a>
    </div>
    <br><br>
    <a class="btn-login">Đăng nhập</a>
    <br>
    </form>
</div>
    <!-- END LOGIN FORM -->

    <div class="gradient-bg-faded" id="gradient-bg-faded" onclick="closeLoginForm()">
    </div>
    <script type="text/javascript" src="FE_interaction.js"></script>
     

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

        <script type="text/javascript" src="main.js">
        </script>
    </div>

    <div class="content">
        <div class="content_alignment_side"></div>
        <div class="content_box">
            <?php 
                echo "Hello Chrysan"
            ?>
        </div>
        <!-- <div class="content_alignment_center"></div> -->
        <div class="content_box"></div>
        <div class="content_alignment_side"></div>
    </div>

    <div class="content_below">

    </div>

    <footer>
        <div class="footer_alignment_side"></div>
        <div class="footer_content">Thông tin liên hệ: Chrysan</div>
        <div class="footer_content">Số điện thoại: 20520511</div>
        <div class="footer_content">Email: dothicuchoa123@gmail.com</div>
        <div class="footer_logo"><img src="image/Logo BỘ.png" alt="Logo Bộ Y Tế "></div>
        <div class="footer_alignment_side"></div>
    </footer>

</body>
</html>