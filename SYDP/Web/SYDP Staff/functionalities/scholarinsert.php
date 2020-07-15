<?php
    
    include('../../../dbcon.php');


     if(isset($_POST['add_newscholar']))
    {   

    // t_scholar_student1_profile
    $app_profile_no = $_POST['app_profile_no'];
    $scholar_profile_no = $_POST['scholar_profile_no'];

    $scholar_profile_firstname = $_POST['scholar_profile_firstname'];
    $scholar_profile_middlename = $_POST['scholar_profile_middlename'];
    $scholar_profile_lastname = $_POST['scholar_profile_lastname'];
    $scholar_profile_extensionname = $_POST['scholar_profile_extensionname'];
    $scholar_id = $_POST['scholar_id'];
    $univ_id = $_POST['univ_id'];
    $course_id = $_POST['course_id'];
    $scholar_profile_studyear  = $_POST['scholar_profile_studyear'];

    // t_scholar_student2_personalinfo

    $scholar_personal_address = $_POST['scholar_personal_address'];
	$scholar_personal_barangay = $_POST['scholar_personal_barangay'];
	$scholar_personal_district = $_POST['scholar_personal_district'];
	$scholar_personal_birthdate = $_POST['scholar_personal_birthdate'];
	$scholar_personal_age = $_POST['scholar_personal_age'];
	$scholar_personal_weight = $_POST['scholar_personal_weight'];
	$scholar_personal_height = $_POST['scholar_personal_height'];
	$scholar_personal_civilstatus = $_POST['scholar_personal_civilstatus'];
	$scholar_personal_citizenship = $_POST['scholar_personal_citizenship'];
	$scholar_personal_religion = $_POST['scholar_personal_religion'];
	$scholar_personal_gender = $_POST['scholar_personal_gender'];
	$scholar_personal_noofbrothers = $_POST['scholar_personal_noofbrothers'];
	$scholar_personal_noofsisters = $_POST['scholar_personal_noofsisters'];
	$scholar_personal_ordinalposition = $_POST['scholar_personal_ordinalposition'];
	$scholar_personal_teleno = $_POST['scholar_personal_teleno'];
	$scholar_personal_mobileno = $_POST['scholar_personal_mobileno'];
	$scholar_personal_email = $_POST['scholar_personal_email'];


	// t_scholar_student3_familybg

	$scholar_family_relationship = $_POST['scholar_family_relationship'];
	$scholar_family_firstname = $_POST['scholar_family_firstname'];
	$scholar_family_middlename = $_POST['scholar_family_middlename'];
	$scholar_family_lastname = $_POST['scholar_family_lastname'];
	$scholar_family_age = $_POST['scholar_family_age'];
	$scholar_family_civilstatus = $_POST['scholar_family_civilstatus'];
	$scholar_family_educational = $_POST['scholar_family_educational'];
	$scholar_family_occupation = $_POST['scholar_family_occupation'];
	$scholar_family_income = $_POST['scholar_family_income'];
	$scholar_family_contact = $_POST['scholar_family_contact'];

	// t_scholar_student4_educationalbg

	    //Primary

	$scholar_educ_schoolname_primary = $_POST['scholar_educ_schoolname_primary'];
	$scholar_educ_address_primary = $_POST['scholar_educ_address_primary'];
	$scholar_educ_type_primary = $_POST['scholar_educ_type_primary'];
	$scholar_educ_yeargraduated_primary = $_POST['scholar_educ_yeargraduated_primary'];
	$scholar_educ_awards_primary = $_POST['scholar_educ_awards_primary'];
	$scholar_educ_gwa_primary = $_POST['scholar_educ_gwa_primary'];


		//Secondary - Junior

	$scholar_educ_schoolname_secondary = $_POST['scholar_educ_schoolname_secondary'];
	$scholar_educ_address_secondary = $_POST['scholar_educ_address_secondary'];
	$scholar_educ_type_secondary = $_POST['scholar_educ_type_secondary'];
	$scholar_educ_yeargraduated_secondary = $_POST['scholar_educ_yeargraduated_secondary'];
	$scholar_educ_awards_secondary = $_POST['scholar_educ_awards_secondary'];
	$scholar_educ_gwa_secondary = $_POST['scholar_educ_gwa_secondary'];

	   //Senior

	$scholar_educ_schoolname_senior = $_POST['scholar_educ_schoolname_senior'];
	$scholar_educ_address_senior = $_POST['scholar_educ_address_senior'];
	$scholar_educ_type_senior = $_POST['scholar_educ_type_senior'];
	$scholar_educ_yeargraduated_senior = $_POST['scholar_educ_yeargraduated_senior'];
	$scholar_educ_awards_senior = $_POST['scholar_educ_awards_senior'];
	$scholar_educ_gwa_senior = $_POST['scholar_educ_gwa_senior'];

	    //Tertiary

	$scholar_educ_schoolname_tertiary = $_POST['scholar_educ_schoolname_tertiary'];
	$scholar_educ_address_tertiary = $_POST['scholar_educ_address_tertiary'];
	$scholar_educ_type_tertiary = $_POST['scholar_educ_type_tertiary'];
	$scholar_educ_awards_tertiary = $_POST['scholar_educ_awards_tertiary'];

		// t_scholar_student5_batchyear

	$scholar_batch_year = $_POST['scholar_batch_year'];
	$semester_id = $_POST['semester_id'];

    // t_stipen

  $semester_id = $_POST['semester_id'];
  $stipen_status = $_POST['stipen_status'];


     $scholarprofile = "INSERT INTO t_scholar_student1_profile (app_profile_no,
     												                     scholar_profile_no,
                                            		scholar_profile_firstname,
                                            		scholar_profile_middlename,
                                            		scholar_profile_lastname,
                                            		scholar_profile_extensionname,
                                            		scholar_id,
                                            		univ_id,
                                            		course_id,
                                            		scholar_profile_studyear
                                            		) 

                   VALUES ('$app_profile_no',
                   		   '$scholar_profile_no',
                           '$scholar_profile_firstname,',
						   '$scholar_profile_middlename',
						   '$scholar_profile_lastname',
						   '$scholar_profile_extensionname',
						   '$scholar_id',
						   '$univ_id',
						   '$course_id',
						   '$scholar_profile_studyear'
                            )";

