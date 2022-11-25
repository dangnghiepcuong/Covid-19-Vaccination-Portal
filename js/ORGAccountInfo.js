$(document).ready(function () {
    // LOAD FRONT END DATA
    menu_title = '<a href="ORGProfile.php">Thông tin tài khoản</a>';
    $('#function-navigation-bar-title').html(menu_title);

    homepage = '<a href="HomepageORG.php">Trang chủ</a>';
    $('#homepage-path').html(homepage);

    subpage = '<a href="ORGProfile.php">Đơn vị</a>';
    $('#subpage-path').html(subpage);

    selected_function = '<a href="ORGProfile.php">Thông tin tài khoản</a>';
    $('#selected-function-path').html(selected_function);

    $('#function-menu-title').text('Trang đơn vị');

    menu = '<br><a href="ORGAccountInfo.php"><li>Thông tin tài khoản</li></a>';
    menu += '<br><a href="ORGProfile.php"><li>Thông tin tổ chức</li></a>';

    $('#function-menu-list').find('ul').html(menu);
    // END LOAD FRONT END DATA

    $('#cancel-update-account-info').click(function () {
        location.reload();
    })

    $('#update-account-info').click(function () {
        $('.message').text("");
        password = $('.account input[name="password"]').val();
        if (password == "") {
            $('.account').find('.msg2').html("Nhập mật khẩu để xác nhận thay đổi<br>thông tin!");
            return;
        }

        new_password = $('.change-pass input[name="new-password"]').val();
        repeat_new_password = $('.change-pass input[name="repeat-new-password"]').val();
        if (new_password != repeat_new_password) {
            $('.change-pass').find('.msg2').html("Nhập lại mật khẩu phải giống với<br> mật khẩu!");
            return;
        }

        $.ajax({
            cache: false,
            url: "HandleUpdateAccount.php",
            type: "POST",
            data: { method: 'ChangePassword', password: password, new_password: new_password },
            success: function (result) {
                if (result.substring(0, 5) == 'ERROR') {    //EXCEPTION
                    alert(result);
                    return;
                }
                if (result == 'Password is incorrect!'){
                    $('.account').find('.msg2').html('Sai mật khẩu!');
                    return;
                }
                if (result == 'Password Changed!')
                {
                    $('.form-message').text('Đổi mật khẩu thành công!');
                    $('#form-popup-confirm').css('display', 'block');
                    $('.gradient-bg-faded').css('display', 'block');
                }
                if (result == 'Account Updated!') {
                    $('.form-message').text('Cập nhật tài khoản thành công!');
                    $('#form-popup-confirm').css('display', 'block');
                    $('.gradient-bg-faded').css('display', 'block');
                    location.reload();
                }
            },
            error: function (error) {
            }
        }) 
    })
})

