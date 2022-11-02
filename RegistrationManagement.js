$(document).ready(function () {
    $(".list-registration").on('click', '.btn-cancel-registration', function () {
        $(this).css('box-shadow', '0px 0px 0px 0px #000000');
        $(this).parent().parent().parent().css('box-shadow', '2px 2px 5px -2px #000000');
        
        date_time_no = $(this).parent().parent().find(".obj-attr").find(".attr-date-time-no").text();
        vaccine = $(this).parent().parent().find(".obj-attr").find(".attr-vaccine-serial").text();
        message = "Xác nhận hủy đăng ký tiêm chủng?<br><br>" + date_time_no + ", " + vaccine;
        $(".form-popup-confirm .form-message").html(message);
        
        $(".gradient-bg-faded").css('display','block');
        $(".form-popup-confirm").css('display','block');
    })

    $(".list-registration").on('mouseleave', '.btn-cancel-registration', function () {
        $(this).css('box-shadow', '');
        $(this).parent().parent().parent().css('box-shadow', '');
    })

    $(".form-popup-confirm").on('click','.btn-cancel', function(){
        $(".form-popup-confirm").css('display','none');
        $(".gradient-bg-faded").css('display','none');
    })

    $(".form-popup-confirm").on('mousedown', '.btn-confirm, .btn-cancel', function () {
        $(this).css('box-shadow', '0px 0px 0px 0px #000000');
    })

    $(".form-popup-confirm").on('mouseup', '.btn-confirm, .btn-cancel', function () {
        $(this).css('box-shadow', '2px 2px 5px -2px #8C69CA');
    })

    $(".form-popup-confirm").on('mouseleave', '.btn-confirm, .btn-cancel', function () {
        $(this).css('box-shadow', '');
    })
    
    $(".filter-panel").on('mouseenter', '.btn-filter', function () {
        $(this).css('box-shadow', '2px 2px 5px -2px black');
    })

    $(".filter-panel").on('mousedown', '.btn-filter', function () {
        $(this).css('box-shadow', '0px 0px 0px 0px #000000');
    })

    $(".filter-panel").on('mouseup', '.btn-filter', function () {
        $(this).css('box-shadow', '2px 2px 5px -2px #8C69CA');
    })

    $(".filter-panel").on('mouseleave', '.btn-filter', function () {
        $(this).css('box-shadow', '');
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