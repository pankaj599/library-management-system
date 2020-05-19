<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE?></title>
    <link rel="stylesheet" href="../css/bootstrap.min.css"> <!--bootstrap file-->
<link rel="stylesheet" href="../css/all.min.css">          <!--fontawesome file-->
<link rel="stylesheet" type="text/css" href="../css/index.css">          <!--our file-->
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <a class="navbar-brand" href="#">ADMIN PANEL</a>
  </nav>
  <!--side bar-->
  
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2 bg-light sidebar">
            <div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php" style="color:black">
                            <i class="fas fa-user mr-1"></i>DASHBOARD</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="worktable.php" style="color:black">
                            <i class="fas fa-accessible-icon mr-1"></i>Work</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="request.php" style="color:black">
                            <i class="fas fa-key mr-1"></i>Request</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="books.php" style="color:black">
                            <i class="fas fa-key mr-1"></i>BOOKS</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="logout.php" style="color:black">
                            <i class="fas fa-sign-out-alt mr-1"></i>Logout</a>
                        </li>
                </ul>
            </div>
        </div>