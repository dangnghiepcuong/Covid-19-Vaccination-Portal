<!DOCTYPE html>
<html lang="en">
<?php
include("object_Citizen.php");
session_start();
if (isset($_SESSION['username']) == false)
    header('Location: index.php');
$citizen = $_SESSION['profile'];
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/CitizenVaccination.css">
    <link rel="stylesheet" href="css/filter-panel.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/CitizenVaccination.js"></script>
    <script src="js/WebElements.js"></script>
    <title>Tiêm chủng</title>
</head>

<body>
    <!-- HEADER -->
    <?php
    include("headerCitizen.php");
    ?>
    <!-- END HEADER -->

    <!-- NAV FUNCTION -->
    <?php
    include("function-navigation-bar.php");
    ?>
    <!-- END NAV FUNCTION -->
    <br>

    <!-- FUNCTION PANEL -->
    <div class="holder-function-panel">
        <div class="function-panel">
            <br>
            <div class="filter-panel">
                <div class="filter-pane" id="filter-region">
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
                    <button class="btn-medium-bordered-icon btn-filter">
                        <img src="image/filter-magnifier.png" alt="filter-magnifier">
                        Tìm kiếm
                    </button>
                </div>


                <div class="filter-pane" id="filter-vaccine-time">
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

                    <button class="btn-medium-bordered-icon btn-filter">
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
                                    <p class="attr-date">Lịch tiêm ngày: 24/11/2022</p>
                                    <p class="attr-vaccine">Vaccine: AstraZeneca</p>
                                    <p class="attr-serial">Serial: Chrysanthemum</p>
                                </div>
                                <div class="obj-attr">
                                    <p class="attr-daytime">Buổi sáng: 0/0</p>
                                    <p class="attr-noontime">Buổi trưa: 0/0</p>
                                    <p class="attr-nighttime">Buổi tối: 0/0</p>
                                </div>
                                <div class="interactive-area">
                                    <select class="drop-down-time" name="" id="">
                                        <option value="0">Sáng</option>
                                        <option value="1">Trưa</option>
                                        <option value="2">Tối</option>
                                    </select>
                                    <br>
                                    <button class="btn-medium-filled">Đăng ký</button>
                                </div>
                            </div>
                        </div>

                        <div class="schedule">
                            <p class="obj-org-name">Bệnh viện Đa khoa huyện Dầu Tiếng</p>
                            <div class="holder-obj-attr">
                                <div class="obj-attr">
                                    <p class="attr-date">Lịch tiêm ngày: 24/11/2022</p>
                                    <p class="attr-vaccine">Vaccine: AstraZeneca</p>
                                    <p class="attr-serial">Serial: Chrysanthemum</p>
                                </div>
                                <div class="obj-attr">
                                    <p class="attr-daytime">Buổi sáng: 0/0</p>
                                    <p class="attr-noontime">Buổi trưa: 0/0</p>
                                    <p class="attr-nighttime">Buổi tối: 0/0</p>
                                </div>
                                <div class="interactive-area">
                                    <select class="drop-down-time" name="" id="">
                                        <option value="0">Sáng</option>
                                        <option value="1">Trưa</option>
                                        <option value="2">Tối</option>
                                    </select>
                                    <br>
                                    <button class="btn-medium-filled  btn-register">Đăng ký</button>
                                </div>
                            </div>
                        </div>

                        <div class="schedule">
                            <p class="obj-org-name">Bệnh viện Đa khoa huyện Dầu Tiếng</p>
                            <div class="holder-obj-attr">
                                <div class="obj-attr">
                                    <p class="attr-date">Lịch tiêm ngày: 24/11/2022</p>
                                    <p class="attr-vaccine">Vaccine: AstraZeneca</p>
                                    <p class="attr-serial">Serial: Chrysanthemum</p>
                                </div>
                                <div class="obj-attr">
                                    <p class="attr-daytime">Buổi sáng: 0/0</p>
                                    <p class="attr-noontime">Buổi trưa: 0/0</p>
                                    <p class="attr-nighttime">Buổi tối: 0/0</p>
                                </div>
                                <div class="interactive-area">
                                    <select class="drop-down-time" name="" id="">
                                        <option value="0">Sáng</option>
                                        <option value="1">Trưa</option>
                                        <option value="2">Tối</option>
                                    </select>
                                    <br>
                                    <button class="btn-medium-filled  btn-register">Đăng ký</button>
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
                                    <p class="attr-date">Lịch tiêm ngày: 24/11/2022</p>
                                    <p class="attr-vaccine">Vaccine: AstraZeneca</p>
                                    <p class="attr-serial">Serial: Chrysanthemum</p>
                                </div>
                                <div class="obj-attr">
                                    <p class="attr-daytime">Buổi sáng: 0/0</p>
                                    <p class="attr-noontime">Buổi trưa: 0/0</p>
                                    <p class="attr-nighttime">Buổi tối: 0/0</p>
                                </div>
                                <div class="interactive-area">
                                    <select class="drop-down-time" name="" id="">
                                        <option value="0">Sáng</option>
                                        <option value="1">Trưa</option>
                                        <option value="2">Tối</option>
                                    </select>
                                    <br>
                                    <button class="btn-medium-filled  btn-register">Đăng ký</button>
                                </div>
                            </div>
                        </div>

                        <div class="schedule">
                            <p class="obj-org-name">Bệnh viện Đa khoa huyện Dầu Tiếng</p>
                            <div class="holder-obj-attr">
                                <div class="obj-attr">
                                    <p class="attr-date">Lịch tiêm ngày: 24/11/2022</p>
                                    <p class="attr-vaccine">Vaccine: AstraZeneca</p>
                                    <p class="attr-serial">Serial: Chrysanthemum</p>
                                </div>
                                <div class="obj-attr">
                                    <p class="attr-daytime">Buổi sáng: 0/0</p>
                                    <p class="attr-noontime">Buổi trưa: 0/0</p>
                                    <p class="attr-nighttime">Buổi tối: 0/0</p>
                                </div>
                                <div class="interactive-area">
                                    <select class="drop-down-time" name="" id="">
                                        <option value="0">Sáng</option>
                                        <option value="1">Trưa</option>
                                        <option value="2">Tối</option>
                                    </select>
                                    <br>
                                    <button class="btn-medium-filled  btn-register">Đăng ký</button>
                                </div>
                            </div>
                        </div>

                        <div class="schedule">
                            <p class="obj-org-name">Bệnh viện Đa khoa huyện Dầu Tiếng</p>
                            <div class="holder-obj-attr">
                                <div class="obj-attr">
                                    <p class="attr-date">Lịch tiêm ngày: 24/11/2022</p>
                                    <p class="attr-vaccine">Vaccine: AstraZeneca</p>
                                    <p class="attr-serial">Serial: Chrysanthemum</p>
                                </div>
                                <div class="obj-attr">
                                    <p class="attr-daytime">Buổi sáng: 0/0</p>
                                    <p class="attr-noontime">Buổi trưa: 0/0</p>
                                    <p class="attr-nighttime">Buổi tối: 0/0</p>
                                </div>
                                <div class="interactive-area">
                                    <select class="drop-down-time" name="" id="">
                                        <option value="0">Sáng</option>
                                        <option value="1">Trưa</option>
                                        <option value="2">Tối</option>
                                    </select>
                                    <br>
                                    <button class="btn-medium-filled  btn-register">Đăng ký</button>
                                </div>
                            </div>
                        </div>
                    </div>
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
            <button class="btn-medium-filled btn-confirm">Xác nhận</button>
            <button class="btn-medium-bordered btn-cancel">Hủy</button>
        </div>
    </div>

    <!-- COVER LOGIN FORM -->
    <div class="gradient-bg-faded" id="gradient-bg-faded"></div>

    <?php
    include("footer.php")
    ?>
</body>

</html>