<?php
/*making TITLE content*/
define('TITLE','change_details'); 
include('../connect.php');
session_start();
if(isset($_SESSION['login']))
{
    $phone=$_SESSION['l_phone'];
    if(isset($_REQUEST['update']))
    {
        if(($_REQUEST['change_name']=="")||($_REQUEST['change_password']==""))
        {
        echo "<script>"."alert('enter all the details')"."</script>";
            //echo "fill all the coulmns";
        }
        else
        {
        $change_name=$_REQUEST['change_name'];
        $change_password=$_REQUEST['change_password'];
        $change="UPDATE account SET a_name='$change_name', a_password='$change_password' WHERE a_phone='$phone'";
       
        if( $connect->query($change))
        {
            echo "<script>alert('successfully updated')</script>";
        }
        else{
            echo "retry";
        }
        }
    }  
}
else
{
    echo "<script>"."location.href='login.php'"."</script>";
}
include('include/header.php');
?>

            <form method="POST" action="">
                <div class="form-group">
                <span>Name:</span>
                    <input type="text" class="form-control" id="change_name" name="change_name">
                </div>
                <div class="form-group">
                <span>Mobile:</span> 
                <input type="text" class="form-control" id="change_phone" name="change_phone" readonly value="<?php echo $phone?>">
                </div>
                <div class="form-group">
                <span>New Password:</span> 
                <input type="text" class="form-control" id="change_password" name="change_password">
                </div>
                <button type="submit" class="btn btn-warning" name="update">Update</button>
            </form>
<?php include('include/footer.php');?>