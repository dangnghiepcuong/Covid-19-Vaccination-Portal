<?php
error_reporting(E_ERROR | E_PARSE);
include("object_Citizen.php");
session_start();

if (isset($_POST['method'])) {
    $citizen = $_SESSION['CitizenProfile'];
    $method = $_POST['method'];
    $method();
} else
    header('Location: index.php');

function CheckRegistration()
{
    global $citizen;
    include("DatabaseConnection.php");
    $sql = "begin REG_BEFORE_INSERT_RECORD(:citizenid, :checkbooster, :dosetype); end;";
    $command = oci_parse($connection, $sql);
    oci_bind_by_name($command, ':citizenid', $citizen->get_id());
    $_SESSION['checkbooster'] = 0;
    oci_bind_by_name($command, ':checkbooster', $_SESSION['checkbooster']);
    $_SESSION['dosetype'] = '';
    oci_bind_by_name($command, ':dosetype', $_SESSION['dosetype'], 10); //last parameter is max-lenght for parameter out

    $r = oci_execute($command);
    if (!$r) {
        $exception = oci_error($command);
        echo 'ERROR: ' . $exception['code'] . ' - ' . $exception['message'];
        return;
    }

    echo $_SESSION['checkbooster'];
    unset($_SESSION['checkbooster']);
}

function RegisterVaccination()
{
    global $citizen;
    include("DatabaseConnection.php");
    $sql = "begin REG_INSERT_RECORD(:citizenid, :schedid, :time, :dosetype); end;";
    $command = oci_parse($connection, $sql);
    oci_bind_by_name($command, ':citizenid', $citizen->get_id());
    oci_bind_by_name($command, ':schedid', $_POST['SchedID']);
    oci_bind_by_name($command, ':time', $_POST['time']);

    if ($_POST['dosetype'] == '')
        oci_bind_by_name($command, ':dosetype', $_SESSION['dosetype']);
    else
        oci_bind_by_name($command, ':dosetype', $_POST['dosetype']);

    $r = oci_execute($command);
    if (!$r) {
        $exception = oci_error($command);
        echo 'ERROR: ' . $exception['code'] . ' - ' . $exception['message'];
        return;
    }

    unset($_SESSION['dosetype']);
}