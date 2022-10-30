$(document).ready(function () {
    // HANDLE ACTION

    $("#btn-submit-form-medical").click(function(){
        $(".gradient-bg-faded").css('display','block');
        $(".form-popup-confirm").css('display','block');
    })

    $(".form-popup-confirm").on('click','.btn-cancel', function(){
        $(".form-popup-confirm").css('display','none');
        $(".gradient-bg-faded").css('display','none');
    })

    // END HANDLE ACTION

    // ELEMENT ANIMATION
    // $(".form-popup-confirm").on('mouseon', '.btn-confirm', function () {
    //     $(this).css('box-shadow', '2px 2px 5px -2px black');
    // })

    // $(".form-popup-confirm").on('mousedown', '.btn-confirm, .btn-cancel', function () {
    //     $(this).css('box-shadow', '0px 0px 0px 0px #000000');
    // })
    
    // $(".form-popup-confirm").on('mouseup', '.btn-confirm, .btn-cancel', function () {
    //     $(this).css('box-shadow', '2px 2px 5px -2px #8C69CA');
    // })
    
    // $(".form-popup-confirm").on('mouseleave', '.btn-confirm, .btn-cancel', function () {
    //     $(this).css('box-shadow', '');
    // })
    
    $(".btn-confirm, .btn-cancel").mouseover( function () {
        $(this).css('box-shadow', '2px 2px 5px -2px black');
    })

    $(".btn-confirm, .btn-cancel").mousedown( function () {
        $(this).css('box-shadow', '0px 0px 0px 0px #000000');
    })
    
    $(".btn-confirm, .btn-cancel").mouseup( function () {
        $(this).css('box-shadow', '2px 2px 5px -2px #8C69CA');
    })
    
    $(".btn-confirm, .btn-cancel").mouseleave( function () {
        $(this).css('box-shadow', '');
    })
    // END ELEMENT ANIMATION
})
