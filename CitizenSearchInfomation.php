<?php
error_reporting(E_ERROR | E_PARSE);
define('browsable', true);

include("object_Account.php");
include("object_Citizen.php");
session_start();

// if logged in account has not register a profile then head to index.php
if (isset($_SESSION['AccountInfo']) == false)
    header("location:javascript://history.go(-1)");
// if not have the right role then return to index
else if ($_SESSION['AccountInfo']->get_role() != 2)
    header("location:javascript://history.go(-1)");

// if there is not any profile was queried then head to index
if (isset($_SESSION['CitizenProfile']) == false)
    header("location:javascript://history.go(-1)");

$citizen = $_SESSION['CitizenProfile'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/filter-panel.css">
    <link rel="stylesheet" href="css/CitizenSearchInfomation.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/CitizenSearchInfomation.js"></script>
    <script src="js/WebElements.js"></script>
    <title>Tra cứu thông tin Vaccine</title>
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
        <!-- MENU -->
        <?php
        include("function-menu.php");
        ?>
        <!-- END MENU -->

        <div class="function-panel">
            <br>
            <div class="filter-panel">
                <label for="vaccine-name">Vaccine</label>
                <select name="vaccine-name" id="">
                    <option value="">a</option>
                </select>
                <button class="btn-medium-bordered-icon btn-filter" id="btn-filter-infomation">
                    <img src="image/filter-magnifier.png" alt="filter-magnifier">
                    Tìm kiếm
                </button>
            </div>
        </div>
    </div>
    </div>
    <br>
    <?php
    include("footer.php")
    ?>

</body>

</html>