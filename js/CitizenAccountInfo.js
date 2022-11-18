$(document).ready(function () {
    // LOAD FRONT END DATA
    menu_title = "<a href='CitizenAccountInfo.php'>Thông tin tài khoản</a>";
    $("#function-navigation-bar-title").html(menu_title);

    homepage = "<a href='HomepageCitizen.php'>Trang chủ</a>";
    $("#homepage-path").html(homepage);

    subpage = "<a href='CitizenProfile.php'>Công dân</a>"
    $("#subpage-path").html(subpage);

    selected_function = "<a href='CitizenAccountInfo.php'>Thông tin tài khoản</a>";
    $("#selected-function-path").html(selected_function);

    $("#function-menu-title").text("Trang công dân");

    menu = "<br><li>Thông tin tài khoản</li>";
    menu += "<br><li>Thông tin công dân</li>";
    menu += "<br><li>Lịch đăng ký tiêm chủng</li>";
    menu += "<br><li>Chứng nhận tiêm chủng</li>";
    menu += "<br><li>Tra cứu thông tin</li>";
    menu += "<br><li>Thêm người thân</li>";

    $("#function-menu-list").find("ul").html(menu);
    // END LOAD FRONT END DATA
})