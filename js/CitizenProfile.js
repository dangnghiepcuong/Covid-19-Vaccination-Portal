$(document).ready(function () {
    // LOAD FRONT END DATA
    menu_title = "<a href='CitizenProfile.php'>Thông tin công dân</a>";
    $("#function-navigation-bar-title").html(menu_title);

    homepage = "<a href='HomepageCitizen.php'>Trang chủ</a>";
    $("#homepage-path").html(homepage);

    subpage = "<a href='CitizenProfile.php'>Công dân</a>"
    $("#subpage-path").html(subpage);

    selected_function = "<a href='CitizenProfile.php'>Thông tin công dân</a>";
    $("#selected-function-path").html(selected_function);

    $("#function-menu-title").text("Trang công dân");

    menu = "<br><a href='CitizenAccountInfo.php'><li>Thông tin tài khoản</li></a>";
    menu += "<br><a href='CitizenProfile.php'><li>Thông tin công dân</li></a>";
    menu += "<br><a href='CitizenRegistration.php'><li>Lịch đăng ký tiêm chủng</li></a>";
    menu += "<br><a href='CitizenCertificate.php'><li>Chứng nhận tiêm chủng</li></a>";
    menu += "<br><a href='#'><li>Tra cứu thông tin</li></a>";
    menu += "<br><a href='#'><li>Thêm người thân</li></a>";

    $("#function-menu-list").find("ul").html(menu);
    // END LOAD FRONT END DATA

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

    $("#cancel-update-profile").click(function () {
        location.reload();
    })

    $("#update-profile").click(function () {
        lastname = $('#info-panel').find('input[name="lastname"]').val();
        firstname = $('#info-panel').find('input[name="firstname"]').val();
        gender = $('#info-panel').find('select[name="gender"] option:selected').val();
        id = $('#info-panel').find('input[name="id"]').val();
        birthday = $('#info-panel').find('input[name="birthday"]').val();
        hometown = $('#select-hometown').find('option:selected').text();
        province = $('#select-province').find('option:selected').text();
        district = $('#select-district').find('option:selected').text();
        town = $('#select-town').find('option:selected').text();
        street = $('#info-panel').find('input[name="street"]').val();
        email = $('#info-panel').find('input[name="email"]').val();

        $.ajax({
            cache: false,
            url: "HandleUpdateProfile.php",
            type: "POST",
            data: {
                method: 'UpdateCitizenProfile', lastname: lastname, firstname: firstname,
                gender: gender, id: id, birthday: birthday, hometown: hometown, province: province,
                district: district, town: town, street: street, email: email
            },
            success: function (result) {
                $('.form-message').text('Cập nhật thông tin thành công!');
                $('.form-popup-confirm').css('display', 'block');
                $('.gradient-bg-faded').css('display', 'block');
            },
            error: function () {

            }
        })
    })
})

