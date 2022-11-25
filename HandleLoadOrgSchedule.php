<?php
// error_reporting(0);
include("object_Schedule.php");
session_start();
if (isset($_SESSION['OrgProfile']))
    $org = $_SESSION['OrgProfile'];

$method = $_POST['method'];

if ($method == 'LoadSchedule')
    $method($_POST['orgid']);
else 
    $method();

function LoadOrg($province = "", $district = "", $town = "")
{
    include("DatabaseConnection.php");

    $sql = "select ORG.ID as ID, Name, ProvinceName, DistrictName, TownName, Street, COUNT(SCHED.ID) as C
    from
    (select * from ORGANIZATION where 1=1 ";

    if ($_POST['province'] != "") {
        $sql .= " and ProvinceName = :province";
    }

    if ($_POST['district'] != "") {
        $sql .= " and DistrictName = :district";
    }

    if ($_POST['town'] != "") {
        $sql .= " and TownName = :town";
    }

    $sql .= ") ORG
    inner join
    (select ID, OrgID from SCHEDULE where OnDate > SYSDATE) SCHED
    on ORG.ID = SCHED.OrgID
    group by ORG.ID, Name, ProvinceName, DistrictName, TownName, Street";

    $command = oci_parse($connection, $sql);
    if ($_POST['province'] != "")
        oci_bind_by_name($command, ':province', $_POST['province']);
    if ($_POST['district'] != "")
        oci_bind_by_name($command, ':district', $_POST['district']);
    if ($_POST['town'] != "")
        oci_bind_by_name($command, ':town', $_POST['town']);

    $r = oci_execute($command);
    if (!$r) {
        $exception = oci_error($command);
        echo '<script>ERROR: ' . $exception['code'] . ' - ' . $exception['message'] . '</script>';
        return;
    }

    $result = "";
    while (($row = oci_fetch_array($command, OCI_ASSOC + OCI_RETURN_NULLS)) != false) {
        $result .= '
        <div class="organization" id="'.$row['ID'].'">
            <p class="obj-org-name">' . $row['NAME'] . ': '.$row['C'].' lịch</p>
            <div class="holder-obj-attr">
                <div class="obj-attr">
                    <p class="attr-location">K/v: ' . $row['PROVINCENAME'] . ' - ' . $row['DISTRICTNAME'] . ' - ' . $row['TOWNNAME'] . '</p>
                    <p class="attr-address">Đ/c: ' . $row['STREET'] . '</p>
                </div>
            </div>
        </div>';
    }

    echo $result;
}

function LoadSchedule($orgid = "")
{
    if ($orgid == "")
        return;

    include("DatabaseConnection.php");
    $sql = "alter session set NLS_DATE_FORMAT='YYYY-MM-DD'";
    $command = oci_parse($connection, $sql);
    $r = oci_execute($command, OCI_NO_AUTO_COMMIT);
    if (!$r) {
        $exception = oci_error($command);
        echo 'ERROR: ' . $exception['code'] . ' - ' . $exception['message'];
        return;
    }

    $sql = "select * from SCHEDULE where OrgID = :id";

    if ($_POST['startdate'] != "") {
        $sql .= " and OnDate >= :startdate";
    }

    if ($_POST['enddate'] != "") {
        $sql .= " and OnDate <= :enddate";
    }

    if ($_POST['vaccine'] != "") {
        $sql .= " and VaccineID = :vaccine";
    }

    $sql .= " order by OnDate";

    $command = oci_parse($connection, $sql);

    if ($orgid == "")
    {
        global $org;
        oci_bind_by_name($command, ':id', $org->get_id());
    }
    else{
        oci_bind_by_name($command, ':id', $orgid);
    }

    if ($_POST['startdate'] != "")
        oci_bind_by_name($command, ':startdate', $_POST['startdate']);
    if ($_POST['enddate'] != "")
        oci_bind_by_name($command, ':enddate', $_POST['enddate']);
    if ($_POST['vaccine'] != "")
        oci_bind_by_name($command, ':vaccine', $_POST['vaccine']);

    $r = oci_execute($command);
    if (!$r) {
        $exception = oci_error($command);
        echo '<script>ERROR: ' . $exception['code'] . ' - ' . $exception['message'] . '</script>';
        return;
    }

    $result = "";
    while (($row = oci_fetch_array($command, OCI_ASSOC + OCI_RETURN_NULLS)) != false) {
        $result .=
            '<div class="schedule">
            <div class="holder-obj-attr">
                <div class="obj-attr">
                    <p class="attr-date">Lịch tiêm ngày: ' . $row['ONDATE'] . '</p>
                    <p class="attr-vaccine">Vaccine: ' . $row['VACCINEID'] . '</p>
                    <p class="attr-serial">Serial: ' . $row['SERIAL'] . '</p>
                </div>
                <div class="obj-attr">
                    <p class="attr-daytime">Buổi sáng: ' . $row['DAYREGISTERED'] . '/' . $row['LIMITDAY'] . '</p>
                    <p class="attr-noontime">Buổi trưa: ' . $row['NOONREGISTERED'] . '/' . $row['LIMITNOON'] . '</p>
                    <p class="attr-nighttime">Buổi tối: ' . $row['NIGHTREGISTERED'] . '/' . $row['LIMITNIGHT'] . '</p>
                </div>
                <div class="interactive-area">
                    <select class="drop-down-time" name="" id="">
                        <option value="0">Sáng</option>
                        <option value="1">Trưa</option>
                        <option value="2">Tối</option>
                    </select>
                    <br>
                    <button class="btn-medium-filled  btn-register" id="btn-filter-schedule">Đăng ký</button>
                </div>
            </div>
        </div>';
    }

    echo $result;
}
