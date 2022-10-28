$(document).ready(function () {
    $(".list-schedule").on('click', '.btn-register', function () {
        $(this).css('box-shadow', '0px 0px 0px 0px #000000');
        $(this).parent().parent().parent().css('box-shadow', '2px 2px 5px -2px #000000');
        
        date = $(this).parent().parent().find(".obj-attr").find(".attr-date").text();
        time = "Buổi " + $(this).parent().find(".drop-down-time").find(':selected').text();
        vaccine = $(this).parent().parent().find(".obj-attr").find(".attr-vaccine").text();
        message = "Xác nhận đăng ký tiêm chủng?<br><br>" + date + ", " + time + ", " + vaccine;
        $(".popup-confirm-form .form-message").html(message);
        
        $(".gradient-bg-faded").css('display','block');
        $(".popup-confirm-form").css('display','block');
    })

    $(".list-schedule").on('mouseleave', '.btn-register', function () {
        $(this).css('box-shadow', '');
        $(this).parent().parent().parent().css('box-shadow', '');
    })

    $(".popup-confirm-form").on('click','.btn-cancel', function(){
        $(".popup-confirm-form").css('display','none');
        $(".gradient-bg-faded").css('display','none');
    })

    $(".popup-confirm-form").on('mousedown', '.btn-confirm, .btn-cancel', function () {
        $(this).css('box-shadow', '0px 0px 0px 0px #000000');
    })

    $(".popup-confirm-form").on('mouseup', '.btn-confirm, .btn-cancel', function () {
        $(this).css('box-shadow', '2px 2px 5px -2px #8C69CA');
    })

    $(".popup-confirm-form").on('mouseleave', '.btn-confirm, .btn-cancel', function () {
        $(this).css('box-shadow', '');
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
})