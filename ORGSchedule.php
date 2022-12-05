<?php
error_reporting(E_ERROR | E_PARSE);
define('browsable', true);

include("object_Account.php");
include("object_Schedule.php");
session_start();

// if logged in account has not register a profile then head to index.php
if (isset($_SESSION['AccountInfo']) == false)
    header("location:javascript://history.go(-1)");
// if not have the right role then return to index
else if ($_SESSION['AccountInfo']->get_role() != 1)
    header("location:javascript://history.go(-1)");

// if there is not any profile was queried then head to index
if (isset($_SESSION['OrgProfile']) == false)
    header("location:javascript://history.go(-1)");

$org = $_SESSION['OrgProfile'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/ORGSchedule.css">
    <link rel="stylesheet" href="css/filter-panel.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/ORGSchedule.js"></script>
    <script src="js/WebElements.js"></script>
    <title>Lịch Tiêm</title>
</head>

<body>
    <!-- HEADER -->
    <?php
    include("headerORG.php");
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
                <div class="filter-pane" id="filter-schedule">
                    <label for="start-date">Từ ngày</label>
                    <input type="date" name="start-date" id="start-date">

                    <label for="end-date">Đến ngày</label>
                    <input type="date" name="end-date" id="end-date">

                    <label for="vaccine">Vaccine</label>
                    <select type="text" name="vaccine" id="vaccine">
                        <option value="">Tất cả</option>
                        <option value="Astra">AstraZeneca</option>
                        <option value="Corminaty">Corminaty (Pfizer)</option>
                        <option value="Sputnik">Sputnik V</option>
                        <option value="Vero">Verro Cell</option>
                        <option value="Moderna">Moderna</option>
                    </select>

                    <button class="btn-medium-bordered-icon" id="btn-filter-schedule">
                        <img src="image/filter-magnifier.png" alt="filter-magnifier">
                        Tìm kiếm
                    </button>
                </div>
            </div>
            <br>

            <div class="panel-list-schedule">

                <div class="list-name">DANH SÁCH LỊCH TIÊM</div>
                <?php
                echo '
                    <div class="list-name orgid" id="' . $org->get_id() . '">' . $org->get_name() . '</div>'
                ?>
                <br>
                <div class="holder">
                    <div class="list-schedule" id="list-schedule">
                    </div>

                    <div class="list-registration" id="list-registration">


                        <!--<div class="registration">
                            <p class="obj-name">Đối tượng: Dang Nghiep Cuong -NAM -2002 (ID:ABCCD)</p>
                            <div class="hoder-obj-attr">
                                <div class="obj-attr">
                                    <p class="attr-sdt">SĐT: 0123456789</p>
                                    <p class="attr-date">Lịch tiêm ngày</p>

                                    <div class="attr-detail">
                                        <p>Buổi: Trưa</p>
                                        <p>STT: 1</p>
                                        <p>Tình trạng: Đăng ký </p>

                                    </div>
                                </div>

                                <div class="interactive-area">
                                    <select class="drop-down-status" name="" id="">
                                        <option value="0">Đăng ký</option>
                                        <option value="1">Điểm danh</option>
                                        <option value="2">Đã tiêm</option>
                                        <option value="3">Đã hủy</option>
                                    </select>
                                    <br>
                                    <button class="btn-medium-filled btn-update">Cập nhật</button>
                                </div>
                            </div>
                        </div>

                         <div class="registration">
                            <p class="obj-name">Đối tượng: Dang Nghiep Cuong -NAM -2002 (ID:ABCCD)</p>
                            <div class="hoder-obj-attr">
                                <div class="obj-attr">
                                    <p class="attr-sdt">SĐT: 0123456789</p>
                                    <p class="attr-date">Lịch tiêm ngày</p>

                                    <div class="attr-detail">
                                        <p>Buổi: Trưa</p>
                                        <p>STT: 1</p>
                                        <p>Tình trạng: Đăng ký </p>

                                    </div>
                                </div>

                                <div class="interactive-area">
                                    <select class="drop-down-status" name="" id="">
                                        <option value="0">Đăng ký</option>
                                        <option value="1">Điểm danh</option>
                                        <option value="2">Đã tiêm</option>
                                        <option value="3">Đã hủy</option>
                                    </select>
                                    <br>
                                    <button class="btn-medium-filled btn-update">Cập nhật</button>
                                </div>
                            </div>
                        </div>

                        <div class="registration">
                            <p class="obj-name">Đối tượng: Dang Nghiep Cuong -NAM -2002 (ID:ABCCD)</p>
                            <div class="hoder-obj-attr">
                                <div class="obj-attr">
                                    <p class="attr-sdt">SĐT: 0123456789</p>
                                    <p class="attr-date">Lịch tiêm ngày</p>

                                    <div class="attr-detail">
                                        <p>Buổi: Trưa</p>
                                        <p>STT: 1</p>
                                        <p>Tình trạng: Đăng ký </p>

                                    </div>
                                </div>

                                <div class="interactive-area">
                                    <select class="drop-down-status" name="" id="">
                                        <option value="0">Đăng ký</option>
                                        <option value="1">Điểm danh</option>
                                        <option value="2">Đã tiêm</option>
                                        <option value="3">Đã hủy</option>
                                    </select>
                                    <br>
                                    <button class="btn-medium-filled btn-update">Cập nhật</button>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END FUNCTION PANEL -->
    <br>

    <?php
    include("footer.php");
    include("WebElements.php");
    ?>
</body>

</html>