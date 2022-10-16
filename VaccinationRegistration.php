<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="FunctionalPages.css">
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

    <div class="nav-func-pages">
        <div class="nav-func-title">Đăng ký tiêm chủng</div>
        <div class="nav-directory">
            <div class="directory">Trang chủ</div>
            <div class="dicrectory">/</div>
            <div class="directory-selected">Đăng ký tiêm chủng</div>
        </div>
    </div>

    <div class="holder-function-panel">
        <div class="function-panel">
            <div class="filter-panel">
                <div class="filter-region">
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

                    <button class="filter-button">Tìm kiếm</button>
                </div>
                <div class="filter-vaccine-time">
                    <label for="district-name"></label>
                    <select type="text" name="district-name">
                        <!-- PHP CODE -->
                    </select>

                    <label for="town-name"></label>
                    <select type="drop-down" name="town-name">
                        <!-- PHP CODE -->
                    </select>

                    <button class="filter-button">Tìm kiếm</button>
                </div>
            </div>
            <div class="list-schedule-panel"></div>
        </div>
    </div>
</body>

</html>