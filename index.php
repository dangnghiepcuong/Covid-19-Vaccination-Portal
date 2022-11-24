<!DOCTYPE html>
<?php
include("object_Account.php");
include("object_Citizen.php");
include("object_Organization.php");
session_start();
$citizen = new Citizen();
$account = new Account();
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
    <script src="js/WebElements.js"></script>
    </script>
</head>

<body>
    <!-- HEADER -->
    <div id="return-header">
        <?php
            // echo '<script>alert("' . $_SESSION['AccountInfo']->get_status() . '")</script>';

        if (isset($_SESSION['AccountInfo']) && $_SESSION['AccountInfo']->get_status() == 1) {

            $account = $_SESSION['AccountInfo'];
            switch ((int)$account->get_role()) {
                case 0:
                    include("headerORG.php");
                    break;
                case 1:
                    if (isset($_SESSION['OrgProfile']) == false) {
                        include("OrgLoadProfile.php");
                    }
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


    <?php
    // echo '<script>alert("' . $citizen->get_ID() . '")</script>';
    ?>
</body>

</html>