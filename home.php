<!DOCTYPE html>
<html>
<head>
    <title>Credit Score System</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</head>
<body>
 <div class="container mt-5">
     <div class="row row-header">
         <div class="col-12 col-sm-5 offset-sm-2 bg-info">
             <h1>Credit Score System</h1>
         </div>
     </div>
     <div class="row">
         <div class="col-12 col-sm-5 offset-sm-2 mt-4">
             <form action="backend_logic.php" method="post">
                 <div class="form-group">
                     <label for="fullname">Name:</label>
                     <input type="text" class="form-control" id="name" name="fullname" placeholder="Enter name">
                 </div>
                 <div class="form-group">
                     <label for="mob">Mobile Number:</label>
                     <input type="text" class="form-control" id="mob" name="mob" placeholder="Enter mobile number">
                 </div>
                 <div class="form-group">
                     <label for="email">Email address(optional):</label>
                     <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                 </div>
                 <div class="form-group">
                     <label for="org_name">Organization Name(optional):</label>
                     <input type="text" class="form-control" id="org_name" name="org_name" placeholder="Enter organization name">
                 </div>

                 <button type="submit" class="btn btn-primary" name="sub_btn1">Next</button>

             </form>
         </div>
     </div>
 </div>


</body>
</html>