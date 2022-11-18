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

    menu = "<br><li>Thông tin tài khoản</li>";
    menu += "<br><li>Thông tin công dân</li>";
    menu += "<br><li>Lịch đăng ký tiêm chủng</li>";
    menu += "<br><li>Chứng nhận tiêm chủng</li>";
    menu += "<br><li>Tra cứu thông tin</li>";
    menu += "<br><li>Thêm người thân</li>";

    $("#function-menu-list").find("ul").html(menu);
    // END LOAD FRONT END DATA

    $("#select-province").on('change',function(){
        $('option:selected', this);
        SelectedProvince = this.value;

        $("#select-district").html('<option></option>');
        $("#select-town").html('<option></option>');

        $.getJSON('local.json', function(data){
            i = 0;
            district = data[SelectedProvince].districts[i];
            while (typeof(district) != "undefined" && district !== null)
            {
                $("#select-district").append('<option value="'+ i +'">'+ district.name +'</option>');
                i++;
                district = data[SelectedProvince].districts[i];
            }
        })
    })

    $("#select-district").on('change',function(){
        $('option:selected', this);
        SelectedDistrict = this.value;
        SelectedProvince = $("#select-province option:selected").val();

        $("#select-town").html('<option></option>');

        $.getJSON('local.json', function(data){
            i = 0;
            town = data[SelectedProvince].districts[SelectedDistrict].wards[i];
            while (typeof(town) != "undefined" && town !== null)
            {
                $("#select-town").append('<option value="'+ i +'">'+ town.name +'</option>');
                i++;
                town = data[SelectedProvince].districts[SelectedDistrict].wards[i];
            }
        })
    })
})

