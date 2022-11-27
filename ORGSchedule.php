<?php
// error_reporting(0);
include("object_Account.php");
include("object_Schedule.php");
session_start();

// if logged in account has not register a profile then head to index.php
if (!(isset($_SESSION['AccountInfo']) && $_SESSION['AccountInfo']->get_status() == 1))
    header('Location: index.php');
// if there is not any profile was queried then head to index
if (isset($_SESSION['OrgProfile']) == false)
    header('Location: index.php');
    
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