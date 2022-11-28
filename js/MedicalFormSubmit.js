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
        $("#gradient-bg-faded").css('display','block');
        $(".form-popup-confirm").css('display','block');
    })

    $("#form-popup-confirm").on('click','.btn-cancel', function(){
        $(".form-popup-confirm").css('display','none');
        $("#gradient-bg-faded").css('display','none');
    })

    $(".form-popup-confirm").on('click','.btn-confirm', function(){
        $(".form-popup-confirm").css('display','none');

        q1 = $("input[type='radio'][name='q1']:checked").val();
        q2 = $("input[type='radio'][name='q2']:checked").val();
        q3 = $("input[type='radio'][name='q3']:checked").val();
        q4 = $("input[type='radio'][name='q4']:checked").val();
        if (!$("input[name='q1']:checked").val() || !$("input[name='q2']:checked").val() || !$("input[name='q3']:checked").val() || !$("input[name='q4']:checked").val()) {
            alert("Bạn chưa chọn câu trả lời!");
            return;        
        }
        choice = q1 + q2 + q3 + q4;

        filleddate = $('#input-date').val();
        if (new Date (filleddate).getTime() > new Date().getTime()){
            alert("Ngày khai báo không hợp lệ!");
            return;
        }

        $.ajax({
            cache: false,
            url: 'HandleMediForm.php',
            type: 'POST',
            data: { filleddate:filleddate, choice:choice },
            success: function (result) {    //button click to submit
                alert (result);
                location.reload(true);
            },
            error: function (error) {
                $('body').html(error);
            }
        });
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
