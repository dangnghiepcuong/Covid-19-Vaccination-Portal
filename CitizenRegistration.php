<!DOCTYPE html>
<?php
include("object_Register.php");

session_start();
$citizen = new Citizen();
$citizen = $_SESSION['CitizenProfile'];
$Cregistration = new Register();
// echo '<script>alert("' . $Cregistration->get_sched()->newOrg() . '")</script>'; 

if (isset($_SESSION['UserRole']) == false)
    header('Location: index.php');

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/CitizenRegistration.css">
    <link rel="stylesheet" href="css/btn.css">
    <link rel="stylesheet" href="css/filter-panel.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/CitizenRegistration.js"></script>
    <script src="js/animation-btn.js"></script>
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
                    <select type="text" name="status">
                        <option value="">Tất cả</option>
                        <option value="">Đã đăng ký</option>
                        <option value="">Đã điểm danh</option>
                        <option value="">Đã tiêm</option>
                        <option value="">Đã hủy</option>
                    </select>

                    <label for="vaccine">Vaccine</label>
                    <select type="text" name="vaccine">
                        <option value="">Tất cả</option>
                        <option value="">AstraZeneca</option>
                        <option value="">Comirnaty</option>
                        <option value="">Verro Cell</option>
                    </select>

                    <label for="time">Buổi</label>
                    <select type="drop-down" name="time">
                        <option value="">Tất cả</option>
                        <option value="">Sáng</option>
                        <option value="">Chiều</option>
                        <option value="">Tối</option>
                    </select>

                    <button class="btn-medium-bordered-icon btn-filter">
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
                        <?php

                        include("DatabaseConnection.php");
                        $sql = "select Name, ProvinceName, DistrictName, TownName, Street, TO_CHAR(OnDate, 'YYYY-MM-DD') OnDate, Time, NO, VaccineID, Serial, Status, DoseType, Image from (
                                    (select SchedID, Time, NO, Status, REG.DoseType, OrgID, OnDate, VaccineID, Serial, Image from (
                                        (select ID, SchedID, NO, Time, Status, DoseType, Image from REGISTER where CitizenID = :citizenid) REG
                                        inner join
                                        (select ID, OrgID, OnDate, VaccineID, Serial from SCHEDULE) SCHED
                                        on
                                        REG.SchedID = SCHED.ID)
                                    ) REG_SCHED
                                    inner join
                                    (select ID, Name, ProvinceName, DistrictName, TownName, Street from ORGANIZATION) ORG
                                    on REG_SCHED.OrgID = ORG.ID
                                )";
                        $command = oci_parse($connection, $sql);
                        oci_bind_by_name($command, ':citizenid', $citizen->get_id());
                        oci_execute($command);

                        while (($row = oci_fetch_array($command, OCI_ASSOC + OCI_RETURN_NULLS)) != false) {
                            $Cregistration->get_sched()->get_org()->set_name($row['NAME']);
                            $Cregistration->get_sched()->get_org()->set_provincename($row['PROVINCENAME']);
                            $Cregistration->get_sched()->get_org()->set_districtname($row['DISTRICTNAME']);
                            $Cregistration->get_sched()->get_org()->set_townname($row['TOWNNAME']);
                            $Cregistration->get_sched()->get_org()->set_street($row['STREET']);
                            $Cregistration->get_sched()->set_ondate($row['ONDATE']);
                            $Cregistration->set_time($row['TIME']);
                            $Cregistration->set_NO($row['NO']);
                            $Cregistration->get_sched()->set_vaccine($row['VACCINEID']);
                            $Cregistration->get_sched()->set_serial($row['SERIAL']);
                            $Cregistration->set_status($row['STATUS']);
                            $Cregistration->set_dosetype($row['DOSETYPE']);
                            $Cregistration->set_image($row['IMAGE']);

                            echo '
                            <div class="registration">
                                <p class="obj-org-name">' . $Cregistration->get_sched()->get_org()->get_name() . '</p>
                                <div class="holder-obj-attr">
                                        <div class="obj-attr">
                                            <p class="attr-address">Đ/c: '
                                    . $Cregistration->get_sched()->get_org()->get_provincename() . ', '
                                    . $Cregistration->get_sched()->get_org()->get_districtname() . ', '
                                    . $Cregistration->get_sched()->get_org()->get_townname()
                                    . '</p>
                                            <p class="attr-date-time-no">Lịch tiêm ngày: ' . $Cregistration->get_sched()->get_ondate()
                                    . '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Buổi ' . $Cregistration->get_time()
                                    . '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp STT: ' . $Cregistration->get_no() . '</p>
                                            <p class="attr-vaccine-serial">Vaccine: '
                                    . $Cregistration->get_sched()->get_vaccine() . ' - ' . $Cregistration->get_sched()->get_serial()
                                    . '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Tình trạng: ' . $Cregistration->get_status() . '</p>
                                        </div>

                                        <div class="interactive-area">
                                            <button class="btn-medium-bordered btn-cancel">Hủy</button>
                                        </div>
                                    </div>
                            </div>
                            ';
                        }
                        ?>

                    </div>

                </div>
            </div>


        </div>
    </div>
    <!-- END FUNCTION PANEL -->
    <br>

    <div class="form-popup-confirm">
        <p class="form-message"></p>
        <div class="holder-btn">
            <button class="btn-medium-filled btn-confirm">Xác nhận</button>
            <button class="btn-medium-bordered btn-cancel">Hủy</button>
        </div>
    </div>

    <!-- FADED COVER -->
    <div class="gradient-bg-faded" id="gradient-bg-faded"></div>

    <!-- FOOTER -->
    <?php
    include("footer.php");
    ?>

    <?php
    // echo '<script>alert("' . $citizen->get_birthday() . '")</script>'; 
    ?>
</body>

</html>