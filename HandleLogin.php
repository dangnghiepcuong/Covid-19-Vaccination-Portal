<?php
session_start();

include("DatabaseConnection.php");

$stmt = $dbh->prepare("select * from ACCOUNT where Username = ?");
$row = $stmt->execute([$_POST['username']]);

$row = oci_fetch_array($command, OCI_ASSOC + OCI_RETURN_NULLS);
if ($row == false) {
    echo -1;
} else {
    if ($_POST['password'] == $row['PASSWORD']) {
        $_SESSION['username'] = $_POST['username'];;
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
