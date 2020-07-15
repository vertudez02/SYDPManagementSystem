<?php
    
    include('../../../dbcon.php');

     ////////  Editing User Role ///////
    if(isset($_POST['edit_university']))
    {
        $univ_id = $_POST['univ_id'];
        $univ_name = $_POST['univ_name'];
        $univ_description = $_POST['univ_description'];
        $univ_location = $_POST['univ_location'];
        $univ_type = $_POST['univ_type'];
        $univ_status = $_POST['univ_status'];

        $query = mysqli_query($connection,"UPDATE r_university SET univ_name = '$univ_name',
                                                                   univ_description = '$univ_description',
                                                                   univ_location = '$univ_location',
                                                                   univ_type = '$univ_type',
                                                                   univ_status = '$univ_status'
                                                             WHERE univ_id = '$univ_id'");

        echo "<script>setTimeout(\"location.href = '../views/v_university.php';\",0);</script>";
    }


 if(isset($_POST['edit_step3']))
    {
        $app_step3_id = $_POST['app_step3_id'];
        $app_step3_remarks = $_POST['app_step3_remarks'];


        $query = mysqli_query($connection,"UPDATE t_step3_appinterview SET app_step3_remarks = '$app_step3_remarks'
                                                             WHERE app_step3_id = '$app_step3_id'");

        echo "<script>setTimeout(\"location.href = '../views/v_listofapplicantstep3passed.php';\",0);</script>";
    }

if(isset($_POST['applicationstatus']))
    {
        $app_profile_no = $_POST['app_profile_no'];
        $app_profile_status = $_POST['app_profile_status'];



        $query = mysqli_query($connection,"UPDATE t_application_student_profile SET app_profile_status = '$app_profile_status'
                                                             WHERE app_profile_no = '$app_profile_no'");

        echo "<script>setTimeout(\"location.href = '../views/v_listofapplicantapproved.php';\",0);</script>";
    }

