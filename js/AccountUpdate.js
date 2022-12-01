$(document).ready(function () {
    $('#cancel-update-account-info').click(function () {
        location.reload();
    })

    $('#update-account-info').click(function () {
        $('.message').text("");

        phone = $('.account input[name="phone"]').val();
        if (phone == "") {
            $('.account').find('.msg1').text("Nhập số điện thoại!");
            return;
        }

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
            url: 'HandleUpdateAccount.php',
            type: "POST",
            data: { method: 'HandleUpdateAccount', phone: phone, password: password, new_password: new_password },
            success: function (result) {
                if (result.substring(0, 5) == 'ERROR') {    //EXCEPTION
                    alert(result);
                    return;
                }
                if (result == 'Password is incorrect!') {
                    $('.account').find('.msg2').html('Sai mật khẩu!');
                    return;
                }
                if (result == 'Account Updated!' || result == 'Password Changed!') {
                    if (result == 'Account Updated!')
                        $('.form-message').text('Cập nhật tài khoản thành công!');
                    else
                        $('.form-message').text('Cập nhật mật khẩu thành công!');
                    $('#form-popup-confirm').css('display', 'grid');
                    $('#gradient-bg-faded').css('display', 'block');

                    $('#form-popup-confirm').find('.btn-confirm').click(function () {
                        location.reload();
                    })

                    $('#gradient-bg-faded').click(function () {
                        location.reload();
                    })
                }
            },
            error: function (error) {
            }
        })
    })
})