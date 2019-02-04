<?php
// Start the session
session_start();

 include_once "db_con.php";

   $fullname = $_POST['fullname'];
   $mob = $_POST['mob'];
   $email = $_POST['email'];
   $org_name = $_POST['org_name'];
    if(isset($_POST['sub_btn1']))
    {
        if(empty($fullname) || empty($mob))
        {
            header('Location: http://localhost/credit_score/home.php?form=empty');
        }
        else {
            $sql = "SELECT c_id FROM client_info WHERE name='$fullname', mobile='$mob'";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $_SESSION["id"] = $row['c_id'];
                header('Location: http://localhost/credit_score/details.php');
           }
           else{
               $sql2 = "INSERT INTO client_info(name, mobile, email, org_name) VALUES ('$fullname', '$mob', '$email', '$org_name')";
               if (mysqli_query($conn, $sql2)) {
                   echo "New record created successfully";
               } else {
                   echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
               }

           }
        }

    }
?>