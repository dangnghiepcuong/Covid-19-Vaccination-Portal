<!DOCTYPE html>
<?php
session_start();
include("object_Citizen.php");
$citizen = new Citizen();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cổng thông tin tiêm chủng Covid-19</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/btn.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/index.js"></script>
    <script src="js/animation-btn.js"></script>
    </script>
</head>

<body>
    <!-- HEADER -->
    <div id="return-header">
        <?php
        if (isset($_SESSION['UserRole'])) {
            $username = $_SESSION['username'];
            switch ((int)$_SESSION['UserRole']) {
                case 0:
                    include("headerORG.php");
                    break;
                case 1:
                    include("headerORG.php");
                    break;
                case 2:
                    if (isset($_SESSION['CitizenProfile']) == false) {
                        include("CitizenLoadProfile.php");
                    }
                    include("headerCitizen.php");
                    break;
                default:
                    include("headerGeneral.php");
                    break;
            }
        } else
            include("headerGeneral.php");
        ?>
    </div>
    <!-- END HEADER -->

    <!-- SLIDER -->
    <?php
    include("HomepageSlider.php");
    ?>
    <!-- END SLIDER -->

    <?php
    include("SignupLoginForm.html");
    ?>

    <div class="content">
        <div class="content-alignment-side"></div>
        <div class="content-box">
            <?php
            echo "Hello Chrysan"
            ?>
        </div>
        <div class="content-box"></div>
        <div class="content-box"></div>
        <div class="content-box"></div>
        <div class="content-alignment-side"></div>
    </div>

    <!-- FOOTER -->
    <?php
    include("footer.php")
    ?>
    <!-- END FOOTER -->

    <div class="form-popup-confirm">
        <p class="form-message"></p>
        <div class="holder-btn">
            <button class="btn-medium-filled btn-confirm">OK</button>
        </div>
    </div>

    <!-- FADED COVER -->
    <div class="gradient-bg-faded" id="gradient-bg-faded"></div>

    <?php
    // echo '<script>alert("' . $citizen->get_ID() . '")</script>';
    ?>
</body>

</html>