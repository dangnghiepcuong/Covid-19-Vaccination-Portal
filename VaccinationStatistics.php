<?php
error_reporting(E_ERROR | E_PARSE);
define('browsable', true);

include("object_Account.php");
include("object_Schedule.php");
session_start();

// if logged in account has not register a profile then head to index.php
if (isset($_SESSION['AccountInfo']) == false)
    header("location:javascript://history.go(-1)");
// if there is not any profile was queried then head to index
if (isset($_SESSION['OrgProfile']) == false)
    header("location:javascript://history.go(-1)");

$org = $_SESSION['OrgProfile'];
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta html-equiv = "X-UA-Compatible" content ="IE=edge">
        <meta name ="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/VaccinationStatistics.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
        <link rel= "stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
        <script src="js/WebElements.js"></script>
        <!-- <script src="js/VaccinationStatistics.js"></script> -->

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <title>Thống kê số liệu tiêm chủng</title>


        <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
        <script
        src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
</script>
        <!-- <link rel="stylesheet" href="css/meanmenu.min.css"> -->
        

      
    <!-- <link rel="stylesheet" href="css/ORGSchedule.css"> -->
    </head>

    <body>
   
        <!-- HEADER -->
        <?php 
            include("headerORG.php");
        ?>
        <!-- END HEADER -->

        <!-- NAV -->
        <?php
            include("function-navigation-bar.php");
        ?>
        <!-- END NAV -->

        <br>

        <!-- FUNCTION PANEL -->
        <div class="holder-function-panel">
            <div class="function-panel">

                <br>
                <!-- Filter result by date -->
                <div class="panel-target-citizen">
                    <div class="filter-panel">
                        <div class="filter-pane" id="filter-schedule">
                            <label for="start-date">Từ ngày</label>
                            <input type="date" name="start-date" id="start-date">

                            <label for="end-date">Đến ngày</label>
                            <input type="date" name="end-date" id="end-date">
                    
                            <button class="btn-search" id="btn-filter-schedule">
                            <img src="image/filter-magnifier.png" alt="filter-magnifier">
                            Tìm kiếm
                            </button>  
                        </div>

                    </div>   
                </div>

                <!-- Data Overview -->
                <br>
                <div class="analytics-sparkle-area">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- Dữ liệu số mũi sáng -->
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <div class="analytics-sparkle-line reso-mg-b-30">
                                    <div class="analytics-content">
                                        <h5>Sáng</h5>
                                        <h2><span class="counter">5000</span> <span class="tuition-fees">Mũi tiêm</span></h2>
                                        <span class="text-success">20%</span>
                                        <div class="progress m-b-0">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"> <span class="sr-only">20% Complete</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Số mũi chiều -->
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <div class="analytics-sparkle-line reso-mg-b-30">
                                    <div class="analytics-content">
                                        <h5>Trưa</h5>
                                        <h2><span class="counter">3000</span> <span class="tuition-fees">Mũi tiêm</span></h2>
                                        <span class="text-danger">30%</span>
                                        <div class="progress m-b-0">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:30%;"> <span class="sr-only">230% Complete</span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Số mũi tối -->
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <div class="analytics-sparkle-line reso-mg-b-30 table-mg-t-pro dk-res-t-pro-30">
                                    <div class="analytics-content">
                                        <h5>Chiều</h5>
                                        <h2><span class="counter">2000</span> <span class="tuition-fees">Mũi tiêm</span></h2>
                                        <span class="text-info">60%</span>
                                        <div class="progress m-b-0">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:60%;"> <span class="sr-only">20% Complete</span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Tổng số mũi tiêm -->
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <div class="analytics-sparkle-line table-mg-t-pro dk-res-t-pro-30">
                                    <div class="analytics-content">
                                        <h5>Tổng số</h5>
                                        <h2><span class="counter">3500</span> <span class="tuition-fees">Mũi tiêm</span></h2>
                                        <span class="text-inverse">80%</span>
                                        <div class="progress m-b-0">
                                            <div class="progress-bar progress-bar-inverse" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:80%;"> <span class="sr-only">230% Complete</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                    </div>

                    <!--Statistical chart -->
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br><br>


                        <div class='Chart-1'>
                            <div id='dvChart' style="display:inline-block">                         
                                <canvas id="myChart"style="width:100%;max-width:500px; display:inline; align-items: center;margin-left: 28px;margin-right: 50px"></canvas>
                            </div>

                            <div id='dvChart2' style="display:inline-block" >  
                                <canvas id="myChart-2"style="width:100%;max-width:500px; display:inline; align-items: center;margin-left: 28px;margin-right: 50px"></canvas>                      
                            </div>       
                        </div>

                        <br>

                        <!-- <div class='Chart-2'>

                            <div id='dvChart1' style="display:inline-block" >  
                                <canvas id="myChart-1"style="width:100%;max-width:500px; display:inline; align-items: center;margin-left: 28px;margin-right: 50px"></canvas>                      
                            </div>

                            <div id='dvChart3' style="display:inline-block" >  
                                <canvas id="myChart-3"style="width:100%;max-width:500px; display:inline; align-items: center;margin-left: 28px;margin-right: 50px"></canvas>                      
                            </div>
                        </div> -->


                        <div class='col-lg-12 col-md-12 border-bound pt-3' style='margin-left:15px; margin-right:15px; margin-bottom: 20px; box-shadow: 0 4px 12px 0 rgb(34 41 47 / 12%)'>
                            <div class="row">
                                <div class="col-12 bg-white">
                                    <h2>Số liệu vaccine theo địa phương</h2>
                                </div>

                                <div class="col-12 bg-white overflow-auto" style="overflow: scroll;height: 600px;">
                                    <table class="table-striped" style="min-width: 1000px;width: 100%;">
                                        <thead>
                                            <tr>
                                              <th class="text-center" style="width: 42px;">STT</th>
                                              <th class="w100" style="width: 100px">Tỉnh/Thành phố</th>
                                              <th class="text-center">Dự kiến KH phân bổ</th>
                                              <th class="text-center">Phân bổ thực tế</th>
                                              <th class="text-center">Dân số &gt;= 18 tuổi</th>
                                              <th class="text-center">Số liều đã tiêm</th>
                                              <th class="text-center">Tỷ lệ dự kiến phân bổ theo kế hoạch/ dân số (&gt;= 18 tuổi)</th>
                                              <th class="text-center">Tỷ lệ đã phân bổ/ dân số (&gt;= 18 tuổi)</th>
                                              <th class="text-center">Tỷ lệ đã tiêm ít nhất 1 mũi/ dân số (&gt;= 18 tuổi)</th>
                                              <th class="text-center">Tỷ lệ tiêm chủng/ Vắc xin phân bổ thực tế</th>
                                              <th class="text-center">Tỷ lệ phân bổ vắc xin/Tổng số phân bổ cả nước</th>
                                            </tr>
                                        </thead _ngcontent-vfw-c15>

                                        <tbody style="height: 450px;">
                                            <!-- Ha Noi -->
                                                <tr class="ng-star-inserted" id="Ha-Noi">
                                                    <td   class="text-center" style="width: 42px;">1</td>
                                                    <td   class="text-left" style="width: 100px">Hà Nội </td>
                                                    <td   class="text-center">11,376,541</td>
                                                    <td   class="text-center">12,294,742</td>
                                                    <td   class="text-center">6,200,000</td>
                                                    <td   class="text-center">19,040,925</td>

                                                    <!--  -->
                                                    <td class="text-center">
                                                        <small class="d-flex w-100 clb">91.75 %</small>
                                                        <div class="progress" style="position: relative;height: 14px; border-radius: 15px;">
                                                            <div  class="progress-bar" role="progressbar" style="height: 14px; border-radius: 15px; background-color: rgb(198, 83, 18); width: 91.7463%;">
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <!--  -->
                                                    <td class="text-center">
                                                        <small class="d-flex w-100 clb">99.15 %</small>
                                                        <div class="progress" class="progress-1" style="position: relative;height: 14px; border-radius: 15px;">
                                                            <div  class="progress-bar" role="progressbar" style="height: 14px; border-radius: 15px; background-color: rgb(5, 147, 207); width: 99.1511%;">
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <!--  -->
                                                    <td class="text-center">
                                                        <small class="d-flex w-100 clb">213.39 %</small>
                                                        <div class="progress" class="progress-1" style="position: relative;height: 14px; border-radius: 15px;">
                                                            <div  class="progress-bar" role="progressbar" style="height: 14px; border-radius: 15px; background-color: rgb(0, 136, 79); width: 213.39%;">
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <!--  -->
                                                    <td class="text-center">
                                                        <small class="d-flex w-100 clb">154.87 %</small>
                                                        <div class="progress" class="progress-1" style="position: relative;height: 14px; border-radius: 15px;">
                                                            <div  class="progress-bar" role="progressbar" style="height: 14px; border-radius: 15px; background-color: rgb(175, 134, 18); width: 154.87%;">
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <!--  -->
                                                    <td class="text-center">
                                                        <small class="d-flex w-100 clb">9.05%</small>
                                                        <div class="progress" class="progress-1" style="position: relative;height: 14px; border-radius: 15px;">
                                                            <div class="progress-bar" role="progressbar" style="height: 14px; border-radius: 15px; background-color: rgb(45, 33, 136); width: 9.05%;">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <!-- HCM -->
                                                <tr class="ng-star-inserted" id="HCM">
                                                    <td class="text-center" style="width: 42px;">2</td>
                                                    <td class="text-left" style="width: 100px">Hồ Chí Minh </td>
                                                    <td class="text-center">13,794,299</td>
                                                    <td class="text-center">14,637,020</td>
                                                    <td class="text-center">7,208,800</td>
                                                    <td class="text-center">23,117,024</td>

                                                    <!--  -->
                                                    <td class="text-center">
                                                        <small class="d-flex w-100 clb">95.68 %</small>
                                                        <div class="progress" class="progress-1" style="position: relative;height: 14px; border-radius: 15px;">
                                                            <div class="progress-bar" role="progressbar" style="height: 14px; border-radius: 15px; background-color: rgb(198, 83, 18); width: 95.68%;">
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <!--  -->
                                                    <td class="text-center">
                                                        <small class="d-flex w-100 clb">101.52 %</small>
                                                        <div class="progress" class="progress-1" style="position: relative;height: 14px; border-radius: 15px;">
                                                            <div class="progress-bar" role="progressbar" style="height: 14px; border-radius: 15px; background-color: rgb(5, 147, 207); width: 101.52%;">
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <!--  -->
                                                    <td class="text-center">
                                                        <small class="d-flex w-100 clb">225.91 %</small>
                                                        <div class="progress" class="progress-1" style="position: relative;height: 14px; border-radius: 15px;">
                                                            <div class="progress-bar" role="progressbar" style="height: 14px; border-radius: 15px; background-color: rgb(0, 136, 79); width: 225.91%;">
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <!--  -->
                                                    <td class="text-center">
                                                        <small class="d-flex w-100 clb">157.94 %</small>
                                                        <div class="progress" class="progress-1" style="position: relative;height: 14px; border-radius: 15px;">
                                                            <div class="progress-bar" role="progressbar" style="height: 14px; border-radius: 15px; background-color: rgb(175, 134, 18); width: 157.94%;">
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <!--  -->
                                                    <td class="text-center">
                                                        <small class="d-flex w-100 clb">10.8 %</small>
                                                        <div class="progress" class="progress-1" style="position: relative;height: 14px; border-radius: 15px;">
                                                            <div class="progress-bar" role="progressbar" style="height: 14px; border-radius: 15px; background-color: rgb(45, 33, 136); width: 10.8%;">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <!-- Thanh Hoa -->
                                                <tr class="ng-star-inserted" id="Thanh-Hoa">
                                                    <td class="text-center" style="width: 42px;">3</td>
                                                    <td class="text-left" style="width: 100px">Thanh Hóa </td>
                                                    <td class="text-center">4,794,541</td>
                                                    <td class="text-center">3,877,590</td>
                                                    <td class="text-center">2,393,453</td>
                                                    <td class="text-center">9,297,198</td>

                                                    <!--  -->
                                                    <td class="text-center">
                                                        <small class="d-flex w-100 clb">100.16%</small>
                                                        <div class="progress" class="progress-1" style="position: relative;height: 14px; border-radius: 15px;">
                                                            <div class="progress-bar" role="progressbar" style="height: 14px; border-radius: 15px; background-color: rgb(198, 83, 18); width: 100.16%;">
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <!--  -->
                                                    <td class="text-center">
                                                        <small class="d-flex w-100 clb">81%</small>
                                                        <div class="progress" style="position: relative;height: 14px; border-radius: 15px;">
                                                            <div class="progress-bar" role="progressbar" style="height: 14px; border-radius: 15px; background-color: rgb(5, 147, 207); width:81%;">
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <!--  -->
                                                    <td class="text-center">
                                                        <small class="d-flex w-100 clb">238.72%</small>
                                                        <div class="progress" style="position: relative;height: 14px; border-radius: 15px;">
                                                            <div class="progress-bar" role="progressbar" style="height: 14px; border-radius: 15px; background-color: rgb(0, 136, 79); width: 238.72%;">
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <!--  -->
                                                    <td class="text-center">
                                                        <small class="d-flex w-100 clb">239.77%</small>
                                                        <div class="progress" style="position: relative;height: 14px; border-radius: 15px;">
                                                            <div class="progress-bar" role="progressbar" style="height: 14px; border-radius: 15px; background-color: rgb(175, 134, 18); width: 239.77%;">
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <!--  -->
                                                    <td class="text-center">
                                                        <small class="d-flex w-100 clb">2.85 %</small>
                                                        <div class="progress" style="position: relative;height: 14px; border-radius: 15px;">
                                                            <div  class="progress-bar" role="progressbar" style="height: 14px; border-radius: 15px; background-color: rgb(45, 33, 136); width: 2.85%;">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <!-- Nghe An -->
                                                <tr class="ng-star-inserted" id="Nghe-An">
                                                    <td class="text-center" style="width: 42px;">4</td>
                                                    <td class="text-left" style="width: 100px">Nghệ An</td>
                                                    <td class="text-center">4,267,816</td>
                                                    <td class="text-center">3,900,900</td>
                                                    <td class="text-center">1,960,668</td>
                                                    <td class="text-center">7,804,532</td>

                                                    <!--  -->
                                                    <td class="text-center">
                                                        <small class="d-flex w-100 clb">108.84%</small>
                                                        <div class="progress" style="position: relative;height: 14px; border-radius: 15px;">
                                                            <div class="progress-bar" role="progressbar" style="height: 14px; border-radius: 15px; background-color: rgb(198, 83, 18); width:108.84%;">
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <!--  -->
                                                    <td class="text-center">
                                                        <small class="d-flex w-100 clb">99.48%</small>
                                                        <div class="progress" style="position: relative;height: 14px; border-radius: 15px;">
                                                            <div class="progress-bar" role="progressbar" style="height: 14px; border-radius: 15px; background-color: rgb(5, 147, 207); width: 99.48%;">
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <!--  -->
                                                    <td class="text-center">
                                                        <small class="d-flex w-100 clb">250.61%</small>
                                                        <div class="progress" style="position: relative;height: 14px; border-radius: 15px;">
                                                            <div class="progress-bar" role="progressbar" style="height: 14px; border-radius: 15px; background-color: rgb(0, 136, 79); width: 250.61%;">
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <!--  -->
                                                    <td class="text-center">
                                                        <small class="d-flex w-100 clb">200.07%</small>
                                                        <div class="progress" style="position: relative;height: 14px; border-radius: 15px;">
                                                            <div class="progress-bar" role="progressbar" style="height: 14px; border-radius: 15px; background-color: rgb(175, 134, 18); width: 200.07%;">
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <!--  -->
                                                    <td class="text-center">
                                                        <small class="d-flex w-100 clb">2.87%</small>
                                                        <div class="progress" style="position: relative;height: 14px; border-radius: 15px;">
                                                            <div class="progress-bar" role="progressbar" style="height: 14px; border-radius: 15px; background-color: rgb(45, 33, 136); width: 2.87%;">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <!-- Dong Nai -->
                                                <tr class="ng-star-inserted" id="Dong Nai">
                                                    <td   class="text-center" style="width: 42px;">5</td>
                                                    <td   class="text-left" style="width: 100px">Đồng Nai </td>
                                                    <td   class="text-center">4,256,053</td>
                                                    <td   class="text-center">5,025,430</td>
                                                    <td   class="text-center">2,306,671</td>
                                                    <td   class="text-center">8,587,597</td>

                                                    <!--  -->
                                                    <td class="text-center">
                                                        <small class="d-flex w-100 clb">92.26%</small>
                                                        <div class="progress" style="position: relative;height: 14px; border-radius: 15px;">
                                                            <div  class="progress-bar" role="progressbar" style="height: 14px; border-radius: 15px; background-color: rgb(198, 83, 18); width: 92.26%;">
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <!--  -->
                                                    <td class="text-center">
                                                        <small class="d-flex w-100 clb">108.93%</small>
                                                        <div class="progress" style="position: relative;height: 14px; border-radius: 15px;">
                                                            <div  class="progress-bar" role="progressbar" style="height: 14px; border-radius: 15px; background-color: rgb(5, 147, 207); width: 108.93%;">
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <!--  -->
                                                    <td class="text-center">
                                                        <small class="d-flex w-100 clb">283.17 %</small>
                                                        <div class="progress" style="position: relative;height: 14px; border-radius: 15px;">
                                                            <div  class="progress-bar" role="progressbar" style="height: 14px; border-radius: 15px; background-color: rgb(0, 136, 79); width: 283.17%;">
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <!--  -->
                                                    <td class="text-center">
                                                        <small class="d-flex w-100 clb">170.88 %</small>
                                                        <div class="progress" style="position: relative;height: 14px; border-radius: 15px;">
                                                            <div  class="progress-bar" role="progressbar" style="height: 14px; border-radius: 15px; background-color: rgb(175, 134, 18); width: 170.88%;">
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <!--  -->
                                                    <td class="text-center">
                                                        <small class="d-flex w-100 clb">3.7 %</small>
                                                        <div class="progress" style="position: relative;height: 14px; border-radius: 15px;">
                                                            <div  class="progress-bar" role="progressbar" style="height: 14px; border-radius: 15px; background-color: rgb(45, 33, 136); width: 3.7%;">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <!-- Binh-Duong -->
                                                <tr class="ng-star-inserted" id="Binh-Duong">
                                                    <td class="text-center" style="width: 42px;">6</td>
                                                    <td class="text-left" style="width: 100px">Hồ Chí Minh </td>
                                                    <td class="text-center">13,794,299</td>
                                                    <td class="text-center">14,637,020</td>
                                                    <td class="text-center">7,208,800</td>
                                                    <td class="text-center">23,117,024</td>

                                                    <!--  -->
                                                    <td class="text-center">
                                                        <small class="d-flex w-100 clb">95.68 %</small>
                                                        <div class="progress" style="position: relative;height: 14px; border-radius: 15px;">
                                                            <div class="progress-bar" role="progressbar" style="height: 14px; border-radius: 15px; background-color: rgb(198, 83, 18); width: 95.68%;">
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <!--  -->
                                                    <td class="text-center">
                                                        <small class="d-flex w-100 clb">101.52 %</small>
                                                        <div class="progress" style="position: relative;height: 14px; border-radius: 15px;">
                                                            <div class="progress-bar" role="progressbar" style="height: 14px; border-radius: 15px; background-color: rgb(5, 147, 207); width: 101.52%;">
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <!--  -->
                                                    <td class="text-center">
                                                        <small class="d-flex w-100 clb">225.91 %</small>
                                                        <div class="progress" style="position: relative;height: 14px; border-radius: 15px;">
                                                            <div class="progress-bar" role="progressbar" style="height: 14px; border-radius: 15px; background-color: rgb(0, 136, 79); width: 225.91%;">
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <!--  -->
                                                    <td class="text-center">
                                                        <small class="d-flex w-100 clb">157.94 %</small>
                                                        <div class="progress" style="position: relative;height: 14px; border-radius: 15px;">
                                                            <div class="progress-bar" role="progressbar" style="height: 14px; border-radius: 15px; background-color: rgb(175, 134, 18); width: 157.94%;">
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <!--  -->
                                                    <td class="text-center">
                                                        <small class="d-flex w-100 clb">10.8 %</small>
                                                        <div class="progress" style="position: relative;height: 14px; border-radius: 15px;">
                                                            <div class="progress-bar" role="progressbar" style="height: 14px; border-radius: 15px; background-color: rgb(45, 33, 136); width: 10.8%;">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr class="ng-star-inserted" id="Ha-Noi">
                                                    <td   class="text-center" style="width: 42px;">7</td>
                                                    <td   class="text-left" style="width: 100px">Hà Nội </td>
                                                    <td   class="text-center">11,376,541</td>
                                                    <td   class="text-center">12,294,742</td>
                                                    <td   class="text-center">6,200,000</td>
                                                    <td   class="text-center">19,040,925</td>

                                                    <!--  -->
                                                    <td class="text-center">
                                                        <small class="d-flex w-100 clb">91.75 %</small>
                                                        <div class="progress" style="position: relative;height: 14px; border-radius: 15px;">
                                                            <div  class="progress-bar" role="progressbar" style="height: 14px; border-radius: 15px; background-color: rgb(198, 83, 18); width: 91.7463%;">
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <!--  -->
                                                    <td class="text-center">
                                                        <small class="d-flex w-100 clb">99.15 %</small>
                                                        <div class="progress" style="position: relative;height: 14px; border-radius: 15px;">
                                                            <div  class="progress-bar" role="progressbar" style="height: 14px; border-radius: 15px; background-color: rgb(5, 147, 207); width: 99.1511%;">
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <!--  -->
                                                    <td class="text-center">
                                                        <small class="d-flex w-100 clb">213.39 %</small>
                                                        <div class="progress" style="position: relative;height: 14px; border-radius: 15px;">
                                                            <div  class="progress-bar" role="progressbar" style="height: 14px; border-radius: 15px; background-color: rgb(0, 136, 79); width: 213.39%;">
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <!--  -->
                                                    <td class="text-center">
                                                        <small class="d-flex w-100 clb">154.87 %</small>
                                                        <div class="progress" style="position: relative;height: 14px; border-radius: 15px;">
                                                            <div  class="progress-bar" role="progressbar" style="height: 14px; border-radius: 15px; background-color: rgb(175, 134, 18); width: 154.87%;">
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <!--  -->
                                                    <td class="text-center">
                                                        <small class="d-flex w-100 clb">9.05 %</small>
                                                        <div class="progress" style="position: relative;height: 14px; border-radius: 15px;">
                                                            <div  class="progress-bar" role="progressbar" style="height: 14px; border-radius: 15px; background-color: rgb(45, 33, 136); width: 9.05%;">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <!-- HCM -->
                                                <tr class="ng-star-inserted" id="HCM">
                                                    <td class="text-center" style="width: 42px;">8</td>
                                                    <td class="text-left" style="width: 100px">Hồ Chí Minh </td>
                                                    <td class="text-center">13,794,299</td>
                                                    <td class="text-center">14,637,020</td>
                                                    <td class="text-center">7,208,800</td>
                                                    <td class="text-center">23,117,024</td>

                                                    <!--  -->
                                                    <td class="text-center">
                                                        <small class="d-flex w-100 clb">95.68 %</small>
                                                        <div class="progress" style="position: relative;height: 14px; border-radius: 15px;">
                                                            <div class="progress-bar" role="progressbar" style="height: 14px; border-radius: 15px; background-color: rgb(198, 83, 18); width: 95.68%;">
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <!--  -->
                                                    <td class="text-center">
                                                        <small class="d-flex w-100 clb">101.52 %</small>
                                                        <div class="progress" style="position: relative;height: 14px; border-radius: 15px;">
                                                            <div class="progress-bar" role="progressbar" style="height: 14px; border-radius: 15px; background-color: rgb(5, 147, 207); width: 101.52%;">
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <!--  -->
                                                    <td class="text-center">
                                                        <small class="d-flex w-100 clb">225.91 %</small>
                                                        <div class="progress" style="position: relative;height: 14px; border-radius: 15px;">
                                                            <div class="progress-bar" role="progressbar" style="height: 14px; border-radius: 15px; background-color: rgb(0, 136, 79); width: 225.91%;">
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <!--  -->
                                                    <td class="text-center">
                                                        <small class="d-flex w-100 clb">157.94 %</small>
                                                        <div class="progress" style="position: relative;height: 14px; border-radius: 15px;">
                                                            <div class="progress-bar" role="progressbar" style="height: 14px; border-radius: 15px; background-color: rgb(175, 134, 18); width: 157.94%;">
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <!--  -->
                                                    <td class="text-center">
                                                        <small class="d-flex w-100 clb">10.8 %</small>
                                                        <div class="progress" style="position: relative;height: 14px; border-radius: 15px;">
                                                            <div class="progress-bar" role="progressbar" style="height: 14px; border-radius: 15px; background-color: rgb(45, 33, 136); width: 10.8%;">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                            

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    

                    </div>              
                </div>
            </div>     
            <br>


         
        </div>
        <!-- END FUNCTION PANEL -->
        
        <br>
        
        <!-- FOOTER -->
        <?php
            include("footer.php");
        ?>
        <!-- END FOOTER -->

    </body>

   
    <script src="js/VaccinationStatistics.js"></script>
</html>