$(document).ready(function(){
    // LOAD FRONT END DATA
    menu_title = "<a href='CitizenVaccinationProfile.php'>Tra cứu thông tin</a>";
    $("#function-navigation-bar-title").html(menu_title);

    homepage = "<a href='HomepageCitizen.php'>Trang chủ</a>";
    $("#homepage-path").html(homepage);
    
    subpage = "<a href='#'>Công dân</a>"
    $("#subpage-path").html(subpage);

    $("#selected-function-path").html(menu_title);

    $("#function-menu-title").text("Trang công dân");

    menu_title='<br><li>Thông tin tài khoản</li>';
    menu_title += "<br><li>Thông tin công dân</li>";
    menu_title +="<br><li>Lịch đăng ký tiêm chủng</li>"
    menu_title +="<br><li>Chứng nhận tiêm chủng</li>"
    menu_title +="<br><li>Tra cứu thông tin</li>"
    menu_title +="<br><li>Thêm người thân</li>"

    $("#function-menu-list").find("ul").html(menu_title);
    // END LOAD FRONT END DATA
})