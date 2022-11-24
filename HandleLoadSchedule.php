<?php
error_reporting(0);
include("object_Schedule.php");
session_start();
// if (isset($_SESSION['OrgProfile']))
$org = $_SESSION['OrgProfile'];

$method = $_POST['method'];
$method();

function LoadSchedule($orgid = "")
{
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

    global $org;
    $command = oci_parse($connection, $sql);
    oci_bind_by_name($command, ':id', $org->get_id());

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
            <p class="obj-org-name">' . $org->get_name() . '</p>
            <div class="holder-obj-attr">
                <div class="obj-attr">
                    <p class="attr-date-vaccine-serial">Lịch tiêm ngày: ' . $row['ONDATE'] . ' - Vaccine:
                    ' . $row['VACCINEID'] . ' - ' . $row['SERIAL'] . '</p>
                    <p class="attr-time">Buổi sáng: ' . $row['DAYREGISTERED'] . '/' . $row['LIMITDAY'] . ' - Buổi trưa: ' . $row['NOONREGISTERED'] . '/' . $row['LIMITNOON'] . ' - Buổi tối: ' . $row['NIGHTREGISTERED'] . '/' . $row['LIMITNIGHT'] . '</p>
                </div>
                <div class="interactive-area">
                    <button class="btn-medium-filled" id="btn-register">Lượt đăng
                        ký</button>
                    <button class="btn-medium-bordered" id="btn-update">Cập nhật</button>
                    <button class="btn-short-bordered" id="btn-cancel">Hủy</button>
                </div>
            </div>
        </div>';
    }

    echo $result;
}
