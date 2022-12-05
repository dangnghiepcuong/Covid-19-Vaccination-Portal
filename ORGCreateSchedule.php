<?php
error_reporting(E_ERROR | E_PARSE);
define('browsable', true);

include("object_Account.php");
include("object_Schedule.php");
session_start();

// if logged in account has not register a profile then head to index.php
if (isset($_SESSION['AccountInfo']) == false)
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
    <link rel="stylesheet" href="css/ORGCreateSchedule.css">
    <link rel="stylesheet" href="css/filter-panel.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/ORGCreateSchedule.js"></script>
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

            <div class="panel-list-schedule">
                <?php
                echo '
                    <div class="list-name orgid" id="' . $org->get_id() . '">' . $org->get_name() . '</div>'
                ?>
                <br>
                <div class="holder">
                    <div class="panel-update-schedule" id="panel-update-schedule">
                        <div class="panel-update-schedule" id="SchedID" <div class="title">TẠO LỊCH TIÊM CHỦNG</div>
                        <div class="container-update-value">
                            <label for="schedule-date" class="">Giới hạn đăng ký buổi sáng</label><br>
                            <input id="schedule-date" type="date" min="<?php echo date("Y-m-d"); ?>"><br>

                            <label for="vaccine" class="">Loại vaccine</label><br>
                            <select type="text" name="vaccine" id="vaccine">
                                <option value="Astra">AstraZeneca</option>
                                <option value="Corminaty">Corminaty (Pfizer)</option>
                                <option value="Sputnik">Sputnik V</option>
                                <option value="Vero">Verro Cell</option>
                                <option value="Moderna">Moderna</option>
                            </select>
                            <br>

                            <label for="serial" class="">Số lô vaccine</label><br>
                            <input id="serial" type="text"><br>

                            <label for="limit-day" class="">Giới hạn đăng ký buổi sáng</label><br>
                            <input id="limit-day" type="number" min="0"><br>

                            <label for="limit-noon" class="">Giới hạn đăng ký buổi chiều</label><br>
                            <input id="limit-noon" type="number" min="0"><br>

                            <label for="limit-night" class="">Giới hạn đăng ký buổi tối</label><br>
                            <input id="limit-night" type="number" min="0"><br>

                            <button class="btn-medium-bordered" id="btn-confirm-create-schedule">Xác nhận</button>
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

    <?php
    include("footer.php");
    include("WebElements.php");
    ?>
</body>

</html>