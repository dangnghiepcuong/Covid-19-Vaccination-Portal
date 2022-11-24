<?php
include("object_Account.php");
error_reporting(0);
session_start();

include("DatabaseConnection.php");                           //Connection String

$sql = "select * from ACCOUNT where Username = :username"; //SQL string
$command = oci_parse($connection, $sql);                    //Prepare statement before execute
oci_bind_by_name($command, ':username', $_POST['username']);    //bind parameters
$r = oci_execute($command);                                     //execute
if (!$r) {                                                      //if false (error)
    $exception = oci_error($command);                           //catch exception
    echo 'ERROR: ' . $exception['code'] . ' - ' . $exception['message'];
    return;
}

$row = oci_fetch_array($command, OCI_ASSOC + OCI_RETURN_NULLS);
if ($row == false) {
    echo 'NoAccount';    // no account existed
} else {
    if ($_POST['password'] == $row['PASSWORD']) {   // account existed, check password
        $_SESSION['AccountInfo'] = new Account();   //password is correct
        $_SESSION['AccountInfo']->set_username($row['USERNAME']);
        $_SESSION['AccountInfo']->set_password($row['PASSWORD']);
        $_SESSION['AccountInfo']->set_role($row['ROLE']);

        $sql = "select * from CITIZEN where Phone = :phone";    //check exist profile
        $command = oci_parse($connection, $sql);
        oci_bind_by_name($command, ':phone', $_POST['username']);
        $r = oci_execute($command);
        if (!$r) {
            $exception = oci_error($command);
            echo 'ERROR: ' . $exception['code'] . ' - ' . $exception['message'];
            return;
        }

        $row2 = oci_fetch_array($command, OCI_BOTH | OCI_RETURN_NULLS);
        if ($row2 == false) {
            echo 'NoProfile';   //no profile existed
            setcookie('username', $_POST['username']);
            return;
        }

        $_SESSION['username'] = $_POST['username'];
        

        // switch ($row['ROLE']) {
        //     case 0:
        //         $_SESSION['UserRole'] = 0;
        //         break;
        //     case 1:
        //         $_SESSION['UserRole'] = 1;
        //         break;
        //     case 2:
        //         $_SESSION['UserRole'] = 2;
        //         break;
        //     default:
        //         $_SESSION['UserRole'] = -1;
        //         break;
        // }
    } else {    //wrong password;
        echo 'incorrect password';
    }
}
