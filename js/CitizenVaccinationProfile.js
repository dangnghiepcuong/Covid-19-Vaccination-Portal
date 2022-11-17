$(document).ready(function(){
    // LOAD FRONT END DATA
    menu_title = "<a href='CitizenVaccinationProfile.php'>Tra cứu thông tin</a>";
    $("#function-navigation-bar-title").html(menu_title);

    homepage = "<a href='HomepageCitizen.php'>Trang chủ</a>";
    $("#homepage-path").html(homepage);
    
    subpage = "<a href='#'>Công dân</a>"
    $("#subpage-path").html(subpage);

    $("#selected-function-path").html(menu_title);

    
    // END LOAD FRONT END DATA
})