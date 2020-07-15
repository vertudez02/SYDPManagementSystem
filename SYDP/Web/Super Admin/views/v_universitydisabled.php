<?php
     include ("../utilities/header.php");
     include ("../utilities/navigation.php");
?>
		
		<!-- begin #content -->
		<div id="content" class="content">
			
			<!-- begin page-header -->
			<h1 class="page-header">Insititute and University</h1>
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
                           <h4 class="panel-title">Institute and University</h4>
                        </div>
                        <!-- end panel-heading -->
                        
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            <table id="data-table-select" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th hidden>ID</th>
                                        <th>University / Institute</th>
                                        <th>Location</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                        <th class="text-nowrap">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                        $view_query = mysqli_query($connection,"SELECT * FROM `r_university` where univ_status = 'Disabled' ");
                                        while($row = mysqli_fetch_assoc($view_query))
                                        {
                                            $univ_id = $row["univ_id"];
                                            $univ_name = $row["univ_name"];
                                            $univ_location = $row["univ_location"];
                                            $univ_type = $row["univ_type"];
                                            $univ_status = $row["univ_status"];
                                                        
                                    ?>   
                                    <tr>
                                        <td hidden><?php echo $univ_id; ?></td>
                                        <td width=""><?php echo $univ_name; ?></td>
                                        <td width=""><?php echo $univ_location; ?></td>
                                        <td width=""><?php echo $univ_type; ?></td>
                                        <td width=""><span class="label label-danger"><?php echo $univ_status; ?><span></td>
                                       <td class="text-nowrap">

                                         <a data-toggle="modal" href="#edit<?php echo $univ_id?>" class="btn btn-warning">
                                                            <i class="fa fa-edit" data-size="16" title="Modify Details"></i>

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
                $view_query = mysqli_query($connection,"SELECT * FROM `r_university` where univ_status = 'Disabled' ");
                while($row = mysqli_fetch_assoc($view_query))
                {
                    $univ_id = $row["univ_id"];
                    $univ_name = $row["univ_name"];
                    $univ_description = $row["univ_description"];
                    $univ_location = $row["univ_location"];
                    $univ_type = $row["univ_type"];
                    $univ_status = $row["univ_status"];                                   
            ?>    
 
         <div class="modal fade" id="edit<?php echo $univ_id?>">
            <div class="modal-dialog">
             <div class="modal-content">
                
                      <div class="modal-header">
                        <h4 class="modal-title">Modify Details</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                     </div>

                     <div class="modal-body">
                        <form id="editform" method="POST" action="../functionalities/update.php">                       
                        <div class="row row-space-10">      
                            <input type="hidden" name="univ_id" value="<?php echo $univ_id?>">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Institute / University :</label>
                                        <input type="text" name="univ_name" class="form-control m-b-5" placeholder="" required
                                        value="<?php echo $univ_name?>" readonly/>
                                    </div>
                                </div>
                        </div>

                        <div class="row row-space-10">    
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Description:</label>
                                        <input type="text" name="univ_description" class="form-control m-b-5" placeholder="" required value="<?php echo $univ_description?>" readonly/>
                                    </div>
                                </div>
                        </div>

                            <div class="row row-space-10">      
                            
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Location:</label>
                                        <input type="text" name="univ_location" class="form-control m-b-5" placeholder="" required
                                        value="<?php echo $univ_location?>" readonly/>
                                    </div>
                                </div>

                            </div>

                        <div class="row row-space-10"> 

                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Type:</label>
                                        <input type="text" name="univ_type" class="form-control m-b-5" placeholder="" required value="<?php echo $univ_type?>" readonly/>
                                    </div>
                                </div>

                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Status:</label>
                                        <select id="univ_status" name="univ_status" class="form-control form-control m-b-5" data-parsley-required="true"/>
                                                <option value="<?php echo $univ_status?>"><?php echo $univ_status; ?></option>
                                                <option value="Active"> Active</option>
                              
                                    </select>
                                    </div>
                                </div>
                            </div>

                                <div class="modal-footer">
                                <button type="submit" name="edit_university" onclick="sweetalertclick1()" class="btn btn-primary">Save</button>

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