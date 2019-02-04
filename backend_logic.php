<?php
// Start the session
session_start();

 include_once "db_con.php";

   $fullname = $_POST['fullname'];
   $mob = $_POST['mob'];
   $email = $_POST['email'];
   $org_name = $_POST['org_name'];
    if(isset($_POST['sub_btn']))
    {
        if(empty($fullname) || empty($mob))
        {
            header('Location: http://localhost/credit_score/home.php?form=empty');
        }
        else {
            $_SESSION["fullname"] = $fullname;
            $_SESSION["mob"] = $mob;
            $sql = "SELECT c_id FROM credit_score_system WHERE name='$fullname', mobile='$mob'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                header('Location: http://localhost/credit_score/details.php');
           }
           else{

           }
        }

    }
?>