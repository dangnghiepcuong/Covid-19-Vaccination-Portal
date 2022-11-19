<?php

$method = $_POST['method'];

$method();

function CheckExist(){
    include("DatabaseConnection.php");

    $stmt = $dbh->prepare("select * from ACCOUNT where Username = ?");
    $row = $stmt->execute([ $_POST['username']]);
    
    $row = oci_fetch_array($command, OCI_ASSOC + OCI_RETURN_NULLS);
    if ($row != false) {
        echo 1;
    }
}

function RegisterAccount(){
    include("DatabaseConnection.php");

    $stmt = $dbh->prepare("call ");
    $command = oci_parse($connection, $sql);
    oci_execute($command);


}

