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
            $sql = "SELECT c_id FROM client_info WHERE fullname='$fullname' AND mobile='$mob'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $_SESSION["id"] = $row['c_id'];
                header('Location: http://localhost/credit_score/details.php');
           }
           else{
               $sql2 = "INSERT INTO client_info(fullname, mobile, email, org_name) VALUES ('$fullname', '$mob', '$email', '$org_name')";
               if (mysqli_query($conn, $sql2)) {
                   $last_id = mysqli_insert_id($conn);
                   $_SESSION["id"] = $last_id;
                   header('Location: http://localhost/credit_score/details.php');
               } else {
                   echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
               }

           }

        }
    }
    else if(isset($_POST['sub_btn2']))
    {
        $assets = $_POST['assets'];
        $an_income = $_POST['an_income'];
        $debts = $_POST['debts'];
        if(empty($assets) || empty($an_income) || empty($debts))
        {
            header('Location: http://localhost/credit_score/home.php?form=empty');
        }
        else
        {

        }
    }
    $assets = $_POST['assets'];
    $an_income= $_POST['an_income'];
    $debts = $_POST['debts'];
?>