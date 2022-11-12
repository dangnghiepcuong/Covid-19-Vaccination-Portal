<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<?php
$username = $_POST["username"];
$password = $_POST["password"];

include("DatabaseConnection.php");

$sql = "select * from ACCOUNT where username='" . $username . "'";
$command = oci_parse($connection, $sql);
oci_execute($command);

$row = oci_fetch_array($command, OCI_ASSOC + OCI_RETURN_NULLS);
if ($row == false) {
    echo '<form method="POST" action="index.php" id="login-failed">
        <input name="message" value="Thông tin tài khoản sai!">
        </form>
        <style> input { display: none; }</style>
        <script>$("#login-failed").submit();</script>';
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
                header('Location: HomePageCitizen.php');
                break;
            default:
                header('Location: index.php');
                break;
        }
    else {
        header('Location:index.php');
    }
}
