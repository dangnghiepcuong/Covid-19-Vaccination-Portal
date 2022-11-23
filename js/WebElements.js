$(document).ready(function () {
    $(".btn-short-filled, .btn-short-bordered, .btn-medium-filled, .btn-medium-bordered, .btn-medium-bordered-icon, .btn-long-bordered, .btn-long").mouseover(function () {
        $(this).css('opacity', '0.6')
    })

    $(".btn-short-filled, .btn-short-bordered, .btn-medium-filled, .btn-medium-bordered, .btn-medium-bordered-icon, .btn-long-bordered, .btn-long").mousedown(function () {
        $(this).css('opacity', '8')
    })

    $(".btn-short-filled, .btn-short-bordered, .btn-medium-filled, .btn-medium-bordered, .btn-medium-bordered-icon, .btn-long-bordered, .btn-long").mouseup(function () {
        $(this).css('opacity', '0.6')
    })

    $(".btn-short-filled, .btn-short-bordered, .btn-medium-filled, .btn-medium-bordered, .btn-medium-bordered-icon, .btn-long-bordered, .btn-long").mouseout(function () {
        $(this).css('opacity', '1')
    })

    // HANDLE GRADIENT BG CLICK
    $('#gradient-bg-faded, .btn-confirm').click(function () {
        $('#form-container-reg-acc').css('display', 'none');
        $('#form-container-login').css('display', 'none');
        $('.form-popup-confirm').css('display', 'none');
        $('#gradient-bg-faded').css('display', 'none');
        $('#container-reg-profile').css('display', 'none');
        $('.gradient-bg-faded').css('display', 'none');
    })
})