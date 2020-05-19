<?php
define('TITLE','ADMIN PANEL');
include('../connect.php');
//echo "yes";
session_start();                //starting session
if(!(isset($_SESSION['admin_login'])))          //checking if already login or not 
{
  if(isset($_REQUEST['admin_login']))             // onclick login button
    {
      $admin_phone=$_REQUEST['admin_phone'];
      $admin_password=$_REQUEST['admin_password'];
      //sql query
      $sql="SELECT * FROM admin_data WHERE mobile='$admin_phone'AND password='$admin_password' limit 1";
      $result=$connect->query($sql);
      // checking if any data matches or not
      if($result->num_rows==1)
      {
        $_SESSION['admin_login']=true;
        $_SESSION['admin_phone']=$_REQUEST['admin_phone'];
        echo "<script>location.href='dashboard.php'</script>";
      }
      //if not matches then login failed
      else
      {
        $login_failed="login failed";
      }
    }
}
//if already login then redirect to dashboard.php
else
{
  echo "<script>location.href='dashboard.php'</script>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin login</title>
<link rel="stylesheet" href="../css/bootstrap.min.css"> <!--bootstrap file-->
<link rel="stylesheet" href="../css/all.min.css">          <!--fontawesome file-->
<link rel="stylesheet" type="text/css" href="../css/index.css">          <!--our file-->
<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet"> <!--google font-->
</head>
<body>
  <div class="container bg-info mt-5" >
  <div class="text-center "style="font-size:60px">
        Admin LOGIN
  </div>
  <form method="POST" action="">
    <div class="form-group">
      <label for="mobile_no">Mobile No.</label>
      <input type="text" class="form-control" id="admin_phone" name="admin_phone" placeholder="mobile no">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="admin_password" name="admin_password" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-warning mb-4" name="admin_login">LOGIN</button>
    <?php if(isset($login_failed))  //login failed then show this message
    {?>
      <div class="alert alert-danger" role="alert">Login Failed</div>
      <?php
    } ?>
  </form>
  <div class="justify-text-center">
  <button type="submit" class="btn btn-block btn-danger mt-2" name="home" onclick="home()">HOME</button>
  </div>
  </div> 
  <script>
  function home()
  {
    location.href="../index.php";
  }
  </script>
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/all.min.js"></script>
</body>
</html>