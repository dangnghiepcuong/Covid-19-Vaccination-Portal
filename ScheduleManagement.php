<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/ScheduleManagement.css">
    <link rel="stylesheet" href="css/btn.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/ScheduleManagement.js"></script>
    <title>Lịch Tiêm</title>
</head>

<body>
    <!-- HEADER -->
    <?php
    include("headerCitizen.php");
    ?>
    <!-- END HEADER -->

    <!-- NAV FUNCTION PANEL -->
    <div class="nav-func-pages">
        <div class="nav-func-title">
            <a href="ScheduleManagement.php">Danh sách lịch tiêm</a>
        </div>
        <div class="nav-directory">
            <div class="directory">
                <a href="index.php">Trang chủ</a>
            </div>

            <div class="dicrectory">&nbsp;/&nbsp;</div>

            <div class="directory">
                <a href="VaccinationRegistration.php">Lịch tiêm</a>
            </div>

            <div class="dicrectory">&nbsp;/&nbsp;</div>

            <div class="directory-selected">
                <a href="ScheduleManagement.php">Danh sách lịch tiêm</a>
            </div>
        </div>
    </div>
    <!-- END NAV FUNCTION PANEL -->
    <br>

    <!-- FUNCTION PANEL -->
    <div class="holder-function-panel">
        <div class="function-panel">
            <br>
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
                    <button class="btn-bordered-medium-icon">
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

                    <button class="btn-bordered-medium-icon">
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
                                    <p class="attr-date-vaccine-serial">Lịch tiêm ngày: 24/11/2022 - Vaccine: AstraZeneca - A11</p>
                                    <p class="attr-time">Buổi sáng: 0/0 - Buổi trưa: 0/0 - Buổi tối: 0/0</p>
                                </div>
                                <div class="interactive-area">
                                    <button class="btn-filled-medium btn-register" id="btn-register">Lượt đăng ký</button>
                                    <button class="btn-bordered-medium btn-update" id="btn-register">Cập nhật</button>
                                    <button class="btn-bordered-short btn-cancel" id="btn-register">Hủy</button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- <div class="list-schedule" id="list-schedule-right">
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- END FUNCTION PANEL -->
    <br>

    <div class="form-popup-confirm">
        <p class="form-message"></p>
        <br>
        <div class="holder-btn">
            <button class="btn-confirm">Xác nhận</button>
            <button class="btn-cancel">Hủy</button>
        </div>
    </div>

    <!-- COVER LOGIN FORM -->
    <div class="gradient-bg-faded" id="gradient-bg-faded"></div>

    <?php
    include("footer.php")
    ?>
</body>

</html>