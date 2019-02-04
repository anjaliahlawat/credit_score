<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Credit Score System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</head>
<body>
<?php
  $id=$_SESSION["id"];

   $sql = "SELECT c_id, assets, annual_income, debts FROM credit_table WHERE c_id='$id'";
   $result = mysqli_query($conn, $sql);
   $row = mysqli_fetch_assoc($result);
?>
<div class="container mt-5">
    <div class="row row-header">
        <div class="col-12 col-sm-5 offset-sm-2 bg-info">
            <h1>Credit Score System</h1>
        </div>
    </div>
    <div class="row bg-light">
        <div class="col-12 col-sm-5 offset-sm-2 mt-4">
            <form action="backend_logic.php" method="post">
                <div class="form-group">
                    <label for="assets">Assets:</label>
                    <input type="text" class="form-control" id="assets" name="assets" value="<?php echo $row['assets']?>">
                </div>
                <div class="form-group">
                    <label for="an_income">Annual Come:</label>
                    <input type="text" class="form-control" id="an_income" name="an_income" value="<?php echo $row['annual_income']?>">
                </div>
                <div class="form-group">
                    <label for="debts">Debts:</label>
                    <input type="text" class="form-control" id="debts" name="debts" value="<?php echo $row['debts']?>">
                </div>
                <button type="submit" class="btn btn-primary" name="sub_btn2">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
