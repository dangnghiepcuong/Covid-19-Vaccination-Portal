<?php

$method = $_POST['method'];

$method();

function CheckExist(){
    include("DatabaseConnection.php");

    $sql = "select * from ACCOUNT where Username = '" . $_POST['username'] ."'";
    $command = oci_parse($connection, $sql);
    oci_execute($command);
    
    $row = oci_fetch_array($command, OCI_ASSOC + OCI_RETURN_NULLS);
    if ($row != false) {
        echo 1;
    }
}

