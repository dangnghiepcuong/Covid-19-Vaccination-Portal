<?php
header('Location: headerCitizen.php');
// HandleLogin();

function HandleLogin()
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    include("DatabaseConnection.php");

    $sql = "select * from ACCOUNT where username='" . $username . "'";
    $command = oci_parse($connection, $sql);
    oci_execute($command);

    $row = oci_fetch_array($command, OCI_ASSOC + OCI_RETURN_NULLS);
    if ($row == false) {
        // $_SESSION['message'] = 'Thông tin tài khoản sai!';
        // header('Location: index.php');
        // echo '<script>alert("Thông tin tài khoản sai!")</script>';
        echo 'Sai!';
    } else {
        if ($password == $row['PASSWORD'])
            switch ($row['ROLE']) {
                case 0:
                    // header('Location: index.php');
                    // echo '<script>alert("Trang chu")</script>';
                    echo 0;
                    break;
                case 1:
                    // setcookie('username', $username);
                    // header('Location: HomePageORG.php');
                    // echo '<script>alert("Trang dvtc")</script>';
                    echo 1;
                    break;
                case 2:
                    // setcookie('username', $username);
                    // header('Location: HomePageCitizen.php');
                    // echo '<script>alert("Trang cong dan")</script>';
                    // echo 2;
                    break;
                default:
                    // header('Location: index.php');
                    // echo 'Trang chu';
                    break;
            }
        else {
            // $_SESSION['message'] = 'Thông tin tài khoản sai!';
            // header('Location:index.php');
            echo 'Thông tin tài khoản sai!';
            // echo '<script>alert("Thông tin tài khoản sai!")</script>';
        }
    }
}

