<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/btn.css">
    <link rel="stylesheet" href="css/filter-panel.css">
    <link rel="stylesheet" href="css/CitizenProfile.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/CitizenVaccinationProfile.js"></script>
    <script src="js/animation-btn.js"></script>
    <title>Tra cứu thông tin tiêm chủng công dân</title>
</head>

<body>
    <!-- Header -->
    <?php
    include("headerCitizen.php")
    ?>
    <!-- End Header -->

    <!-- NAV FUNCTION -->
    <?php
    include("function-navigation-bar.php");
    ?>
    <!-- END NAV FUNCTION -->
    <br>

    <!-- Func Panel -->
    <div class="holder-function-panel">
        <!-- MENU -->
        <?php
        include("function-menu.php");
        ?>
        <!-- END MENU -->

        <div class="function-panel">
            <br>
        </div>
    </div>
    <br>

    <!-- FOOTER -->
    <?php
    include("footer.php");
    ?>
    <!-- END FOOTER -->
</body>

</html>