<link rel="stylesheet" href="css/function-menu.css"></link>
$(document).ready(function(){
    // LOAD FRONT END DATA
    menu_title = "<a href='CitizenVaccinationProfile.php'>Tra cứu thông tin</a>";
    $("#function-navigation-bar-title").html(menu_title);

    homepage = "<a href='index.php'>Trang chủ</a>";
    $("#homepage-path").html(homepage);
    
    subpage = "<a href='#'>Công dân</a>"
    $("#subpage-path").html(subpage);

    $("#selected-function-path").html(menu_title);

    $("#function-menu-title").text("Trang công dân");

    menu = "<br><a href='CitizenAccountInfo.php'><li>Thông tin tài khoản</li></a>";
    menu += "<br><a href='CitizenProfile.php'><li>Thông tin công dân</li></a>";
    menu += "<br><a href='CitizenRegistration.php'><li>Lịch đăng ký tiêm chủng</li></a>";
    menu += "<br><a href='CitizenCertificate.php'><li>Chứng nhận tiêm chủng</li></a>";
    menu += "<br><a href='#'><li>Tra cứu thông tin</li></a>";
    menu += "<br><a href='#'><li>Thêm người thân</li></a>";

    $("#function-menu-list").find("ul").html(menu_title);
    // END LOAD FRONT END DATA
})