<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang công dân</title>
    <link rel="stylesheet" href="HomePageCitizen.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="HomePageCitizen.js"></script>
</head>

<body>
    <!-- HEADER -->
    <div class="header">
            <a class="title" href="HomePageCitizen.php">
                <img src="image/CVM-Logo.png" alt="CVM-Logo">
                <span class="title">CỔNG THÔNG TIN TIÊM CHỦNG COVID-19</span>
            </a>

            <div class="nav">
                <div>
                    <ul>
                        <li>
                            <a class="menu-section" href="#">Tin tức</a>
                        </li>

                        <li>
                            <a class="menu-section" href="#">Khai báo</a>
                        </li>

                        <li>
                            <a class="menu-section" href="#">Tiêm chủng</a>
                        </li>
                    </ul>
                </div>

                <a class="avatar" href="#">
                    <img src="image/Avatar-Citizen.png" alt="Logo công dân">
                </a>
            </div>

            <div class="drop-down-menu" id="drop-down-menu-profile">
                <div class="holder">
                    <ul>
                        <li>
                            <a href="#">Thông tin tài khoản</a>
                        </li>

                        <li>
                            <a href="#">Thông tin công dân</a>
                        </li>

                        <li>
                            <a href="#">Lịch đăng kí tiêm chủng</a>
                        </li>

                        <li>
                            <a href="#">Chứng nhận tiêm chủng</a>
                        </li>

                        <li>
                            <a href="#">Thêm người thân</a>
                        </li>

                        <li>
                            <a href="#">Đăng xuất</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    <!-- END HEADER -->

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

    <!-- END SLIDER -->

    <!-- CONTENT -->
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
    <footer>
        <div class="footer-alignment-side"></div>
        <div class="footer-content">&copy; Bản quyền thuộc TRUNG TÂM CÔNG NGHỆ PHÒNG, CHỐNG DỊCH COVID-19 QUỐC GIA</div>
        <div class="footer-content">Phát triển bởi Chrysanthemums</div>
        <div class="footer-logo"><img src="image/Logo BỘ.png" alt="Logo Bộ Y Tế "></div>
        <div class="footer-alignment-side"></div>
    </footer>

</body>

</html>