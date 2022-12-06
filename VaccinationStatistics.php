<?php
error_reporting(E_ERROR | E_PARSE);
define('browsable', true);

include("object_Account.php");
include("object_Schedule.php");
session_start();

// if logged in account has not register a profile then head to index.php
if (isset($_SESSION['AccountInfo']) == false)
    header('Location: index.php');
// if there is not any profile was queried then head to index
if (isset($_SESSION['OrgProfile']) == false)
    header('Location: index.php');

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
        <script src="js/VaccinationStatistics.js"></script>
        <title>Thống kê số liệu tiêm chủng</title>

      
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
                <div class="panel-target-citizen">
                    <div class="filter-panel">
                        <div class="filter-pane" id="filter-schedule">
                            <label for="start-date">Từ ngày</label>
                            <input type="date" name="start-date" id="start-date">

                            <label for="end-date">Đến ngày</label>
                            <input type="date" name="end-date" id="end-date">
                    
                            <button class="btn-medium-bordered-icon" id="btn-filter-schedule">
                            <img src="image/filter-magnifier.png" alt="filter-magnifier">
                            Tìm kiếm
                            </button>  
                    
                        </div>

                    </div>   
                </div>

                <br>
                    <canvas id="myChart1" style="width:20%;max-width:500px; display:inline; align-items: center;margin-left: 50px;margin-right: 50px"></canvas>
                    <canvas id="myChart" style="width:100%;max-width:500px; display:inline; align-items: center;margin-left: 28px;margin-right: 50px"></canvas>

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

        <script>
                        var xValues = [100,200,300,400,500,600,700,800,900,1000];

                        new Chart("myChart", {
                        type: "bar",
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


                        },
                        
                        {
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

                        new Chart("myChart1", {
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
                        </script>

    </body>
</html>

<canvas width="1367" height="245" style="height: 196px; width: 1094px; position: absolute; left: 0px; top: 0px;"></canvas>