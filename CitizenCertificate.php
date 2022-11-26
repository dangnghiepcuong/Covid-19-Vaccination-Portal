<!DOCTYPE html>
<?php
include("object_Account.php");
include("object_Citizen.php");
session_start();
if (!(isset($_SESSION['AccountInfo']) && $_SESSION['AccountInfo']->get_status() == 1) && isset($_SESSION['CitizenProfile']))
    header('Location: index.php');
$citizen = $_SESSION['CitizenProfile'];
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/CitizenCertificate.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/CitizenCertificate.js"></script>
    <script src="js/animation-btn.js"></script>
    <title>Chứng nhận tiêm chủng</title>
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
            <div class="panel-target-citizen">
                <p>Đối tượng: </p>
                <select name="" id="">
                    <option value=""><?php echo $citizen->get_lastname() . ' ' . $citizen->get_firstname() ?></option>
                </select>
            </div>
            <br>

            <div class="panel-certificate">
                <div class="info">
                    <img src="image/Avata-Ceritificate.png" alt="">
                    <p id="name"><?php echo $citizen->get_lastname() . ' ' . $citizen->get_firstname() ?></p>
                    <p id="sex_birthday"><?php echo $citizen->get_gender() ?></p>
                    <p id="birthday"><?php echo $citizen->get_birthday() ?></p>
                </div>

                <div class="certificate">
                    <div class="list-injection" id="list-injection">
                    </div>
                </div>
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