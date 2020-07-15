<?php
     include ("../utilities/header.php");
     include ("../utilities/navigation.php");
?>
        
        <!-- begin #content -->
        <div id="content" class="content">
            
            <!-- begin page-header -->
            <h1 class="page-header">List of Approved Applicant</h1>
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
                                        $view_query = mysqli_query($connection,"SELECT * FROM `t_application_student_profile` p INNER JOIN `r_university` a ON a.univ_id=p.univ_id INNER JOIN `r_course` b ON b.course_id=p.course_id INNER JOIN `t_application_student_personalinfo` c ON c.app_profile_no=p.app_profile_no where app_profile_status = 'Approved' ");
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
                                        <td width=""><span class="label label-primary"><?php echo $app_profile_status; ?><span></td>
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
                $view_query = mysqli_query($connection,"SELECT * FROM `t_application_student_profile` p INNER JOIN `r_university` a ON a.univ_id=p.univ_id INNER JOIN `r_course` b ON b.course_id=p.course_id INNER JOIN `t_application_student_personalinfo` c ON c.app_profile_no=p.app_profile_no where app_profile_status = 'Approved' ");
                while($row = mysqli_fetch_assoc($view_query))
                {
                    $app_profile_id = $row["app_profile_id"];
                    $app_profile_no = $row["app_profile_no"];
                    $app_profile_firstname = $row["app_profile_firstname"];
                    $app_profile_middlename = $row["app_profile_middlename"];
                    $app_profile_lastname = $row["app_profile_lastname"];
                    $app_profile_extensionname = $row["app_profile_extensionname"];
                    $univ_id = $row["univ_id"];
                    $univ_name = $row["univ_name"];
                    $course_id = $row["course_id"];
                    $course_description = $row["course_description"];
                    $app_profile_studyear = $row["app_profile_studyear"];
                    $app_profile_status = $row["app_profile_status"];

                    $app_personal_address = $row["app_personal_address"];
                    $app_personal_barangay = $row["app_personal_barangay"];
                    $app_personal_district = $row["app_personal_district"];
                    $app_personal_birthdate = $row["app_personal_birthdate"];
                    $app_personal_age = $row["app_personal_age"]; 
                    $app_personal_weight = $row["app_personal_weight"];
                    $app_personal_height = $row["app_personal_height"];
                    $app_personal_civilstatus = $row["app_personal_civilstatus"];
                    $app_personal_citizenship = $row["app_personal_citizenship"];
                    $app_personal_religion = $row["app_personal_religion"];
                    $app_personal_gender = $row["app_personal_gender"];
                    $app_personal_noofbrothers = $row["app_personal_noofbrothers"];
                    $app_personal_noofsisters = $row["app_personal_noofsisters"];
                    $app_personal_ordinalposition = $row["app_personal_ordinalposition"];
                    $app_personal_teleno = $row["app_personal_teleno"];
                    $app_personal_mobileno = $row["app_personal_mobileno"];
                    $app_personal_email = $row["app_personal_email"];
                                 
            ?>    
 
         <div class="modal fade" id="edit<?php echo $app_profile_id?>">
            <div class="modal-dialog">
             <div class="modal-content">
                
                      <div class="modal-header">
                        <h4 class="modal-title">New Scholar ( <?php echo $app_profile_no?> )</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                     </div>

                     <div class="modal-body">
                        <form id="editform" method="POST" action="../functionalities/scholarinsert.php"> 
                        <div class="col-md-12" style="background-color: #e3f2fd; margin-bottom: 10px">
                                <center><h6> Student Information </h6></center>  
                        </div>

                        <div class="row row-space-10">      
                            <input type="hidden" name="app_profile_id" value="<?php echo $app_profile_id?>">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Applicant No:</label>
                                        <input type="text" id="app_profile_no" name="app_profile_no" class="form-control m-b-5 " placeholder="" value="<?php echo $app_profile_no?>" readonly />
                                    </div>
                                </div>

                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Scholar No:</label>
                                        <input type="text" id="scholar_profile_no" name="scholar_profile_no" class="form-control m-b-5 " placeholder="" required/>
                                    </div>
                                </div>
                        </div>

                        <div class="row row-space-10">    
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>First Name:</label>
                                        <input type="text" id="scholar_profile_firstname" name="scholar_profile_firstname" class="form-control m-b-5" placeholder="" required value="<?php echo $app_profile_firstname?>" readonly/>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Middle Name:</label>
                                        <input type="text" id="scholar_profile_middlename" name="scholar_profile_middlename" class="form-control m-b-5" placeholder="" required value="<?php echo $app_profile_middlename?>" readonly/>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Last Name:</label>
                                        <input type="text" id="scholar_profile_lastname" name="scholar_profile_lastname" class="form-control m-b-5" placeholder="" required value="<?php echo $app_profile_lastname?>" readonly/>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Extension Name:</label>
                                        <input type="text" id="scholar_profile_extensionname" name="scholar_profile_extensionname" class="form-control m-b-5" placeholder="" required value="<?php echo $app_profile_extensionname?>" readonly/>
                                    </div>
                                </div>
                        </div>

                        <div class="row row-space-10"> 

                            <div class="col-md-6">
                            <div class="form-group">
                            <label>Scholar Type</label>
                                <select id="scholar_id" name="scholar_id" class="form-control form-control m-b-5" data-parsley-required="true">
                                    <option selected disabled>Please choose</option>
                                        <?php  
                                        $sqlemp = "SELECT * FROM `r_scholar` where scholar_status = 'Active' ";
                                        $results = mysqli_query($connection, $sqlemp) or die("Bad Query: $sql");
                                        while($row = mysqli_fetch_assoc($results))
                                        {
                                        $scholar_id = $row['scholar_id'];
                                        $scholar_type = $row['scholar_type'];
                                        
                                        ?>
                                    <option value="<?php echo $scholar_id ?>"><?php echo $scholar_type; ?></option>
                                        <?php } ?>
                                </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label>University:</label>
                                        <input type="text" id="univ_id" name="univ_id" class="form-control m-b-5" placeholder="" required value="<?php echo $univ_id?>" readonly/>
                                    </div>
                            </div>

                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Course:</label>
                                        <input type="text" id="course_id" name="course_id" class="form-control m-b-5" placeholder="" required value="<?php echo $course_id?>" readonly/>
                                    </div>
                            </div>

                        </div>    

                        <div class="row row-space-10">

                        <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Year:</label>
                                        <input type="text" id="scholar_profile_studyear" name="scholar_profile_studyear" class="form-control m-b-5" placeholder="" required value="<?php echo $app_profile_studyear?>" readonly/>
                                    </div>
                            </div> 

                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Status:</label>
                                        <input type="text" name="app_profile_status" name="app_profile_status" class="form-control m-b-5 label label-primary" placeholder="" required value="<?php echo $app_profile_status?>" readonly/>
                                    </div>
                            </div>

                       </div>     

                    <div class="col-md-12" style="background-color: #e3f2fd; margin-bottom: 10px">
                                <center><h6> Personal Information </h6></center>  
                    </div>

                        <div class="row row-space-10">

                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Address:</label>
                                        <input type="text" name="scholar_personal_address" id="scholar_personal_address" class="form-control m-b-5" value="<?php echo $app_personal_address?>" readonly/>
                                    </div>
                            </div>

                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Barangay:</label>
                                        <input type="text" name="scholar_personal_barangay" id="scholar_personal_barangay" class="form-control m-b-5" value="<?php echo $app_personal_barangay?>" readonly/>
                                    </div>
                            </div>

                            <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Disctrict:</label>
                                        <input type="text" name="scholar_personal_district" id="scholar_personal_district" class="form-control m-b-5" value="<?php echo $app_personal_district?>" readonly/>
                                    </div>
                            </div>

                        </div>

                        <div class="row row-space-10">

                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Birthdate:</label>
                                        <input type="text" name="scholar_personal_birthdate" id="scholar_personal_birthdate" class="form-control m-b-5" value="<?php echo $app_personal_birthdate?>" readonly/>
                                    </div>
                            </div>

                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Age:</label>
                                        <input type="text" name="scholar_personal_age" id="scholar_personal_age" class="form-control m-b-5" value="<?php echo $app_personal_age?>" readonly/>
                                    </div>
                            </div>

                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Weight:</label>
                                        <input type="text" name="scholar_personal_weight" id="scholar_personal_weight" class="form-control m-b-5" value="<?php echo $app_personal_weight?>" readonly/>
                                    </div>
                            </div>

                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Height:</label>
                                        <input type="text" name="scholar_personal_height" id="scholar_personal_height" class="form-control m-b-5" value="<?php echo $app_personal_height?>" readonly/>
                                    </div>
                            </div>

                        </div>

                        <div class="row row-space-10">

                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Civil Status:</label>
                                        <input type="text" name="scholar_personal_civilstatus" id="scholar_personal_civilstatus" class="form-control m-b-5" value="<?php echo $app_personal_civilstatus?>" readonly/>
                                    </div>
                            </div>

                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Citizenship:</label>
                                        <input type="text" name="scholar_personal_citizenship" id="scholar_personal_citizenship" class="form-control m-b-5" value="<?php echo $app_personal_citizenship?>" readonly/>
                                    </div>
                            </div>

                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Religion:</label>
                                        <input type="text" name="scholar_personal_religion" id="scholar_personal_religion" class="form-control m-b-5" value="<?php echo $app_personal_religion?>" readonly/>
                                    </div>
                            </div>

                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Gender:</label>
                                        <input type="text" name="scholar_personal_gender" id="scholar_personal_gender" class="form-control m-b-5" value="<?php echo $app_personal_gender?>" readonly/>
                                    </div>
                            </div>

                        </div> 

                        <div class="row row-space-10">   

                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label>No of Brothers:</label>
                                        <input type="text" name="scholar_personal_noofbrothers" id="scholar_personal_noofbrothers" class="form-control m-b-5" value="<?php echo $app_personal_noofbrothers?>" readonly/>
                                    </div>
                            </div>

                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label>No of Sisters:</label>
                                        <input type="text" name="scholar_personal_noofsisters" id="scholar_personal_noofsisters" class="form-control m-b-5" value="<?php echo $app_personal_noofsisters?>" readonly/>
                                    </div>
                            </div>

                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Ordinal Position:</label>
                                        <input type="text" name="scholar_personal_ordinalposition" id="scholar_personal_ordinalposition" class="form-control m-b-5" value="<?php echo $app_personal_ordinalposition?>" readonly/>
                                    </div>
                            </div>

                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Tele No:</label>
                                        <input type="text" name="scholar_personal_teleno" id="scholar_personal_teleno" class="form-control m-b-5" value="<?php echo $app_personal_teleno?>" readonly/>
                                    </div>
                            </div>

                        </div>

                        <div class="row row-space-10">

                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Mobile No:</label>
                                        <input type="text" name="scholar_personal_mobileno" id="scholar_personal_mobileno" class="form-control m-b-5" value="<?php echo $app_personal_mobileno?>" readonly/>
                                    </div>
                            </div>

                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email:</label>
                                        <input type="text" name="scholar_personal_email" id="scholar_personal_email" class="form-control m-b-5" value="<?php echo $app_personal_email?>" readonly/>
                                    </div>
                            </div>

                        </div> 

                        <div class="col-md-12" style="background-color: #e3f2fd; margin-bottom: 10px">
                                <center><h6> Guardian ( Incase of Emergency Contact ) </h6></center>  
                        </div>  

                        <div class="row row-space-10">

                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Relationship:</label>
                                        <input type="text" name="scholar_family_relationship" id="scholar_personal_relationship" class="form-control m-b-5"  placeholder="Ex: Father" required/>
                                    </div>
                            </div>

                        </div>  

                        <div class="row row-space-10">

                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label>First Name:</label>
                                        <input type="text" name="scholar_family_firstname" id="scholar_personal_firstname" class="form-control m-b-5"  placeholder="" required/>
                                    </div>
                            </div>

                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Middle Name:</label>
                                        <input type="text" name="scholar_family_middlename" id="scholar_personal_middlename" class="form-control m-b-5"  placeholder="" required/>
                                    </div>
                            </div>

                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Last Name:</label>
                                        <input type="text" name="scholar_family_lastname" id="scholar_personal_lastname" class="form-control m-b-5"  placeholder="" required/>
                                    </div>
                            </div>

                         </div>

                        <div class="row row-space-10">

                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Age:</label>
                                        <input type="text" name="scholar_family_age" id="scholar_personal_age" class="form-control m-b-5"  placeholder="" required/>
                                    </div>
                            </div>

                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Civil Status:</label>
                                        <select id="scholar_family_civilstatus" name="scholar_family_civilstatus" class="form-control form-control m-b-5" data-parsley-required="true"/>
                                                <option selected disabled>Please Select</option>
                                                <option value="Single"> Single</option>
                                                <option value="Married"> Married</option>
                                                <option value="Widowed"> Widowed</option>
                              
                                    </select>
                                    </div>
                            </div>

                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Educational:</label>
                                        <select id="scholar_family_educational" name="scholar_family_educational" class="form-control form-control m-b-5" data-parsley-required="true"/>
                                                <option selected disabled>Please Select</option>
                                                <option value="N/A"> N/A</option>
                                                <option value="Elementary Graduate"> Elementary Graduate</option>
                                                <option value="High School Graduate"> High School Graduate</option>
                                                <option value="College Undergrad"> College Undergrad</option>
                                                <option value="College Graduate"> College Graduate</option>
                              
                                    </select>
                                    </div>
                            </div>

                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Occupation:</label>
                                        <input type="text" name="scholar_family_occupation" id="scholar_personal_occupation" class="form-control m-b-5"  placeholder="" required/>
                                    </div>
                            </div>

                        </div>

                        <div class="row row-space-10">

                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Income:</label>
                                        <input type="text" name="scholar_family_income" id="scholar_personal_income" class="form-control m-b-5"  placeholder="" required/>
                                    </div>
                            </div>

                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Address:</label>
                                        <input type="text" name="scholar_family_location" id="scholar_personal_location" class="form-control m-b-5"  placeholder="" required/>
                                    </div>
                            </div>

                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Contact:</label>
                                        <input type="text" name="scholar_family_contact" id="scholar_personal_contact" class="form-control m-b-5"  placeholder="" required/>
                                    </div>
                            </div>

                        </div>

                         <div class="col-md-12" style="background-color: #e3f2fd; margin-bottom: 10px">
                                <center><h6> Educational Background </h6></center>  
                        </div>

                        <h5> Primary / Elementary Level </h5>

                        <div class="row row-space-10">

                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name of School:</label>
                                        <input type="text" name="scholar_educ_schoolname_primary" id="scholar_educ_schoolname_primary" class="form-control m-b-5"  placeholder="" required/>
                                    </div>
                            </div>

                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Address:</label>
                                        <input type="text" name="scholar_educ_address_primary" id="scholar_educ_address_primary" class="form-control m-b-5"  placeholder="" required/>
                                    </div>
                            </div>

                        </div>

                        <div class="row row-space-10">

                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Type:</label>
                                        <select id="scholar_educ_type_primary" name="scholar_educ_type_primary" class="form-control form-control m-b-5" data-parsley-required="true"/>
                                                <option selected disabled>Please Select</option>
                                                <option value="Public"> Public</option>
                                                <option value="Private"> Private</option>
                              
                                    </select>
                                    </div>
                            </div>

                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Year of Graduated:</label>
                                        <input type="text" name="scholar_educ_yeargraduated_primary" id="scholar_educ_yeargraduated_primary" class="form-control m-b-5"  placeholder="" required/>
                                    </div>
                            </div>

                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Awards:</label>
                                        <input type="text" name="scholar_educ_awards_primary" id="scholar_educ_awards_primary" class="form-control m-b-5"  placeholder="" required/>
                                    </div>
                            </div>

                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label>GWA:</label>
                                        <input type="text" name="scholar_educ_gwa_primary" id="scholar_educ_gwa_primary" class="form-control m-b-5"  placeholder="" required/>
                                    </div>
                            </div>

                        </div>

                       <h5> Junior High School / Secondary </h5>

                        <div class="row row-space-10">

                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name of School:</label>
                                        <input type="text" name="scholar_educ_schoolname_secondary" id="scholar_educ_schoolname_secondary" class="form-control m-b-5"  placeholder="" required/>
                                    </div>
                            </div>

                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Address:</label>
                                        <input type="text" name="scholar_educ_address_secondary" id="scholar_educ_address_secondary" class="form-control m-b-5"  placeholder="" required/>
                                    </div>
                            </div>

                        </div>

                        <div class="row row-space-10">

                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Type:</label>
                                        <select id="scholar_educ_type_secondary" name="scholar_educ_type_secondary" class="form-control form-control m-b-5" data-parsley-required="true"/>
                                                <option selected disabled>Please Select</option>
                                                <option value="Public"> Public</option>
                                                <option value="Private"> Private</option>
                              
                                    </select>
                                    </div>
                            </div>

                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Year of Graduated:</label>
                                        <input type="text" name="scholar_educ_yeargraduated_secondary" id="scholar_educ_yeargraduated_secondary" class="form-control m-b-5"  placeholder="" required/>
                                    </div>
                            </div>

                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Awards:</label>
                                        <input type="text" name="scholar_educ_awards_secondary" id="scholar_educ_awards_secondary" class="form-control m-b-5"  placeholder="" required/>
                                    </div>
                            </div>

                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label>GWA:</label>
                                        <input type="text" name="scholar_educ_gwa_secondary" id="scholar_educ_gwa_secondary" class="form-control m-b-5"  placeholder="" required/>
                                    </div>
                            </div>

                        </div>

                        <h5> Senior High School </h5>

                        <div class="row row-space-10">

                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name of School:</label>
                                        <input type="text" name="scholar_educ_schoolname_senior" id="scholar_educ_schoolname_senior" class="form-control m-b-5"  placeholder="" required/>
                                    </div>
                            </div>

                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Address:</label>
                                        <input type="text" name="scholar_educ_address_senior" id="scholar_educ_address_senior" class="form-control m-b-5"  placeholder="" required/>
                                    </div>
                            </div>

                        </div>

                        <div class="row row-space-10">

                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Type:</label>
                                        <select id="scholar_educ_type_senior" name="scholar_educ_type_senior" class="form-control form-control m-b-5" data-parsley-required="true"/>
                                                <option selected disabled>Please Select</option>
                                                <option value="N/A"> N/A</option>
                                                <option value="Public"> Public</option>
                                                <option value="Private"> Private</option>
                              
                                    </select>
                                    </div>
                            </div>

                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Year of Graduated:</label>
                                        <input type="text" name="scholar_educ_yeargraduated_senior" id="scholar_educ_yeargraduated_senior" class="form-control m-b-5"  placeholder="" required/>
                                    </div>
                            </div>

                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Awards:</label>
                                        <input type="text" name="scholar_educ_awards_senior" id="scholar_educ_awards_senior" class="form-control m-b-5"  placeholder="" required/>
                                    </div>
                            </div>

                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label>GWA:</label>
                                        <input type="text" name="scholar_educ_gwa_senior" id="scholar_educ_gwa_senior" class="form-control m-b-5"  placeholder="" required/>
                                    </div>
                            </div>

                        </div>

                        <h5> Tertiary Level </h5>

                        <div class="row row-space-10">

                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name of School:</label>
                                        <input type="text" name="scholar_educ_schoolname_tertiary" id="scholar_educ_schoolname_tertiary" class="form-control m-b-5"  placeholder="" required/>
                                    </div>
                            </div>

                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Address:</label>
                                        <input type="text" name="scholar_educ_address_tertiary" id="scholar_educ_address_tertiary" class="form-control m-b-5"  placeholder="" required/>
                                    </div>
                            </div>

                        </div>

                        <div class="row row-space-10">

                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Type:</label>
                                        <select id="scholar_educ_type_tertiary" name="scholar_educ_type_tertiary" class="form-control form-control m-b-5" data-parsley-required="true"/>
                                                <option selected disabled>Please Select</option>
                                                <option value="Public"> Public</option>
                                                <option value="Private"> Private</option>
                              
                                    </select>
                                    </div>
                            </div>

                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Awards:</label>
                                        <input type="text" name="scholar_educ_awards_tertiary" id="scholar_educ_awards_tertiary" class="form-control m-b-5"  placeholder="" required/>
                                    </div>
                            </div>

                        </div>


                        <div class="col-m-b-3">
                        <div class="form-group text-center">
                            <label>This record is for academic year:</label>
                                <select id="scholar_batch_year" name="scholar_batch_year" class="form-control form-control m-b-5" data-parsley-required="true">
                                    <option selected disabled>Please choose</option>
                                        <?php  
                                        $sqlemp = "SELECT * FROM `r_academic_year`";
                                        $results = mysqli_query($connection, $sqlemp) or die("Bad Query: $sql");
                                        while($row = mysqli_fetch_assoc($results))
                                        {
                                        $acadyr_id = $row['acadyr_id'];
                                        $acad_startyear = $row['acadyr_startyear'];
                                        $acad_endyear = $row['acadyr_endyear'];
                                        $acad_year = $acad_startyear.' - '.$acad_endyear;
                                        ?>
                                    <option value="<?php echo $acad_year ?>"><?php echo $acad_year; ?></option>
                                        <?php } ?>
                                </select>
                                </div>
                            </div>

                    <div class="col-m-b-3">
                        <div class="form-group text-center">
                            <label></label>
                                <select id="semester_id" name="semester_id" class="form-control form-control m-b-5" data-parsley-required="true">
                                    <option selected disabled>Please choose</option>
                                        <?php  
                                        $sqlemp = "SELECT * FROM `r_semester` where semester_status = 'Active' ";
                                        $results = mysqli_query($connection, $sqlemp) or die("Bad Query: $sql");
                                        while($row = mysqli_fetch_assoc($results))
                                        {
                                        $semester_id = $row['semester_id'];
                                        $semester_description = $row['semester_description'];
                                        
                                        ?>
                                    <option value="<?php echo $semester_id ?>"><?php echo $semester_description; ?></option>
                                        <?php } ?>
                                </select>
                                </div>
                            </div>



                        </div>

 
                                <div class="modal-footer">
                                <button type="submit" name="add_newscholar" onclick="sweetalertclick1()" class="btn btn-primary">Save</button>

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