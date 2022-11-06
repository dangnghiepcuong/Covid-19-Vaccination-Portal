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
    <title>Quản lý lượt đăng ký</title>
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

    <div class="holder-function-panel">
        <!-- MENU -->
        <?php
        include("function-menu.php");
        ?>
        <!-- END MENU -->

        <div class="function-panel">
            <br>
            <div class="panel-target-citizen">
                <p>Đối tượng: </p>
                <select name="" id="">
                    <option value="">Đặng Nghiệp Cường</option>
                    <option value="">Đỗ Thị Cúc Hoa</option>
                </select>
            </div>
            <br>
            <div class="filter-panel">
                <div class="filter-pane" id="filter-vaccine-time">
                    <label for="status">Trạng thái</label>
                    <select type="text" name="status">
                        <option value=""></option>
                        <option value="">Đã đăng ký</option>
                        <option value="">Đã điểm danh</option>
                        <option value="">Đã tiêm</option>
                        <option value="">Đã hủy</option>
                    </select>

                    <label for="vaccine">Vaccine</label>
                    <select type="text" name="vaccine">

                        <option value=""></option>
                        <option value="">AstraZeneca</option>
                        <option value="">Comirnaty</option>
                        <option value="">Verro Cell</option>
                    </select>

                    <label for="time">Buổi</label>
                    <select type="drop-down" name="time">
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

            <div class="panel-list-registration">
                <div class="list-name">DANH CÁC LƯỢT ĐĂNG KÝ TIÊM CHỦNG</div>

                <br>
                <div class="holder">
                    <div class="list-registration" id="list-registration">
                        <div class="registration">
                            <p class="obj-org-name">Bệnh viện Đa khoa huyện Dầu Tiếng</p>
                            <div class="holder-obj-attr">
                                <div class="obj-attr">
                                    <p class="attr-address">Đ/c: Bình Dương, Dầu Tiếng, Dầu Tiếng, Hùng Vương</p>
                                    <p class="attr-date-time-no">Lịch tiêm ngày: 24/11/2022 Buổi Sáng STT: 1</p>
                                    <p class="attr-vaccine-serial">Vaccine: AstraZeneca - Chrysanthemum Tình trạng: Đã tiêm</p>
                                </div>

                                <div class="interactive-area">
                                    <button class="btn-medium-bordered btn-cancel">Hủy</button>
                                </div>
                            </div>
                        </div>

                        <div class="registration">
                            <p class="obj-org-name">Bệnh viện Đa khoa huyện Dầu Tiếng</p>
                            <div class="holder-obj-attr">
                                <div class="obj-attr">
                                    <p class="attr-address">Đ/c: Bình Dương, Dầu Tiếng, Dầu Tiếng, Hùng Vương</p>
                                    <p class="attr-date-time-no">Lịch tiêm ngày: 24/11/2022 Buổi Sáng STT: 1</p>
                                    <p class="attr-vaccine-serial">Vaccine: AstraZeneca - Chrysanthemum Tình trạng: Đã tiêm</p>
                                </div>

                                <div class="interactive-area">
                                    <button class="btn-medium-bordered btn-cancel">Hủy</button>
                                </div>
                            </div>
                        </div>

                        <div class="registration">
                            <p class="obj-org-name">Bệnh viện Đa khoa huyện Dầu Tiếng</p>
                            <div class="holder-obj-attr">
                                <div class="obj-attr">
                                    <p class="attr-address">Đ/c: Bình Dương, Dầu Tiếng, Dầu Tiếng, Hùng Vương</p>
                                    <p class="attr-date-time-no">Lịch tiêm ngày: 24/11/2022 Buổi Sáng STT: 1</p>
                                    <p class="attr-vaccine-serial">Vaccine: AstraZeneca - Chrysanthemum Tình trạng: Đã tiêm</p>
                                </div>

                                <div class="interactive-area">
                                    <button class="btn-medium-bordered btn-cancel">Hủy</button>
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
        <div class="holder-btn">
            <button class="btn-medium-filled btn-confirm">Xác nhận</button>
            <button class="btn-medium-bordered btn-cancel">Hủy</button>
        </div>
    </div>

    <!-- FADED COVER -->
    <div class="gradient-bg-faded" id="gradient-bg-faded"></div>

    <!-- FOOTER -->
    <?php
    include("footer.php");
    ?>
</body>

</html>