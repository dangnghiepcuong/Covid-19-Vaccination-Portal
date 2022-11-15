<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
include("DatabaseConnection.php");

$sql = "select * from ACCOUNT where username='" . $username . "'";
$command = oci_parse($connection, $sql);
oci_execute($command);

$row = oci_fetch_array($command, OCI_ASSOC + OCI_RETURN_NULLS);
if ($row == false) {
    $_SESSION['message'] = 'Thông tin tài khoản sai!';
    header('Location: index.php');
} else {
    if ($password == $row['PASSWORD'])
        switch ($row['ROLE']) {
            case 0:
                header('Location: index.php');
                break;
            case 1:
                header('Location: HomePageORG.php');
                break;
            case 2:
                setcookie('username',$username);
                header('Location: HomePageCitizen.php');
                break;
            default:
                header('Location: index.php');
                break;
        }
    else {
        $_SESSION['message'] = 'Thông tin tài khoản sai!';
        header('Location:index.php');
    }
}
?>