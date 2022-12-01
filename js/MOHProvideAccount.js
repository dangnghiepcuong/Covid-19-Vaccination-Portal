$(document).ready(function () {

    // LOAD FRONT END DATA
    menu_title = "<a href='MOHProvideAccount.php.php'>Cấp tài khoản đơn vị</a>";
    $("#function-navigation-bar-title").html(menu_title);

    homepage = "<a href='index.php'>Trang chủ</a>";
    $("#homepage-path").html(homepage);

    subpage = "<a href='MOHProfile.php'>Đơn vị</a>"
    $("#subpage-path").html(subpage);

    selected_function = "<a href='MOHProvideAccount.php.php'>Cấp tài khoản đơn vị</a>";
    $("#selected-function-path").html(selected_function);

    $("#function-menu-title").text("Đơn vị tiêm chủng");

    menu = "<br><a href='MOHManageOrg.php'><li>Quản lý đơn vị</li></a>";
    menu += "<br><a href='MOHProvideAccount.php'><li>Cấp tài khoản đơn vị</li></a>";

    $("#function-menu-list").find("ul").html(menu);
    // END LOAD FRONT END DATA
})

