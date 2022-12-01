<?php
error_reporting(E_ERROR | E_PARSE);
define('browsable', true);

include("DatabaseConnection.php");

$sql = "begin ACC_CREATE_ORG(:num, :city); end;";
$command = oci_parse($connection, $sql);
oci_bind_by_name($command, ':num', $_POST['num']);
oci_bind_by_name($command, ':city', $_POST['city']);
$r = oci_execute($command);                                     //execute

if (!$r) {                                                      //if false (error)
    $exception = oci_error($command);                           //catch exception
    echo 'ERROR: ' . $exception['code'] . ' - ' . $exception['message'];
    return;
} 
else {
    echo 'Form Submited!';
    return;
}

// }