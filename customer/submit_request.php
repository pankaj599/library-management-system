<?php
define('TITLE','submit_request');
include('../connect.php');
session_start();
if(isset($_SESSION['login']))
{
    $phone=$_SESSION['l_phone'];
}
else
{
    echo "<script>location.href='login.php'</script>";
}
if(isset($_REQUEST['submit']))
{
    $semester=$_REQUEST['submit_semester'];
    $subject=$_REQUEST['submit_subject'];
    $book=$_REQUEST['submit_book'];
    $mobile=$_REQUEST['mobile'];
    if(($semester=="")||($subject=="")||($book=="")||($mobile==""))
    {
        $msg="<div class='alert alert-danger mt-2' role='alert'>Fill all the values</div>";
    }
    else
    {
        $sql="INSERT INTO submit_request(semester,subject,book,mobile) VALUES('$semester','$subject','$book','$mobile')";
        if($connect->query($sql))
        {
        $myid=mysqli_insert_id($connect);
        $_SESSION['myid']=$myid;
        echo "<script>location.href='submit_receipt.php'</script>";
        }
    }
    
}

include('include/header.php');

?>

    <form method="POST" action="">
    
        <div class="form-group">
        
            <span>Semester:</span>
            
                <input type="text" class="form-control" id="submit_semester" name="submit_semester">
        </div>
        
        <div class="form-group">
        
            <span>Subject:</span> 
            <input type="text" class="form-control" id="submit_subject" name="submit_subject">
            </div>
            <div class="form-group">
            <span>Book:</span> 
            <input type="text" class="form-control" id="submit_book" name="submit_book">
            </div>
            <div class="form-group">
            <span>Mobile:</span> 
            <input type="text" class="form-control" id="submit_mobile" name="mobile">
            </div>
            <button type="submit" class="btn btn-warning" name="submit">submit</button>
            <button type="reset" class="btn btn-info" name="reset">reset</button>
            <?php
            if(isset($msg))
            {
                echo $msg;
            }
            ?>
    </form>
<?php 
include_once('include/footer.php');
?>