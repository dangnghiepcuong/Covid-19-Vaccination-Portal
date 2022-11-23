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

                    <label for="status">Trạng thái</label>
                    <select type="drop-down" name="status">
                        <!-- PHP CODE -->
                        <option value="">Tất cả</option>
                        <option value="">Đã lên lịch</option>
                        <option value="">Đã diễn ra</option>
                    </select>
                    <button class="btn-medium-bordered-icon" id="filter-date-status">
                        <img src="image/filter-magnifier.png" alt="filter-magnifier">
                        Tìm kiếm
                    </button>
                </div>


                <div class="filter-pane" id="filter-vaccine-time">
                    <label for="vaccine">Vaccine</label>
                    <select type="text" name="vaccine">
                        <!-- PHP CODE -->
                        <option value="">Tất cả</option>
                        <option value="">AstraZeneca</option>
                        <option value="">Comirnaty</option>
                        <option value="">Verro Cell</option>
                    </select>

                    <!-- <label for="time">Buổi</label>
                    <select type="drop-down" name="time">
                        <option value=""></option>
                        <option value="">Sáng</option>
                        <option value="">Chiều</option>
                        <option value="">Tối</option>
                    </select> -->

                    <button class="btn-medium-bordered-icon">
                        <img src="image/filter-magnifier.png" alt="filter-magnifier">
                        Tìm kiếm
                    </button>
                </div>
            </div>

            <br>

            <div class="panel-list-schedule">
                <div class="list-name">DANH SÁCH LỊCH TIÊM</div>
                <div class="list-name" id="object-orgname">
                    <!--PHP CODE Bệnh viện Đa khoa huyện Dầu Tiếng -->
                    <?php
                    include("DatabaseConnection.php");
                    $OrgName = "";
                    $sql = "select * from ORGANIZATION where ID = '74001'";
                    $command = oci_parse($connection, $sql);
                    oci_execute($command);
                    while (($row = oci_fetch_array($command, OCI_ASSOC + OCI_RETURN_NULLS)) != false) {
                        $OrgName = $row['NAME'];
                        echo $OrgName;
                    }
                    ?>
                </div>
                <br>
                <div class="holder">
                    <div class="list-schedule" id="list-schedule-left">
                        <!--PHP CODE-->
                        <?php
                        $sql = "select * from SCHEDULE where OrgID = '74001'";

                        $command = oci_parse($connection, $sql);
                        oci_execute($command);
                        while (($row = oci_fetch_array($command, OCI_ASSOC + OCI_RETURN_NULLS)) != false) {
                            echo '<div class="schedule">
                            <p class="obj-org-name">' . $OrgName . '</p>
                            <div class="holder-obj-attr">
                                <div class="obj-attr">
                                    <p class="attr-date-vaccine-serial">Lịch tiêm ngày: ' . $row['ONDATE'] . ' - Vaccine:
                                    ' . $row['VACCINEID'] . ' - ' . $row['SERIAL'] . '</p>
                                    <p class="attr-time">Buổi sáng: ' . $row['DAYREGISTERED'] . '/' . $row['LIMITDAY'] . ' - Buổi trưa: ' . $row['NOONREGISTERED'] . '/' . $row['LIMITNOON'] . ' - Buổi tối: ' . $row['NIGHTREGISTERED'] . '/' . $row['LIMITNIGHT'] . '</p>
                                </div>
                                <div class="interactive-area">
                                    <button class="btn-medium-filled btn-register" id="btn-register">Lượt đăng
                                        ký</button>
                                    <button class="btn-medium-bordered btn-update" id="btn-register">Cập nhật</button>
                                    <button class="btn-short-bordered btn-cancel" id="btn-register">Hủy</button>
                                </div>
                            </div>
                        </div>';
                        }
                        ?>

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
    include("footer.php");
    ?>
</body>

</html>