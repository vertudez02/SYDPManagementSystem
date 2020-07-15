<?php
     include ("../utilities/header.php");
     include ("../utilities/navigation.php");
?>

        <!-- begin #content -->
        <div id="content" class="content">

            <!-- begin page-header -->
            <h1 class="page-header">Application for new Scholar</h1>
            <!-- end page-header -->
            
            <!-- begin wizard-form -->
            <form action="../functionalities/SAinsert.php" method="POST" class="form-control-with-bg">
                <!-- begin wizard -->
                <div id="wizard">
                    <!-- begin wizard-step -->
                    <ul>
                        <li class="col-md-3 col-sm-4 col-6">
                            <a href="#step-1">
                                <span class="number">1</span> 
                                <span class="info text-ellipsis">
                                    Student Profile
                                    <small class="text-ellipsis">Step 1</small>
                                </span>
                            </a>
                        </li>
                        <li class="col-md-3 col-sm-4 col-6">
                            <a href="#step-2">
                                <span class="number">2</span> 
                                <span class="info text-ellipsis">
                                    Personal Information
                                    <small class="text-ellipsis">Step 2</small>
                                </span>
                            </a>
                        </li>
                        <li class="col-md-3 col-sm-4 col-6">
                            <a href="#step-3">
                                <span class="number">3</span>
                                <span class="info text-ellipsis">
                                    Family Background
                                    <small class="text-ellipsis">Step 3</small>
                                </span>
                            </a>
                        </li>
                        <li class="col-md-3 col-sm-4 col-6">
                            <a href="#step-4">
                                <span class="number">4</span> 
                                <span class="info text-ellipsis">
                                    Educational Background
                                    <small class="text-ellipsis">Step 4</small>
                                </span>
                            </a>
                        </li>

                        <li class="col-md-3 col-sm-4 col-6">
                            <a href="#step-5">
                                <span class="number">5</span> 
                                <span class="info text-ellipsis">
                                    Completed
                                    <small class="text-ellipsis">Step 5 Complete Registration</small>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <!-- end wizard-step -->
                    <!-- begin wizard-content -->
                    <div>
                        <!-- begin step-1 -->
                        <div id="step-1">
                            <!-- begin fieldset -->
                            <fieldset>
                                <!-- begin row -->
                                <div class="row">
                                    <!-- begin col-8 -->
                                    <div class="col-md-12">
                                        <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-10 f-s-16 text-inverse">Student Profile</legend>

                                    <div class="row row-space-10">  


                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Application Number:</label>
                                                <input type="text" name="app_profile_no" id="app_profile_no" class="form-control m-b-5" placeholder="" required/>
                                            </div>
                                        </div>

                                    </div>



                                    <div class="row row-space-10">      

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>First Name:</label>
                                                <input type="text" name="app_profile_firstname" id="app_profile_firstname" class="form-control m-b-5" placeholder="Ex: Peter" required/>
                                            </div>
                                        </div>


                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Middle Name:</label>
                                                <input type="text" name="app_profile_middlename" id="app_profile_middlename" class="form-control m-b-5" placeholder="Ex: Israel"/>
                                            </div>
                                        </div>

                                      

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Last Name:</label>
                                                <input type="text" name="app_profile_lastname" id="app_profile_lastname" class="form-control m-b-5" placeholder="Ex: Dela Cruz" required/>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Extension Name:</label>
                                                <input type="text" name="app_profile_extensionname" id="app_profile_extensionname" class="form-control m-b-5" placeholder="Ex: Jr"/>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row row-space-10"> 

                                    <div class="col-md-4">
                                        <div class="form-group">
                                        <label>Institute / University:</label>
                                        <select id="univ_id" name="univ_id" class="form-control form-control m-b-5" data-parsley-required="true" required/>
                                                <option selected disabled>Please choose</option>
                                                <?php  
                                                    $sqlemp = "SELECT * FROM `r_university`";
                                                    $results = mysqli_query($connection, $sqlemp) or die("Bad Query: $sql");
                                                    while($row = mysqli_fetch_assoc($results))
                                                    {
                                                    $univ_id = $row['univ_id'];
                                                    $univ_name = $row['univ_name'];
                                        ?>
                                                <option value="<?php echo $univ_id ?>"><?php echo $univ_name; ?></option>
                                        <?php } ?>
                              
                                    </select>
                                    </div> 
                                    </div>  

                                    <div class="col-md-4">
                                        <div class="form-group">
                                        <label>Course:</label>
                                        <select id="course_id" name="course_id" class="form-control form-control m-b-5" data-parsley-required="true" required/>
                                                <option selected disabled>Please choose</option>
                                                <?php  
                                                    $sqlemp = "SELECT * FROM `r_course`";
                                                    $results = mysqli_query($connection, $sqlemp) or die("Bad Query: $sql");
                                                    while($row = mysqli_fetch_assoc($results))
                                                    {
                                                    $course_id = $row['course_id'];
                                                    $course_description = $row['course_description'];
                                        ?>
                                                <option value="<?php echo $course_id ?>"><?php echo $course_description; ?></option>
                                        <?php } ?>
                              
                                    </select>
                                    </div>
                                    </div>


                                        <div class="col-md-4">
                                           <div class="form-group">
                                                <label>Year:</label>
                                                <input name="app_profile_studyear" id="app_profile_studyear" class="form-control" type="number" min="1" max="4" placeholder="" required/>
                                            </div>
                                        </div>


                                </div>

 
                                        
                                    </div>
                                    <!-- end col-8 -->
                                </div>
                                <!-- end row -->
                            </fieldset>
                            <!-- end fieldset -->
                        </div>
                        <!-- end step-1 -->

                        <!-- begin step-2 -->
                        <div id="step-2">
                            <!-- begin fieldset -->
                            <fieldset>
                                <!-- begin row -->
                                <div class="row">
                                    <!-- begin col-8 -->
                                    <div class="col-md-12">
                                        <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Personal Information</legend>
                                        <!-- begin form-group row -->
                                        
                                        <div class="row row-space-10">      

                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Address:</label>
                                                <input type="text" name="app_personal_address" id="app_personal_address" class="form-control m-b-5" placeholder="Ex: City Hall, Quezon City" required/>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Barangay:</label>
                                                <input type="text" name="app_personal_barangay" id="app_personal_barangay" class="form-control m-b-5" placeholder="Ex: Commonwealth" required/>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                           <div class="form-group">
                                                <label>District:</label>
                                                <input name="app_personal_district" id="app_personal_district" class="form-control" type="number" min="1" max="6" placeholder="" required/>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row row-space-10">

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Birthdate:</label>
                                                <input type="date" name="app_personal_birthdate" id="app_personal_birthdate" class="form-control m-b-5" placeholder="Select Birthdate" required/>
                                            </div>
                                        </div>

                                
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Age:</label>
                                                <input type="text" name="app_personal_age" id="app_personal_age" class="form-control m-b-5" placeholder="Ex: 21" required/>
                                            </div>
                                        </div>


                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Weight:</label>
                                                <input type="text" name="app_personal_weight" id="app_personal_weight" class="form-control m-b-5" placeholder="Ex: 53 kg" required/>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Height:</label>
                                                <input type="text" name="app_personal_height" id="app_personal_height" class="form-control m-b-5" placeholder="Ex: 168 cm" required/>
                                            </div>
                                        </div>


                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Civil Status:</label>
                                                <select id="app_personal_civilstatus" name="app_personal_civilstatus" class="form-control form-control m-b-5" data-parsley-required="true">
                                                        <option selected disabled>Please choose</option>
                                                        <option value="Single"> Single</option>
                                                        <option value="Married"> Married</option>
                                                        <option value="Widowed"> Widowed</option>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Citizenship:</label>
                                                <input type="text" name="app_personal_citizenship" id="app_personal_citizenship" class="form-control m-b-5" placeholder="Ex: Filipino" required/>
                                            </div>
                                        </div>

                                    </div>

                                <div class="row row-space-10"> 


                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Religion:</label>
                                            <select id="app_personal_religion" name="app_personal_religion" class="form-control form-control m-b-5" data-parsley-required="true">
                                                    <option selected disabled>Please choose</option>
                                                    <option value="Christian"> Christian</option>
                                                    <option value="Roman Catholic"> Roman Catholic</option>
                                  
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Gender:</label>
                                            <select id="app_personal_gender" name="app_personal_gender" class="form-control form-control m-b-5" data-parsley-required="true">
                                                    <option selected disabled>Please choose</option>
                                                    <option value="Male"> Male</option>
                                                    <option value="Female"> Female</option>
                                  
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>No. of Brother/s:</label>
                                            <input name="app_personal_noofbrothers" id="app_personal_noofbrothers" class="form-control" type="number" min="1" max="" placeholder="" required/>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>No. of Sister/s:</label>
                                            <input name="app_personal_noofsisters" id="app_personal_noofsisters" class="form-control" type="number" min="1" max="" placeholder="" required/>
                                        </div>
                                    </div>


                                </div>   

                                <div class="row row-space-10"> 

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Ordinal Position:</label>
                                            <input name="app_personal_ordinalposition" id="app_personal_ordinalposition" class="form-control" type="number" min="1" max="" placeholder="" required/>
                                        </div>
                                    </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Telephone No:</label>
                                                <input type="text" name="app_personal_teleno" id="app_personal_teleno" class="form-control m-b-5" placeholder="Ex: 237-5525"/>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Mobile No:</label>
                                                <input type="text" name="app_personal_mobileno" id="app_personal_mobileno" class="form-control m-b-5" placeholder="Ex: 0945644871" required/>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Email:</label>
                                                <input type="email" name="app_personal_email" id="app_personal_email" class="form-control m-b-5" placeholder="Ex: Peterdelacruz@gmail.com" required/>
                                            </div>
                                        </div>

                                </div> 

                                        <!-- end form-group row -->
                                    </div>
                                    <!-- end col-8 -->
                                </div>
                                <!-- end row -->
                            </fieldset>
                            <!-- end fieldset -->
                        </div>
                        <!-- end step-2 -->

                         <!-- begin step-4 -->
                        <div id="step-3">
                            <!-- begin fieldset -->
                            <fieldset>
                                <!-- begin row -->
                                <div class="row">
                                    <!-- begin col-8 -->
                                    <div class="col-md-12">
                                        <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Family Background</legend>
                                        <!-- begin form-group row -->
                                   
                                    <div class="row row-space-10"> 

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Relationship:</label>
                                                <input type="text" name="app_family_relationship_first" id="app_family_relationship_first" class="form-control m-b-5" placeholder="Ex: Father"/>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row row-space-10"> 

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>First name:</label>
                                                <input type="text" name="app_family_firstname_first" id="app_family_firstname_first" class="form-control m-b-5" placeholder="Ex: Juan"/>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Middle name:</label>
                                                <input type="text" name="app_family_middlename_first" id="app_family_middlename_first" class="form-control m-b-5" placeholder="Ex: Israel"/>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Last name:</label>
                                                <input type="text" name="app_family_lastname_first" id="app_family_lastname_first" class="form-control m-b-5" placeholder="Ex: Dela Cruz"/>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row row-space-10">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Age:</label>
                                                <input type="text" name="app_family_age_first" id="app_family_age_first" class="form-control m-b-5" placeholder=""/>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Civil Status:</label>
                                                <select id="app_family_civilstatus_first" name="app_family_civilstatus_first" class="form-control form-control m-b-5" data-parsley-required="true">
                                                        <option selected disabled>Please choose</option>
                                                        <option value="Single"> Single</option>
                                                        <option value="Married"> Married</option>
                                                        <option value="Widowed"> Widowed</option>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Educational Attainment:</label>
                                                <select id="app_family_educational_first" name="app_family_educational_first" class="form-control form-control m-b-5" data-parsley-required="true">
                                                        <option selected disabled>Please choose</option>
                                                        <option value="N/A"> N/A</option>
                                                        <option value="Elementary Graduate"> Elementary Graduate</option>
                                                        <option value="High School Graduate"> High School Graduate</option>
                                                        <option value="College Undergraduate"> College Undergraduate</option>
                                                        <option value="College Graduate"> College Graduate</option>
                                            </select>
                                            </div>
                                        </div>

                                    </div>  

                                    <div class="row row-space-10">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Occupation:</label>
                                                <input type="text" name="app_family_occupation_first" id="app_family_occupation_first" class="form-control m-b-5" placeholder=""/>
                                            </div>
                                        </div>   

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Income:</label>
                                                <input type="text" name="app_family_income_first" id="app_family_income_first" class="form-control m-b-5" placeholder=""/>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Address:</label>
                                                <input type="text" name="app_family_location_first" id="app_family_location_first" class="form-control m-b-5" placeholder=""/>
                                            </div>
                                        </div>  

                                    </div>

                                    <div class="row row-space-10"> 

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Relationship:</label>
                                                <input type="text" name="app_family_relationship_second" id="app_family_relationship_second" class="form-control m-b-5" placeholder="Ex: Father"/>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row row-space-10"> 

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>First name:</label>
                                                <input type="text" name="app_family_firstname_second" id="app_family_firstname_second" class="form-control m-b-5" placeholder="Ex: Juan"/>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Middle name:</label>
                                                <input type="text" name="app_family_middlename_second" id="app_family_middlename_second" class="form-control m-b-5" placeholder="Ex: Israel"/>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Last name:</label>
                                                <input type="text" name="app_family_lastname_second" id="app_family_lastname_second" class="form-control m-b-5" placeholder="Ex: Dela Cruz"/>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row row-space-10">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Age:</label>
                                                <input type="text" name="app_family_age_second" id="app_family_age_second" class="form-control m-b-5" placeholder=""/>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Civil Status:</label>
                                                <select id="app_family_civilstatus_second" name="app_family_civilstatus_second" class="form-control form-control m-b-5" data-parsley-required="true">
                                                        <option selected disabled>Please choose</option>
                                                        <option value="Single"> Single</option>
                                                        <option value="Married"> Married</option>
                                                        <option value="Widowed"> Widowed</option>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Educational Attainment:</label>
                                                <select id="app_family_educational_second" name="app_family_educational_second" class="form-control form-control m-b-5" data-parsley-required="true">
                                                        <option selected disabled>Please choose</option>
                                                        <option value="N/A"> N/A</option>
                                                        <option value="Elementary Graduate"> Elementary Graduate</option>
                                                        <option value="High School Graduate"> High School Graduate</option>
                                                        <option value="College Undergraduate"> College Undergraduate</option>
                                                        <option value="College Graduate"> College Graduate</option>
                                            </select>
                                            </div>
                                        </div>

                                    </div>  

                                    <div class="row row-space-10">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Occupation:</label>
                                                <input type="text" name="app_family_occupation_second" id="app_family_occupation_second" class="form-control m-b-5" placeholder=""/>
                                            </div>
                                        </div>   

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Income:</label>
                                                <input type="text" name="app_family_income_second" id="app_family_income_second" class="form-control m-b-5" placeholder=""/>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Address:</label>
                                                <input type="text" name="app_family_location_second" id="app_family_location_second" class="form-control m-b-5" placeholder=""/>
                                            </div>
                                        </div>  

                                    </div>

                                    </div>
                                    <!-- end col-8 -->
                                </div>
                                <!-- end row -->
                            </fieldset>
                            <!-- end fieldset -->
                        </div>
                        <!-- end step-4 -->

                        <!-- begin step-4 -->
                        <div id="step-4">
                            <!-- begin fieldset -->
                            <fieldset>
                                <!-- begin row -->
                                <div class="row">
                                    <!-- begin col-8 -->
                                    <div class="col-md-12">
                                        <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Educational Background</legend>
                                        <!-- begin form-group row -->
                                    

                                <div class="col-md-12" style="background-color: #c8e6c9; margin-bottom: 10px">

                                    <div class="row row-space-10">

                                        <div id="SPACER" class="row" style="margin: 10px"></div>

                                        <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse text-center">Primary / Elementary Level</legend>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>School Name:</label>
                                                <input type="text" name="app_educ_schoolname_primary" id="app_educ_schoolname_primary" class="form-control m-b-5" placeholder="" required/>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Address:</label>
                                                <input type="text" name="app_educ_address_primary" id="app_educ_address_primary" class="form-control m-b-5" placeholder="" required/>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row row-space-10">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Type:</label>
                                                <select id="app_educ_type_primary" name="app_educ_type_primary" class="form-control form-control m-b-5" data-parsley-required="true">
                                                        <option selected disabled>Please choose</option>
                                                        <option value="Public"> Public</option>
                                                        <option value="Private"> Private</option>
                                      
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Year Graduated:</label>
                                                <input type="text" name="app_educ_yeargraduated_primary" id="app_educ_yeargraduated_primary" class="form-control m-b-5" placeholder="" required/>
                                            </div>
                                        </div>

                                    </div>   

                                    <div class="row row-space-10">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Awards:</label>
                                                    <input type="text" name="app_educ_awards_primary" id="app_educ_awards_primary" class="form-control m-b-5" placeholder="" required/>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Average:</label>
                                                    <input type="text" name="app_educ_gwa_primary" id="app_educ_gwa_primary" class="form-control m-b-5" placeholder="" required/>
                                            </div>
                                        </div>

                                    </div> 


                                </div>

                                <div class="col-md-12" style="background-color: #e3f2fd; margin-bottom: 10px">

                                    <div class="row row-space-10">

                                        <div id="SPACER" class="row" style="margin: 10px"></div>

                                        <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse text-center">Junior High Level</legend>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>School Name:</label>
                                                <input type="text" name="app_educ_schoolname_junior" id="app_educ_schoolname_junior" class="form-control m-b-5" placeholder="" required/>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Address:</label>
                                                <input type="text" name="app_educ_address_junior" id="app_educ_address_junior" class="form-control m-b-5" placeholder="" required/>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row row-space-10">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Type:</label>
                                                <select id="app_educ_type_junior" name="app_educ_type_junior" class="form-control form-control m-b-5" data-parsley-required="true">
                                                        <option selected disabled>Please choose</option>
                                                        <option value="Public"> Public</option>
                                                        <option value="Private"> Private</option>
                                      
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Year Graduated:</label>
                                                <input type="text" name="app_educ_yeargraduated_junior" id="app_educ_yeargraduated_junior" class="form-control m-b-5" placeholder="" required/>
                                            </div>
                                        </div>

                                    </div>   

                                    <div class="row row-space-10">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Awards:</label>
                                                    <input type="text" name="app_educ_awards_junior" id="app_educ_awards_junior" class="form-control m-b-5" placeholder="" required/>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Average:</label>
                                                    <input type="text" name="app_educ_gwa_junior" id="app_educ_gwa_junior" class="form-control m-b-5" placeholder="" required/>
                                            </div>
                                        </div>

                                    </div> 


                                </div>

                                <div class="col-md-12" style="background-color: #eef2c1; margin-bottom: 10px">

                                    <div class="row row-space-10">

                                        <div id="SPACER" class="row" style="margin: 10px"></div>

                                        <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse text-center">Senior High Level</legend>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>School Name:</label>
                                                <input type="text" name="app_educ_schoolname_senior" id="app_educ_schoolname_senior" class="form-control m-b-5" placeholder="" required/>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Address:</label>
                                                <input type="text" name="app_educ_address_senior" id="app_educ_address_senior" class="form-control m-b-5" placeholder="" required/>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row row-space-10">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Type:</label>
                                                <select id="app_educ_type_senior" name="app_educ_type_senior" class="form-control form-control m-b-5" data-parsley-required="true">
                                                        <option selected disabled>Please choose</option>
                                                        <option value="N/A"> N/A</option>
                                                        <option value="Public"> Public</option>
                                                        <option value="Private"> Private</option>
                                      
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Year Graduated:</label>
                                                <input type="text" name="app_educ_yeargraduated_senior" id="app_educ_yeargraduated_senior" class="form-control m-b-5" placeholder="" required/>
                                            </div>
                                        </div>

                                    </div>   

                                    <div class="row row-space-10">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Awards:</label>
                                                    <input type="text" name="app_educ_awards_senior" id="app_educ_awards_senior" class="form-control m-b-5" placeholder="" required/>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Average:</label>
                                                    <input type="text" name="app_educ_gwa_senior" id="app_educ_gwa_senior" class="form-control m-b-5" placeholder="" required/>
                                            </div>
                                        </div>

                                    </div> 


                                </div>

                                <div class="col-md-12" style="background-color: #ffcdd2; margin-bottom: 10px">

                                    <div class="row row-space-10">

                                        <div id="SPACER" class="row" style="margin: 10px"></div>

                                        <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse text-center">Tertiary / College level</legend>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>School Name:</label>
                                                <input type="text" name="app_educ_schoolname_tertiary" id="app_educ_schoolname_tertiary" class="form-control m-b-5" placeholder="" required/>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Address:</label>
                                                <input type="text" name="app_educ_address_tertiary" id="app_educ_address_tertiary" class="form-control m-b-5" placeholder="" required/>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row row-space-10">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Type:</label>
                                                <select id="app_educ_type_tertiary" name="app_educ_type_tertiary" class="form-control form-control m-b-5" data-parsley-required="true">
                                                        <option selected disabled>Please choose</option>
                                                        <option value="Public"> Public</option>
                                                        <option value="Private"> Private</option>
                                      
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Awards:</label>
                                                    <input type="text" name="app_educ_awards_tertiary" id="app_educ_awards_tertiary" class="form-control m-b-5" placeholder="" required/>
                                            </div>
                                        </div>

                                        

                                    </div> 


                                </div>



                                    </div>
                                    <!-- end col-8 -->
                                </div>
                                <!-- end row -->
                            </fieldset>
                            <!-- end fieldset -->
                        </div>
                        <!-- end step-4 -->
                        <!-- begin step-5 -->
                        <div id="step-5">
                            <div class="jumbotron m-b-0 text-center">

                                    <div class="col-m-b-3">
                                            <div class="form-group text-center">
                                                <label>This record is for academic year:</label>
                                                <select id="app_batch_year" name="app_batch_year" class="form-control form-control m-b-5" data-parsley-required="true">
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

                                <h2 class="text-inverse">Fill-Up Application Successfully</h2>
                                <p class="m-b-30 f-s-16">Before proceeding to the submission of this student's record, <br>
                                please review back the details of your form entries.
                                <br>
                                <br>

                                By clicking the submission button, it means that you agree to the terms, conditions and provisionaries of the <br>National Privacy Commission in regards to the compliance to the Data Privacy Act of 2012,<br> in terms of collecting personal and senstitive information.

                                <br>

                                For more details, click the button below <i class="fa fa-arrow-down"></i>

                                <p><a href="#view_npc" data-toggle="modal" class="btn btn-info btn-lg">View DPA Statement in Data Collection</a></p>
                        
                               <button type="submit" name="add_application" class="btn btn-primary btn-lg">Submit Application</button>

                                <?php include("get_view_privacy_statement.php");?>

                            </div>

                            

                        </div>
                        <!-- end step-5 -->
                    

                    </div>
                    <!-- end wizard-content -->
                </div>
                <!-- end wizard -->
            </form>
            <!-- end wizard-form -->
        </div>
        <!-- end #content -->
      
        

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
    
    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="../../../assets/plugins/jquery-smart-wizard/src/js/jquery.smartWizard.js"></script>
    <script src="../../../assets/js/demo/form-wizards.demo.min.js"></script>
    <!-- ================== END PAGE LEVEL JS ================== -->
    

    <script>
        $(document).ready(function() {
            App.init();
            FormWizard.init();

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
