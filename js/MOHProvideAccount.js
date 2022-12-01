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
    $('#btn-confirm').click(function () {
        $('#form-popup-option').find('.form-message').html('Xác nhận tạo tài khoản cho đơn vị tiêm chủng?');
        $('#form-popup-option').css('display', 'grid');
        $('#gradient-bg-faded').css('display', 'block');

        $('#form-popup-option').on('click', '.btn-cancel', function () {
            $('#form-popup-option').css('display', 'none');
            $('#gradient-bg-faded').css('display', 'none');
        })

        $('#form-popup-option').on('click', '.btn-confirm', function () {
            city = $('#select-province :selected').text();

            num = $('#input-num').val();
            if (!$('#input-num').val()) {
                alert('Bạn chưa chọn câu trả lời!');
                return;
            }


            $.ajax({
                cache: false,
                url: 'HandleProvideAccOrg.php',
                type: 'POST',
                data: { num: num, city: city },
                success: function (result) {
                    if (result.substring(0, 5) == 'ERROR') {    //EXCEPTION
                        alert(result);
                        // return;
                    }
                    if (result == 'Form Submited!') {
                        $('.form-message').text('Khai báo y tế thành công!');
                        $('#form-popup-confirm').css('display', 'grid');
                        $('#gradient-bg-faded').css('display', 'block');
                    }
                    //alert(result);
                },
                error: function (error) {
                    // $('body').html(error);
                    alert('error')
                }
            });
        })
    })
})

