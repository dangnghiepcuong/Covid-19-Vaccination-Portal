$(document).ready(function () {
    // LOAD FRONT END DATA
    menu_title = '<a href="CitizenAccountInfo.php">Thông tin tài khoản</a>';
    $('#function-navigation-bar-title').html(menu_title);

    homepage = '<a href="HomepageCitizen.php">Trang chủ</a>';
    $('#homepage-path').html(homepage);

    subpage = '<a href="CitizenProfile.php">Công dân</a>'
    $('#subpage-path').html(subpage);

    selected_function = '<a href="CitizenAccountInfo.php">Thông tin tài khoản</a>';
    $('#selected-function-path').html(selected_function);

    $('#function-menu-title').text('Trang công dân');

    menu = '<br><a href="CitizenAccountInfo.php"><li>Thông tin tài khoản</li></a>';
    menu += '<br><a href="CitizenProfile.php"><li>Thông tin công dân</li></a>';
    menu += '<br><a href="CitizenRegistration.php"><li>Lịch đăng ký tiêm chủng</li></a>';
    menu += '<br><a href="CitizenCertificate.php"><li>Chứng nhận tiêm chủng</li></a>';
    menu += '<br><a href="#"><li>Tra cứu thông tin</li></a>';
    menu += '<br><a href="#"><li>Thêm người thân</li></a>';

    $('#function-menu-list').find('ul').html(menu);
    // END LOAD FRONT END DATA

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
        if (phone == "") {
            $('.account').find('.msg1').text("Nhập số điện thoại!");
            return;
        }

        repeat_new_password = $('.change-pass input[name="repeat-new-password"]').val();
        if (phone == "") {
            $('.account').find('.msg1').text("Nhập số điện thoại!");
            return;
        }

        $.ajax({
            cache: false,
            url: "HandleUpdateAccount.php",
            type: "POST",
            data: { method: "UpdateAccount", phone: phone, password: password, new_password: new_password },
            success: function (result) {

            },
            error: function (error) {

            }
        })
    })
})