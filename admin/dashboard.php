<?php
define('TITLE','DASHBOARD');
include('../connect.php');

session_start();
if(!isset($_SESSION['admin_login']))
{
    echo "<script>location.href='admin_login.php'</script>";
}
else{
    $sql="SELECT * FROM account";
    $result=$connect->query($sql);
    $sql_2="SELECT MAX(book_id) FROM books";
    $result_2=$connect->query($sql_2);
    $row_2=mysqli_fetch_row($result_2);
    /*$row_2=$result_2->fetch_assoc();
    foreach($row_2 as $data)
    {
        echo $data;
    }*/
    $sql_3="SELECT MAX(submit_id) FROM submit_request";
    $result_3=$connect->query($sql_3);
    $row_3=mysqli_fetch_row($result_3);

    $sql_4="SELECT SUM(book_count) FROM books";
    $result_4=$connect->query($sql_4);
    $row_4=mysqli_fetch_row($result_4);
}
include('include/header.php');
?>

        <div class="col-sm-3 mt-4">
                <div class="card" style="width: 18rem;">
                <div class="card-body bg-success">
                    <h5 class="card-title text-center">TOTAL BOOKS</h5>
                    <h3 class="card-text text-center"><?php echo $row_2[0]?></h3>
                    
                </div>
                </div>
        </div>
        <div class="col-sm-3 mt-4">
                    <div class="card" style="width: 18rem;">
                    <div class="card-body bg-info">
                        <h5 class="card-title text-center">REQUESTS</h5>                     
                        <h3 class="card-text text-center"><?php echo $row_3[0]?></h3>
                    </div>
        </div>
        </div>
        <div class="col-sm-2 mt-4">
                <div class="card" style="width: 18rem;">
                <div class="card-body bg-primary">
                    <h5 class="card-title text-center">BOOK COUNT</h5>
                    <h3 class="card-text text-center"><?php echo $row_4[0]?></h3>
                    
                </div>
                </div>
        </div>
    </div> 
    <div class="container mt-5">
    <h1 class="mt-5 text-center mb-3" style="color:red">USER ACCOUNTS</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>MOBILE</th>
                <th>PASSWORD</th>
            </tr>
        </thead>
        <tbody>
        <?php
        while($row=$result->fetch_assoc())
        {
            echo '<tr>';
            echo '<td>'.$row["a_id"].'</td>';
            echo '<td>'.$row["a_name"].'</td>';
            echo '<td>'.$row["a_phone"].'</td>';
            echo '<td>'.$row["a_password"].'</td>';
            echo '</tr>';
        }
        ?>
            </tbody>
        </table>
    </div> 
<?php
include('include/footer.php');
?>