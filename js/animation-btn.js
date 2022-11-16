$(document).ready(function(){
    $(".btn-short-filled, .btn-short-bordered, .btn-medium-filled, .btn-medium-bordered, .btn-medium-bordered-icon, .btn-long-bordered, .btn-long").mouseover(function(){
        $(this).css('opacity', '0.7')
    })

    $(".btn-short-filled, .btn-short-bordered, .btn-medium-filled, .btn-medium-bordered, .btn-medium-bordered-icon, .btn-long-bordered, .btn-long").mousedown(function(){
        $(this).css('opacity', '0.9')
    })

    $(".btn-short-filled, .btn-short-bordered, .btn-medium-filled, .btn-medium-bordered, .btn-medium-bordered-icon, .btn-long-bordered, .btn-long").mouseup(function(){
        $(this).css('opacity', '0.7')
    })

    $(".btn-short-filled, .btn-short-bordered, .btn-medium-filled, .btn-medium-bordered, .btn-medium-bordered-icon, .btn-long-bordered, .btn-long").mouseout(function(){
        $(this).css('opacity', '1')
    })
})