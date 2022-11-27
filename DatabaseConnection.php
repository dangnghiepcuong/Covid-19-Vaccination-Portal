<?php
error_reporting(E_ERROR | E_PARSE);
$connection = oci_connect('covid19_vaccination_infogate', 'covid19_vaccination_infogate', 'localhost/orcl', 'UTF8');
if (!$connection) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
    echo "<script>alert('!')</script>";
}
?>
