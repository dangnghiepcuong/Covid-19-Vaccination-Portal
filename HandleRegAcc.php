<?php
session_start();

$method = $_POST['method'];

$method();

function CheckExist(){
    include("DatabaseConnection.php");

    $sql = "select * from ACCOUNT where Username = :username";
    $command = oci_connect($connection, $sql);
    oci_bind_by_name($command, ':username', $_POST['username']);
    
    $row = oci_fetch_array($command, OCI_ASSOC + OCI_RETURN_NULLS);
    if ($row != false) {
        echo 1;
    }
}

function DatabaseConnection(){
    include("DatabaseConnection.php");
    $_SESSION['connection'] = $connection;
}

function RegisterAccount(){
    include("DatabaseConnection.php");

    $sql = "begin ACC_INSERT_RECORD(:username, :password, 2, 1) end;";
    $command = oci_parse($connection, $sql);
    oci_bind_by_name($command, ':username', $_POST['username']);
    oci_bind_by_name($command, ':password', $_POST['password']);

    oci_execute($command, OCI_NO_AUTO_COMMIT);

    
}

