<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ONLINE MANAGEMENT SYSTEM</title>
<link rel="stylesheet" href="css/bootstrap.min.css"> <!--bootstrap file-->
<link rel="stylesheet" href="css/all.min.css">          <!--fontawesome file-->
<link rel="stylesheet" type="text/css" href="css/index.css">          <!--our file-->
<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet"> <!--google font-->
</head>
<body>
<!--nav baar started-->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">MANAGEMENT SYSTEM</a>
  <span class="navbar-text">Solution to every problem</span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!--nav bar ended-->
<div class="container introduction">
  <div class="row">
      <div class="col-sm-12">
        <h1>LIBRARY MANAGEMENT SYSTEM</h1>
      </div>
      <div class="col-sm-12 intro_sub">
        Solution to every problem
      </div>
  </div>
<div class="container mt-4">
<div class="row">
  <div class="col-sm-1 offset-sm-5">
    <input type="button" class="btn btn-warning" value="Login" onclick="login()">
  </div>
  <div class="col-sm-1">
  <input type="button" class="btn btn-danger" value="New Account"onclick="new_account()">
  </div>
</div>
</div>
</div>
<!--contact us-->
<?php include_once('contactus.php');?>
<!--end of contact us-->
<footer class="bg-dark mt-5 text-center mb-2"><a style="color:white"href="admin/admin_login.php">Admin</a></footer>
<script>
function login()
{
  location.href="customer/login.php";
}
function new_account()
{
  location.href="account.php";
}
</script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
</body>
</html>