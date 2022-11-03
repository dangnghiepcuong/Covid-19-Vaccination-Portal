$(document).ready(function(){
    $(".btn-short-filled, .btn-short-bordered, .btn-medium-filled, .btn-medium-bordered, .btn-medium-bordered-icon").mouseover(function(){
        $(this).css('box-shadow', '2px 2px 5px -2px black')
    })

    $(".btn-short-filled, .btn-short-bordered, .btn-medium-filled, .btn-medium-bordered, .btn-medium-bordered-icon").mousedown(function(){
        $(this).css('box-shadow', '0px 0px 0px 0px #000000')
    })

    $(".btn-short-filled, .btn-short-bordered, .btn-medium-filled, .btn-medium-bordered, .btn-medium-bordered-icon").mouseup(function(){
        $(this).css('box-shadow', '2px 2px 5px -2px black')
    })

    $(".btn-short-filled, .btn-short-bordered, .btn-medium-filled, .btn-medium-bordered, .btn-medium-bordered-icon").mouseout(function(){
        $(this).css('box-shadow', '')
    })
})