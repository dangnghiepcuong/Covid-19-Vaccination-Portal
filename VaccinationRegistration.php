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
                <a href="#"><img src="image/Avatar-Citizen.png" alt=""></a>

            </div>
        </div>
    </div>
    <!-- END HEADER -->

    <div class="nav-func-pages">
        <div class="nav-func-title">
            <a href="VaccinationRegistration.php">Đăng ký tiêm chủng</a>
        </div>
        <div class="nav-directory">
            <div class="directory">
                <a href="index.php">Trang chủ</a>
            </div>

            <div class="dicrectory">&nbsp;/&nbsp;</div>

            <div class="directory">
                <a href="VaccinationRegistration.php">Tiêm chủng</a>
            </div>

            <div class="dicrectory">&nbsp;/&nbsp;</div>

            <div class="directory-selected">
                <a href="VaccinationRegistration.php">Đăng ký tiêm chủng</a>
            </div>
        </div>
    </div>

    <div class="holder-function-panel">
        <div class="function-panel">
            <br>
            <!--<div class="title-bg"></div>
            <div class="title">
                Tiêm chủng
            </div>
            <br><br> -->
            <div class="filter-panel">
                <div class="filter-region">
                    <label for="province-name">Tỉnh/Thành phố</label>
                    <select type="text" name="province-name">
                        <!-- PHP CODE -->
                        <option value=""></option>
                        <option value="">Bình Dương</option>
                        <option value="">Đồng Nai</option>
                        <option value="">Hồ Chí Minh</option>
                    </select>
                    <label for="district-name">Quận/Huyện/Thị xã</label>
                    <select type="text" name="district-name">
                        <!-- PHP CODE -->
                        <option value=""></option>
                        <option value="">Bình Dương</option>
                        <option value="">Đồng Nai</option>
                        <option value="">Hồ Chí Minh</option>
                    </select>

                    <label for="town-name">Xã/Phường/Thị trấn</label>
                    <select type="drop-down" name="town-name">
                        <!-- PHP CODE -->
                        <option value=""></option>
                        <option value="">Bình Dương</option>
                        <option value="">Đồng Nai</option>
                        <option value="">Hồ Chí Minh</option>
                    </select>
                    <button class="filter-button">
                        <img src="image/filter-magnifier.png" alt="filter-magnifier">
                        Tìm kiếm
                    </button>
                </div>


                <div class="filter-vaccine-time">
                    <label for="vaccine">Vaccine</label>
                    <select type="text" name="vaccine">
                        <!-- PHP CODE -->
                        <option value=""></option>
                        <option value="">AstraZeneca</option>
                        <option value="">Comirnaty</option>
                        <option value="">Verro Cell</option>
                    </select>

                    <label for="time">Buổi</label>
                    <select type="drop-down" name="time">
                        <!-- PHP CODE -->
                        <option value=""></option>
                        <option value="">Sáng</option>
                        <option value="">Chiều</option>
                        <option value="">Tối</option>
                    </select>

                    <button class="filter-button">
                        <img src="image/filter-magnifier.png" alt="filter-magnifier">
                        Tìm kiếm
                    </button>
                </div>
            </div>

            <br>

            <div class="panel-list-schedule">
                <div class="list-name">DANH SÁCH LỊCH TIÊM</div>
                <div class="list-name" id="object-orgname">
                    <!--PHP CODE-->Bệnh viện Đa khoa huyện Dầu Tiếng
                </div>
                <br>
                <div class="holder">
                    <div class="list-schedule" id="list-schedule-left">
                        <!--PHP CODE-->
                        <div class="schedule">
                            <p class="obj-org-name">Bệnh viện Đa khoa huyện Dầu Tiếng</p>
                            <div class="holder-obj-attr">
                                <div class="obj-attr">
                                    <p class="attr date">Lịch tiêm ngày: 24/11/2022</p>
                                    <p class="attr vaccine">Vaccine: AstraZeneca</p>
                                    <p class="attr serial">Serial: Chrysanthemum</p>
                                </div>
                                <div class="obj-attr">
                                    <p class="attr daytime">Buổi sáng: 0/0</p>
                                    <p class="attr noontime">Buổi trưa: 0/0</p>
                                    <p class="attr nighttime">Buổi tối: 0/0</p>
                                </div>
                                <div class="interactive-area">
                                    <select class="drop-down-time" name="" id="">
                                        <option value="0">Sáng</option>
                                        <option value="1">Trưa</option>
                                        <option value="2">Tối</option>
                                    </select>
                                    <br>
                                    <button class="btn-register">Đăng ký</button>
                                </div>
                            </div>
                        </div>

                        <div class="schedule">
                            <p class="obj-org-name">Bệnh viện Đa khoa huyện Dầu Tiếng</p>
                            <div class="holder-obj-attr">
                                <div class="obj-attr">
                                    <p class="attr date">Lịch tiêm ngày: 24/11/2022</p>
                                    <p class="attr vaccine">Vaccine: AstraZeneca</p>
                                    <p class="attr serial">Serial: Chrysanthemum</p>
                                </div>
                                <div class="obj-attr">
                                    <p class="attr daytime">Buổi sáng: 0/0</p>
                                    <p class="attr noontime">Buổi trưa: 0/0</p>
                                    <p class="attr nighttime">Buổi tối: 0/0</p>
                                </div>
                                <div class="interactive-area">
                                    <select class="drop-down-time" name="" id="">
                                        <option value="0">Sáng</option>
                                        <option value="1">Trưa</option>
                                        <option value="2">Tối</option>
                                    </select>
                                    <br>
                                    <button class="btn-register">Đăng ký</button>
                                </div>
                            </div>
                        </div>

                        <div class="schedule">
                            <p class="obj-org-name">Bệnh viện Đa khoa huyện Dầu Tiếng</p>
                            <div class="holder-obj-attr">
                                <div class="obj-attr">
                                    <p class="attr date">Lịch tiêm ngày: 24/11/2022</p>
                                    <p class="attr vaccine">Vaccine: AstraZeneca</p>
                                    <p class="attr serial">Serial: Chrysanthemum</p>
                                </div>
                                <div class="obj-attr">
                                    <p class="attr daytime">Buổi sáng: 0/0</p>
                                    <p class="attr noontime">Buổi trưa: 0/0</p>
                                    <p class="attr nighttime">Buổi tối: 0/0</p>
                                </div>
                                <div class="interactive-area">
                                    <select class="drop-down-time" name="" id="">
                                        <option value="0">Sáng</option>
                                        <option value="1">Trưa</option>
                                        <option value="2">Tối</option>
                                    </select>
                                    <br>
                                    <button class="btn-register">Đăng ký</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="list-schedule" id="list-schedule-right">
                        <!--PHP CODE-->
                        <div class="schedule">
                            <p class="obj-org-name">Bệnh viện Đa khoa huyện Dầu Tiếng</p>
                            <div class="holder-obj-attr">
                                <div class="obj-attr">
                                    <p class="attr date">Lịch tiêm ngày: 24/11/2022</p>
                                    <p class="attr vaccine">Vaccine: AstraZeneca</p>
                                    <p class="attr serial">Serial: Chrysanthemum</p>
                                </div>
                                <div class="obj-attr">
                                    <p class="attr daytime">Buổi sáng: 0/0</p>
                                    <p class="attr noontime">Buổi trưa: 0/0</p>
                                    <p class="attr nighttime">Buổi tối: 0/0</p>
                                </div>
                                <div class="interactive-area">
                                    <select class="drop-down-time" name="" id="">
                                        <option value="0">Sáng</option>
                                        <option value="1">Trưa</option>
                                        <option value="2">Tối</option>
                                    </select>
                                    <br>
                                    <button class="btn-register">Đăng ký</button>
                                </div>
                            </div>
                        </div>

                        <div class="schedule">
                            <p class="obj-org-name">Bệnh viện Đa khoa huyện Dầu Tiếng</p>
                            <div class="holder-obj-attr">
                                <div class="obj-attr">
                                    <p class="attr date">Lịch tiêm ngày: 24/11/2022</p>
                                    <p class="attr vaccine">Vaccine: AstraZeneca</p>
                                    <p class="attr serial">Serial: Chrysanthemum</p>
                                </div>
                                <div class="obj-attr">
                                    <p class="attr daytime">Buổi sáng: 0/0</p>
                                    <p class="attr noontime">Buổi trưa: 0/0</p>
                                    <p class="attr nighttime">Buổi tối: 0/0</p>
                                </div>
                                <div class="interactive-area">
                                    <select class="drop-down-time" name="" id="">
                                        <option value="0">Sáng</option>
                                        <option value="1">Trưa</option>
                                        <option value="2">Tối</option>
                                    </select>
                                    <br>
                                    <button class="btn-register">Đăng ký</button>
                                </div>
                            </div>
                        </div>

                        <div class="schedule">
                            <p class="obj-org-name">Bệnh viện Đa khoa huyện Dầu Tiếng</p>
                            <div class="holder-obj-attr">
                                <div class="obj-attr">
                                    <p class="attr date">Lịch tiêm ngày: 24/11/2022</p>
                                    <p class="attr vaccine">Vaccine: AstraZeneca</p>
                                    <p class="attr serial">Serial: Chrysanthemum</p>
                                </div>
                                <div class="obj-attr">
                                    <p class="attr daytime">Buổi sáng: 0/0</p>
                                    <p class="attr noontime">Buổi trưa: 0/0</p>
                                    <p class="attr nighttime">Buổi tối: 0/0</p>
                                </div>
                                <div class="interactive-area">
                                    <select class="drop-down-time" name="" id="">
                                        <option value="0">Sáng</option>
                                        <option value="1">Trưa</option>
                                        <option value="2">Tối</option>
                                    </select>
                                    <br>
                                    <button class="btn-register">Đăng ký</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>