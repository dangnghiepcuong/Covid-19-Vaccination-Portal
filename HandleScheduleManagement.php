<?php
error_reporting(E_ERROR | E_PARSE);
define('browsable', true);

include("object_Account.php");
include("object_Schedule.php");
session_start();

if (isset($_POST['method'])) {
    $method = $_POST['method'];
    if ($method == 'LoadSchedule')
        $method($_POST['orgid']);
    else
        $method();
} else
    header("location:javascript://history.go(-1)");

function LoadScheduleRegistration()
{
    include("DatabaseConnection.php");

    $sql = "select LastName, FirstName, Gender, BirthYear, ID, Phone, Time, NO, Status, Image from (
        (select Time, NO, Status, Image, CitizenID from REGISTER where SchedID = :schedid and Status < 3) REG
        inner join
        (select LastName, FirstName, Gender, EXTRACT(year from Birthday) as BirthYear, ID, Phone from CITIZEN) CITIZEN
        on REG.CitizenID = CITIZEN.ID
    )";

    $command = oci_parse($connection, $sql);
    oci_bind_by_name($command, ':schedid', $_POST['SchedID']);

    $r = oci_execute($command);
    if (!$r) {
        $exception = oci_error($command);
        echo '<script>ERROR: ' . $exception['code'] . ' - ' . $exception['message'] . '</script>';
        return;
    }

    $result = "";
    while (($row = oci_fetch_array($command, OCI_ASSOC + OCI_RETURN_NULLS)) != false) {
        $row['LASTNAME'];
        $row['FIRSTNAME'];
        $row['GENDER'];
        $row['BIRTHYEAR'];
        $row['ID'];
        $row['PHONE'];
        $row['TIME'];
        $row['NO'];
        $row['STATUS'];
        $row['IMAGE'];
    }

    echo $result;
}
