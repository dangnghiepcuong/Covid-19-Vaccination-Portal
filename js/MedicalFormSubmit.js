$(document).ready(function () {
    // LOAD FRONT END DATA
    menu_title = "<a href='MedicalFormSubmit.php'>Tờ khai y tế</a>";
    $("#function-navigation-bar-title").html(menu_title);

    homepage = "<a href='HomepageCitizen.php'>Trang chủ</a>";
    $("#homepage-path").html(homepage);
    
    subpage = "<a href='MedicalFormSubmit.php'>Khai báo</a>"
    $("#subpage-path").html(subpage);

    selected_function = "<a href='MedicalFormSubmit.php'>Tờ khai y tế</a>";
    $("#selected-function-path").html(selected_function);

    $("#function-menu-title").text("Trang khai báo y tế");

    menu = "<br><li>Tờ khai y tế</li>";
    menu += "<br><li>Danh sách tờ khai</li>";

    $("#function-menu-list").find("ul").html(menu);

    var today = new Date();
    var day = ("0" + today.getDate()).slice(-2);
    var month = ("0" + (today.getMonth() + 1)).slice(-2);
    var today = today.getFullYear() + "-" + (month) + "-" + (day);
    $("#input-date").val(today);
    // END LOAD FRONT END DATA

    // HANDLE ACTION
    $("#btn-submit-form-medical").click(function(){
        $(".gradient-bg-faded").css('display','block');
        $(".form-popup-confirm").css('display','block');
    })

    $(".form-popup-confirm").on('click','.btn-cancel', function(){
        $(".form-popup-confirm").css('display','none');
        $(".gradient-bg-faded").css('display','none');
    })

    $(".form-popup-confirm").on('click','.btn-confirm', function(){
        alert ("Khai báo thành công!");
        $(".form-popup-confirm").css('display','none');
        $(".gradient-bg-faded").css('display','none');
    })
    // END HANDLE ACTION

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
