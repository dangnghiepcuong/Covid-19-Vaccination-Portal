$(document).ready(function () {
    $("#btn-login").click(function () {
        $("#gradient-bg-faded").css('display', 'block');
        $("#form-container-login").css('display', 'block');
    })

    $("#btn-close-form-login").click(function () {
        $("#gradient-bg-faded").css('display', 'none');
        $("#form-container-login").css('display', 'none');
    })

    $("#btn-create-account").click(function () {
        $("#form-container-login").css('display', 'none');
        $("#form-container-reg-acc").css('display', 'block');
    })

    $("#btn-close-form-reg-acc").click(function () {
        $("#form-reg-acc").find(".msg1").text("");
        $("#form-reg-acc").find(".msg2").text("");
        $("#form-reg-acc").find(".msg3").text("");

        $("#gradient-bg-faded").css('display', 'none');
        $("#form-container-reg-acc").css('display', 'none');
    })

    $("#btn-login-in-form-reg-acc").click(function () {
        $("#form-container-reg-acc").css('display', 'none');
        $("#form-container-login").css('display', 'block');
    })

    // LOAD LOCAL LIST DATA ON SELECT
    $.getJSON('local.json', function (data) {
        i = 0;
        province = data[i];
        while (typeof (province) != "undefined" && province !== null) {
            $("#select-hometown").append('<option value="' + i + '">' + province.name + '</option>');
            $("#select-province").append('<option value="' + i + '">' + province.name + '</option>');
            i++;
            province = data[i];
        }
    })

    $("#select-province").on('change', function () {
        $('option:selected', this);
        SelectedProvince = this.value;

        $("#select-district").html('<option></option>');
        $("#select-town").html('<option></option>');

        $.getJSON('local.json', function (data) {
            i = 0;
            district = data[SelectedProvince].districts[i];
            while (typeof (district) != "undefined" && district !== null) {
                $("#select-district").append('<option value="' + i + '">' + district.name + '</option>');
                i++;
                district = data[SelectedProvince].districts[i];
            }
        })
    })

    $("#select-district").on('change', function () {
        $('option:selected', this);
        SelectedDistrict = this.value;
        SelectedProvince = $("#select-province option:selected").val();

        $("#select-town").html('<option></option>');

        $.getJSON('local.json', function (data) {
            i = 0;
            town = data[SelectedProvince].districts[SelectedDistrict].wards[i];
            while (typeof (town) != "undefined" && town !== null) {
                $("#select-town").append('<option value="' + i + '">' + town.name + '</option>');
                i++;
                town = data[SelectedProvince].districts[SelectedDistrict].wards[i];
            }
        })
    })
    // END LOAD LOCAL LIST DATA SELECT

    $("#close_reg_person_profile").click(function () {
        $(".container-reg-profile").css('display', 'none');
    })

    // HANDLE GRADIENT BG CLICK
    $("#gradient-bg-faded, .btn-confirm").click(function () {
        $("#form-container-reg-acc").css('display', 'none');
        $("#form-container-login").css('display', 'none');
        $(".form-popup-confirm").css('display', 'none');
        $("#gradient-bg-faded").css('display', 'none');
        $("#container-reg-profile").css('display', 'none');
    })

    // HANDLE LOGIN
    $("#btn-login-in-form-login").click(function () {
        username = $("#form-login").find("input[name='username'").val();
        if (username == "") {
            $("#form-login").find(".msg1").text("Nhập SĐT/Tên tài khoản!");
            return;
        }
        password = $("#form-login").find("input[name='password'").val();
        if (password == "") {
            $("#form-login").find(".msg2").text("Nhập mật khẩu!");
            return;
        }
        $.ajax({
            cache: false,
            url: "HandleLogin.php",
            type: "POST",
            data: { username: username, password: password },
            success: function (result) {
                // $("body").html(result);
                location.reload(true);
            },
            error: function (error) {
                $("body").html(error);
            }
        });

    })

    //HANDLE REGISTER ACCOUNT
    $('#btn-reg-acc').click(function () {
        $("#form-reg-acc").find(".msg1").text("");
        $("#form-reg-acc").find(".msg2").text("");
        $("#form-reg-acc").find(".msg3").text("");
        username = $("#form-reg-acc input[name='phone_number']").val();
        if (username == "") {
            $("#form-reg-acc").find(".msg1").text("Nhập số điện thoại!");
            return;
        }

        $.ajax({
            cache: false,
            url: "HandleRegAcc.php",
            type: "POST",
            data: { method: "CheckExist", username: username },
            success: function (result) {
                if (parseInt(result) == 1) {
                    $("#form-reg-acc").find(".msg1").text("Số điện thoại đã được sử dụng!");
                    $("#form-reg-acc").find(".msg1").val(1);
                }
            },
            error: function (error) {
                $("body").html(error);
            }
        })

        if ($("#form-reg-acc").find(".msg1").val() == 1) {
            $("#form-reg-acc").find(".msg1").val(0);
            return;
        }

        password = $("#form-reg-acc input[name='password']").val();
        if (password == "") {
            $("#form-reg-acc").find(".msg2").text("Nhập mật khẩu!");
            return;
        }
        repeat_password = $("#form-reg-acc input[name='repeat-password']").val();
        if (repeat_password == "") {
            $("#form-reg-acc").find(".msg3").text("Nhập lại mật khẩu!");
            return;
        }

        $.ajax({
            cache: false,
            data: { method: 'DatabaseConnection' },
            url: "HandleRegAcc.php",
            success: function(result) {
                
            },
            error: function(error) {
                $("body").html(error);
            }
        })

        $("#gradient-bg-faded").css('display', 'block');
        $(".container-reg-profile").css('display', 'block');
    })

    // HANDLE REGISTER USER PROFILE
    $("#btn-reg-profile").click(function () {
        last_name = $("#container-reg-profile").find("input[name='last_name'").val();
        first_name = $("#container-reg-profile").find("input[name='first_name'").val();
        gender = $("#container-reg-profile").find("input[name='gender'").val();
        id = $("#container-reg-profile").find("input[name='id'").val();
        birthday = $("#container-reg-profile").find("input[name='birthday'").val();
        hometown = $("#select-hometown").find("option:selected").text();
        province = $("#select-province").find("option:selected").text();
        district = $("#select-district").find("option:selected").text();
        town = $("#select-town").find("option:selected").text();
        street = $("#container-reg-profile").find("input[name='street'").val();
        email = $("#container-reg-profile").find("input[name='email'").val();

        $.ajax({
            cache: false,
            url: "HandleRegAcc.php",
            type: "POST",
            data: {
                method: "RegisterAccount", last_name: last_name, first_name: first_name,
                gender: gender, id: id, birthday: birthday, hometown: hometown, province: province,
                district: district, town: town, street: street, email: email
            },
            success: function(result) {
                
            },
            error: function(error) {

            }
        })
    })
})