<?php
define('TITLE','MY BOOKS');
include('../connect.php');
include('include/header.php');
session_start();
if(isset($_SESSION['login']))
{
 $sql="SELECT subject, book, status FROM request_info";
 $sql_2="SELECT subject,book FROM submit_request";
 $result=$connect->query($sql);
 $result_2=$connect->query($sql_2);
 $msg="PENDING";
}
else
{
    echo '<script>location.href="login.php"</script>';
}
?>
<table class="table">
        <thead>
            <tr>
                <th>BOOK</th>
                <th>SUBJECT</th>
                <th>STATUS</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while($row=$result->fetch_assoc())
            {
                echo "<tr>";
                echo "<td>".$row['book']."</td>";
                echo "<td>".$row['subject']."</td>";
                echo "<td>".$row['status']."</td>";
            echo "</tr>";
            }
           while($row=$result_2->fetch_assoc())
            {
                echo "<tr>";
                echo "<td>".$row['book']."</td>";
                echo "<td>".$row['subject']."</td>";
                echo "<td>".$msg."</td>";
            echo "</tr>";
            }
            ?>
            </tbody>
        </table>
<?php
require('include/footer.php');
?>