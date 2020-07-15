<?php
     include ("../utilities/header.php");
     include ("../utilities/navigation.php");
?>
		
		<!-- begin #content -->
		<div id="content" class="content">
			
			<!-- begin page-header -->
			<h1 class="page-header">List of Applicant</h1>
			<!-- end page-header -->
			
            <!-- begin row -->
            <div class="row">
                <!-- begin col-6 -->
                <div class="col-lg-12"> 
             <!-- begin panel -->
         


			<!-- begin panel -->
			<div class="panel panel-inverse">
                        <!-- begin panel-heading -->
                        <div class="panel-heading" style="background-color:rgb(16,53,130);">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                           <h4 class="panel-title">Step 1 ( List of Applicant )</h4>
                        </div>
                        <!-- end panel-heading -->
                        
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            <table id="data-table-select" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th hidden>ID</th>
                                        <th>Applicant No.</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>School</th>
                                        <th>Course</th>
                                        <th>Year</th>
                                        <th>Status</th>
                                        <th class="text-nowrap">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                        $view_query = mysqli_query($connection,"SELECT * FROM `t_application_student_profile` p INNER JOIN `r_university` a ON a.univ_id=p.univ_id INNER JOIN `r_course` b ON b.course_id=p.course_id INNER JOIN `t_application_student_personalinfo` c ON c.app_profile_no=p.app_profile_no where app_profile_status = 'Pending' ");
                                        while($row = mysqli_fetch_assoc($view_query))
                                        {
                                            $app_profile_id = $row["app_profile_id"];
                                            $app_profile_no = $row["app_profile_no"];
                                            $app_profile_firstname = $row["app_profile_firstname"];
                                            $app_profile_middlename = $row["app_profile_middlename"];
                                            $app_profile_lastname = $row["app_profile_lastname"];
                                            $app_personal_address = $row["app_personal_address"];
                                            $univ_code = $row["univ_code"];
                                            $course_code = $row["course_code"];
                                            $app_profile_studyear = $row["app_profile_studyear"];
                                            $app_profile_status = $row["app_profile_status"];

                                            $studentname = $app_profile_lastname.', '.$app_profile_firstname.' '.$app_profile_middlename;
                                                        
                                    ?>   
                                    <tr>
                                        <td hidden><?php echo $app_profile_id; ?></td>
                                        <td width=""><?php echo $app_profile_no; ?></td>
                                        <td width=""><?php echo $studentname; ?></td>
                                        <td width=""><?php echo $app_personal_address; ?></td>
                                        <td width=""><?php echo $univ_code; ?></td>
                                        <td width=""><?php echo $course_code; ?></td>
                                        <td width=""><?php echo $app_profile_studyear; ?></td>
                                        <td width=""><span class="label label-warning"><?php echo $app_profile_status; ?><span></td>
                                       <td class="text-nowrap">

                                         <a data-toggle="modal" href="#edit<?php echo $app_profile_id?>" class="btn btn-warning">
                                                            <i class="fa fa-edit" data-size="16" title="Modify Details"></i></a>

                                        <a data-toggle="modal" href="#" class="btn btn-danger">
                                                            <i class="fa fa-archive" data-size="16" title="Archive"></i> </a>             
                                          
                                        
                                        </td>
                                    </tr>

                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- end panel-body -->
                    </div>
                    <!-- end panel -->
		</div>
		<!-- end #content -->
		
       
	

    <!-- #modal-dialog -->
            <?php
                $view_query = mysqli_query($connection,"SELECT * FROM `t_application_student_profile` p INNER JOIN `r_university` a ON a.univ_id=p.univ_id INNER JOIN `r_course` b ON b.course_id=p.course_id INNER JOIN `t_application_student_personalinfo` c ON c.app_profile_no=p.app_profile_no where app_profile_status = 'Pending' ");
                while($row = mysqli_fetch_assoc($view_query))
                {
                    $app_profile_id = $row["app_profile_id"];
                    $app_profile_no = $row["app_profile_no"];
                    $app_profile_firstname = $row["app_profile_firstname"];
                    $app_profile_middlename = $row["app_profile_middlename"];
                    $app_profile_lastname = $row["app_profile_lastname"];
                    $app_personal_address = $row["app_personal_address"];
                    $univ_code = $row["univ_code"];
                    $course_code = $row["course_code"];
                    $app_profile_studyear = $row["app_profile_studyear"];
                    $app_profile_status = $row["app_profile_status"];

                    $studentname = $app_profile_lastname.', '.$app_profile_firstname.' '.$app_profile_middlename;                                  
            ?>    
 
         <div class="modal fade" id="edit<?php echo $app_profile_id?>">
            <div class="modal-dialog">
             <div class="modal-content">
                
                      <div class="modal-header">
                        <h4 class="modal-title">Step 2 ( Requirements )</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                     </div>

                     <div class="modal-body">
                        <form id="editform" method="POST" action="../functionalities/insert.php">                       
                        <div class="row row-space-10">      
                            <input type="hidden" name="app_profile_id" value="<?php echo $app_profile_id?>">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Applicant No:</label>
                                        <input type="text" name="app_profile_no" class="form-control m-b-5" placeholder="" required
                                        value="<?php echo $app_profile_no?>" readonly/>
                                    </div>
                                </div>
                        </div>

                        <div class="row row-space-10">    
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Applicant Name:</label>
                                        <input type="text" name="studentname" class="form-control m-b-5" placeholder="" required value="<?php echo $studentname?>" readonly/>
                                    </div>
                                </div>
                        </div>

                        <div class="row row-space-10">    
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>University:</label>
                                        <input type="text" name="univ_code" class="form-control m-b-5" placeholder="" required value="<?php echo $univ_code?>" readonly/>
                                    </div>
                                </div>
                        </div>

                        <div class="row row-space-10">    
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Course:</label>
                                        <input type="text" name="course_code" class="form-control m-b-5" placeholder="" required value="<?php echo $course_code?>" readonly/>
                                    </div>
                                </div>
                        </div>


                        <div class="row row-space-10"> 

                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Year:</label>
                                        <input type="text" name="app_profile_studyear" class="form-control m-b-5" placeholder="" required value="<?php echo $app_profile_studyear?>" readonly/>
                                    </div>
                            </div>

                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Status:</label>
                                        <input type="text" name="app_profile_status" class="form-control m-b-5 label label-warning" placeholder="" required value="<?php echo $app_profile_status?>" readonly/>
                                    </div>
                            </div>
                        </div>  


                        <div class="row row-space-10">  
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Birth Certificate:</label>
                                        <select id="req_remarks_birthcert" name="req_remarks_birthcert" class="form-control form-control m-b-5" data-parsley-required="true"/>
                                                <option value="Please Choose"selected disabled>Please Choose</option>
                                                <option value="Present">Present</option>
                                                <option value="Not Present">Not Present</option>
                              
                                    </select>
                                    </div>
                            </div>

                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Registration Card:</label>
                                        <select id="req_remarks_regicard" name="req_remarks_regicard" class="form-control form-control m-b-5" data-parsley-required="true"/>
                                                <option value="Please Choose"selected disabled>Please Choose</option>
                                                <option value="Present">Present</option>
                                                <option value="Not Present">Not Present</option>
                              
                                    </select>
                                    </div>
                            </div>

                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Grades:</label>
                                        <select id="req_remarks_grades" name="req_remarks_grades" class="form-control form-control m-b-5" data-parsley-required="true"/>
                                                <option value="Please Choose"selected disabled>Please Choose</option>
                                                <option value="Present">Present</option>
                                                <option value="Not Present">Not Present</option>
                              
                                    </select>
                                    </div>
                            </div>
                        </div>

                        <div class="row row-space-10">  
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Barangay Indigency:</label>
                                        <select id="req_remarks_indigency" name="req_remarks_indigency" class="form-control form-control m-b-5" data-parsley-required="true"/>
                                                <option value="Please Choose"selected disabled>Please Choose</option>
                                                <option value="Present">Present</option>
                                                <option value="Not Present">Not Present</option>
                              
                                    </select>
                                    </div>
                            </div>

                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Income Tax Return:</label>
                                        <select id="req_remarks_itr" name="req_remarks_itr" class="form-control form-control m-b-5" data-parsley-required="true"/>
                                                <option value="Please Choose"selected disabled>Please Choose</option>
                                                <option value="Present">Present</option>
                                                <option value="Not Present">Not Present</option>
                              
                                    </select>
                                    </div>
                            </div>

                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Remarks:</label>
                                        <select id="app_step2_status" name="app_step2_status" class="form-control form-control m-b-5" data-parsley-required="true"/>
                                                <option value="Please Choose"selected disabled>Please Choose</option>
                                                <option value="Completed">Completed</option>
                                                <option value="Incompleted">Incompleted</option>
                              
                                    </select>
                                    </div>
                            </div>

                           
                        </div>           

                                <div class="modal-footer">
                                <button type="submit" name="requirements" onclick="sweetalertclick1()" class="btn btn-primary">Save</button>

                                <button href="javascript:;" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </form>

                    </div>
                 
                </div>
             </div>
         </div>
         <?php } ?>
    <!-- #modal-without-animation -->

     <!-- #modal-dialog -->
  <!-- 
            <?php
                $view_query = mysqli_query($connection,"SELECT * FROM `t_application_student_profile` p INNER JOIN `r_university` a ON a.univ_id=p.univ_id INNER JOIN `r_course` b ON b.course_id=p.course_id INNER JOIN `t_application_student_personalinfo` c ON c.app_profile_no=p.app_profile_no where app_profile_status = 'Pending' ");
                while($row = mysqli_fetch_assoc($view_query))
                {
                    $app_profile_id = $row["app_profile_id"];
                    $app_profile_no = $row["app_profile_no"];
                    $app_profile_firstname = $row["app_profile_firstname"];
                    $app_profile_middlename = $row["app_profile_middlename"];
                    $app_profile_lastname = $row["app_profile_lastname"];
                    $app_personal_address = $row["app_personal_address"];
                    $app_profile_status = $row["app_profile_status"];

                    $studentname = $app_profile_lastname.', '.$app_profile_firstname.' '.$app_profile_middlename;                                  
            ?>     
 
         <div class="modal fade" id="view<?php echo $app_profile_id?>">
            <div class="modal-dialog">
             <div class="modal-content">
                
                      <div class="modal-header">
                        <h4 class="modal-title">Step 2 ( Requirements )</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                     </div>

                     <div class="modal-body">
                        <form id="editform" method="POST" action="../functionalities/insert.php">                       
                        <div class="row row-space-10">      
                            <input type="hidden" name="app_profile_id" value="<?php echo $app_profile_id?>">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Applicant No:</label>
                                        <input type="text" name="app_profile_no" class="form-control m-b-5" placeholder="" required
                                        value="<?php echo $app_profile_no?>" readonly/>
                                    </div>
                                </div>
                        </div>

                        <div class="row row-space-10">    
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Applicant Name:</label>
                                        <input type="text" name="studentname" class="form-control m-b-5" placeholder="" required value="<?php echo $studentname?>" readonly/>
                                    </div>
                                </div>
                        </div>

                     

                        <div class="row row-space-10"> 

                        
                            <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Status:</label>
                                        <input type="text" name="app_profile_status" class="form-control m-b-5 label label-warning" placeholder="" required value="<?php echo $app_profile_status?>" readonly/>
                                    </div>
                            </div>
                        </div>  

                        <div class="row row-space-10"> 
                    
                            <div class="table-responsive">
                                <table class="table m-b-0">
                                    <thead>
                                        <tr>
                                            <th hidden="">ID</th>
                                            <th>Requirements</th>
                                            <th>Remarks</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php
                                        $view_query = mysqli_query($connection,"SELECT * FROM `t_application_student_profile` p INNER JOIN `r_requirement` a ON a.app_profile_no=p.app_profile_no Where app_profile_no ='app_profile_no'");
                                        while($row = mysqli_fetch_assoc($view_query))

                                        {
                                            $app_profile_id = $row["app_profile_id"];
                                            $app_profile_no = $row["app_profile_no"];
                                            $req_name = $row["req_name"];
                                            $req_remarks = $row["req_remarks"];

                                            $studentname = $app_profile_lastname.', '.$app_profile_firstname.' '.$app_profile_middlename;
                                                        
                                    ?>
                                        <tr>
                                            <td hidden><?php echo $req_id; ?></td>
                                            <td width=""><?php echo $req_name; ?></td>
                                            <td width=""><?php echo $req_remarks; ?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>

                                </table>
                            </div> 
                            </div>

                                <div class="modal-footer">
                                <button type="submit" name="requirements" onclick="sweetalertclick1()" class="btn btn-primary">Save</button>

                                <button href="javascript:;" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </form>

                    </div>
                 
                </div>
             </div>
         </div>
         <?php } ?> -->
 
</div>
    <!-- end page container -->
<!-- ================== BEGIN BASE JS ================== -->
    <script src="../../../assets/plugins/jquery/jquery-3.2.1.min.js"></script>
    <script src="../../../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="../../../assets/plugins/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <!--[if lt IE 9]>
        <script src="../assets/crossbrowserjs/html5shiv.js"></script>
        <script src="../assets/crossbrowserjs/respond.min.js"></script>
        <script src="../assets/crossbrowserjs/excanvas.min.js"></script>
    <![endif]-->
    <script src="../../../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="../../../assets/plugins/js-cookie/js.cookie.js"></script>
    <script src="../../../assets/js/theme/default.min.js"></script>
    <script src="../../../assets/js/apps.min.js"></script>
    <!-- ================== END BASE JS ================== -->
    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="../../../assets/plugins/gritter/js/jquery.gritter.js"></script>
    <script src="../../../assets/plugins/bootstrap-sweetalert/sweetalert.min.js"></script>
    <script src="../../../assets/js/demo/ui-modal-notification.demo.min.js"></script>

    <script src="../../../assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
    <script src="../../../assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
    <script src="../../../assets/plugins/DataTables/extensions/Select/js/dataTables.select.min.js"></script>
    <script src="../../../assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../../assets/js/demo/table-manage-select.demo.min.js"></script>
    <!-- ================== END PAGE LEVEL JS ================== -->

    <script>
        $(document).ready(function() {
            App.init();
            TableManageTableSelect.init();

        //$("#AddBtn").click(function(){

     // var course_code = $("#course_code").val();
        //var course_name = $("#course_name").val();

        //if(course_code == '' && course_name ==''){

        //  swal({

            //      title: "Good Job!",
            //      text: "You clicked the button!",
            //      icon: "warning",
            //      button: "Ok!",


            //  });
            //}


       // });


    });

    </script>



    <script>
        
             function sweetalertclick1(){
                var univ_id = $("#univ_id").val();
                var univ_name = $("#univ_name").val();
                var univ_description = $("#univ_description").val();
                var univ_location = $("#univ_location").val();
                var univ_type = $("#univ_type").val();
                var univ_status = $("#univ_status").val();

                if(univ_id == '' && 
                   univ_name == '' && 
                   univ_description =='' &&
                   univ_location =='' &&
                   univ_type ==''  &&
                   univ_status =='' ){
                swal('Successfully Edit!', 'Thank you!', 'success')
            }
        }
    </script> 


</body>
</html>