//t_scholar_student2_personalinfo Query Preparation

        $scholarinfo = "INSERT INTO t_scholar_student2_personalinfo (scholar_profile_no,
		                                               				scholar_personal_address,
		                                               				scholar_personal_barangay,
		                                               				scholar_personal_district,
		                                               				scholar_personal_birthdate,
		                                               				scholar_personal_age,
		                                               				scholar_personal_weight,
		                                               				scholar_personal_height,
		                                               				scholar_personal_civilstatus,
		                                               				scholar_personal_citizenship,
		                                               				scholar_personal_religion,
		                                               				scholar_personal_gender,
		                                               				scholar_personal_noofbrothers,
		                                               				scholar_personal_noofsisters,
		                                               				scholar_personal_ordinalposition,
		                                               				scholar_personal_teleno,
		                                               				scholar_personal_mobileno,
		                                               				scholar_personal_email
                                              						)     
                          VALUES ('$scholar_profile_no',
                                  '$scholar_personal_address',
                                  '$scholar_personal_barangay',
                                  '$scholar_personal_district',
                                  '$scholar_personal_birthdate',
                                  '$scholar_personal_age',
                                  '$scholar_personal_weight',
                                  '$scholar_personal_height',
                                  '$scholar_personal_civilstatus',
                                  '$scholar_personal_citizenship',
                                  '$scholar_personal_religion',
                                  '$scholar_personal_gender',
                                  '$scholar_personal_noofbrothers',
                                  '$scholar_personal_noofsisters',
                                  '$scholar_personal_ordinalposition',
                                  '$scholar_personal_teleno',
                                  '$scholar_personal_mobileno',
                                  '$scholar_personal_email'
                                 )";

   //t_scholar_student3_familybg Query Preparation

        $scholarfamily = "INSERT INTO t_scholar_student3_familybg (scholar_profile_no,
		                                               				scholar_family_relationship,
		                                               				scholar_family_firstname,
		                                               				scholar_family_middlename,
		                                               				scholar_family_lastname,
		                                               				scholar_family_age,
		                                               				scholar_family_civilstatus,
		                                               				scholar_family_educational,
		                                               				scholar_family_occupation,
		                                               				scholar_family_income,
		                                               				scholar_family_contact
                                              						)     
                          VALUES ('$scholar_profile_no',
                                  '$scholar_family_relationship',
                                  '$scholar_family_firstname',
                                  '$scholar_family_middlename',
                                  '$scholar_family_lastname',
                                  '$scholar_family_age',
                                  '$scholar_family_civilstatus',
                                  '$scholar_family_educational',
                                  '$scholar_family_occupation',
                                  '$scholar_family_income',
                                  '$scholar_family_contact'
                                 )"; 


