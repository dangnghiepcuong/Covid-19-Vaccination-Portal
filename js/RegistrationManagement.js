$(document).ready(function () {
    $(".list-registration").on('click', '.btn-cancel', function () {
        date_time_no = $(this).parent().parent().find(".obj-attr").find(".attr-date-time-no").text();
        vaccine = $(this).parent().parent().find(".obj-attr").find(".attr-vaccine-serial").text();
        message = "Xác nhận hủy đăng ký tiêm chủng?<br><br>" + date_time_no + ", " + vaccine;
        $(".form-popup-confirm .form-message").html(message);
        
        $(".gradient-bg-faded").css('display','block');
        $(".form-popup-confirm").css('display','block');
    })
    $(".form-popup-confirm").on('click','.btn-cancel', function(){
        $(".form-popup-confirm").css('display','none');
        $(".gradient-bg-faded").css('display','none');
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