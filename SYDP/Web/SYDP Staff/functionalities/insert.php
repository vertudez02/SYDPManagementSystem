<?php
    
    include('../../../dbcon.php');

     if(isset($_POST['requirements']))
    {   
        
        $app_profile_no = $_POST['app_profile_no'];

        $req_remarks_birthcert = $_POST['req_remarks_birthcert'];

        $req_remarks_regicard = $_POST['req_remarks_regicard'];

        $req_remarks_grades = $_POST['req_remarks_grades'];

        $req_remarks_indigency = $_POST['req_remarks_indigency'];

        $req_remarks_itr = $_POST['req_remarks_itr'];

        $req_id = $_POST['req_id'];
        $app_step2_status = $_POST['app_step2_status'];



        $birthcert = "INSERT INTO r_requirement (app_profile_no,
                                                req_name,
                                                req_remarks
                                                ) 

                   VALUES ('$app_profile_no',
                            'Birth Certificate', 
                            '$req_remarks_birthcert'
                            )";

        $regicard = "INSERT INTO r_requirement (app_profile_no,
                                                req_name,
                                                req_remarks
                                                ) 

                   VALUES ('$app_profile_no',
                            'Regisration Card', 
                            '$req_remarks_regicard'
                            )";                            

        $grades = "INSERT INTO r_requirement (app_profile_no,
                                                req_name,
                                                req_remarks
                                                ) 

                   VALUES ('$app_profile_no',
                            'Grades', 
                            '$req_remarks_grades'
                            )";

        $indigency = "INSERT INTO r_requirement (app_profile_no,
                                                req_name,
                                                req_remarks
                                                ) 

                   VALUES ('$app_profile_no',
                            'Barangay Indigency', 
                            '$req_remarks_indigency'
                            )";

        $itr = "INSERT INTO r_requirement (app_profile_no,
                                                req_name,
                                                req_remarks
                                                ) 

                   VALUES ('$app_profile_no',
                            'Income Tax Return', 
                            '$req_remarks_itr'
                            )"; 

        $step2requirements = "INSERT INTO t_step2_appreq (app_profile_no,
                                                          app_step2_status
                                                          ) 

                   VALUES ('$app_profile_no',
                            '$app_step2_status'
                            )";                                                                                   

              
        mysqli_query($connection,$birthcert);

        mysqli_query($connection,$regicard);

        mysqli_query($connection,$grades);

        mysqli_query($connection,$indigency);

        mysqli_query($connection,$itr);

        mysqli_query($connection,$step2requirements);
                
         echo "<script>setTimeout(\"location.href = '../views/v_listofapplicantstep2req.php';\",0);</script>";
    }

   if(isset($_POST['step3approval']))
    {   

        $app_profile_no = $_POST['app_profile_no'];

        $app_step3_scheduledate = $_POST['app_step3_scheduledate'];
        $app_step3_scheduletime = $_POST['app_step3_scheduletime'];

        $insert = "INSERT INTO t_step3_appinterview (app_profile_no,
                                                    app_step3_scheduledate,
                                                    app_step3_scheduletime
                                                    )     
                   VALUES ('$app_profile_no',
                            '$app_step3_scheduledate', 
                            '$app_step3_scheduletime'
                            )";
              
        mysqli_query($connection,$insert);


                
         echo "<script>setTimeout(\"location.href = '../views/v_applicantstep2approval.php';\",0);</script>";
    }

    if(isset($_POST['newscholar']))
    {   

        $app_profile_no = $_POST['app_profile_no'];

        $scholar_profile_no = $_POST['scholar_profile_no'];

        $insert = "INSERT INTO t_scholar_student (app_profile_no,
                                                scholar_profile_no
                                                )     
                   VALUES ('$app_profile_no',
                            '$scholar_profile_no'
                            )";
              
        mysqli_query($connection,$insert);


                
         echo "<script>setTimeout(\"location.href = '../views/#.php';\",0);</script>";
    }


 

?>