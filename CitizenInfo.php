<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cc.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Thông tin công dân</title>
</head>

<body>
    <!-- HEADER -->
    <div class="header">
        <div class="header-alignment">
            <a href="index.php">
                <img src="image/CVM-Logo.png" alt="CVM-Logo">
                <span class="title">CỔNG THÔNG TIN TIÊM CHỦNG COVID-19</span>
            </a>
            <div class="nav">
                <div>
                    <ul>
                        <li>
                            <a class="menuSection" href="#">Tin tức</a>
                        </li>

                        <li>
                            <a class="menuSection" href="#">Khai báo</a>
                        </li>

                        <li>
                            <a class="menuSection" href="#">Tiêm chủng</a>
                        </li>
                    </ul>
                </div>
                <a href="#"><img src="image/Avatar-Citizen.png" alt=""></a>

            </div>
        </div>
    </div>
    <!-- END HEADER -->

    <div class="nav-citizen-pages">
        <div class="nav-citizen-title">
            <a href="CitizenInfo.php">Thông tin công dân</a>
        </div>
        <div class="nav-directory">
            <div class="directory">
                <a href="index.php">Trang chủ</a>
            </div>

            <div class="dicrectory">&nbsp;/&nbsp;</div>

            <div class="directory">
                <a href="CitizenInfo.php">Công dân</a>
            </div>

            <div class="dicrectory">&nbsp;/&nbsp;</div>

            <div class="directory-selected">
                <a href="CitizenInfo.php">Thông tin công dân</a>
            </div>
        </div>
    </div>

    <div class="holder-function-panel">
        <div class="nav-panel">
            <br><br>
            <div class="title">Trang công dân</div>
            <div class="title-bg"></div>
            <br>
            <div class="menu">
                <ul class="list">
                    <br>
                    <li>Thông tin tài khoản</li><br>
                    <li>Thông tin công dân</li><br>
                    <li>Lịch đăng ký tiêm chủng</li><br>
                    <li>Chứng nhận tiêm chủng</li><br>
                    <li>Thêm người thân</li><br>
                </ul>
            </div>
        </div>

        <div class="function-panel">
            <br>
            <div class="panel-target-citizen">
                <p>Đối tượng: </p>
                <select name="" id="">
                    <option value="">Lê Hoàng Duyên</option>
                    <option value="">Lê Hoàng</option>
                    <option value="">Lê Duyên</option>
                </select>
            </div>
            <br>
            <div class="filter-panel">
                <div class="line-1">
                    <label for="last-name" class="cow-1">Họ và tên đệm <span class="note">(*)</label>
                    <label for="first-name" class="cow-2">Tên <span class="note">(*)</label>
                    <label for="gender" class="cow-3">Giới tính <span class="note">(*)</label>

                    <br>
                    <input type="text" value="Lê Hoàng">
                    <input type="text" value="Duyên">
                    <select name="" id="">
                        <option value="">Nam</option>
                        <option value="">Nữ</option>
                    </select>

                    <hr class="left-1">
                    <hr class="mid-1">
                    <hr class="right-1">
                </div>
                <br>
                <div class="line-2">
                    <label for="id" class="cow-1">Mã định danh <span class="note">(*)</label>
                    <!-- <label for="note">(*)</label> -->

                    <label for="birthday" class="cow-2">Ngày tháng năm sinh <span class="note">(*)</label>
                    <!-- <label for="note">(*)</label> -->

                    <label for="hometown" class="cow-3">Quê quán <span class="note">(*)</label>
                    <!-- <label for="note">(*)</label> -->

                    <br>
                    <input type="text" value="20521252">
                    <input type="date">
                    <select name="" id="">
                        <option value="">Quảng Trị</option>
                        <option value="">Đồng Nai</option>
                    </select>

                    <hr class="left-2">
                    <hr class="mid-2">
                    <hr class="right-2">
                </div>
                <br>
                <div class="input-3">
                    <p class="cow-1">Địa chỉ thường trú:</p>
                </div>

                <div class="line-4">
                    <label for="province" class="cow-1">Tỉnh/Thành phố <span class="note">(*)</label>
                    <label for="district" class="cow-2">Quận/Huyện <span class="note">(*)</label>
                    <label for="town" class="cow-3">Xã/Phường/Thị trấn <span class="note">(*)</label>

                    <br>
                    <select name="" id="" >
                        <option value="">Đồng Nai</option>
                        <option value="">Hồ Chí Minh</option>
                    </select>

                    <select name="" id="">
                        <option value="">Cẩm Mỹ</option>
                        <option value="">Thủ Đức</option>
                    </select>

                    <select name="" id="">
                        <option value="">Sông Ray</option>
                        <option value="">Linh Trung</option>
                    </select>

                    <hr class="left-4">
                    <hr class="mid-4">
                    <hr class="right-4">
                </div>
                <br>
                <div class="line-5">
                    <label for="street" class="cow-1">Số nhà, tên đường, khu phố/ấp <span class="note">(*)</label>

                    <br>
                    <input type="text" value="123, tổ x, ấp y">

                    <hr class="mid-5">
                </div>
                <br>
                <div class="line-6">
                    <label for="email" class="cow-1">Email</label>

                    <br>
                    <input type="text" value="123@gmail.com" id="">

                    <hr class="mid-6">
                </div>

            </div>
        </div>
    </div>

    <div class="form-popup-confirm">
        <div class="form-btn-submit">
            <button class="btn-confirm">Cập nhật</button>
            <button class="btn-cancel">Hủy bỏ</button>
        </div>
    </div>



    <!-- FADED COVER -->
    <div class="gradient-bg-faded" id="gradient-bg-faded"></div>

</body>

</html>