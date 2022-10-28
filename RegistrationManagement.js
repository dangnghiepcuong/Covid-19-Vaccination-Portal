$(document).ready(function () {
    $(".list-registration").on('click', '.btn-cancel-registration', function () {
        $(this).css('box-shadow', '0px 0px 0px 0px #000000');
        $(this).parent().parent().parent().css('box-shadow', '2px 2px 5px -2px #000000');
        
        date_time_no = $(this).parent().parent().find(".obj-attr").find(".attr-date-time-no").text();
        vaccine = $(this).parent().parent().find(".obj-attr").find(".attr-vaccine-serial").text();
        message = "Xác nhận hủy đăng ký tiêm chủng?<br><br>" + date_time_no + ", " + vaccine;
        $(".popup-confirm-form .form-message").html(message);
        
        $(".gradient-bg-faded").css('display','block');
        $(".popup-confirm-form").css('display','block');
    })

    $(".list-registration").on('mouseleave', '.btn-cancel-registration', function () {
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