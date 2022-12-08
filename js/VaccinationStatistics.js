var xValues = ["Tháng 1","Tháng 2","Tháng 3","Tháng 4","Tháng 5","Tháng 6","Tháng 7","Tháng 8","Tháng 9","Tháng 10","Tháng 11","Tháng 12"];

new Chart("myChart", {
type: "line",
data: {
    labels: xValues,
    datasets: [{ 
    data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
    borderColor: "red",
    // fill: false
    }, { 
     data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,9000],
    borderColor: "green",
    // fill: false
    }, { 
    data: [300,700,2000,5000,6000,4000,2000,1000,200,100],
    borderColor: "blue",
    // fill: false
    }]
 },
options: {
    legend: {display: false}
    
}
});

new Chart("myChart1", {
    type: "bar",
    data: 
    {
        labels: xValues,
        datasets: [
    {
        type:"line",
        data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
        borderColor: "blue",
        fill: false
        
    }, 

    { 
        data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,9000],
        borderColor: "green",
        fill: false
    }, 

    { 
        data: [300,700,2000,5000,6000,4000,2000,1000,200,100],
        borderColor: "blue",
        fill: false
    }
    ,

    {
        type: "line",
        data: [200,400,1000,1230,1234,4534,2423,2432,234,345,234,123,545,234,234],
        borderColor:"black",
        fill: false
    },
]
    },
    options: {
        legend: {display: false}
        // layout: {padding: {left:50}}
    }

});

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

        // _token = $('input[name="_token"]').val();

        // alert(start_date); 
        // myChart='<p class="holder-function-panel"></p>'
        // myChart+='<canvas id="myChart" style="width:20%;max-width:500px; display:inline; align-items: center;margin-left: 50px;margin-right: 50px"></canvas>'
        // $('.holder-function-panel .function-panel').html(myChart);
        // alert(end_date);

        // aaa='<canvas id="myChart1"></canvas>'
        // $('.holder-function-panel .function-panel').add(aaa);
        alert('Bước 1')
        $.ajax({
            url:'VaccinationStatistics.php',
            method:"post",
            dataType: "JSON",
            data:{[100]:[123123]},

            success:function(data)
            {
                alert('kiểm tra biểu đồ');
                myChart.setData(data);
                alert('thành công');
            }
            // alert('Bước2') 
        })
        alert('Kết thúc ajax');
        })
    
})



