<?php
include('../connect.php');
//since we don't want a user already login to again fill the login page, he/she should be directly redirected
session_start();
if(!isset($_SESSION['login'])) //cheking if already login or not
{
  if(isset($_REQUEST['login']))
  {
    $sql="SELECT a_phone, a_password FROM account WHERE a_phone='".$_REQUEST['l_phone']."' AND a_password='".$_REQUEST['l_password']."' limit 1";
    $result=$connect->query($sql);
    if($result->num_rows==1)
    {
      $_SESSION['login']=true;
      $_SESSION['l_phone']=$_REQUEST['l_phone'];
      echo "<script>location.href='person_profile.php'</script>";
    }
    else
    {
      $login_failed="login failed";
    }
  }
}
else
{
  echo "<script>location.href='person_profile.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ONLINE MANAGEMENT SYSTEM</title>
<link rel="stylesheet" href="../css/bootstrap.min.css"> <!--bootstrap file-->
<link rel="stylesheet" href="../css/all.min.css">          <!--fontawesome file-->
<link rel="stylesheet" type="text/css" href="../css/index.css">          <!--our file-->
<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet"> <!--google font-->
</head>
<body>
<div class="login">
  <div class="container" >
  <div class="text-center "style="font-size:60px">
        LOGIN
  </div>
  <form method="POST" action="">
    <div class="form-group">
      <label for="mobile_no">Mobile No.</label>
      <input type="text" class="form-control" id="l_phone" name="l_phone" placeholder="mobile no">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="l_password" name="l_password" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-warning mb-4" name="login">LOGIN</button>
    <?php if(isset($login_failed))
    {?>
      <div class="alert alert-danger" role="alert">Login Failed</div>
      <?php
    } ?>
  </form>
  <div class="justify-text-center">
  <button type="submit" class="btn btn-block btn-primary mt-2" name="home" onclick="home()">HOME</button>
  </div>
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