<!--is file me jo bhi request ayi hai book related usko card ke form me show karna
=>and ek form banana jisme book ko dena ya na dena mention ho
=>user ke request ka data dikhane ke liye bootstrap cards ke andar while loop lagana
=>view and close button jisme close se database se data delete ho jaye and view se 
data fowm me aajaye jo side me hi hai
=>close karne ke baaad same page ko refresh karna meta use karke
=>data ki id catch karni hai hidden tarike se taaki form me daal sake
=>form me assign and reset ka button banana hai.
=>jo form se data aye use ek new table me store karna hai uski id catch karke;
 -->
<?php
//title addition using define
define('TITLE','REQUEST');  
include_once('../connect.php');
session_start();
//if already login as admin then you can access it 
if(isset($_SESSION['admin_login']))
{
 $sql="SELECT * FROM submit_request";
 $result=$connect->query($sql);
    //if view button is pressed
    if(isset($_REQUEST['view']))
    {
        // echo $_REQUEST['view_value'];
        $sql_2="SELECT * FROM submit_request WHERE submit_id={$_REQUEST['view_value']}";
        $result_2=$connect->query($sql_2);
        $row_2=$result_2->fetch_assoc();
    }
    //if close button is pressed than delete that request
    else if(isset($_REQUEST['close']))
    {
        $sql_4="DELETE FROM submit_request WHERE submit_id={$_REQUEST['view_value']}";
        $result_4=$connect->query($sql_4);
        if($result_4==true)
        {
            echo '<meta http-equiv="refresh" content="1">';
        }
    }
}
//otherwise go to login page 
else
{
    echo "<script>location.href='admin_login.php'</script>";
}
?>
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
                        <a class="nav-link" href="../index.php" style="color:black">
                            <i class="fas fa-sign-out-alt mr-1"></i>Logout</a>
                        </li>
                </ul>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="row">
                <div class="col-12">
                <?php  while($row=$result->fetch_assoc())
                {?>
                    <div class="card mt-4" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Request ID:<?php echo $row['submit_id']?></h5>
                        <!--<h6 class="card-subtitle mb-2 text-muted">SEMESTER:<?php //echo $row['semester']?></h6>-->
                        <p class="card-text">Subject: <?php echo $row['subject']?></p>
                        <p class="card-text">BOOK: <?php echo $row['book']?></p>
                        
                        <div class="float-right">
                        <form method="POST" action="">
                            <button type="submit" name="view" class="btn btn-warning mx-2">view</button>
                            <input type="hidden" name="view_value" value="<?php echo $row['submit_id']?>"> 
                            <button type="submit" name="close" class="btn btn-info">Close</button>
                        </form>
                        </div>
                    </div>
                    </div>
                <?php
             } 
             ?>
                </div>
            </div>
        </div>
        <!--application form-->
        <div class="col-5 offeset-md-1 mt-5 bg-light">
            <h1>APPLICATION FORM</h1>
            <form method="POST" action="">
   
        <div class="form-group">
        
            <span>Request ID:</span>
               
                <input type="text" class="form-control" id="r_id" name="r_id" value="<?php if(isset($_REQUEST['view'])){echo $row_2['submit_id'];}?>" readonly>
        </div>
        
        <div class="form-group">
        <div class="form-group">
            <span>Semester:</span> 
                <input type="text" class="form-control" id="subject" name="r_semester" value="<?php if(isset($_REQUEST['view'])){echo $row_2['semester'];}?>"readonly>
            </div>
            <span>Subject:</span> 
            <input type="text" class="form-control" id="subject" name="r_subject" value="<?php if(isset($_REQUEST['view'])){echo $row_2['subject'];}?>" readonly>
            </div>
            <div class="form-group">
            <span>Book:</span> 
            <input type="text" class="form-control" id="book" name="r_book" value="<?php if(isset($_REQUEST['view'])){echo $row_2['book'];}?>" readonly>
            </div>
            <div class="form-group">
            <span>Mobile:</span> 
            <input type="text" class="form-control" id="mobile" name="r_mobile" value="<?php if(isset($_REQUEST['view'])){echo $row_2['mobile'];}?>" readonly>
            </div>
            <div class="row">
                <div class="col-4">
                <div class="row">
                <div class="col-6">
                Accept: <input type="radio" class="form-control" id="mobile" name="r_check" value="Accept">
                </div>
                <div class="col-6">
                   Reject: <input type="radio" class="form-control" id="mobile" name="r_check" value="Reject">
                </div>
                </div>
                </div>
                <div class="col-4 offset-md-2">
                    <div class="form-group">
                    <span>Issue Date:</span> 
                    <input type="date" class="form-control" id="date" name="r_date">
                    </div>
                </div>
            </div>
            <div class="float-right">
                <button type="submit" class="btn btn-primary" name="r_accept">Accept</button>
                <button type="submit" class="btn btn-secondary" name="r_reset">Reset</button>
            </div>
            <?php
            if(isset($msg))
            {
                echo $msg;
            }
            ?>
    </form>
        </div>
    </div>
    <!--form accept code ends-->
  <!--form accept code-->   
<?php
//if accept button is pressed
if(isset($_REQUEST['r_accept']))
{
    $a=$_REQUEST['r_id'];
    $b=$_REQUEST['r_semester'];
    $c=$_REQUEST['r_subject'];
    $d=$_REQUEST['r_book'];
    $e=$_REQUEST['r_mobile'];
    $f=$_REQUEST['r_check'];
    $g=$_REQUEST['r_date'];
    $sql_3="INSERT INTO request_info(submit_id,semester,subject,book,mobile,status,date) VALUES('$a','$b','$c','$d','$e','$f','$g')";
    $result_3=$connect->query($sql_3);
}
else if(isset($_REQUEST['r_reset']))
{
    echo '<meta http-equiv="refresh" content="1">';
}
include_once('include/footer.php');
?>