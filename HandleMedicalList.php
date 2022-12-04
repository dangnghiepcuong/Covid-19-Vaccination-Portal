<?php
error_reporting(E_ERROR | E_PARSE);
define('browsable', true);

include("object_Citizen.php");
session_start();

include("DatabaseConnection.php");

$sql = "select * from FORM where CitizenID = :citizenid and (to_date(CURRENT_DATE,'DD-MM-YYYY') - filleddate <= :formdate)"; //SQL string
$command = oci_parse($connection, $sql);                    //Prepare statement before execute
oci_bind_by_name($command, ':citizenid', $_SESSION['CitizenProfile']->get_id());
oci_bind_by_name($command, ':formdate', $_POST['formdate']);
$r = oci_execute($command);                                     //execute
if (!$r) {                                                      //if false (error)
    $exception = oci_error($command);                           //catch exception
    echo 'ERROR: ' . $exception['code'] . ' - ' . $exception['message'];
    return;
}
$row = oci_fetch_array($command, OCI_ASSOC + OCI_RETURN_NULLS);
if ($row == false) {
    echo 'NoForm';    // no account existed
    return;
}
echo 'NoForm';    // no account existed
    return;

// else {
//     while (($row = oci_fetch_array($command, OCI_ASSOC + OCI_RETURN_NULLS)) != false) {
    

       
//     } 

// }
