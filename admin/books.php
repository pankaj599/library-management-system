<!--craete a new table that will show the books that admin have and quantity of that books-->
<!-- in this admin can add new books, delete books and increaase and decrease the quantity of book using buttons-->
<?php
define('TITLE','BOOKS'); 
include_once('../connect.php');
session_start();
if(isset($_SESSION['admin_login']))
{
    $sql="SELECT * FROM books";
    $result=$connect->query($sql);
}
else
{
    echo "<script>location.href='admin_login.php'</script>";
}
include('include/header.php');
?>
    <div class="col-sm-8 offset-md-1">
        <table class="table">
            <thead>
                <tr>
                    <th>BOOK_NO</th>
                    <th>BOOK NAME</th>
                    <th>BOOK SUBJECT</th>
                    <th>COUNT</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
            <?php
            while($row=$result->fetch_assoc())
            {
                echo '<tr>';
                echo '<td>'.$row["book_id"].'</td>';
                echo '<td>'.$row["book_name"].'</td>';
                echo '<td>'.$row["book_subject"].'</td>';
                echo '<td>'.$row["book_count"].'</td>';?>
               <td><form method="POST">
                <button type="submit" class="btn btn-success" name="increase" >INCREASE</button>
                <button type="submit" class="btn btn-danger" name="decrease">Decrease</button>
               </form>
               </td>
                <?php echo '</tr>';
                if(isset($_REQUEST['increase']))
                {
                    $count=$row["book_count"];
                    $c=$count+1;
                    $id=$row["book_id"];
                    $sql_2="UPDATE books SET book_count=$c WHERE book_id='$id'";
                    $connect->query($sql_2);
                    echo '<meta http-equiv="refresh" content="1">';
                }
                else if(isset($_REQUEST['decrease']))
                {
                    $count=$row["book_count"];
                    $c=$count-1;
                    $id=$row["book_id"];
                    $sql_2="UPDATE books SET book_count=$c WHERE book_id='$id'";
                    $connect->query($sql_2);
                    echo '<meta http-equiv="refresh" content="1">';
                }
            }
            ?>
                </tbody>
            </table>
    </div>
</div>
<div class="container mt-5 bg-light">
<h1 class="text-center mt-5">NEW BOOKS</h1>
<form method="POST" action="">
   <div class="form-group">
       <span>BOOK NAME:</span>
         <input type="text" class="form-control" id="b_name" name="b_name" value="">
   </div>
   
   <div class="form-group">
   <div class="form-group">
       <span>SUBJECT:</span> 
           <input type="text" class="form-control" id="b_subject" name="b_subject" value="">
       </div>
       <span>COUNT:</span> 
       <input type="text" class="form-control" id="b_count" name="b_count" value="">
       </div>
       <div>
           <button type="submit" class="btn btn-success" name="b_accept">ADD</button>
           <button type="reset" class="btn btn-info" name="b_reset">Reset</button>
       </div>
</form>
</div>
<?php
if(isset($_REQUEST['b_accept']))
{
    $name=$_REQUEST['b_name'];
    $subject=$_REQUEST['b_subject'];
    $count=$_REQUEST['b_count'];
    $sql="INSERT INTO books(book_name,book_subject,book_count) VALUES('$name','$subject','$count')";
    $connect->query($sql);
    echo '<meta http-equiv="refresh" content="1">';
}
include_once('include/footer.php');
?>