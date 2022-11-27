<?php
error_reporting(0);
include("object_Injection.php");
session_start();

if (isset($_POST['method'])) {
    $method = $_POST['method'];
    $method();
} else
    header('Location: index.php');

function LoadCertificate()
{
    if (isset($_SESSION['Certificate']))
        echo $_SESSION['Certificate'];
    else
        echo '';
}

function LoadInjection()
{
    include("DatabaseConnection.php");
    $sql = "select InjNO, DoseType, OnDate, VaccineID, Name from
    (select * from INJECTION where CitizenID = :citizenid) INJ
    join
    (
        select SCHED.ID  as ID, OnDate, VaccineID, Name  from
        (select ID, OrgID, OnDate, VaccineID, Serial from SCHEDULE) SCHED
        join
        (select ID, Name from ORGANIZATION) ORG
        on SCHED.OrgID = ORG.ID
    ) SCHED_ORG
    on INJ.SchedID = SCHED_ORG.ID";

    $citizen = $_SESSION['CitizenProfile'];
    $command = oci_parse($connection, $sql);
    oci_bind_by_name($command, ':citizenid', $citizen->get_id());
    $r = oci_execute($command);
    if (!$r) {
        $exception = oci_error($command);
        echo 'ERROR: ' . $exception['code'] . ' - ' . $exception['message'];
        return;
    }

    $result = "";
    $count = 0;
    while (($row = oci_fetch_array($command, OCI_ASSOC + OCI_RETURN_NULLS)) != false) {
        $count++;
        $result .=
            '<div class="injection">
        <p>Mũi ' . $row['INJNO'] . ' (' . $row['DOSETYPE'] . ')</p>
        <p>Vaccine: ' . $row['VACCINEID'] . '</p>
        <p>Đơn vị tiêm chủng: ' . $row['NAME'] . '</p>
        <p>Lịch tiêm ngày: ' . $row['ONDATE'] . '</p>
        </div>';
    }

    switch ($count) {
        case 0:
            echo '<p class="status">Chưa tiêm đủ liều cơ bản vaccine Covid-19</p>';
            break;
        case 1:
            echo '<p class="status">Chưa tiêm đủ liều cơ bản vaccine Covid-19</p>';
            break;

        case 2:
            echo '<p class="status">Chưa tiêm đủ liều cơ bản vaccine Covid-19</p>';
            break;
        case 3:
            echo '<p class="status">Chưa tiêm đủ liều cơ bản vaccine Covid-19</p>';
            break;
        default:
            break;
    }

    $_SESSION['Certificate'] = $count;
    echo $result;
}