//t_scholar_student4_educationalbg Query Preparation

      // Primary

        $scholareducprimary = "INSERT INTO t_scholar_student4_educationalbg (scholar_profile_no,
		                                               					scholar_educ_level,
		                                               					scholar_educ_schoolname,
		                                               					scholar_educ_address,
		                                               					scholar_educ_type,
		                                               					scholar_educ_yeargraduated,
		                                               					scholar_educ_awards,
		                                               					scholar_educ_gwa
                                              							)     
                          VALUES ('$scholar_profile_no',
                                  'Priamry',
                                  '$scholar_educ_schoolname_primary',
                                  '$scholar_educ_address_primary',
                                  '$scholar_educ_type_primary',
                                  '$scholar_educ_yeargraduated_primary',
                                  '$scholar_educ_awards_primary',
                                  '$scholar_educ_gwa_primary'
                                 )";

  	// Secondary
        $scholareducsecondary = "INSERT INTO t_scholar_student4_educationalbg (scholar_profile_no,
		                                               					scholar_educ_level,
		                                               					scholar_educ_schoolname,
		                                               					scholar_educ_address,
		                                               					scholar_educ_type,
		                                               					scholar_educ_yeargraduated,
		                                               					scholar_educ_awards,
		                                               					scholar_educ_gwa
                                              							)     
                          VALUES ('$scholar_profile_no',
                                  'Secondary',
                                  '$scholar_educ_schoolname_secondary',
                                  '$scholar_educ_address_secondary',
                                  '$scholar_educ_type_secondary',
                                  '$scholar_educ_yeargraduated_secondary',
                                  '$scholar_educ_awards_secondary',
                                  '$scholar_educ_gwa_secondary'
                                 )";
	// Senior
        $scholareducsenior = "INSERT INTO t_scholar_student4_educationalbg (scholar_profile_no,
		                                               					scholar_educ_level,
		                                               					scholar_educ_schoolname,
		                                               					scholar_educ_address,
		                                               					scholar_educ_type,
		                                               					scholar_educ_yeargraduated,
		                                               					scholar_educ_awards,
		                                               					scholar_educ_gwa
                                              							)     
                          VALUES ('$scholar_profile_no',
                                  'Senior',
                                  '$scholar_educ_schoolname_senior',
                                  '$scholar_educ_address_senior',
                                  '$scholar_educ_type_senior',
                                  '$scholar_educ_yeargraduated_senior',
                                  '$scholar_educ_awards_senior',
                                  '$scholar_educ_gwa_senior'
                                 )";

	// Tertiary
        $scholareductertiary = "INSERT INTO t_scholar_student4_educationalbg (scholar_profile_no,
		                                               					scholar_educ_level,
		                                               					scholar_educ_schoolname,
		                                               					scholar_educ_address,
		                                               					scholar_educ_type,
		                                               					scholar_educ_yeargraduated,
		                                               					scholar_educ_awards,
		                                               					scholar_educ_gwa
                                              							)     
                          VALUES ('$scholar_profile_no',
                                  'Tertiary',
                                  '$scholar_educ_schoolname_tertiary',
                                  '$scholar_educ_address_tertiary',
                                  '$scholar_educ_type_tertiary',
                                  'N/A',
                                  '$scholar_educ_awards_tertiary',
                                  'N/A'
                                 )"; 

 	// t_scholar_student5_batchyear Query Preparation
    
 	$scholarbatch = "INSERT INTO t_scholar_student5_batchyear (scholar_profile_no,
		                                               				  scholar_batch_year,
		                                               				  semester_id
                                              							)     
                          VALUES ('$scholar_profile_no',
                                  '$scholar_batch_year',
                                  '$semester_id'
                                 )"; 
                                                           

   // t_stipen Query Preparation 
   
   $stipen = "INSERT INTO t_stipen (scholar_profile_no,
                                    semester_id,
                                    stipen_status
                                    )     
          VALUES ('$scholar_profile_no',
                  '$semester_id',
                  'Pending'
                  )";                              

	//t_scholar_student1_profile Query Execution
              
        mysqli_query($connection,$scholarprofile);

    	//t_scholar_student2_personalinfo Query Execution
              
        mysqli_query($connection,$scholarinfo);        

    //t_scholar_student3_familybg Query Execution
              
        mysqli_query($connection,$scholarfamily);

         //t_scholar_student4_educationalbgg Query Execution

        //Primary
              
        mysqli_query($connection,$scholareducprimary);

        // Secondary
              
        mysqli_query($connection,$scholareducsecondary); 

        // Senior
              
        mysqli_query($connection,$scholareducsenior); 

        // Tertiary
              
        mysqli_query($connection,$scholareductertiary);

        // t_scholar_student5_batchyear Query Execution
              
        mysqli_query($connection,$scholarbatch);

        // t_stypen Query Execution
              
        mysqli_query($connection,$stipen);


        $query = mysqli_query($connection,"UPDATE t_application_student_profile SET app_profile_status = 'Scholar'
                                                             WHERE app_profile_no = '$app_profile_no'");    

    echo "<script>setTimeout(\"location.href = '../views/v_listofscholar.php';\",0);</script>";                        
	}

?>