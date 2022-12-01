$(document).ready(function () {

    // LOAD FRONT END DATA
    menu_title = "<a href='MOHProvideAccount.php.php'>Cấp tài khoản đơn vị</a>";
    $("#function-navigation-bar-title").html(menu_title);

    homepage = "<a href='index.php'>Trang chủ</a>";
    $("#homepage-path").html(homepage);

    subpage = "<a href='MOHProfile.php'>Đơn vị</a>"
    $("#subpage-path").html(subpage);

    selected_function = "<a href='MOHProvideAccount.php.php'>Cấp tài khoản đơn vị</a>";
    $("#selected-function-path").html(selected_function);

    $("#function-menu-title").text("Đơn vị tiêm chủng");

    menu = "<br><a href='MOHManageOrg.php'><li>Quản lý đơn vị</li></a>";
    menu += "<br><a href='MOHProvideAccount.php'><li>Cấp tài khoản đơn vị</li></a>";

    $("#function-menu-list").find("ul").html(menu);
    // END LOAD FRONT END DATA

    // HANDLE ACTION
    $('#btn-medium-filled').click(function () {
        $('#form-popup-option').find('.form-message').html('Xác nhận tạo tài khoản cho đơn vị tiêm chủng?');
        $('#form-popup-option').css('display', 'grid');
        $('#gradient-bg-faded').css('display', 'block');

        $('#form-popup-option').on('click', '.btn-cancel', function () {
            $('#form-popup-option').css('display', 'none');
            $('#gradient-bg-faded').css('display', 'none');
        })

        $('#form-popup-option').on('click', '.btn-confirm', function () {
            q1 = $('input[type="radio"][name="q1"]:checked').val();
            q2 = $('input[type="radio"][name="q2"]:checked').val();
            q3 = $('input[type="radio"][name="q3"]:checked').val();
            q4 = $('input[type="radio"][name="q4"]:checked').val();
            if (!$('input[name="q1"]:checked').val() || !$('input[name="q2"]:checked').val() || !$('input[name="q3"]:checked').val() || !$('input[name="q4"]:checked').val()) {
                alert('Bạn chưa chọn câu trả lời!');
                return;
            }
            choice = q1 + q2 + q3 + q4;

            $.ajax({
                cache: false,
                url: 'HandleProvideAccORG.php',
                type: 'POST',
                data: { filleddate: filleddate, choice: choice },
                success: function (result) {
                    alert('confirmed')
                    if (result.substring(0, 5) == 'ERROR') {    //EXCEPTION
                        alert(result);
                        // return;
                    }
                    if (result == 'Form Submited!') {
                        $('.form-message').text('Khai báo y tế thành công!');
                        $('#form-popup-confirm').css('display', 'grid');
                        $('#gradient-bg-faded').css('display', 'block');
                    }
                    alert(result);
                },
                error: function (error) {
                    // $('body').html(error);
                    alert('error')
                }
            });
        })
    })
})

