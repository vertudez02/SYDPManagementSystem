<?php
     include ("../utilities/header.php");
     include ("../utilities/navigation.php");
?>
        
        <!-- begin #content -->
        <div id="content" class="content">
            
            <!-- begin page-header -->
            <h1 class="page-header">List of Applicant Step 3</h1>
            <!-- end page-header -->
            
            <!-- begin row -->
            <div class="row">
                <!-- begin col-6 -->
                <div class="col-lg-12"> 
            

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
                           <h4 class="panel-title">Step 3 Applicant</h4>
                        </div>
                        <!-- end panel-heading -->
                        
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            <table id="data-table-select" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th hidden>ID</th>
                                        <th>Applicant No</th>
                                        <th>Name</th>
                                        <th>Date of Interview</th>
                                        <th>Time</th>
                                        <th>Remarks</th>
                                        <th class="text-nowrap">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                        $view_query = mysqli_query($connection,"SELECT * FROM `t_step3_appinterview` p INNER JOIN `t_application_student_profile` a ON a.app_profile_no=p.app_profile_no where app_step3_remarks = 'For Interview'");
                                        while($row = mysqli_fetch_assoc($view_query))
                                        {
                                            $app_step3_id = $row["app_step3_id"];
                                            $app_profile_no = $row["app_profile_no"];
                                            $app_profile_firstname = $row["app_profile_firstname"];
                                            $app_profile_middlename = $row["app_profile_middlename"];
                                            $app_profile_lastname = $row["app_profile_lastname"];
                                            $app_step3_scheduledate = $row["app_step3_scheduledate"];
                                            $app_step3_scheduletime = $row["app_step3_scheduletime"];
                                            $app_step3_remarks = $row["app_step3_remarks"];
                                            
                                            $studentname = $app_profile_lastname.', '.$app_profile_firstname.' '.$app_profile_middlename;
                                                        
                                    ?>   
                                    <tr>
                                        <td hidden><?php echo $app_step3_id; ?></td>
                                        <td width=""><?php echo $app_profile_no; ?></td>
                                        <td width=""><?php echo $studentname; ?></td>
                                        <td width=""><?php echo $app_step3_scheduledate; ?></td>
                                        <td width=""><?php echo $app_step3_scheduletime; ?></td>
                                        <td width=""><span class="label label-warning"><?php echo $app_step3_remarks; ?><span></td>
                                        <td class="text-nowrap">

                                         <a data-toggle="modal" href="#edit<?php echo $app_step3_id?>" class="btn btn-warning">
                                                            <i class="fa fa-edit" data-size="16" title="Modify Details"></i>

                                                    </a>

                                        <a data-toggle="modal" href="#sms<?php echo $app_step3_id?>" class="btn btn-lime">
                                                            <i class="fa fa-file" data-size="16" title="Modify Details"></i>

                                                    </a>
                                                                
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
                $view_query = mysqli_query($connection,"SELECT * FROM `t_step3_appinterview` p INNER JOIN `t_application_student_profile` a ON a.app_profile_no=p.app_profile_no");
                while($row = mysqli_fetch_assoc($view_query))
                {
                    $app_step3_id = $row["app_step3_id"];
                    $app_profile_no = $row["app_profile_no"];
                    $app_profile_firstname = $row["app_profile_firstname"];
                    $app_profile_middlename = $row["app_profile_middlename"];
                    $app_profile_lastname = $row["app_profile_lastname"];
                    $app_step3_scheduledate = $row["app_step3_scheduledate"];
                    $app_step3_scheduletime = $row["app_step3_scheduletime"];
                    $app_step3_remarks = $row["app_step3_remarks"];
                                            
                    $studentname = $app_profile_lastname.', '.$app_profile_firstname.' '.$app_profile_middlename;                                  
            ?>     
 
         <div class="modal fade" id="edit<?php echo $app_step3_id?>">
            <div class="modal-dialog">
             <div class="modal-content">
                
                      <div class="modal-header">
                        <h4 class="modal-title">Step 4 Applicant Remarks</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                     </div>

                     <div class="modal-body">
                        <form id="editform" method="POST" action="../functionalities/update.php">                       
                       <div class="row row-space-10">      
                            <input type="hidden" name="app_step3_id" value="<?php echo $app_step3_id?>">
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
                                        <select id="app_step3_remarks" name="app_step3_remarks" class="form-control form-control m-b-5" data-parsley-required="true"/>
                                                <option value="<?php echo $app_step3_remarks?>" selected disabled><?php echo $app_step3_remarks; ?></option>
                                                <option value="Passed"> Passed</option>
                                                <option value="failed"> Failed</option>
                              
                                    </select>
                                    </div>
                                </div>
                            </div>
                        </div>  


                                <div class="modal-footer">
                                <button type="submit" name="edit_step3" onclick="sweetalertclick1()" class="btn btn-primary">Save</button>

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
           <?php
                $view_query = mysqli_query($connection,"SELECT * FROM `t_step3_appinterview` p INNER JOIN `t_application_student_profile` a ON a.app_profile_no=p.app_profile_no INNER JOIN `t_application_student_personalinfo` b ON b.app_profile_no=p.app_profile_no");
                while($row = mysqli_fetch_assoc($view_query))
                {
                    $app_step3_id = $row["app_step3_id"];
                    $app_profile_no = $row["app_profile_no"];
                    $app_profile_firstname = $row["app_profile_firstname"];
                    $app_profile_middlename = $row["app_profile_middlename"];
                    $app_profile_lastname = $row["app_profile_lastname"];
                    $app_personal_mobileno = $row["app_personal_mobileno"];
                                            
                    $studentname = $app_profile_lastname.', '.$app_profile_firstname.' '.$app_profile_middlename;                                  
            ?>     
 
         <div class="modal fade" id="sms<?php echo $app_step3_id?>">
            <div class="modal-dialog">
             <div class="modal-content">
                
                      <div class="modal-header">
                        <h4 class="modal-title">Step 3 For Approval</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                     </div>

                     <div class="modal-body">
                        <form id="editform" method="POST" action="../functionalities/sms.php">                       
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
                                        <label>Mobile No :</label>
                                        <input type="text" name="app_personal_mobileno" id="app_personal_mobileno" class="form-control m-b-5" style="color:red;"placeholder="" value="<?php echo $app_personal_mobileno?>" readonly/>
                                    </div>
                                </div>
                            </div>

                            <div class="row row-space-10"> 
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Message:</label>
                                        <textarea type="text" name="message" id="message" class="form-control m-b-5" >Good Day!
                                             </textarea> 
                                    </div>
                                </div>
                            </div>
  


                                <div class="modal-footer">
                                <button type="submit" name="text" onclick="sweetalertclick1()" class="btn btn-primary">Save</button>

                                <button href="javascript:;" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                 
                </div>
             </div>
         </div>
         <?php } ?>
    <!-- #modal-without-animation -->

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
        
             function sweetalertclick(){
                var univ_name = $("#univ_name").val();
                var univ_description = $("#univ_description").val();
                var univ_location = $("#univ_location").val();
                var univ_type = $("#univ_type").val();


                if(univ_name == '' && 
                   univ_description =='' &&
                   univ_location =='' &&
                   univ_type =='' ){

                swal('Fields Empty!', 'Please check the missing field', 'warning')
            }else{
                swal('Good Job!', 'Successfully Added!', 'success')
            }
        }
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