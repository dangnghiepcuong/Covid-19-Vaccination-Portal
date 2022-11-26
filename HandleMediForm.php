<?php
include("object_Citizen.php");
error_reporting(0);
session_start();

include("DatabaseConnection.php");                           //Connection String

$sql = "begin FORM_INSERT_RECORD(:citizenid, TO_DATE(:filleddate,'yyyy-mm-dd'), :choice); end;"; //SQL string
$command = oci_parse($connection, $sql);                    //Prepare statement before execute
oci_bind_by_name($command, ':citizenid', $_SESSION['CitizenProfile']->get_id());
oci_bind_by_name($command, ':filleddate', $_POST['filleddate']);
oci_bind_by_name($command, ':choice', $_POST['choice']);    
$r = oci_execute($command);                                     //execute

if (!$r) {                                                      //if false (error)
    $exception = oci_error($command);                           //catch exception
    echo 'ERROR: ' . $exception['code'] . ' - ' . $exception['message'];
    return;
}

?>