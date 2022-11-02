<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đơn vị tiêm chủng</title>
    <link rel="stylesheet" href="HomePageORG.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="HomePageORG.js"></script>
</head>

<body>
    <!-- HEADER -->
    <?php
    include("header/headerCitizen.php");
    ?>
    <!-- END HEADER -->

    <!-- SLIDER -->
    <?php
    include("homepage/HomepageSlider.php");
    ?>
    <!-- END SLIDER -->

    <!-- CONTENT -->
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

    <div class="content-below">

    </div>

    <!-- FOOTER -->
    <?php
    include("footer/footer.php");
    ?>
    <!-- END FOOTER -->
</body>

</html>