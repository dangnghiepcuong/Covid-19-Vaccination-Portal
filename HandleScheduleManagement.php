<?php
error_reporting(E_ERROR | E_PARSE);
define('browsable', true);

include("object_Account.php");
include("object_Register.php");
session_start();

if (isset($_POST['method'])) {
    $method = $_POST['method'];
    if ($method == 'LoadSchedule')
        $method($_POST['orgid']);
    else
        $method();
} else
    header("location:javascript://history.go(-1)");

function LoadScheduleRegistration()
{
    include("DatabaseConnection.php");

    $sql = "select LastName, FirstName, Gender, BirthYear, ID, Phone, Time, NO, Status, Image from (
        (select Time, NO, Status, Image, CitizenID from REGISTER where SchedID = :schedid and Status < 3) REG
        inner join
        (select LastName, FirstName, Gender, EXTRACT(year from Birthday) as BirthYear, ID, Phone from CITIZEN) CITIZEN
        on REG.CitizenID = CITIZEN.ID
    )";

    $command = oci_parse($connection, $sql);
    oci_bind_by_name($command, ':schedid', $_POST['SchedID']);

    $r = oci_execute($command);
    if (!$r) {
        $exception = oci_error($command);
        echo '<script>ERROR: ' . $exception['code'] . ' - ' . $exception['message'] . '</script>';
        return;
    }

    $SchedInfo = $_POST['SchedInfo'];

    $result = "";
    while (($row = oci_fetch_array($command, OCI_ASSOC + OCI_RETURN_NULLS)) != false) {
        $reg = new Register();
        $reg->get_citizen()->set_lastname($row['LASTNAME']);
        $reg->get_citizen()->set_firstname($row['FIRSTNAME']);
        $reg->get_citizen()->set_gender($row['GENDER']);
        $reg->get_citizen()->set_birthday($row['BIRTHYEAR']);
        $reg->get_citizen()->set_id($row['ID']);
        $reg->get_citizen()->set_phone($row['PHONE']);
        $reg->set_time($row['TIME']);
        $reg->set_no($row['NO']);
        $reg->set_status($row['STATUS']);
        $reg->set_image($row['IMAGE']);

        if ($row['STATUS']  < 2)
        {
            $interaction = '<select class="select-status" name="">';
            if ($row['STATUS'] == 0)
                $interaction .= '<option value="1">Điểm danh</option><option value="3">Đã hủy</option>';
            else
                $interaction .= '<option value="2">Đã tiêm</option><option value="3">Đã hủy</option>';
            $interaction .= '</select><br><button class="btn-medium-filled btn-update-registration">Cập nhật</button>';
        }
        else // == 2   
            $interaction = '';

        $result .=
            '<div class="registration" id="'.$_POST['SchedID'].'">
                <p class="obj-name" id="'.$reg->get_citizen()->get_id().'">' . $reg->get_citizen()->get_fullname() . ' - ' . $reg->get_citizen()->get_gender() . ' - ' . $reg->get_citizen()->get_birthday() . ' (ID:' . $reg->get_citizen()->get_id() . ')</p>
                <div class="hoder-obj-attr">
                    <div class="obj-attr">
                        <p class="attr-sdt">SĐT: ' . $reg->get_citizen()->get_phone() . '</p>
                        <p class="attr-date">' . $SchedInfo . '</p>
                        <div class="attr-detail">
                            <p>Buổi: ' . $reg->get_time() . '</p>
                            <p>STT: ' . $reg->get_no() . '</p>
                            <p>Tình trạng: ' . $reg->get_status() . ' </p>
                        </div>
                    </div>
                    <div class="interactive-area">
                        ' . $interaction . '
                    </div>
                </div>
            </div>';
    }

    echo $result;
}

function UpdateRegistrationStatus(){
    include("DatabaseConnection.php");

    $sql = "begin REG_UPDATE_STATUS(:citizenid, :schedid, :status); end;";

    $command = oci_parse($connection, $sql);
    oci_bind_by_name($command, ':citizenid', $_POST['citizenid']);
    oci_bind_by_name($command, ':schedid', $_POST['SchedID']);
    oci_bind_by_name($command, ':status', $_POST['status']);

    $r = oci_execute($command);
    if (!$r) {
        $exception = oci_error($command);
        echo '<script>ERROR: ' . $exception['code'] . ' - ' . $exception['message'] . '</script>';
        return;
    }

    echo $_POST['status'];
}