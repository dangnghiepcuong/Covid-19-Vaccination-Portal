$(document).ready(function () {

    // LOAD FRONT END DATA
    menu_title = '<a href="VaccinationSatistics.php">Thống kê số liệu tiêm chủng</a>'
    $('#function-navigation-bar-title').html(menu_title)

    homepage = '<a href="HomepageORG.php">Trang chủ</a>'
    $('#homepage-path').html(homepage)

    subpage = '<a href="VaccinationSatistics.php">Thống kê</a>'
    $('#subpage-path').html(subpage)

    selected_function = '<a href="VaccinationSatistics.php">Thống kê số liệu tiêm chủng</a>'
    $('#selected-function-path').html(selected_function)
    // END LOAD FRONT END DATA

    $('#btn-filter-schedule').click(function () {

        //Lay ngay bat dau va ket thuc
        start_date = $('#start-date').val()
        end_date = $('#end-date').val()

        
        var xValues = [100,200,300,400,500,600,700,800,900,1000];

                        new Chart("myChart", {
                        type: "line",
                        data: {
                            labels: xValues,
                            datasets: [{ 
                            data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
                            borderColor: "red",
                            fill: false
                            }, { 
                             data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,9000],
                            borderColor: "green",
                            fill: false
                            }, { 
                            data: [300,700,2000,5000,6000,4000,2000,1000,200,100],
                            borderColor: "blue",
                            fill: false
                            }]
                         },
                        options: {
                            legend: {display: false}
                        }
                        });

        _token = $('input[name="_token"]').val();

        // $.ajax({
        //     url: "{{url('/filter-by-data')}}",
        //     method: "POST",
        //     dataType:"JSON",
        //     data:(start_date:start_date, end_date:end_date, _token:_token),

        //     success:function(data)
        //     {
        //         chart:setData(data);
        //     }
        // })

        alert(start_date); 
        alert(end_date);

    })
})



