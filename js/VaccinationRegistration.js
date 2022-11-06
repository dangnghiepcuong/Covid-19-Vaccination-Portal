$(document).ready(function () {
    // LOAD FRONT END DATA

    menu_title = "<a href='VaccinationRegistration.php'>Đăng ký tiêm chủng</a>";
    $("#function-navigation-bar-title").html(menu_title);

    homepage = "<a href='HomepageCitizen.php'>Trang chủ</a>";
    $("#homepage-path").html(homepage);

    subpage = "<a href='VaccinationRegistration.php'>Tiêm chủng</a>";
    $("#subpage-path").html(subpage);

    selected_function = "<a href='VaccinationRegistration.php'>Đăng ký tiêm chủng</a>";
    $("#selected-function-path").html(selected_function);

    // END LOAD FRONT END DATA


    $(".list-schedule").on('click', '.btn-register', function () {
        date = $(this).parent().parent().find(".obj-attr").find(".attr-date").text();
        time = "Buổi " + $(this).parent().find(".drop-down-time").find(':selected').text();
        vaccine = $(this).parent().parent().find(".obj-attr").find(".attr-vaccine").text();
        message = "Xác nhận đăng ký tiêm chủng?<br><br>" + date + ", " + time + ", " + vaccine;
        $(".popup-confirm-form .form-message").html(message);
        
        $(".gradient-bg-faded").css('display','block');
        $(".popup-confirm-form").css('display','block');
    })

    $(".popup-confirm-form").on('click','.btn-cancel', function(){
        $(".popup-confirm-form").css('display','none');
        $(".gradient-bg-faded").css('display','none');
    })

    // DROP DOWN MENU
    // $(".header").on('mouseover', '.avatar', function () {
    //     $("#drop-down-menu-profile").css('display', 'block');
    // })

    // $(".header").on('mouseleave', '.avatar', function () {
    //     $("#drop-down-menu-profile").css('display', 'none');
    // })

    // $(".header").on('mouseleave', '#drop-down-menu-profile', function () {
    //     $("#drop-down-menu-profile").css('display', 'none');
    // });

    // $(".header").on('mouseover', '#drop-down-menu-profile', function () {
    //     $("#drop-down-menu-profile").css('display', 'block');
    // });
})