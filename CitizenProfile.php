<!DOCTYPE html>
<html lang="en">
<?php
include("object_Citizen.php");
session_start();
$citizen = $_SESSION['citizen'];
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/btn.css">
    <link rel="stylesheet" href="css/CitizenProfile.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/CitizenProfile.js"></script>
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

            <div class="filter-panel">
                <div class="row1">
                    <div>
                        <label for="fisrt_mid_name">Họ và tên đệm<span>(*)</span></label><br>
                        <?php echo '<input type="text" name="fisrt_mid_name" required value="'. $citizen->get_lastname().'">' ?><br>
                        <hr>
                    </div>

                    <div>
                        <label for="fisrt_mid_name">Tên <span>(*)</span></label><br>
                        <?php echo '<input type="text" name="fisrt_mid_name" required value="'.$citizen->get_firstname().'">'?><br>
                        <hr>
                    </div>

                    <div>
                        <label for="sex">Giới tính <span>(*)</span></label><br>
                        <select name="sex" id="">
                            <?php
                            switch ($citizen->get_gender()) {
                                case 0:
                                    echo '
                                    <option value="0">Nữ</option>
                                    <option value="1">Nam</option>
                                    <option value="2">Khác</option>';
                                    break;
                                    
                                case 1:
                                    echo '
                                    <option value="1">Nam</option>
                                    <option value="0">Nữ</option>
                                    <option value="2">Khác</option>';
                                    break;

                                case 2:
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
                        <?php echo'<input type="text" name="id" required value="'.$citizen->get_ID().'">' ?><br>
                        <hr>
                    </div>

                    <div>
                        <label for="birthday">Ngày tháng năm sinh <span>(*)</span></label><br>
                        <?php echo'<input type="date" name="birthday" required value="'.$citizen->get_birthday().'">' ?><br>
                        <hr>
                    </div>

                    <div>
                        <label for="hometown">Quê quán <span>(*)</span></label><br>
                        <select name="hometown" id="">
                            <option value="">TP. Hồ Chí Minh</option>
                            <option value="">Đồng Nai</option>
                        </select>
                        <hr>
                    </div>
                </div>

                <p>Địa chỉ thường trú:</p>

                <div class="row3">
                    <div>
                        <label for="city">Tỉnh/Thành phố <span>(*)</span></label><br>
                        <select name="city" id="">
                            <option value="">TP.Hồ Chí Minh</option>
                            <option value="">Đồng Nai</option>
                        </select>
                        <hr>
                    </div>

                    <div>
                        <label for="district">Quận/Huyện <span>(*)</span></label><br>
                        <select name="district" id="">
                            <option value=""></option>
                        </select>
                        <hr>
                    </div>

                    <div>
                        <label for="town">Xã/Phường/Thị trấn <span>(*)</span></label><br>
                        <select name="town" id="">
                            <option value=""></option>
                        </select>
                        <hr>
                    </div>
                </div>

                <div class="row4">
                    <label for="street">Số nhà, tên đường, khu phố/ấp <span>(*)</span></label><br>
                    <input type="text" name="street" required><br>
                    <hr>
                </div>

                <div class="row5">
                    <label for="email">Email <span>(*)</span></label><br>
                    <input type="text" name="email" required><br>
                    <hr>
                </div>

                <div class="row6">
                    <div class="group_button">
                        <button class="btn-long">Cập nhật</button>
                        <button class="btn-long-bordered" id="close_reg_person_profile">Hủy bỏ</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <?php
    include("footer.php")
    ?>

    <!-- FADED COVER -->
    <div class="gradient-bg-faded" id="gradient-bg-faded"></div>

    <?php //echo '<script>alert("' . $citizen->get_ID() . '")</script>'; ?>
</body>

</html>