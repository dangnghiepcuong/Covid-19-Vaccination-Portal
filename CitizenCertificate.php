<!DOCTYPE html>
<?php
include("object_Injection.php");
session_start();
if (isset($_SESSION['AccountInfo']) == false)
    header('Location: index.php');
$citizen = $_SESSION['CitizenProfile'];
$Cinjection = new Injection();
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

                <div class="container-list">
                    <div class="list">
                        <?php
                        include("DatabaseConnection.php");
                        $sql = "select * from INJECTION where citizenid = :citizenid";
                        $command = oci_parse($connection, $sql);
                        oci_bind_by_name($command, ':citizenid', $citizen->get_id());
                        $r = oci_execute($command);
                        if (!$r) {
                            $exception = oci_error($command);
                            echo 'ERROR: ' . $exception['code'] . ' - ' . $exception['message'];
                            return;
                        }

                        $row = oci_fetch_array($command, OCI_ASSOC + OCI_RETURN_NULLS);
                        $Cinjection->set_injno($row['INJNO']);
                        $Cinjection->set_dosetype($row['DOSETYPE']);
                        echo $Cinjection->get_injno();

                        switch ($Cinjection->get_injno()) {
                            case 0:
                                echo
                                '<p class="status">Chưa tiêm đủ liều cơ bản vaccine Covid-19</p>';
                                break;
                            case 1:
                                echo
                                '<p class="status">Chưa tiêm đủ liều cơ bản vaccine Covid-19</p>
                                <div class="injection0">
                                <p>Mũi 1 (Cơ bản)</p>
                                <p>Vaccine: </p>
                                <p>Đơn vị tiêm chủng: </p>
                                <p>Lịch tiêm ngày: </p>
                                </div>
                                ';
                                break;
                            case 2:
                                break;
                            case 3:
                                break;
                        }

                        ?>





                        
                    

                    <div class="injection1">
                        <p>Mũi 2 (Tăng cường)</p>
                        <p>Vaccine: </p>
                        <p>Đơn vị tiêm chủng: </p>
                        <p>Lịch tiêm ngày: </p>
                    </div>

                    <div class="injection2">
                        <p>Mũi 3 (Nhắc lại)</p>
                        <p>Vaccine: </p>
                        <p>Đơn vị tiêm chủng: </p>
                        <p>Lịch tiêm ngày: </p>
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