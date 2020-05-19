<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE?></title> <!--dynamic title-->
    <link rel="stylesheet" href="../css/bootstrap.min.css"> <!--bootstrap file-->
<link rel="stylesheet" href="../css/all.min.css">          <!--fontawesome file-->
<link rel="stylesheet" type="text/css" href="../css/index.css">          <!--our file-->
<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet"> <!--google font-->
</head>
<body>
<!--nav bar started-->
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <a class="navbar-brand" href="#">WELCOME</a>
  </nav>
  <!--side bar-->
  
  <div class="container-fluid">
    <div class="row">
        <div class="col-sm-2 bg-light sidebar">
            <div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="person_profile.php" style="color:black">
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
                        <a class="nav-link" href="status.php" style="color:black">
                            <i class="fas fa-sign-out-alt mr-1"></i>Status</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="mybooks.php" style="color:black">
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
         