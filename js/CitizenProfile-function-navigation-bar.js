$(document).ready(function(){
    $("#function-menu-title").text("Trang công dân");

    menu = "<br><li>Thông tin tài khoản</li>";
    menu += "<br><li>Thông tin công dân</li>";
    menu += "<br><li>Lịch đăng ký tiêm chủng</li>";
    menu += "<br><li>Chứng nhận tiêm chủng</li>";
    menu += "<br><li>Tra cứu thông tin</li>";
    menu += "<br><li>Thêm người thân</li>";
    
    $("#function-menu-list").find("ul").html(menu);
})


