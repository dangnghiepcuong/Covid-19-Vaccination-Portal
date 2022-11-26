<?php

include("DatabaseConnection.php");
$sql = "select InjNO, DoseType, OnDate, VaccineID, Name from
(select * from INJECTION where CitizenID = :citizenid) INJ
join
(
    select SCHED.ID  as ID, OnDate, VaccineID, Name  from
    (select ID, OrgID, OnDate, VaccineID, Serial from SCHEDULE) SCHED
    join
    (select ID, Name from ORGANIZATION) ORG
    on SCHED.OrgID = ORG.ID
) SCHED_ORG
on INJ.SchedID = SCHED_ORG.ID";
$command = oci_parse($connection, $sql);
oci_bind_by_name($command, ':citizenid', $citizen->get_id());
$r = oci_execute($command);
if (!$r) {
    $exception = oci_error($command);
    echo 'ERROR: ' . $exception['code'] . ' - ' . $exception['message'];
    return;
}

$row = oci_fetch_array($command, OCI_ASSOC + OCI_RETURN_NULLS);
$Cinjection->set_injno($row['INJNO']);
$Cvaccine->set_name($row['VACCINEID']);
$Corg->set_name($row['NAME']);
$CSched->set_ondate($row['ONDATE']);
echo $CSched->get_ondate();

echo $Cinjection->get_injno();
echo $Cvaccine->get_name();
echo $Corg->get_name();

while (($row = oci_fetch_array($command, OCI_ASSOC + OCI_RETURN_NULLS)) != false) {
    $result .= '';
}

switch ($Cinjection->get_injno()) {
    case 0:
        echo
        '<p class="status">Chưa tiêm đủ liều cơ bản vaccine Covid-19</p>';
        break;
    case 1:
        echo
        '<p class="status">Chưa tiêm đủ liều cơ bản vaccine Covid-19</p>
        <div class="injection0">
        <p>Mũi 1 (Cơ bản)</p>
        <p>Vaccine: ' . $Cvaccine->get_name() . '</p>
        <p>Đơn vị tiêm chủng: ' . $Corg->get_name() . '</p>
        <p>Lịch tiêm ngày: ' . $CSched->get_ondate() . '</p>
        </div>
        ';
        break;
    case 2:
        break;
    case 3:
        break;
}

