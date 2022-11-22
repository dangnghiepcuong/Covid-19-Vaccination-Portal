$(document).ready(function () {
    // LOAD FRONT END DATA
    menu_title = "<a href='VaccinationRegistration.php'>Lịch đăng ký tiêm chủng</a>";
    $("#function-navigation-bar-title").html(menu_title);

    homepage = "<a href='HomepageCitizen.php'>Trang chủ</a>";
    $("#homepage-path").html(homepage);
    
    subpage = "<a href='#'>Công dân</a>"
    $("#subpage-path").html(subpage);

    selected_function = "<a href='VaccinationRegistration.php'>Lịch đăng ký tiêm chủng</a>";
    $("#selected-function-path").html(selected_function);

    $("#function-menu-title").text("Trang công dân");

    menu = "<br><a href='CitizenAccountInfo.php'><li>Thông tin tài khoản</li></a>";
    menu += "<br><a href='CitizenProfile.php'><li>Thông tin công dân</li></a>";
    menu += "<br><a href='CitizenRegistration.php'><li>Lịch đăng ký tiêm chủng</li></a>";
    menu += "<br><a href='CitizenCertificate.php'><li>Chứng nhận tiêm chủng</li></a>";
    menu += "<br><a href='#'><li>Tra cứu thông tin</li></a>";
    menu += "<br><a href='#'><li>Thêm người thân</li></a>";
    $("#function-menu-list").find("ul").html(menu);

    // END LOAD FRONT END DATA

    $(".list-registration").on('click', '.btn-cancel', function () {
        date_time_no = $(this).parent().parent().find(".obj-attr").find(".attr-date-time-no").text();
        vaccine = $(this).parent().parent().find(".obj-attr").find(".attr-vaccine-serial").text();
        message = "Xác nhận hủy đăng ký tiêm chủng?<br><br>" + date_time_no + ", " + vaccine;
        $(".form-popup-confirm .form-message").html(message);

        $(".gradient-bg-faded").css('display', 'block');
        $(".form-popup-confirm").css('display', 'block');
    })
    $(".form-popup-confirm").on('click', '.btn-cancel', function () {
        $(".form-popup-confirm").css('display', 'none');
        $(".gradient-bg-faded").css('display', 'none');
    })

    // DROP DOWN MENU
    $(".header").on('mouseover', '.avatar', function () {
        $("#drop-down-menu-profile").css('display', 'block');
    })

    $(".header").on('mouseleave', '.avatar', function () {
        $("#drop-down-menu-profile").css('display', 'none');
    })

    $(".header").on('mouseleave', '#drop-down-menu-profile', function () {
        $("#drop-down-menu-profile").css('display', 'none');
    });

    $(".header").on('mouseover', '#drop-down-menu-profile', function () {
        $("#drop-down-menu-profile").css('display', 'block');
    });

})