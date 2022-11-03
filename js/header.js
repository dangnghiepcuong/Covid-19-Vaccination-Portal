$(document).ready(function(){
    // NAV MENU ANIMATION
    $(".header .nav .menu-section").mouseover(function(){
        $(this).find("a").css('color', 'white');
    })

    $(".header .nav .menu-section").mouseout(function(){
        $(this).find("a").css('color', '#8C69CA');
    })

    // DROP DOWN MENU TEXT ANIMATION
    $(".drop-down-menu li").mouseover(function(){
        $(this).find("a").css('color','white');
    })

    $(".drop-down-menu li").mouseout(function(){
        $(this).find("a").css('color','black');
    })

    // DROP DOWN MENU PROFILE
    $(".header").on('mouseover', '.avatar', function () {
        $("#drop-down-menu-profile").css('display', 'block');
    })

    $(".header").on('mouseout', '.avatar', function () {
        $("#drop-down-menu-profile").css('display', 'none');
    })

    $(".header").on('mouseout', '#drop-down-menu-profile', function () {
        $("#drop-down-menu-profile").css('display', 'none');
    });

    $(".header").on('mouseover', '#drop-down-menu-profile', function () {
        $("#drop-down-menu-profile").css('display', 'block');
    });

    // DROP DOWN MENU SCHEDULE 
    $(".header").on('mouseover', '#menu-section-schedule', function () {
        $("#drop-down-menu-schedule").css('display', 'block');
    })

    $(".header").on('mouseout', '#menu-section-schedule', function () {
        $("#drop-down-menu-schedule").css('display', 'none');
    })

    $(".header").on('mouseout', '#drop-down-menu-schedule', function () {
        $("#drop-down-menu-schedule").css('display', 'none');
    });

    $(".header").on('mouseover', '#drop-down-menu-schedule', function () {
        $("#drop-down-menu-schedule").css('display', 'block');
    });
})