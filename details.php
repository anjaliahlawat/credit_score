<?php
// Start the session
session_start();
include_once "db_con.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Credit Score System</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="user.js"></script>
</head>
<body>
<div class="container mt-5">
    <div class="row row-header">
        <div class="col-12 col-sm-5 offset-sm-2 bg-info">
            <h1>Credit Score System</h1>
        </div>
    </div>
    <div class="row bg-light">
        <div class="col-12 col-sm-5 offset-sm-2 mt-4">
            <form action="backend_logic.php" method="post">
            <?php
              $id=$_SESSION["id"];
                  $sql1 = "SELECT type, value FROM assets WHERE assets.c_id='$id'";
                  $result1 = mysqli_query($conn, $sql1);
                  if (mysqli_num_rows($result1) > 0) {
                      while ($row1 = mysqli_fetch_assoc($result1)) {
                          ?>
                          <div class="d-flex" id="assets">
                              <h4>Assets</h4>
                              <input type="number" class="form-control" id="assets.type" name="assets.type"
                                          value="<?php echo $row1['type'] ?>" readonly>
                              <input type="number" class="form-control" id="assets.value" name="assets.value"
                                          value="<?php echo $row1['value'] ?>" readonly>
                          </div>
                          <?php
                      }
                  }
                  else
                  {
                      ?>
                      <div class="d-flex mt-5 mb-5" id="assets">
                          <input type="number" class="form-control" id="assets.type" name="assets.type" placeholder="Name your asset">
                          <input type="number" class="form-control" id="assets.value" name="assets.value" placeholder="Enter value">
                      </div>
                      <?php
                  }
                  $sql2 = "SELECT type, value FROM an_income WHERE an_income.c_id='$id'";
                  $result2 = mysqli_query($conn, $sql2);
                  if (mysqli_num_rows($result1) > 0) {
                      while ($row2 = mysqli_fetch_assoc($result2)) {
                          ?>
                          <div class="d-flex mt-5 mb-5" id="income">
                              <input type="text" class="form-control" id="income.type" name="income.type" value="<?php echo $row2['type'] ?>">
                              <input type="number" class="form-control" id="income.value" name="income.value" value="<?php echo $row2['type'] ?>">
                          </div>
                          <?php
                      }
                  }
                  else
                  {
                      ?>
                      <div class="d-flex mt-5 mb-5" id="income">
                          <input type="text" class="form-control" id="income.type" name="income.type" placeholder="Source of income">
                          <input type="number" class="form-control" id="income.value" name="income.value" placeholder="Enter value">
                      </div>
                      <?php
                  }
                      $sql3 = "SELECT type, value FROM debts WHERE debts.c_id='$id'";
                      $result3 = mysqli_query($conn, $sql3);
                      if (mysqli_num_rows($result3) > 0) {
                          while ($row3 = mysqli_fetch_assoc($result3)) {
                              ?>
                              <div class="d-flex pt-5 pb-5" id="debts">
                                  <input type="text" class="form-control" id="debts.type" name="debts.type" value="<?php echo $row3['type'] ?>">
                                  <input type="number" class="form-control" id="debts.value" name="debts.value" value="<?php echo $row3['value'] ?>">
                              </div>
                              <?php
                          }
                      }
                      else
                      {
                          ?>
                          <div class="d-flex mt-5 mb-5" id="debts">
                              <input type="text" class="form-control" id="debts.type" name="debts.type" placeholder="Debt type">
                              <input type="number" class="form-control" id="debts.value" name="debts.value" placeholder="Enter value">
                          </div>
                          <?php
                      }
                         ?>
                <button type="submit" class="btn btn-primary" id="sub_btn2" name="sub_btn2" onclick="calcCreditScore>Calculate Credit Score</button>
            </form>

        </div>
    </div>
</div>
</body>
</html>
