$(document).ready(function () {

    // LOAD FRONT END DATA
    menu_title = "<a href='ScheduleManagement.php'>Danh sách lịch tiêm</a>";
    $("#function-navigation-bar-title").html(menu_title);

    homepage = "<a href='HomepageORG.php'>Trang chủ</a>";
    $("#homepage-path").html(homepage);
    
    subpage = "<a href='ScheduleManagement.php'>Lịch tiêm</a>"
    $("#subpage-path").html(subpage);

    selected_function = "<a href='ScheduleManagement.php'>Danh sách lịch tiêm</a>";
    $("#selected-function-path").html(selected_function);
    // END LOAD FRONT END DATA

    var today = new Date();
    var day = ("0" + today.getDate()).slice(-2);
    var month = ("0" + (today.getMonth() + 1)).slice(-2);
    var today = today.getFullYear() + "-" + (month) + "-" + (day);
    $("#start-date").val(today);
    $("#end-date").val(today);
})