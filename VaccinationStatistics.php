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
        

      
    <link rel="stylesheet" href="css/ORGSchedule.css">
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
                        <canvas id="myChart"style="width:100%;max-width:500px; display:inline; align-items: center;margin-left: 28px;margin-right: 50px"></canvas>
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