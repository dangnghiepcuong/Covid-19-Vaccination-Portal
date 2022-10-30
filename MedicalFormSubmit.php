<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="MedicalFormSubmit.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="RegistrationManagement.js"></script>
    <title>Khai báo y tế</title>
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

    <div class="nav-func-pages">
        <div class="nav-func-title">
            <a href="VaccinationRegistration.php">Tờ khai y tế</a>
        </div>
        <div class="nav-directory">
            <div class="directory">
                <a href="index.php">Trang chủ</a>
            </div>

            <div class="dicrectory">&nbsp;/&nbsp;</div>

            <div class="directory">
                <a href="MedicalFormSubmit.php">Khai báo</a>
            </div>

            <div class="dicrectory">&nbsp;/&nbsp;</div>

            <div class="directory-selected">
                <a href="VaccinationRegistration.php">Tờ khai y tế</a>
            </div>
        </div>
    </div>

    <div class="holder-function-panel">
        <div class="nav-panel">
            <br><br>
            <div class="title">Trang khai báo y tế</div>
            <div class="title-bg"></div>
            <br>
            <div class="menu">
                <ul class="list">
                    <br>
                    <li>Tờ khai y tế</li><br>
                    <li>Danh sách tờ khai</li><br>
                </ul>
            </div>
        </div>

        <div class="function-panel">
            <br>
            <div class="panel-target-citizen">
                <p>Đối tượng: </p>
                <select name="" id="">
                    <option value="">Đặng Nghiệp Cường</option>
                    <option value="">Đỗ Thị Cúc Hoa</option>
                </select>
            </div>
            <br>

            <div class="panel-form-medical">
                <div class="form-medical">
                    <label for="input_date">Ngày thực hiện khai báo:
                    </label>
                    <input type="date" id="input_date">

                    <p>Trong vòng 14 ngày qua, Anh/Chị có thấy xuất hiện ít nhất 1 tong các dấu hiệu:
                        ho, khó thở, viêm phổi, đau họng, mệt mỏi không?
                    </p>
                    <div class="form-btn-input">
                        <label for="q1_no">Không</label>
                        <input type="radio" name="q1" id="q1_no">
                        <label for="q1_yes">Có</label>
                        <input type="radio" name="q1" id="q1_yes">
                    </div>

                    <p>Trong vòng 14 ngày qua, Anh/Chị có tiếp xúc với Người bệnh hoặc nghi ngờ, mắc bệnh Covid-19 không?
                    </p>
                    <div class="form-btn-input">
                        <label for="q2_no">Không</label>
                        <input type="radio" name="q2" id="q2_no">
                        <label for="q2_yes">Có</label>
                        <input type="radio" name="q2" id="q2_yes">
                    </div>

                    <p>Anh/Chị có đang dương tính với Covid-19 không?
                    </p>
                    <div class="form-btn-input">
                        <label for="q3_no">Không</label>
                        <input type="radio" name="q3" id="q3_no">
                        <label for="q3_yes">Có</label>
                        <input type="radio" name="q3" id="q3_yes">
                    </div>

                    <p>Anh/Chị có đang là đối tượng trì hoẵn tiêm chủng vaccine Covid-19
                        hoặc đang là đối tượng chống chỉ định tiêm chủng Covid-19 không?
                    </p>
                    <div class="form-btn-input">
                        <label for="q4_no">Không</label>
                        <input type="radio" name="q4" id="q4_no">
                        <label for="q4_yes">Có</label>
                        <input type="radio" name="q4" id="q4_yes">
                    </div>
                    <br>
                    <div class="form-btn-input">
                        <button class="btn-confirm" id="btn-submit-form-medical">Xác nhận</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="popup-confirm-form">
        <p class="form-message"></p>
        <div class="form-btn-submit">
            <button class="btn-confirm">Xác nhận</button>
            <button class="btn-cancel">Hủy</button>
        </div>
    </div>

    <!-- FADED COVER -->
    <div class="gradient-bg-faded" id="gradient-bg-faded"></div>

    <!-- FOOTER -->
    <footer>
        <div class="footer-alignment-side"></div>
        <div class="footer-content">&copy; Bản quyền thuộc TRUNG TÂM CÔNG NGHỆ PHÒNG, CHỐNG DỊCH COVID-19 QUỐC GIA</div>
        <div class="footer-content">Phát triển bởi Chrysanthemums</div>
        <div class="footer-logo"><img src="image/Logo BỘ.png" alt="Logo Bộ Y Tế "></div>
        <div class="footer-alignment-side"></div>
    </footer>
</body>

</html>