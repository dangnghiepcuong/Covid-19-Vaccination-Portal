<?php
$username = $_POST['account'];
$password = $_POST['password'];

session_start();

include("DatabaseConnection.php");

$sql = "select * from ACCOUNT where username='" . $username . "'";
$command = oci_parse($connection, $sql);
oci_execute($command);

$row = oci_fetch_array($command, OCI_ASSOC + OCI_RETURN_NULLS);
if ($row == false) {
    echo -1;
} else {
    if ($password == $row['PASSWORD']) {
        $_SESSION['username'] = $username;
        switch ($row['ROLE']) {
            case 0:
                $_SESSION['UserRole'] = 0;
                break;
            case 1:
                $_SESSION['UserRole'] = 1;
                break;
            case 2:
                $_SESSION['UserRole'] = 2;
                break;
            default:
                $_SESSION['UserRole'] = -1;
                break;
        }
    } else {
        $_SESSION['UserRole'] = -1;
    }
}
