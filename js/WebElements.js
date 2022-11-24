$(document).ready(function () {
    // BUTTON ANIMATION
    $(".btn-short-filled, .btn-short-bordered, .btn-medium-filled, .btn-medium-bordered, .btn-medium-bordered-icon, .btn-long-bordered, .btn-long").mouseover(function () {
        $(this).css('opacity', '0.6')
    })

    $(".btn-short-filled, .btn-short-bordered, .btn-medium-filled, .btn-medium-bordered, .btn-medium-bordered-icon, .btn-long-bordered, .btn-long").mousedown(function () {
        $(this).css('opacity', '8')
    })

    $(".btn-short-filled, .btn-short-bordered, .btn-medium-filled, .btn-medium-bordered, .btn-medium-bordered-icon, .btn-long-bordered, .btn-long").mouseup(function () {
        $(this).css('opacity', '0.6')
    })

    $(".btn-short-filled, .btn-short-bordered, .btn-medium-filled, .btn-medium-bordered, .btn-medium-bordered-icon, .btn-long-bordered, .btn-long").mouseout(function () {
        $(this).css('opacity', '1')
    })

    // LOAD LOCAL LIST DATA
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

    // HANDLE GRADIENT BG CLICK
    $('#gradient-bg-faded, .btn-confirm').click(function () {
        $('#form-container-reg-acc').css('display', 'none');
        $('#form-container-login').css('display', 'none');
        $('#form-popup-confirm').css('display', 'none');
        $('#gradient-bg-faded').css('display', 'none');
        $('#container-reg-profile').css('display', 'none');
        $('.message').text("");
    })
})