<?php
include("object_Account.php");
include("object_Citizen.php");
session_start();

$method = $_SESSION['method'];

$method();

function UpdateAccount()
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

    $sql = "begin CITIZEN_UPDATE_RECORD(:oldid, :id, :lastname, :firstname, :birthday, :gender, "
        . ":hometown, :province, :district, :town, :street, :phone, :oldphone, :email); end;";

    $command = oci_parse($connection, $sql);
    oci_bind_by_name($command, ':oldid', $_SESSION['CitizenProfile']->get_id());
    oci_bind_by_name($command, ':id', $_SESSION['CitizenProfile']->get_id());
    oci_bind_by_name($command, ':lastname', $_SESSION['CitizenProfile']->get_lastname());
    oci_bind_by_name($command, ':firstname', $_SESSION['CitizenProfile']->get_firstname());
    oci_bind_by_name($command, ':birthday', $_SESSION['CitizenProfile']->get_birthday());
    oci_bind_by_name($command, ':gender', $_SESSION['CitizenProfile']->get_gender());
    oci_bind_by_name($command, ':hometown', $_SESSION['CitizenProfile']->get_hometown());
    oci_bind_by_name($command, ':province', $_SESSION['CitizenProfile']->get_province());
    oci_bind_by_name($command, ':district', $_SESSION['CitizenProfile']->get_district());
    oci_bind_by_name($command, ':town', $_SESSION['CitizenProfile']->get_town());
    oci_bind_by_name($command, ':street', $_SESSION['CitizenProfile']->get_street());
    oci_bind_by_name($command, ':phone', $_POST['phone']);
    oci_bind_by_name($command, ':oldphone', $_SESSION['CitizenProfile']->get_phone());
    oci_bind_by_name($command, ':email', $_SESSION['CitizenProfile']->get_email());

    $r = oci_execute($command);
    if (!$r) {
        $exception = oci_error($command);
        echo 'ERROR: ' . $exception['code'] . ' - ' . $exception['message'];
        return;
    }
}
