<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="FunctionalPages.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <title>Tiêm chủng</title>
</head>

<body>
    <!-- HEADER -->
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
                            <a class="menuSection" href="#">Tin tức</a>
                        </li>

                        <li>
                            <a class="menuSection" href="#">Khai báo</a>
                        </li>

                        <li>
                            <a class="menuSection" href="#">Tiêm chủng</a>
                        </li>
                    </ul>
                </div>
                <button class="btnLogin" id="btn-Login" onclick="openLoginForm()">Đăng nhập</btn>

            </div>
        </div>
    </div>
    <!-- END HEADER -->

    <!-- DIRECTORY NAVIGATOR -->
    <div class="nav-func-pages">
        <div class="nav-func-title"><a href="VaccinationRegistration.php">Đăng ký tiêm chủng</a></div>
        <div class="nav-directory">
            <div class="directory"><a href="index.php">Trang chủ</a></div>
            <div class="dicrectory">&nbsp;/&nbsp;</div>
            <div class="directory-selected"><a href="VaccinationRegistration.php">Đăng ký tiêm chủng</a></div>
        </div>
    </div>

    <div class="holder-function-panel">
        
    <div class="function-title">
                Tiêm chủng
            </div>
        <div class="function-panel">
            
            <div class="filter-panel">
                <div class="filter">
                    <label for="province-name">Tỉnh/Thành phố</label>
                    <select type="text" name="province-name">
                        <!-- PHP CODE -->
                    </select>

                    <label for="district-name">Quận/Huyện/Thị xã</label>
                    <select type="text" name="district-name">
                        <!-- PHP CODE -->
                    </select>

                    <label for="town-name">Xã/Phường/Thị trấn</label>
                    <select type="drop-down" name="town-name">
                        <!-- PHP CODE -->
                    </select>

                    <button class="button-filter"><img src="image/button-filter.png">Tìm kiếm</button>
                </div>
                <div class="filter">
                    <label for="district-name">Vaccine</label>
                    <select type="text" name="district-name">
                        <!-- PHP CODE -->
                    </select>

                    <label for="town-name">Buổi</label>
                    <select type="drop-down" name="town-name">
                        <!-- PHP CODE -->
                    </select>

                    <button class="button-filter"><img src="image/button-filter.png">Tìm kiếm</button>
                </div>
            </div>
            <div class="list-schedule-panel"></div>
        </div>
    </div>
</body>

</html>