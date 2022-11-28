$(document).ready(function () {
    // LOAD FRONT END DATA

    menu_title = "<a href='VaccinationRegistration.php'>Đăng ký tiêm chủng</a>";
    $("#function-navigation-bar-title").html(menu_title);

    homepage = "<a href='HomepageCitizen.php'>Trang chủ</a>";
    $("#homepage-path").html(homepage);

    subpage = "<a href='VaccinationRegistration.php'>Tiêm chủng</a>";
    $("#subpage-path").html(subpage);

    selected_function = "<a href='VaccinationRegistration.php'>Đăng ký tiêm chủng</a>";
    $("#selected-function-path").html(selected_function);

    var today = new Date();
    var day = ("0" + today.getDate()).slice(-2);
    var month = ("0" + (today.getMonth() + 1)).slice(-2);
    var today = today.getFullYear() + "-" + (month) + "-" + (day);
    $('#start-date').val(today);
    // END LOAD FRONT END DATA

    LoadOrg();

    $('#btn-filter-org').click(function () {
        LoadOrg();
    })

    function LoadOrg() {
        province = $('#select-province').find('option:selected').text();
        district = $('#select-district').find('option:selected').text();
        town = $('#select-town').find('option:selected').text();

        $.ajax({
            cache: false,
            url: 'HandleLoadOrgSchedule.php',
            type: 'POST',
            data: { method: 'LoadOrg', province: province, district: district, town: town },
            success: function (result) {
                if (result.substring(0, 5) == 'ERROR') {    //EXCEPTION
                    alert(result);
                    return;
                }
                $('#list-org').html(result);
            },
            error: function (error) {
            }
        })
    }


    $('#list-org').on('click', '.organization', function () {
        orgid = $(this).attr('id');
        $('.list-name').append();
        LoadSchedule(orgid);
    })

    $('#filter-schedule').on('change', '.organization', function () {

        LoadSchedule(orgid);
    })

    function LoadSchedule(orgid) {
        startdate = $('#start-date').val();
        enddate = $('#end-date').val();
        vaccine = $('#vaccine').find('option:selected').val();

        $.ajax({
            cache: false,
            url: 'HandleLoadOrgSchedule.php',
            type: 'POST',
            data: { method: 'LoadSchedule', orgid: orgid, startdate: startdate, enddate: enddate, vaccine: vaccine },
            success: function (result) {
                if (result.substring(0, 5) == 'ERROR') {    //EXCEPTION
                    alert(result);
                    return;
                }
                $('#list-schedule').html(result);
                // $('body').html(result);
            },
            error: function (error) {

            }
        })
    }

    // HANDLE REGISTER SCHEDULE
    $('#list-schedule').on('click', '.schedule .btn-register-schedule', function () {
        SchedID = $(this).parent().parent().attr('id');
        time = $(this).parent().find('select option:selected').val();
        $.ajax({
            cache: false,
            url: 'HandleRegisterVaccination.php',
            type: 'POST',
            data: { method: 'CheckRegistration' },
            success: function (result) {
                if (result.substring(0, 5) == 'ERROR') {    //EXCEPTION
                    alert(result);
                    return;
                }
                if (result == 1) {
                    $('#form-popup-option').find('.form-message').html('Bạn cần đăng ký tiêm mũi tăng cường hay nhắc lại?');
                    $('#form-popup-option').find('.holder-btn').html('<br><button class="btn-medium-filled" value="booster">Tăng cường</button>'
                        + '<button class="btn-medium-bordered" value="repeat">Nhắc lại</button>'
                        + '<button class="btn-medium-bordered" value="cancel">Hủy</button>');
                    $('#form-popup-option').css('display', 'grid');
                    $('#gradient-bg-faded').css('display', 'block');

                    $('#form-popup-option').on('click', 'button', function () {
                        dosetype = $(this).val();
                        if (dosetype == 'cancel') {
                            $('#form-popup-option').css('display', 'none');
                            $('#gradient-bg-faded').css('display', 'none');
                            return;
                        }
                        RegisterVaccination(SchedID, dosetype, time);
                    })
                }
                else {
                    dosetype = '';
                    RegisterVaccination(SchedID, dosetype, time);
                }
            },
            error: function (error) {
            }
        })
    })

    function RegisterVaccination(SchedID, dosetype, time) {
        $.ajax({
            cache: false,
            url: 'HandleRegisterVaccination.php',
            type: 'POST',
            data: { method: 'RegisterVaccination', SchedID: SchedID, time, dosetype: dosetype },
            success: function (result) {
                if (result.substring(0, 5) == 'ERROR') {    //EXCEPTION
                    alert(result);
                    return;
                }
            },
            error: function (error) {
            }
        })
    }
})