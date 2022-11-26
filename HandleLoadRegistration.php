<?php
include("object_Register.php");
include("DatabaseConnection.php");
session_start();

$sql = "select Name, ProvinceName, DistrictName, TownName, Street, TO_CHAR(OnDate, 'YYYY-MM-DD') OnDate, Time, NO, VaccineID, Serial, Status, DoseType, Image from (
            (select SchedID, Time, NO, Status, REG.DoseType, OrgID, OnDate, VaccineID, Serial, Image from (
                (select ID, SchedID, NO, Time, Status, DoseType, Image from REGISTER where CitizenID = :citizenid) REG
                inner join
                (select ID, OrgID, OnDate, VaccineID, Serial from SCHEDULE) SCHED
                on
                REG.SchedID = SCHED.ID)
            ) REG_SCHED
            inner join
            (select ID, Name, ProvinceName, DistrictName, TownName, Street from ORGANIZATION) ORG
            on REG_SCHED.OrgID = ORG.ID
        )";
$command = oci_parse($connection, $sql);
oci_bind_by_name($command, ':citizenid', $_SESSION['CitizenProfile']->get_id());
$r = oci_execute($command);
if (!$r) {
    $exception = oci_error($command);
    echo 'ERROR: ' . $exception['code'] . ' - ' . $exception['message'];
    return;
}

$Cregistration = new Register();

$result = "";
while (($row = oci_fetch_array($command, OCI_ASSOC + OCI_RETURN_NULLS)) != false) {
    $Cregistration->get_sched()->get_org()->set_name($row['NAME']);
    $Cregistration->get_sched()->get_org()->set_provincename($row['PROVINCENAME']);
    $Cregistration->get_sched()->get_org()->set_districtname($row['DISTRICTNAME']);
    $Cregistration->get_sched()->get_org()->set_townname($row['TOWNNAME']);
    $Cregistration->get_sched()->get_org()->set_street($row['STREET']);
    $Cregistration->get_sched()->set_ondate($row['ONDATE']);
    $Cregistration->set_time($row['TIME']);
    $Cregistration->set_NO($row['NO']);
    $Cregistration->get_sched()->set_vaccine($row['VACCINEID']);
    $Cregistration->get_sched()->set_serial($row['SERIAL']);
    $Cregistration->set_status($row['STATUS']);
    $Cregistration->set_dosetype($row['DOSETYPE']);
    $Cregistration->set_image($row['IMAGE']);

    $result .= '
    <div class="registration">
        <p class="obj-org-name">' . $Cregistration->get_sched()->get_org()->get_name() . '</p>
        <div class="holder-obj-attr">
                <div class="obj-attr">
                    <p class="attr-address">Đ/c: '
        . $Cregistration->get_sched()->get_org()->get_provincename() . ', '
        . $Cregistration->get_sched()->get_org()->get_districtname() . ', '
        . $Cregistration->get_sched()->get_org()->get_townname()
        . '</p>
                    <p class="attr-date-time-no">Lịch tiêm ngày: ' . $Cregistration->get_sched()->get_ondate()
        . '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Buổi ' . $Cregistration->get_time()
        . '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp STT: ' . $Cregistration->get_no() . '</p>
                    <p class="attr-vaccine-serial">Vaccine: '
        . $Cregistration->get_sched()->get_vaccine() . ' - ' . $Cregistration->get_sched()->get_serial()
        . '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Tình trạng: ' . $Cregistration->get_status() . '</p>
                </div>

                <div class="interactive-area">
                    <button class="btn-medium-bordered btn-cancel">Hủy</button>
                </div>
            </div>
    </div>
    ';

    echo $result;
}
