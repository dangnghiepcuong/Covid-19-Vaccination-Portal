$(document).ready(function () {

    // LOAD FRONT END DATA
    menu_title = '<a href="ScheduleManagement.php">Danh sách lịch tiêm</a>';
    $('#function-navigation-bar-title').html(menu_title);

    homepage = '<a href="HomepageORG.php">Trang chủ</a>';
    $('#homepage-path').html(homepage);

    subpage = '<a href="ScheduleManagement.php">Lịch tiêm</a>'
    $('#subpage-path').html(subpage);

    selected_function = '<a href="ScheduleManagement.php">Danh sách lịch tiêm</a>';
    $('#selected-function-path').html(selected_function);
    // END LOAD FRONT END DATA

    var today = new Date();
    var day = ('0' + today.getDate()).slice(-2);
    var month = ('0' + (today.getMonth() + 1)).slice(-2);
    var today = today.getFullYear() + '-' + (month) + '-' + (day);
    // $('#start-date').val(today);
    // $('#end-date').val(today);

    // LOAD SCHEDULE DATA
    LoadSchedule($('.orgid').attr('id'));

    $('#btn-filter-schedule').click(function () {
        LoadSchedule($('.orgid').attr('id'));
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
            },
            error: function (error) {
            }
        })
    }

    $('#list-schedule').on('click', '.btn-registration', function(){
        SchedID = $(this).parent().parent().attr('id');
        $.ajax({
            cache: false,
            url: 'HandleScheduleManagement.php',
            type: 'POST',
            data: { method: 'LoadScheduleRegistration', SchedID: SchedID },
            success: function (result) {
                alert(result)
                if (result.substring(0, 5) == 'ERROR') {    //EXCEPTION
                    alert(result);
                    return;
                }
                $('#list-registration').html(result);
            },
            error: function (error) {
            }
        })
    })
})