<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Citizen.css">
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
                    <label for="last-name">Họ và tên đệm</label>
                    <!-- <label for="note">(*)</label> -->

                    <label for="first-name">Tên</label>
                    <!-- <label for="note">(*)</label> -->

                    <label for="gender">Giới tính</label>
                    <!-- <label for="note">(*)</label> -->
                </div>

                <div class="input-1">
                    <input type="text" value="Lê Hoàng">
                    <input type="text" value="Duyên">
                    <select name="" id="">
                        <option value="">Nam</option>
                        <option value="">Nữ</option>
                    </select>
                </div>

                <div class="line-2">
                    <label for="id">Mã định danh</label>
                    <!-- <label for="note">(*)</label> -->

                    <label for="birthday">Ngày tháng năm sinh</label>
                    <!-- <label for="note">(*)</label> -->

                    <label for="hometown">Quê quán</label>
                    <!-- <label for="note">(*)</label> -->
                </div>

                <div class="input-2">
                    <input type="text" value="20521252">
                    <input type="date">
                    <select name="" id="">
                        <option value="">Quảng Trị</option>
                        <option value="">Đồng Nai</option>
                    </select>
                </div>

                <div class="input-3">
                    <p>Địa chỉ thường trú:</p>
                </div>

                <div class="line-4">
                    <label for="province">Tỉnh/Thành phố</label>
                    <label for="district">Quận/Huyện</label>
                    <label for="town">Xã/Phường/Thị trấn</label>
                </div>

                <div class="input-4">
                    <select name="" id="">
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
                </div>

                <div class="line-5">
                    <label for="street">Số nhà, tên đường, khu phố/ấp</label>
                </div>

                <div class="input-5">
                    <input type="text" value="123, tổ x, ấp y">
                </div>

                <div class="line-6">
                    <label for="email">Email</label>
                </div>

                <div>
                    <input type="text" name="123@gmail.com" id="">
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