<?php
error_reporting(E_ERROR | E_PARSE);
include("object_Citizen.php");
session_start();
echo 'php in';
// if (isset($_POST['method'])) {
//     $method = $_POST['method'];
//     $method();
// } else
//     header("location:javascript://history.go(-1)");

// function SubmitMedicalForm()
// {
    include("DatabaseConnection.php");    
    
    $sql = "alter session set NLS_DATE_FORMAT='YYYY-MM-DD'";
    $command = oci_parse($connection, $sql);
    $r = oci_execute($command, OCI_NO_AUTO_COMMIT);
    if (!$r) {
        $exception = oci_error($command);
        echo 'ERROR: ' . $exception['code'] . ' - ' . $exception['message'];
        return;
    }

    $sql = "begin FORM_INSERT_RECORD(:citizenid, :filleddate, :choice); end;"; 
    $command = oci_parse($connection, $sql);                   
    oci_bind_by_name($command, ':citizenid', $_SESSION['CitizenProfile']->get_id());
    oci_bind_by_name($command, ':filleddate', $_POST['filleddate']);
    oci_bind_by_name($command, ':choice', $_POST['choice']);
    $r = oci_execute($command);                                     //execute
    echo $sql;

    if (!$r) {                                                      //if false (error)
        $exception = oci_error($command);                           //catch exception
        echo 'ERROR: ' . $exception['code'] . ' - ' . $exception['message'];
        return;
    } 
 
    echo 'Form Submited!';
// }