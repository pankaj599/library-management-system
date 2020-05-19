<!--PHP-->
<?php
include('connect.php');
if(isset($_REQUEST['sign_up']))
{
    //checking for an empty field
    if(($_REQUEST['a_name']=="")||($_REQUEST['a_phone']=="")||($_REQUEST['a_password']==""))
    {
        # method -1 => echo "<script>"."alert('fill all the field')"."</script>";
        #method-2
        $account_error='<div class="alert alert-danger mt-1" role="alert">All fields are required</div>';
    }

    else{
        //checking if user already registered
    $check="SELECT a_phone FROM account WHERE a_phone='".$_REQUEST['a_phone']."'";
    $rows=$connect->query($check);
    if($rows->num_rows==1)
    {
        echo "<script>"."alert('already registered')"."</script>";
    }
    //creating account
        else
        {
            $name=$_REQUEST['a_name'];
            $phone=$_REQUEST['a_phone'];
            $password=$_REQUEST['a_password'];
            $sql="INSERT INTO account(a_name,a_phone,a_password) VALUES('$name','$phone','$password')";
            if($connect->query($sql))
            {
                echo "<script>"."alert('Account successfully created')"."</script>";
            }
        }
}
}
?>
<!--%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ONLINE MANAGEMENT SYSTEM</title>
<link rel="stylesheet" href="css/bootstrap.min.css"> <!--bootstrap file-->
<link rel="stylesheet" href="css/all.min.css">          <!--fontawesome file-->    <!--our file-->
<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet"> <!--google font-->
</head>
<body>
<div class="container mt-4 bg-light" >
  <div class="text-center "style="font-size:60px">
        Create an Account
  </div>
  <form method="POST" action="">
  <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="a_name" name="a_name" placeholder="Enter name">
    </div>
    <div class="form-group">
      <label for="mobile_no">Mobile No.</label>
      <input type="text" class="form-control" id="a_phone" name="a_phone" placeholder="mobile no">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="a_password" name="a_password" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary mb-4" name="sign_up">Sign Up</button>
    <?php 
    if(isset($account_error))
    {
        echo $account_error;
    }?>
  </form>
  <input type="button" class="btn btn-warning mt-2 btn-block" value="HOME" onclick="home()">
  </div>
  <script>
  function home()
  {
    location.href="index.php";
  }
  </script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
</body>
</html>
<!-- ####################################here a stands for account-->

