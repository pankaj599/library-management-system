<?php
include('../connect.php');
session_start();
$phone=$_SESSION['l_phone'];
$profile="SELECT * FROM account WHERE a_phone='".$phone."' limit 1";
$profile_data=$connect->query($profile);
while($row=$profile_data->fetch_assoc())
{
    $name=$row['a_name'];
    $number=$row['a_phone'];
    $password=$row['a_password'];
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css"> <!--bootstrap file-->
<link rel="stylesheet" href="../css/all.min.css">          <!--fontawesome file-->
<link rel="stylesheet" type="text/css" href="../css/index.css">          <!--our file-->
<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet"> <!--google font-->
</head>
<body>
<!--nav bar started-->
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <a class="navbar-brand" href="#">Hello <?php echo $name?></a>
  </nav>
  <!--side bar-->
  
  <div class="container-fluid">
    <div class="row">
        <div class="col-sm-2 bg-light sidebar ">
            <div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="person_profile.php" style="color:black">
                            <i class="fas fa-user mr-1"></i>Profile</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="submit_request.php" style="color:black">
                            <i class="fas fa-accessible-icon mr-1"></i>Submit</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="change_details.php" style="color:black">
                            <i class="fas fa-key mr-1"></i>Change Details</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#" style="color:black">
                            <i class="fas fa-sign-out-alt mr-1"></i>Status</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#" style="color:black">
                            <i class="fas fa-sign-out-alt mr-1"></i>MY BOOKS</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="../index.php" style="color:black">
                            <i class="fas fa-sign-out-alt mr-1"></i>Logout</a>
                        </li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6 mt-3 offset-md-1">
            <form method="POST" action="">
                <div class="form-group">
                <span>Name:</span>
                    <input type="text" class="form-control" id="profile_name" name="profile_name" readonly value="<?php echo $name ?>">
                </div>
                <div class="form-group">
                <span>Mobile:</span> 
                <input type="text" class="form-control" id="a_phone" name="a_phone" readonly value="<?php echo $number ?>">
                </div>
                <div class="form-group">
                <span>password:</span> 
                <input type="text" class="form-control" id="a_password" name="a_password" readonly value="<?php echo $password ?>">
                </div>
            </form>
        </div>
    </div>
</div>

<!--nav bar ended-->
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/all.min.js"></script>
</body>
</html>