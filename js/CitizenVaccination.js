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
                $('#list-org').html(result);
            },
            error: function (error) {
            }
        })
    }

    LoadSchedule();
    

    $('#list-org, #filter-schedule').on('click change', '.organization', function () {
        orgid = $(this).attr('id');
        LoadSchedule(orgid);
    })

    function LoadSchedule(orgid = -1) {
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
})