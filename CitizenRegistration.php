<!DOCTYPE html>
<?php
include("object_Account.php");
include("object_Citizen.php");
session_start();
$citizen = new Citizen();
$citizen = $_SESSION['CitizenProfile'];
// echo '<script>alert("' . $Cregistration->get_sched()->newOrg() . '")</script>'; 

if (!(isset($_SESSION['AccountInfo']) && $_SESSION['AccountInfo']->get_status() == 1) && isset($_SESSION['CitizenProfile']))
    header('Location: index.php');

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/CitizenRegistration.css">
    <link rel="stylesheet" href="css/filter-panel.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/CitizenRegistration.js"></script>
    <script src="js/WebElements.js"></script>
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
                    <option value=""><?php echo $citizen->get_lastname() . ' ' . $citizen->get_firstname() ?></option>
                </select>
            </div>
            <br>
            <div class="filter-panel">
                <div class="filter-pane" id="filter-vaccine-time">
                    <label for="status">Trạng thái</label>
                    <select type="text" name="status" id="status">
                        <option value="-1">Tất cả</option>
                        <option value="0">Đã đăng ký</option>
                        <option value="1">Đã điểm danh</option>
                        <option value="2">Đã tiêm</option>
                        <option value="3">Đã hủy</option>
                    </select>

                    <label for="vaccine">Vaccine</label>
                    <select type="text" name="vaccine" id="vaccine">
                        <option value="-1">Tất cả</option>
                        <option value="Astra">AstraZeneca</option>
                        <option value="Comirnaty">Comirnaty (Pfizer)</option>
                        <option value="Mordena">Mordena</option>
                        <option value="Vero">Vero Cell</option>
                        <option value="Sputnik">Sputnik V</option>
                    </select>

                    <label for="time">Buổi</label>
                    <select type="drop-down" name="time" id="time">
                        <option value="-1">Tất cả</option>
                        <option value="0">Sáng</option>
                        <option value="1">Chiều</option>
                        <option value="2">Tối</option>
                    </select>

                    <button class="btn-medium-bordered-icon btn-filter" id="btn-filter-registration">
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
                    </div>

                </div>
            </div>


        </div>
    </div>
    <!-- END FUNCTION PANEL -->
    <br>

    <!-- FOOTER -->
    <?php
    include("footer.php");
    include("WebElements.html");
    ?>

    <?php
    // echo '<script>alert("' . $citizen->get_birthday() . '")</script>'; 
    ?>
</body>

</html>