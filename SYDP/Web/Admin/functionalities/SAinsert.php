<?php
    
    include('../../../dbcon.php');


  if(isset($_POST['add_application']))
    {   
        
 	//Step 1 (Student Profile) Variable Intialization

 	$app_profile_no = $_POST['app_profile_no'];

 	$app_profile_firstname = $_POST['app_profile_firstname'];
 	$app_profile_middlename = $_POST['app_profile_middlename'];
 	$app_profile_lastname = $_POST['app_profile_lastname'];
 	$app_profile_extensionname = $_POST['app_profile_extensionname'];
 	$univ_id = $_POST['univ_id'];
 	$course_id = $_POST['course_id'];
 	$app_profile_studyear = $_POST['app_profile_studyear'];

 	//Step 2 (Student Information) Variable Intialization

  $app_personal_address = $_POST['app_personal_address'];
  $app_personal_barangay = $_POST['app_personal_barangay'];
  $app_personal_district = $_POST['app_personal_district'];
  $app_personal_birthdate = $_POST['app_personal_birthdate'];
  $app_personal_age = $_POST['app_personal_age'];
  $app_personal_weight = $_POST['app_personal_weight'];
  $app_personal_height = $_POST['app_personal_height'];
  $app_personal_civilstatus = $_POST['app_personal_civilstatus'];
  $app_personal_citizenship = $_POST['app_personal_citizenship'];
  $app_personal_religion = $_POST['app_personal_religion'];
  $app_personal_gender = $_POST['app_personal_gender'];
  $app_personal_noofbrothers = $_POST['app_personal_noofbrothers'];
  $app_personal_noofsisters = $_POST['app_personal_noofsisters'];
  $app_personal_ordinalposition = $_POST['app_personal_ordinalposition'];
  $app_personal_teleno = $_POST['app_personal_teleno'];
  $app_personal_mobileno = $_POST['app_personal_mobileno'];
  $app_personal_email = $_POST['app_personal_email'];

 	//Step 3 (Family Background) Variable Intialization

 	$app_family_relationship_first = $_POST['app_family_relationship_first'];
 	$app_family_firstname_first = $_POST['app_family_firstname_first'];
 	$app_family_middlename_first = $_POST['app_family_middlename_first'];
 	$app_family_lastname_first = $_POST['app_family_lastname_first'];
 	$app_family_age_first = $_POST['app_family_age_first'];
 	$app_family_civilstatus_first = $_POST['app_family_civilstatus_first'];
 	$app_family_educational_first = $_POST['app_family_educational_first'];
 	$app_family_occupation_first = $_POST['app_family_occupation_first'];
 	$app_family_income_first = $_POST['app_family_income_first'];
 	$app_family_location_first = $_POST['app_family_location_first'];

 	$app_family_relationship_second = $_POST['app_family_relationship_second'];
 	$app_family_firstname_second = $_POST['app_family_firstname_second'];
 	$app_family_middlename_second = $_POST['app_family_middlename_second'];
 	$app_family_lastname_second = $_POST['app_family_lastname_second'];
 	$app_family_age_second = $_POST['app_family_age_second'];
 	$app_family_civilstatus_second = $_POST['app_family_civilstatus_second'];
 	$app_family_educational_second = $_POST['app_family_educational_second'];
 	$app_family_occupation_second = $_POST['app_family_occupation_second'];
 	$app_family_income_second = $_POST['app_family_income_second'];
 	$app_family_location_second = $_POST['app_family_location_second'];

 	//Step 4 (Educational Background) Variable Intialization

 		// PRIMARY 
 	$app_educ_schoolname_primary = $_POST['app_educ_schoolname_primary'];
 	$app_educ_type_primary = $_POST['app_educ_type_primary'];
 	$app_educ_yeargraduated_primary = $_POST['app_educ_yeargraduated_primary'];
 	$app_educ_awards_primary = $_POST['app_educ_awards_primary'];
 	$app_educ_gwa_primary = $_POST['app_educ_gwa_primary'];

 		// Junior High
 	$app_educ_schoolname_junior= $_POST['app_educ_schoolname_junior'];
 	$app_educ_type_junior = $_POST['app_educ_type_junior'];
 	$app_educ_yeargraduated_junior = $_POST['app_educ_yeargraduated_junior'];
 	$app_educ_awards_junior = $_POST['app_educ_awards_junior'];
 	$app_educ_gwa_junior = $_POST['app_educ_gwa_junior'];

 	// Senior High
 	$app_educ_schoolname_senior= $_POST['app_educ_schoolname_senior'];
 	$app_educ_type_senior = $_POST['app_educ_type_senior'];
 	$app_educ_yeargraduated_senior = $_POST['app_educ_yeargraduated_senior'];
 	$app_educ_awards_senior = $_POST['app_educ_awards_senior'];
 	$app_educ_gwa_senior = $_POST['app_educ_gwa_senior'];

 	// Tertiary College level
 	$app_educ_schoolname_tertiary  = $_POST['app_educ_schoolname_tertiary'];
 	$app_educ_type_tertiary = $_POST['app_educ_type_tertiary'];
 	$app_educ_yeargraduated_tertiary  = $_POST['app_educ_yeargraduated'];
 	$app_educ_awards_tertiary  = $_POST['app_educ_awards_tertiary'];

  //Step 4 (Batch year) Variable Intialization

  $app_batch_year  = $_POST['app_batch_year'];

 	//Step 1 (Student Profile) Query Preparation

        $step1 = "INSERT INTO t_application_student_profile (app_profile_no,
                                               				app_profile_firstname,
                                               				app_profile_middlename,
                                               				app_profile_lastname,
                                               				app_profile_extensionname,
                                               				univ_id,
                                               				course_id,
                                               				app_profile_studyear
                                              				)     
                          VALUES ('$app_profile_no',
                                  '$app_profile_firstname',
                                  '$app_profile_middlename',
                                  '$app_profile_middlename',
                                  '$app_profile_extensionname',
                                  '$univ_id',
                                  '$course_id',
                                  '$app_profile_studyear'
                                 )";

 	//Step 2 (Student Information) Query Preparation 
 	
        $step2 = "INSERT INTO t_application_student_personalinfo (app_profile_no,
                                                                  app_personal_address,
                                                                  app_personal_barangay,
                                                                  app_personal_district,
                                                                  app_personal_birthdate,
                                                                  app_personal_age,
                                                                  app_personal_weight,
                                                                  app_personal_height,
                                                                  app_personal_civilstatus,
                                                                  app_personal_citizenship,
                                                                  app_personal_religion,
                                                                  app_personal_gender,
                                                                  app_personal_noofbrothers,
                                                                  app_personal_noofsisters,
                                                                  app_personal_ordinalposition,
                                                                  app_personal_teleno,
                                                                  app_personal_mobileno,
                                                                  app_personal_email
                                                                  )     
                          VALUES ('$app_profile_no',
                                  '$app_personal_address',
                                  '$app_personal_barangay',
                                  '$app_personal_district',
                                  '$app_personal_birthdate',
                                  '$app_personal_age',
                                  '$app_personal_weight',
                                  '$app_personal_height',
                                  '$app_personal_civilstatus',
                                  '$app_personal_citizenship',
                                  '$app_personal_religion',
                                  '$app_personal_gender',
                                  '$app_personal_noofbrothers',
                                  '$app_personal_noofsisters',
                                  '$app_personal_ordinalposition',
                                  '$app_personal_teleno',
                                  '$app_personal_mobileno',
                                  '$app_personal_email'
                                 )";


   //Step 3 (Family Background) Query Preparation 
 	
	 	$step3first = "INSERT INTO t_application_student_familybg (app_profile_no,
	                                               				app_family_relationship,
	                                               				app_family_firstname,
	                                               				app_family_middlename,
	                                               				app_family_lastname,
	                                               				app_family_age,
	                                               				app_family_civilstatus,
	                                               				app_family_educational,
	                                               				app_family_occupation,
	                                               				app_family_income,
	                                               				app_family_location
	                                              				)     
                          VALUES ('$app_profile_no',
                                  '$app_family_relationship_first',
                                  '$app_family_firstname_first',
                                  '$app_family_middlename_first',
                                  '$app_family_lastname_first',
                                  '$app_family_age_first',
                                  '$app_family_civilstatus_first',
                                  '$app_family_educational_first',
                                  '$app_family_occupation_first',
                                  '$app_family_income_first',
                                  '$app_family_location_first'
                                 )";                                

		$step3second = "INSERT INTO t_application_student_familybg (app_profile_no,
			                                               				app_family_relationship,
			                                               				app_family_firstname,
			                                               				app_family_middlename,
			                                               				app_family_lastname,
			                                               				app_family_age,
			                                               				app_family_civilstatus,
			                                               				app_family_educational,
			                                               				app_family_occupation,
			                                               				app_family_income,
			                                               				app_family_location
			                                              				)     
		                          VALUES ('$app_profile_no',
		                                  '$app_family_relationship_second',
		                                  '$app_family_firstname_second',
		                                  '$app_family_middlename_second',
		                                  '$app_family_lastname_second',
		                                  '$app_family_age_second',
		                                  '$app_family_civilstatus_second',
		                                  '$app_family_educational_second',
		                                  '$app_family_occupation_second',
		                                  '$app_family_income_second',
		                                  '$app_family_location_second'
		                                 )";

  	//Step 4 (Educational Background) Query Preparation 
 	
	 	$step4primary = "INSERT INTO t_application_educationalbg (app_profile_no,
	                                               				app_educ_level,
	                                               				app_educ_schoolname,
	                                               				app_educ_yeargraduated,
	                                               				app_educ_awards,
	                                               				app_educ_gwa
	                                              				)     
                          VALUES ('$app_profile_no',
                                  'Primary',
                                  '$app_educ_schoolname_primary',
                                  '$app_educ_yeargraduated_primary',
                                  '$app_educ_awards_primary',
                                  '$app_educ_gwa_primary'
                                 )";                                

		$step4junior = "INSERT INTO t_application_educationalbg (app_profile_no,
	                                               				app_educ_level,
	                                               				app_educ_schoolname,
	                                               				app_educ_yeargraduated,
	                                               				app_educ_awards,
	                                               				app_educ_gwa
	                                              				)     
                          VALUES ('$app_profile_no',
                                  'Junior',
                                  '$app_educ_schoolname_junior',
                                  '$app_educ_yeargraduated_junior',
                                  '$app_educ_awards_junior',
                                  '$app_educ_gwa_junior'
                                 )";   

 		$step4senior = "INSERT INTO t_application_educationalbg (app_profile_no,
	                                               				app_educ_level,
	                                               				app_educ_schoolname,
	                                               				app_educ_yeargraduated,
	                                               				app_educ_awards,
	                                               				app_educ_gwa
	                                              				)     
                          VALUES ('$app_profile_no',
                                  'Senior',
                                  '$app_educ_schoolname_senior',
                                  '$app_educ_yeargraduated_senior',
                                  '$app_educ_awards_senior',
                                  '$app_educ_gwa_senior'
                                 )";                                   

 		$step4tertiary = "INSERT INTO t_application_educationalbg (app_profile_no,
	                                               				app_educ_level,
	                                               				app_educ_schoolname,
	                                               				app_educ_yeargraduated,
	                                               				app_educ_awards,
	                                               				app_educ_gwa
	                                              				)     
                          VALUES ('$app_profile_no',
                                  'Tertiary',
                                  '$app_educ_schoolname_tertiary',
                                  'Continue',
                                  '$app_educ_awards_tertiary',
                                  'N/A'
                                 )"; 

   //Step 5 (Batch Year) Query Preparation 
   
   $step5 = "INSERT INTO t_application_batchyear (app_profile_no,
                                                  app_batch_year
                                                  )
                                  VALUES ('$app_profile_no',
                                          '$app_batch_year'
                                          )";


	//Step 1 (Student Profile) Query Execution
              
        mysqli_query($connection,$step1);

    //Step 2 (Student Information) Query Execution
              
        mysqli_query($connection,$step2);

    //Step 3 (Family Background) Query Execution
              
        mysqli_query($connection,$step3first);
        mysqli_query($connection,$step3second);

    //Step 4 (Educational Background) Query Execution
              
        mysqli_query($connection,$step4primary);
        mysqli_query($connection,$step4junior);
        mysqli_query($connection,$step4senior);
        mysqli_query($connection,$step4tertiary);

    //Step 5 (Batchyear) Query Execution 
    
        mysqli_query($connection,$step5);  

    //Return to Landing Page

         echo "<script>setTimeout(\"location.href = '../views/t_scholarapplicant.php';\",0);</script>";

   }
 ?>