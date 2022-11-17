<?php
HandleLogin();

function HandleLogin()
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    setcookie('username',$username);
    
    include("DatabaseConnection.php");

    $sql = "select * from ACCOUNT where username='" . $username . "'";
    $command = oci_parse($connection, $sql);
    oci_execute($command);

    $row = oci_fetch_array($command, OCI_ASSOC + OCI_RETURN_NULLS);
    if ($row == false) {
        // $_SESSION['message'] = 'Thông tin tài khoản sai!';
        echo -1;
    } else {
        if ($password == $row['PASSWORD'])
            {
                switch ($row['ROLE']) {
                    case 0:
                        echo 0;
                        break;
                    case 1:
                        echo 1;
                        break;
                    case 2:
                        echo 2;
                        break;
                    default:
                        echo -1;
                        break;
                }
    
            } else {
            echo -1;
        }
    }
}

