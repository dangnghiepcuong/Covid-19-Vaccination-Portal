<?php
session_start();

$method = $_POST['method'];

$method();

function CheckExist()
{
    include("DatabaseConnection.php");

    $sql = "select * from ACCOUNT where Username = :username";
    $command = oci_connect($connection, $sql);
    oci_bind_by_name($command, ':username', $_POST['username']);

    $row = oci_fetch_array($command, OCI_ASSOC + OCI_RETURN_NULLS);
    if ($row == true)
        echo 'AccountExisted';
}

function RegisterAccount()
{
    include("DatabaseConnection.php");
    $sql = "begin ACC_INSERT_RECORD(:username, :password, 2, 1); end;";
    $command = oci_parse($connection, $sql);
    oci_bind_by_name($command, ':username', $_POST['username']);
    oci_bind_by_name($command, ':password', $_POST['password']);

    oci_execute($command);
    echo 'Account Created!';
}

function RegisterProfile()
{
    include("DatabaseConnection.php");
    
    $sql = "alter session set NLS_DATE_FORMAT='YYYY-MM-DD'";
    $command = oci_parse($connection, $sql);
    oci_execute($command, OCI_NO_AUTO_COMMIT);
    
    $sql = "begin CITIZEN_INSERT_RECORD(:id, :lastname, :firstname, :birthday, :gender, " 
    . ":hometown, :province, :district, :town, :street, :phone, :email); end;";
    
    $command = oci_parse($connection, $sql);
    oci_bind_by_name($command, ':id', $_POST['id']);
    oci_bind_by_name($command, ':lastname', $_POST['lastname']);
    oci_bind_by_name($command, ':firstname', $_POST['firstname']);
    oci_bind_by_name($command, ':birthday', $_POST['birthday']);
    oci_bind_by_name($command, ':gender', $_POST['gender']);
    oci_bind_by_name($command, ':hometown', $_POST['hometown']);
    oci_bind_by_name($command, ':province', $_POST['province']);
    oci_bind_by_name($command, ':district', $_POST['district']);
    oci_bind_by_name($command, ':town', $_POST['town']);
    oci_bind_by_name($command, ':street', $_POST['street']);
    oci_bind_by_name($command, ':phone', $_POST['username']);
    oci_bind_by_name($command, ':email', $_POST['email']);

    oci_execute($command);
    // oci_commit($connection);

    echo 'Profile Created!';
}
