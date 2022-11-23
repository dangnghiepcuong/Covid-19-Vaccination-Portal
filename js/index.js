$(document).ready(function () {
    $('#btn-login').click(function () {
        $('#gradient-bg-faded').css('display', 'block');
        $('#form-container-login').css('display', 'block');
    })

    $('#btn-close-form-login').click(function () {
        $('#gradient-bg-faded').css('display', 'none');
        $('#form-container-login').css('display', 'none');
        $(this).parent().find('.message').text("");
    })

    $('#btn-create-account').click(function () {
        $('#form-container-login').css('display', 'none');
        $('#form-container-reg-acc').css('display', 'block');
    })

    $('#btn-close-form-reg-acc').click(function () {
        $('#gradient-bg-faded').css('display', 'none');
        $('#form-container-reg-acc').css('display', 'none');
        $(this).parent().find('.message').text("");
    })

    $('#btn-login-in-form-reg-acc').click(function () {
        $('#form-container-reg-acc').css('display', 'none');
        $('#form-container-login').css('display', 'block');
    })

    // LOAD LOCAL LIST DATA ON SELECT
    $.getJSON('local.json', function (data) {
        i = 0;
        province = data[i];
        while (typeof (province) != 'undefined' && province !== null) {
            $('#select-hometown').append('<option value="' + i + '">' + province.name + '</option>');
            $('#select-province').append('<option value="' + i + '">' + province.name + '</option>');
            i++;
            province = data[i];
        }
    })

    $('#select-province').on('change', function () {
        $('option:selected', this);
        SelectedProvince = this.value;

        $('#select-district').html('<option></option>');
        $('#select-town').html('<option></option>');

        $.getJSON('local.json', function (data) {
            i = 0;
            district = data[SelectedProvince].districts[i];
            while (typeof (district) != 'undefined' && district !== null) {
                $('#select-district').append('<option value="' + i + '">' + district.name + '</option>');
                i++;
                district = data[SelectedProvince].districts[i];
            }
        })
    })

    $('#select-district').on('change', function () {
        $('option:selected', this);
        SelectedDistrict = this.value;
        SelectedProvince = $('#select-province option:selected').val();

        $('#select-town').html('<option></option>');

        $.getJSON('local.json', function (data) {
            i = 0;
            town = data[SelectedProvince].districts[SelectedDistrict].wards[i];
            while (typeof (town) != 'undefined' && town !== null) {
                $('#select-town').append('<option value="' + i + '">' + town.name + '</option>');
                i++;
                town = data[SelectedProvince].districts[SelectedDistrict].wards[i];
            }
        })
    })
    // END LOAD LOCAL LIST DATA SELECT

    $('#close_reg_person_profile').click(function () {
        $('.container-reg-profile').css('display', 'none');
    })

    // HANDLE LOGIN
    $('#btn-login-in-form-login').click(function () {
        $('#form-container-login').find('.msg1').text('');
        $('#form-container-login').find('.msg2').text('');

        username = $('#form-login').find('input[name="username"').val();
        if (username == '') {
            $('#form-login').find('.msg1').text('Nhập SĐT/Tên tài khoản!');
            return;
        }
        password = $('#form-login').find('input[name="password"').val();
        if (password == '') {
            $('#form-login').find('.msg2').text('Nhập mật khẩu!');
            return;
        }
        $.ajax({
            cache: false,
            url: 'HandleLogin.php',
            type: 'POST',
            data: { username: username, password: password },
            success: function (result) {    //button click to login
                if (result.substring(1, 5) == 'ERROR') {    //EXCEPTION
                    alert(result);
                    return;
                }
                if (result == 'NoAccount') {    //No Account Existed
                    $('#form-container-login').find('.msg1').text('Tài khoản không tồn tại!');
                    return;
                }
                if (result == 'NoProfile') {    //No Profile Existed
                    $('#gradient-bg-faded').css('display', 'block');
                    $('.container-reg-profile').css('display', 'block');
                    return;
                }
                if (result == 'incorrect password') {   //Incorrect Password
                    $('#form-container-login').find('.msg2').text('Sai mật khẩu!');
                    return;
                }
                // $('body').html(result);
                location.reload(true);
            },
            error: function (error) {
                $('body').html(error);
            }
        });

    })

    //HANDLE REGISTER ACCOUNT
    $('#btn-reg-acc').click(function () {   //button click register account
        $('#form-container-login').css('display', 'none');

        $('#form-reg-acc').find('.msg1').text('');
        $('#form-reg-acc').find('.msg2').text('');
        $('#form-reg-acc').find('.msg3').text('');
        username = $('#form-reg-acc input[name="phone_number"]').val();
        if (username == '') {
            $('#form-reg-acc').find('.msg1').text('Nhập số điện thoại!');
            return;
        }

        $.ajax({
            cache: false,
            url: 'HandleRegAcc.php',
            type: 'POST',
            data: { method: 'CheckExist', username: username },
            success: function (result) {    //check if account existed
                if (result.substring(1, 5) == 'ERROR') {
                    alert(result);
                    return;
                }
                // $('body').html(result);

                if (result == 'Account Existed!') {     //account existed
                    $('#form-reg-acc').find('.msg1').text('Số điện thoại đã được sử dụng!');
                }
                else {                                  //register account
                    password = $('#form-reg-acc input[name="password"]').val();
                    if (password == '') {
                        $('#form-reg-acc').find('.msg2').text('Nhập mật khẩu!');
                        return;
                    }
                    repeat_password = $('#form-reg-acc input[name="repeat-password"]').val();
                    if (repeat_password == '') {
                        $('#form-reg-acc').find('.msg3').text('Nhập lại mật khẩu!');
                        return;
                    }

                    $.ajax({
                        cache: false,
                        type: 'POST',
                        data: { method: 'RegisterAccount', username: username, password: password },
                        url: 'HandleRegAcc.php',
                        success: function (data) {
                            if (data.substring(1, 5) == 'ERROR') {
                                alert(data);
                                return;
                            }
                        },
                        error: function (error) {
                            $('body').html(error);
                        }
                    })
                    $('.container-reg-profile').css('display', 'block');
                }
            },
            error: function (error) {
                $('body').html(error);
            }
        })
    })

    // HANDLE REGISTER USER PROFILE
    $('#btn-reg-profile').click(function () {       //button click register profile
        lastname = $('#container-reg-profile').find('input[name="lastname"]').val();
        firstname = $('#container-reg-profile').find('input[name="firstname"]').val();
        gender = $('#container-reg-profile').find('select[name="gender"] option:selected').val();
        id = $('#container-reg-profile').find('input[name="id"]').val();
        birthday = $('#container-reg-profile').find('input[name="birthday"]').val();
        hometown = $('#select-hometown').find('option:selected').text();
        province = $('#select-province').find('option:selected').text();
        district = $('#select-district').find('option:selected').text();
        town = $('#select-town').find('option:selected').text();
        street = $('#container-reg-profile').find('input[name="street"]').val();
        email = $('#container-reg-profile').find('input[name="email"]').val();

        $.ajax({
            cache: false,
            url: 'HandleRegAcc.php',
            type: 'POST',
            data: {
                method: 'RegisterProfile', lastname: lastname, firstname: firstname,
                gender: gender, id: id, birthday: birthday, hometown: hometown, province: province,
                district: district, town: town, street: street, email: email
            },
            success: function (data) {
                alert(data);
                if (data.substring(0, 4) == 'ERROR') {
                    alert(data);
                    return;
                }
                if (data == 'Profile Created!') {
                    $('#container-reg-profile').css('display', 'none');
                    $('.form-message').text('Đăng ký thông tin tài khoản thành công!');
                    $('#form-popup-confirm').css('display', 'block');
                }
                else
                    $('body').html(data);
            },
            error: function (error) {
                $('body').html(error);
            }
        })
    })
})