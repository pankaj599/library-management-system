<?php
define('TITLE','worktable');
include_once('../connect.php');
session_start();
if(isset($_SESSION['admin_login']))
{
    $sql="SELECT * FROM request_info";
    $result=$connect->query($sql);
}
else
{
    echo '<script>location.href="admin_login.php"</script>';
}
include_once('include/header.php');
?>
    <div class="col-sm-8 offset-md-1">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>SUBMIT_ID</th>
                    <th>SEMESTER</th>
                    <th>SUBJECT</th>
                    <th>BOOK</th>
                    <th>MOBILE</th>
                    <th>STATUS</th>
                    <th>TILL</th>
                </tr>
            </thead>
            <tbody>
            <?php
            while($row=$result->fetch_assoc())
            {
                echo '<tr>';
                echo '<td>'.$row["id"].'</td>';
                echo '<td>'.$row["submit_id"].'</td>';
                echo '<td>'.$row["semester"].'</td>';
                echo '<td>'.$row["subject"].'</td>';
                echo '<td>'.$row["book"].'</td>';
                echo '<td>'.$row["mobile"].'</td>';
                echo '<td>'.$row["status"].'</td>';
                echo '<td>'.$row["date"].'</td>';
                echo '</tr>';
            }
            ?>
                </tbody>
            </table>
    </div>
</div>
<?php
include_once('include/footer.php');
?>