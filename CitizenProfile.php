<!DOCTYPE html>
<?php
include("object_Citizen.php");
session_start();
if (isset($_SESSION['UserRole']) == false)
    header('Location: index.php');
$citizen = $_SESSION['CitizenProfile'];
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/CitizenProfile.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/CitizenProfile.js"></script>
    <script src="js/WebElemnts.js.js"></script>
    <title>Thông tin công dân</title>
</head>

<body>
    <!-- HEADER -->
    <?php
    include("headerCitizen.php");
    ?>
    <!-- END HEADER -->

    <!-- NAV FUNCTION -->
    <?php
    include("function-navigation-bar.php");
    ?>
    <!-- END NAV FUNCTION -->
    <br>

    <div class="holder-function-panel">
        <!-- MENU -->
        <?php
        include("function-menu.php");
        ?>
        <!-- END MENU -->

        <!-- FUNCTIONAL PANEL -->
        <div class="function-panel">
            <br>
            <div class="panel-target-citizen">
                <p>Đối tượng: </p>
                <select name="" id="">
                    <option value=""><?php echo $citizen->get_lastname() . ' ' . $citizen->get_firstname() ?></option>
                    <!-- <option value="">Lê Hoàng</option> -->
                    <!-- <option value="">Lê Duyên</option> -->
                </select>
            </div>
            <br>

            <div class="info-panel" id="info-panel">
                <div class="row1">
                    <div>
                        <label for="lastname">Họ và tên đệm<span>(*)</span></label><br>
                        <?php echo '<input type="text" name="lastname" required value="' . $citizen->get_lastname() . '">' ?><br>
                        <hr>
                    </div>

                    <div>
                        <label for="firstname">Tên <span>(*)</span></label><br>
                        <?php echo '<input type="text" name="firstname" required value="' . $citizen->get_firstname() . '">' ?><br>
                        <hr>
                    </div>

                    <div>
                        <label for="gender">Giới tính <span>(*)</span></label><br>
                        <select name="gender" id="select-gender">
                            <?php
                            switch ($citizen->get_gender()) {
                                case "Nữ":
                                    echo '
                                    <option value="0">Nữ</option>
                                    <option value="1">Nam</option>
                                    <option value="2">Khác</option>';
                                    break;

                                case "Nam":
                                    echo '
                                    <option value="1">Nam</option>
                                    <option value="0">Nữ</option>
                                    <option value="2">Khác</option>';
                                    break;

                                case "Khác":
                                    echo '
                                    <option value="2">Khác</option>
                                    <option value="0">Nữ</option>
                                    <option value="1">Nam</option>';
                                    break;
                            }
                            ?>
                        </select>
                        <hr>
                    </div>
                </div>

                <div class="row2">
                    <div>
                        <label for="id">Mã định danh <span>(*)</span></label><br>
                        <?php echo '<input type="text" name="id" required value="' . $citizen->get_ID() . '">' ?><br>
                        <hr>
                    </div>

                    <div>
                        <label for="birthday">Ngày tháng năm sinh <span>(*)</span></label><br>
                        <?php echo '<input type="date" name="birthday" required value="' . $citizen->get_birthday() . '">' ?><br>
                        <hr>
                    </div>

                    <div>
                        <label for="hometown">Quê quán <span>(*)</span></label><br>
                        <select name="hometown" id="select-hometown">
                            <?php
                            echo '<option value="">' . $citizen->get_provincename() . '</option>';
                            $str = file_get_contents('local.json');
                            $local = json_decode($str, true); // decode the JSON into an associative array
                            for ($i = 0; $i < 63; $i++) {
                                if ($local[$i]['name'] != $citizen->get_provincename())
                                    echo '<option value="' . $i . '">' . $local[$i]['name'] . '</option>';
                            }
                            ?>
                        </select>
                        <hr>
                    </div>
                </div>

                <p>Địa chỉ thường trú:</p>

                <div class="row3">
                    <div>
                        <label for="city">Tỉnh/Thành phố <span>(*)</span></label><br>
                        <select name="city" id="select-province">
                            <?php
                            echo '<option value="">' . $citizen->get_provincename() . '</option>';
                            $str = file_get_contents('local.json');
                            $local = json_decode($str, true); // decode the JSON into an associative array
                            $provincecode = -1;
                            for ($i = 0; $i < 63; $i++) {
                                if ($local[$i]['name'] != $citizen->get_provincename())
                                    echo '<option value="' . $i . '">' . $local[$i]['name'] . '</option>';
                                else
                                    $provincecode = $i;
                            }
                            echo '<script>$("#select-province option:first-child").val(' . $provincecode . ')</script>';
                            ?>
                        </select>
                        <hr>
                    </div>

                    <div>
                        <label for="district">Quận/Huyện <span>(*)</span></label><br>
                        <select name="district" id="select-district">
                            <?php
                            echo '<option value="">' . $citizen->get_districtname() . '</option>';
                            $districtcode = -1;
                            $i = 0;
                            while (isset($local[$provincecode]['districts'][$i])) {
                                if ($local[$provincecode]['districts'][$i]['name'] != $citizen->get_districtname())
                                    echo '<option value="' . $i . '">' . $local[$provincecode]['districts'][$i]['name'] . '</option>';
                                else
                                    $districtcode = $i;
                                $i++;
                            }
                            echo '<script>$("#select-district option:first-child").val(' . $districtcode . ')</script>';
                            ?>
                        </select>
                        <hr>
                    </div>

                    <div>
                        <label for="town">Xã/Phường/Thị trấn <span>(*)</span></label><br>
                        <select name="town" id="select-town">
                            <?php
                            echo '<option value="">' . $citizen->get_townname() . '</option>';
                            $towncode = -1;
                            $i = 0;
                            while (isset($local[$provincecode]['districts'][$districtcode]['wards'][$i])) {
                                if ($local[$provincecode]['districts'][$districtcode]['wards'][$i]['name'] != $citizen->get_townname())
                                    echo '<option value="' . $i . '">' . $local[$provincecode]['districts'][$districtcode]['wards'][$i]['name'] . '</option>';
                                else
                                    $towncode = $i;
                                $i++;
                            }
                            echo '<script>$("#select-town option:first-child").val(' . $towncode . ')</script>';
                            ?>
                        </select>
                        <hr>
                    </div>
                </div>

                <div class="row4">
                    <label for="street">Số nhà, tên đường, khu phố/ấp <span>(*)</span></label><br>
                    <?php echo '<input type="text" name="street" required value="' . $citizen->get_street() . '">' ?><br>
                    <hr>
                </div>

                <div class="row5">
                    <label for="email">Email</label><br>
                    <?php echo ' <input type="text" name="email" required value="' . $citizen->get_email() . '">' ?><br>
                    <hr>
                </div>

                <div class="group_btn">
                    <button class="btn-medium-filled" id="update-profile">Cập nhật</button>
                    <button class="btn-medium-bordered" id="cancel-update-profile">Hủy bỏ</button>
                </div>
            </div>
        </div>
    </div>

    <br>
    <?php
    include("footer.php");
    include("WebElements.html");
    ?>

    <?php
    // echo '<script>alert("' . $citizen->get_birthday() . '")</script>'; 
    ?>
</body>

</html>