<?php
define('TITLE','receipt');
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
include('include/header.php');
//echo $_SESSION['myid'];
$sql="SELECT * FROM submit_request WHERE submit_id={$_SESSION['myid']}";
$result=$connect->query($sql);
//$data=$result->fetch_assoc();
?>
<table class="table">
        <thead>
            <tr>
                <th>SEMESTER</th>
                <th>SUBJECT</th>
                <th>BOOK</th>
                <th>MOBILE</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while($row=$result->fetch_assoc())
            {
                echo "<tr>";
                echo "<td>".$row['semester']."</td>";
                echo "<td>".$row['subject']."</td>";
                echo "<td>".$row['book']."</td>";
                echo "<td>".$row['mobile']."</td>";
            echo "</tr>";
            }
            ?>
            </tbody>
        </table>
        <form method="POST">
            <input class='btn btn-info' type="submit" value="Print" onClick='window.print()'>
        </form>
<?php 
include_once('include/footer.php');
?>