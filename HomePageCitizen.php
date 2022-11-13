<?php
    if(isset($_COOKIE['username']))
    {
        $username = $_COOKIE['username'];
        include("DatabaseConnection.php");
        $sql = "select * from CITIZEN where Phone='".$username."'";
        $command = oci_parse($connection,$sql);
        oci_execute($command);

        while (($row = oci_fetch_array($command, OCI_ASSOC + OCI_RETURN_NULLS)) != false)
        {
            
        }
    }
    else
    {
        header('Location: index.php');
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang công dân</title>
    <link rel="stylesheet" href="css/HomepageCitizen.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/HomepageCitizen.js"></script>
</head>

<body>
    <!-- HEADER -->
    <?php
    include("headerCitizen.php");
    ?>
    <!-- END HEADER -->

    <!-- SLIDER -->
    <?php
    include("HomePageSlider.php");
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
    <!-- END CONTENT -->

    <!-- FOOTER -->
    <?php
    include("footer.php");
    ?>
    <!-- END FOOTER -->
</body>

</html>