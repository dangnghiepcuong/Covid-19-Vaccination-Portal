<?php
    $connection = oci_connect('covid19_vaccination_infogate', 'covid19_vaccination_infogate', 'localhost/orcl');

    if($connection)
    {
    }
    else
    {
        echo "<script type='text/javascript'>alert('Connection Failed!');</script>";
    }
?>