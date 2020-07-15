<?php
     include ("../utilities/header.php");
     include ("../utilities/navigation.php");
     include ("../utilities/footer.php");
?>

    <script src="../../../assets/custom/highcharts/highcharts.js"></script>
    <script src="../../../assets/custom/highcharts/modules/data.js"></script>
    <script src="../../../assets/custom/highcharts/modules/exporting.js"></script>
    <script src="../../../assets/custom/highcharts/modules/drilldown.js"></script>
		
		<!-- begin #content -->
		<div id="content" class="content">
			 <div class="col-lg-3 col-md-6">
                    <div class="widget widget-stats bg-gradient-green">
                        <div class="stats-icon stats-icon-lg"><i class="fa fa-user-md"></i></div>
                        <div class="stats-content">
                            <div class="stats-title">Institute and University</div>
                            <div class="stats-number">
                            	
                            	 <?php
                                    $sql="SELECT * FROM r_university";
                                    if ($result=mysqli_query($connection,$sql))
                                      {
                                      // Return the number of rows in result set
                                      $rowcount=mysqli_num_rows($result);
                                      echo $rowcount;
                                      }
                                ?>
                            </div>

                            <div class="stats-progress progress">
                                <div class="progress-bar" style="width: 70.1%;"></div>
                            </div>
                           	<div class="stats-link">
                                    <a href="V-listofschool.php">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
                                </div>

		
	

                        </div>
                    </div>
                </div>
                <!-- end col-3 -->	
				
                <?php  
                $sqlemp = "SELECT * FROM `r_academic_year` WHERE acadyr_status = 'Active'";
                $results = mysqli_query($connection, $sqlemp) or die("Bad Query: $sql");
                    while($row = mysqli_fetch_assoc($results))
                    {
                        $acadyr_id = $row['acadyr_id'];
                        $startyr = $row['acadyr_startyear'];
                        $endyr = $row['acadyr_endyear'];
                        $acadyear = $startyr.' - '.$endyr;
                    }
            ?>
            <div class="row">
                <!--CHART FOR NUMBER OF STUDENTS PER COURSES-->
                <div class="col-md-12" style="margin-bottom: 10px;">
                    <div id="University" class="flotChart"></div>
                        <script type="text/javascript">
                                    Highcharts.chart('University', {
                                    chart: {
                                    type: 'column'
                                    },
                                    title: {
                                        text: 'Total of New Application By University as per Academic Year <?php echo $acadyear?>'

                                    },

                                    credits: {
                                            text: 'SYDP Management System'
                                        },

                                    xAxis: {
                                        type: 'category',
                                        title: {
                                            text: null
                                        },
                                        min: 0,
                                        scrollbar: {
                                            enabled: true
                                        },
                                        tickLength: 0
                                    },
                                    yAxis: {
                                        title: {
                                            text: null
                                        }
                                    },
                                    legend: {
                                        enabled: false
                                    },
                                    plotOptions: {
                                        series: {
                                            borderWidth: 0,
                                            dataLabels: {
                                                enabled: true,
                                                format: '{point.y:.0f}'
                                            }
                                        }
                                    },

                                    tooltip: {
                                        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                                        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>Total of {point.y:.0f}</b><br/>'
                                    },

                                    series: [
                                        {
                                            name: "University",
                                            colorByPoint: true,
                                            data: [
                                                <?php
                                                   $view_query = mysqli_query($connection,"SELECT * FROM `r_university`");
                                                       while($row = mysqli_fetch_assoc($view_query))
                                                           {   
                                                               $univ_id = $row["univ_id"];
                                                               $univ_code = $row["univ_code"];
                                                               $name = $row["univ_name"];
                                                               
                                                               //echo $display;
                                                                //$InvQty = $row["Quantity"];
                                                ?> 
                                                {
                                                    name: '<?php echo $univ_code?>',
                                                    y: <?php
                                                            $view_query1 = mysqli_query($connection,"SELECT * FROM `t_application_student_profile` AS P
                                                                INNER JOIN `t_application_batchyear` AS X
                                                                ON X.app_profile_no = p.app_profile_no 
                                                                WHERE univ_id = '$univ_id'
                                                                and X.app_batch_year BETWEEN '$startyr' and '$endyr'");

                                                                $total_count = mysqli_num_rows($view_query1);
                                                                echo $total_count;
                                                       ?>,
                                                    
                                                },
                                                <?php
                                                }
                                                ?>
                                            ]
                                        }
                                    ]
                                   
                            });

                        </script>
                </div>
                <!--CHART FOR NUMBER OF STUDENTS PER COURSES-->
            </div>

		</div>
		<!-- end #content -->
		
       
	</div>
	<!-- end page container -->
