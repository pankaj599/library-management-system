<!--current request ka kya status kya hai jo admin new table banayega usse data ayega
d-print-none is class se print karte vaqt side bar vagera nahi ayega-->
<?php
define('TITLE','STATUS');
include('include/header.php');
include('../connect.php');
session_start();
if(isset($_SESSION['login']))
{
    $phone=$_SESSION['l_phone'];
    if(isset($_REQUEST['submit']))
    {
        $mobile=$_REQUEST['m'];
        $book=$_REQUEST['boo'];
        $sql="SELECT status FROM request_info WHERE mobile='$mobile' AND book='$book'";
        $result=$connect->query($sql);
        if($result->num_rows==1)
        {
            $msg="ACCEPTED KINDLY TAKE IT FROM LIBRARY";
        }
        else
        {
            $msg="PENDING";
        }
    }
}
else
{
    echo "<script>location.href='login.php'</script>";
}
?>
 <form method="POST" action="">
 <div class="form-group">
        <span>BOOK NAME:</span>
            <input type="text" class="form-control" id="boo" name="boo">
        </div>
    <div class="form-group">
        <span>MOBILE NO:</span>
            <input type="text" class="form-control" id="m" name="m">
        </div>
        <div class="form-group">
        <span>STATUS:</span>
            <input type="text" class="form-control" id="status" name="status" readonly 
            value="<?php if(isset($_REQUEST['status']))
            {echo $msg;}
            ?>">
        </div>
        <button type="submit" class="btn btn-warning" name="submit">submit</button>
        <button type="reset" class="btn btn-info" name="reset">reset</button>
</form>
<div class="container">
<?php
require_once('include/footer.php');
?>