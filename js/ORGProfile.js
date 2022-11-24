$(document).ready(function () {
    // LOAD FRONT END DATA
    menu_title = "<a href='ORGProfile.php'>Thông tin đơn vị</a>";
    $("#function-navigation-bar-title").html(menu_title);

    homepage = "<a href='index.php'>Trang chủ</a>";
    $("#homepage-path").html(homepage);

    subpage = "<a href='ORGProfile.php'>Đơn vị</a>"
    $("#subpage-path").html(subpage);

    selected_function = "<a href='ORGProfile.php'>Thông tin đơn vị</a>";
    $("#selected-function-path").html(selected_function);

    $("#function-menu-title").text("Trang đơn vị");

    menu = "<br><li>Thông tin tài khoản</li>";
    menu += "<br><li>Thông tin tổ chức</li>";

    $("#function-menu-list").find("ul").html(menu);
    // END LOAD FRONT END DATA

})

