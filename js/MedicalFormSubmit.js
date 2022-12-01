$(document).ready(function () {
    // LOAD FRONT END DATA
    menu_title = '<a href="MedicalFormSubmit.php">Tờ khai y tế</a>';
    $('#function-navigation-bar-title').html(menu_title);

    homepage = '<a href="HomepageCitizen.php">Trang chủ</a>';
    $('#homepage-path').html(homepage);

    subpage = '<a href="MedicalFormSubmit.php">Khai báo</a>';
    $('#subpage-path').html(subpage);

    selected_function = '<a href="MedicalFormSubmit.php">Tờ khai y tế</a>';
    $('#selected-function-path').html(selected_function);

    $('#function-menu-title').text('Trang khai báo y tế');

    menu = '<br><a href="MedicalFormSubmit.php"><li>Tờ khai y tế</li></a>';
    menu += '<br><a href="MedicalFormList.php"><li>Danh sách tờ khai</li></a>';

    $('#function-menu-list').find('ul').html(menu);

    var today = new Date();
    var day = ('0' + today.getDate()).slice(-2);
    var month = ('0' + (today.getMonth() + 1)).slice(-2);
    var today = today.getFullYear() + '-' + (month) + '-' + (day);
    $('#input-date').val(today);
    // END LOAD FRONT END DATA

    // HANDLE ACTION
    $('#btn-submit').click(function () {

        $('#form-popup-option').find('.form-message').html('Xác nhận khai báo y tế?');
        $('#form-popup-option').css('display', 'grid');
        $('#gradient-bg-faded').css('display', 'block');

        $('#form-popup-option').on('click', '.btn-cancel', function () {
            $('#form-popup-option').css('display', 'none');
            $('#gradient-bg-faded').css('display', 'none');
        })

        $('#form-popup-option').on('click', '.btn-confirm', function () {
            SubmitMedicalForm();
        })

    })

    function SubmitMedicalForm() {
        q1 = $('input[type="radio"][name="q1"]:checked').val();
        q2 = $('input[type="radio"][name="q2"]:checked').val();
        q3 = $('input[type="radio"][name="q3"]:checked').val();
        q4 = $('input[type="radio"][name="q4"]:checked').val();
        if (!$('input[name="q1"]:checked').val() || !$('input[name="q2"]:checked').val() || !$('input[name="q3"]:checked').val() || !$('input[name="q4"]:checked').val()) {
            alert('Bạn chưa chọn câu trả lời!');
            return;
        }
        choice = q1 + q2 + q3 + q4;

        filleddate = $('#input-date').val();

        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        var yyyy = today.getFullYear();
        today = yyyy + '-' + mm + '-' + dd;

        if (new Date(filleddate).getTime() > new Date(today).getTime()) {
            $('.form-message').text('Ngày khai báo không hợp lệ!');
            $('#form-popup-confirm').css('display', 'grid');
            $('#gradient-bg-faded').css('display', 'block');
            return;
        }

        $.ajax({
            cache: false,
            url: 'HandleMedicalForm.php',
            type: 'POST',
            data: { filleddate: filleddate, choice: choice },
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
    }
})
